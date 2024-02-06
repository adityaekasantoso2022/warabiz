<?php

// app/Http/Controllers/WaralabaController.php

namespace App\Http\Controllers;

use App\Models\Waralaba;
use Illuminate\Http\Request;

class WaralabaController extends Controller
{
    public function show($id)
    {
        $waralaba = Waralaba::find($id);

        if (!$waralaba) {
            abort(404);
        }

        return view('waralaba.detail', compact('waralaba'));
    }
}
