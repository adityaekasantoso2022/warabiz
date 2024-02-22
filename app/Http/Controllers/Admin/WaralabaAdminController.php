<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CloudinaryStorage;
use App\Models\Waralaba;
use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class WaralabaAdminController extends Controller
{
    public function index(Request $request)
    {
        $waralabas = Waralaba::all();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $waralabas = Waralaba::where('waralaba_name', 'like', '%' . $searchTerm . '%')->get();
        }

        if (Auth::check()) {
            return view('pages.admin.waralaba', [
                'waralabas' => $waralabas,
            ]);
        }

        return view('pages.admin.waralaba', compact('waralabas'));
    }

    public function show($id)
    {
        $waralaba = Waralaba::find($id);

        if (!$waralaba) {
            return abort(404);
        }

        return view('pages.admin.waralabadetail', compact('waralaba'));
    }

    public function create()
    {
        // Tampilkan halaman formulir input data Waralaba
        return view('pages.admin.create.waralaba');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_url_1' => 'required',
            'image_url_2' => 'required',
            'image_url_3' => 'required',
            'image_url_4' => 'required',
            'image_url_5' => 'required',
            'category_id' => 'required',
            'waralaba_name' => 'required',
            'price' => 'required',
            'contact' => 'required',
            'since' => 'required',
            'outlet_total' => 'required',
            'license_duration' => 'required',
            'description' => 'required',
            'royality' => 'required',
            'income' => 'required',
            'rating' => 'required',
            'concept' => 'required',
            'concept_size' => 'required',
        ]);

        // Generate UUID for id field
        $id = (string) Str::uuid();

        // Gunakan 'image_url' daripada 'image' pada baris berikut
        $logo = $request->file('logo');
        $image1 = $request->file('image_url_1');
        $image2 = $request->file('image_url_2');
        $image3 = $request->file('image_url_3');
        $image4 = $request->file('image_url_4');
        $image5 = $request->file('image_url_5');
        $brochure = $request->file('brochure_link');

        // Pastikan $image tidak null sebelum melanjutkan
        if ($logo && $image1 && $image2 && $image3 && $image4 && $image5) {
            // Unggah gambar ke Cloudinary
            $logo = CloudinaryStorage::upload($logo->getRealPath(), $logo->getClientOriginalName());
            $image_url_1 = CloudinaryStorage::upload($image1->getRealPath(), $image1->getClientOriginalName());
            $image_url_2 = CloudinaryStorage::upload($image2->getRealPath(), $image2->getClientOriginalName());
            $image_url_3 = CloudinaryStorage::upload($image3->getRealPath(), $image3->getClientOriginalName());
            $image_url_4 = CloudinaryStorage::upload($image4->getRealPath(), $image4->getClientOriginalName());
            $image_url_5 = CloudinaryStorage::upload($image5->getRealPath(), $image5->getClientOriginalName());
            $brochure_url = CloudinaryStorage::uploadFile($brochure->getRealPath(), $brochure->getClientOriginalName());

            // Buat objek artikel baru berdasarkan data yang diterima
            Waralaba::create([
                'id' => $id,
                'logo' => $logo,
                'image_url_1' => $image_url_1,
                'image_url_2' => $image_url_2,
                'image_url_3' => $image_url_3,
                'image_url_4' => $image_url_4,
                'image_url_5' => $image_url_5,
                'category_id' => $request->input('category_id'),
                'waralaba_name' => $request->input('waralaba_name'),
                'price' => $request->input('price'),
                'contact' => $request->input('contact'),
                'brochure_link' => $brochure_url,
                'since' => $request->input('since'),
                'outlet_total' => $request->input('outlet_total'),
                'license_duration' => $request->input('license_duration'),
                'description' => $request->input('description'),
                'royality' => $request->input('royality'),
                'income' => $request->input('income'),
                'rating' => $request->input('rating'),
                'concept' => $request->input('concept'),
                'concept_size' => $request->input('concept_size'),
            ]);
            return redirect()->route('admin.waralaba')->with('success', 'Waralaba berhasil dibuat.');
        }

        // Tangani kasus di mana $image null (tidak ada file yang diunggah)
        return view('pages.admin.error')->with('error', 'Gambar tidak valid.');
    }

    public function edit($id)
    {
        $waralaba = Waralaba::findOrFail($id);
        return view('pages.admin.edit.waralaba', compact('waralaba'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required',
            'waralaba_name' => 'required',
            'price' => 'required',
            'contact' => 'required',
            'since' => 'required',
            'outlet_total' => 'required',
            'license_duration' => 'required',
            'description' => 'required',
            'royality' => 'required',
            'income' => 'required',
            'rating' => 'required',
            'concept' => 'required',
            'concept_size' => 'required',
        ]);

        // Cari waralaba berdasarkan ID
        $waralaba = Waralaba::findOrFail($id);

        // Gunakan 'image_url' daripada 'image' pada baris berikut
        $logo = $request->file('logo');
        $image1 = $request->file('image_url_1');
        $image2 = $request->file('image_url_2');
        $image3 = $request->file('image_url_3');
        $image4 = $request->file('image_url_4');
        $image5 = $request->file('image_url_5');
        $brochure = $request->file('brochure_link');

        // Periksa apakah file baru dipilih, jika tidak, gunakan file yang sudah ada
        $logoPath = $logo ? CloudinaryStorage::replace($waralaba->logo, $logo->getRealPath(), $logo->getClientOriginalName()) : $waralaba->logo;
        $image1Path = $image1 ? CloudinaryStorage::replace($waralaba->image_url_1, $image1->getRealPath(), $image1->getClientOriginalName()) : $waralaba->image_url_1;
        $image2Path = $image2 ? CloudinaryStorage::replace($waralaba->image_url_2, $image2->getRealPath(), $image2->getClientOriginalName()) : $waralaba->image_url_2;
        $image3Path = $image3 ? CloudinaryStorage::replace($waralaba->image_url_3, $image3->getRealPath(), $image3->getClientOriginalName()) : $waralaba->image_url_3;
        $image4Path = $image4 ? CloudinaryStorage::replace($waralaba->image_url_4, $image4->getRealPath(), $image4->getClientOriginalName()) : $waralaba->image_url_4;
        $image5Path = $image5 ? CloudinaryStorage::replace($waralaba->image_url_5, $image5->getRealPath(), $image5->getClientOriginalName()) : $waralaba->image_url_5;
        $brochurePath = $brochure ? CloudinaryStorage::replace($waralaba->brochure_link, $brochure->getRealPath(), $brochure->getClientOriginalName()) : $waralaba->brochure_link;

        // Update data waralaba berdasarkan data yang diterima
        $waralaba->update([
            'logo' => $logoPath,
            'image_url_1' => $image1Path,
            'image_url_2' => $image2Path,
            'image_url_3' => $image3Path,
            'image_url_4' => $image4Path,
            'image_url_5' => $image5Path,
            'category_id' => $request->input('category_id'),
            'waralaba_name' => $request->input('waralaba_name'),
            'price' => $request->input('price'),
            'contact' => $request->input('contact'),
            'brochure_link' => $brochurePath,
            'since' => $request->input('since'),
            'outlet_total' => $request->input('outlet_total'),
            'license_duration' => $request->input('license_duration'),
            'description' => $request->input('description'),
            'royality' => $request->input('royality'),
            'income' => $request->input('income'),
            'rating' => $request->input('rating'),
            'concept' => $request->input('concept'),
            'concept_size' => $request->input('concept_size'),
        ]);

        return redirect()->route('admin.waralaba')->with('success', 'Waralaba berhasil diupdate.');
    }

    public function destroy($id)
    {
        // Cari waralaba berdasarkan ID
        $waralaba = Waralaba::findOrFail($id);

        // Hapus logo dari Cloudinary
        CloudinaryStorage::delete($waralaba->logo);

        Transaction::where('waralaba_id', $id)->delete();


        // Hapus gambar dari Cloudinary
        CloudinaryStorage::delete($waralaba->image_url_1);
        CloudinaryStorage::delete($waralaba->image_url_2);
        CloudinaryStorage::delete($waralaba->image_url_3);
        CloudinaryStorage::delete($waralaba->image_url_4);
        CloudinaryStorage::delete($waralaba->image_url_5);

        // Hapus brosur dari Cloudinary
        CloudinaryStorage::delete($waralaba->brochure_link);

        // Hapus data waralaba dari database
        $waralaba->delete();

        return redirect()->route('admin.waralaba')->with('success', 'Waralaba berhasil dihapus.');
    }
}
