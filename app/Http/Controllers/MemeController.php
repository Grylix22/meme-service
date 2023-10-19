<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meme;
use App\Http\Controllers\Controller;

class MemeController extends Controller
{    
    public function index()
    {
        $memes = Meme::all();
        return view('memeList', ['memes' => $memes]);
    }

    // add new meme
    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'authorName' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif',
        ]);
    
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
    
        // Zapisz obrazek w: storage/app/public/memes
        $image->storeAs('public/memes', $imageName);
    
        $meme = new Meme([
            'title' => $request->input('title'),
            'authorName' => $request->input('authorName'),
            'likes_number' => 0,
            'image_path' => $imageName,
        ]);
    
        $meme->save();
    
        return redirect()->route('meme.list')->with('success', 'Mem dodany');
    }
    

    // delete meme
    public function destroy($id)
    {
        $meme = Meme::find($id);

        if (!$meme) {
            return response()->json(['message' => 'Meme not found'], 404);
        }

        $imagePath = public_path('memes/' . $meme->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $meme->delete();

        return response()->json(['message' => 'Meme deleted successfully']);
    }
}
