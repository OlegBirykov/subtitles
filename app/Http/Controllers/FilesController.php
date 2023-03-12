<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function send(Request $request) {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
        };

        return($file);

//        return redirect('/waiting');
    }
}
