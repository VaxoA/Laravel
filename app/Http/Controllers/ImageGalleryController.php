<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ImageGallery;
use App\User;
use Image;


class ImageGalleryController extends Controller
{

    public function index()
    {
        $images = ImageGallery::get();
        return view('image-gallery',compact('images'));
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = new ImageGallery;
        $input->user_id   = Auth::user()->id;

        // Check if file is present
        if( $request->hasFile('image') ) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(600, 600)->save( public_path('/uploads/gallery/' . $filename ) );

            // Set post-thumbnail url
            $input->image = $filename;
        }
        $input->save();

        return back()
           ->with('success','Image Uploaded successfully.');
    }

    public function show()
    {
        $images = ImageGallery::All();
        return view('show-gallery', compact('images'));
    }

    public function destroy($id)
    {
        ImageGallery::find($id)->delete();
        return back()
            ->with('success','Image removed successfully.');
    }
}