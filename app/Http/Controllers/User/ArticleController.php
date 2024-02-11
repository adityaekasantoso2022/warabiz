<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Articles;
use Illuminate\Support\Str;


class ArticleController extends Controller
{

    public function getAll()
    {
        $articles = Articles::all();
        return view('pages.user.waraedu', ['articles' => $articles]);
    }

    public function getDetail($id)
    {
        // Query untuk mendapatkan artikel berdasarkan UUID
        $article = Articles::find($id);

        if (!$article) {
            return response()->json(['message' => 'Article not found'], 404);
        }

        return view('pages.user.article', compact('article')) ;
    }

}
