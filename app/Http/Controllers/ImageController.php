<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    //
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect('/upload-image')
                        ->withErrors($validator)
                        ->withInput();
        }

        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->storeAs('public/images', $imageName);

        return redirect('/images');
    }
}
