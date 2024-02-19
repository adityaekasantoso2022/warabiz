<?php

namespace App\Http\Controllers\User;
use App\Models\WaraCareer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailCareerController extends Controller
{
    public function detail(){
        return view('pages.user.detailCareer');
    }

    public function getData(){
        $data = WaraCareer::all();
        return view('pages.user.detailCareer',['data' => $data]);
    }
}
