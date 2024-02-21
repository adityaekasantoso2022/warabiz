<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CloudinaryStorage extends Controller
{
    private const folder_path = 'warabiz-cloud';
    private const folder_payment_path = 'warabiz-payment';
    private const folder_path_job = 'warabiz-job';

    public static function path($path){
        return pathinfo($path, PATHINFO_FILENAME);
    }

    public static function upload($image, $filename){
        $newFilename = str_replace(' ', '_', $filename);
        $public_id = date('Y-m-d_His').'_'.$newFilename;
        $result = cloudinary()->upload($image, [
            "public_id" => self::path($public_id),
            "folder"    => self::folder_path
        ])->getSecurePath();

        return $result;
    }

    public static function uploadFile($file, $filename)
    {
        $newFilename = str_replace(' ', '_', $filename);
        $public_id = date('Y-m-d_His') . '_' . $newFilename;
        $result = cloudinary()->upload($file, [
            "public_id" => self::path($public_id),
            "folder"    => self::folder_path
        ])->getSecurePath();

        return $result;
    }

    public static function uploadPortfolio($file, $filename)
    {
        $newFilename = str_replace(' ', '_', $filename);
        $public_id = date('Y-m-d_His') . '_' . $newFilename;
        $result = cloudinary()->upload($file, [
            "public_id" => self::path($public_id),
            "folder"    => self::folder_path_job
        ])->getSecurePath();

        return $result;
    }

    public static function uploadSecureFile($file, $filename)
    {
        $newFilename = str_replace(' ', '_', $filename);
        $public_id = Str::random(20) . '_' . $newFilename;
        $result = cloudinary()->upload($file, [
            "public_id" => self::path($public_id),
            "folder"    => self::folder_payment_path,
            "type"        => "private", // Mengatur tipe akses file
            "access_mode" => "private", // Mengatur mode akses file
        ])->getSecurePath();

        return $result;
    }

    public static function replace($path, $image, $public_id){
        self::delete($path);
        return self::upload($image, $public_id);
    }

    public static function delete($path){
        $public_id = self::folder_path.'/'.self::path($path);
        return cloudinary()->destroy($public_id);
    }

    public static function deletePayment($path)
    {
        try {
            // Dapatkan public_id dengan menggabungkan folder_payment_path dan path yang dihasilkan
            $public_id = self::folder_payment_path . '/' . self::path($path);

            // Hapus file dari Cloudinary berdasarkan public_id
            $result = cloudinary()->destroy($public_id);

            // Jika penghapusan berhasil, kembalikan true
            if ($result['result'] == 'ok') {
                return true;
            } else {
                // Jika penghapusan gagal, kembalikan false atau dapat menangani kesalahan sesuai kebutuhan
                return false;
            }
        } catch (\Exception $e) {
            // Tangani eksepsi jika terjadi kesalahan dalam penghapusan
            // Misalnya, log kesalahan atau berikan pesan kesalahan yang lebih spesifik
            Log::error('Error deleting payment file: ' . $e->getMessage());

            // Cetak pesan kesalahan untuk debugging
            echo 'Error deleting payment file: ' . $e->getMessage();

            // Kembalikan false atau sesuaikan dengan kebutuhan aplikasi Anda
            return false;
        }
    }
}
