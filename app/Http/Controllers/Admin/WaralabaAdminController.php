<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CloudinaryStorage;
use App\Models\Waralaba;
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
            'royalty' => 'required',
            'income' => 'required',
            'rating' => 'required',
            'concept' => 'required',
            'concept_size' => 'required',
        ]);

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
            $bochure_url = CloudinaryStorage::uploadFile($brochure->getRealPath(), $brochure->getClientOriginalName());

            // Buat objek artikel baru berdasarkan data yang diterima
            Waralaba::create([
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
                'brochure_link' => $bochure_url,
                'since' => $request->input('since'),
                'outlet_total' => $request->input('outlet_total'),
                'license_duration' => $request->input('license_duration'),
                'description' => $request->input('description'),
                'royality' => $request->input('royalty'),
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
        $article = Waralaba::findOrFail($id);
        return view('pages.admin.edit.waralaba', compact('waralaba'));
    }
}
