<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadMemeController extends Controller
{
    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // save img in: storage/app/public/memes
        $image->storeAs('public/memes', $imageName);

        $meme = new Meme([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'image' => $imageName,
        ]);

        $meme->save();

        return redirect()->route('meme.list')->with('success', 'Meme added successfully');
    }
}
