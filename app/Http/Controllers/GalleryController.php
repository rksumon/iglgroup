<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Program;
use App\Models\Year;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
   public function view(){

       $galleries = Gallery::all();

       return view('backend/gallery/view',compact('galleries'));
   }

   public function create(){
       return view('backend/gallery/add');
   }
   public function store(Request $request){
       $validated = $request->validate([
           'year' => 'require|string|max:255',
           'program' => 'sometimes|string|max:255',
           'image' => 'require|mimes:png,jpg,jpeg|max:2048',
           'caption' => 'sometimes|string|max:255',
       ]);
       if($request->file('image')) {
           $imageName = time() . '.' . $request->image->extension();
           $request->image->move(public_path('image/gallery'), $imageName);
       }else{
           $imageName ='no-image.jpg';
       }

       $gallery = new Gallery();
       $gallery->year = $request->year;
       $gallery->program_= $request->program;
       $gallery->image = $imageName;
       $gallery->caption = $request->caption;
       $gallery->save();
       return back()->with('success', 'Photo Upload Successfully!');
   }

    public function destroy(Request $request,$id){

        $gallery = Gallery::findOrFail($id);

        $image_path = public_path().'images/gallery/'.$gallery->image;

        if (File::exists($image_path)) {
            //File::delete($image_path);
            unlink($image_path);
        }

        Gallery::destroy($id);
        return back()->with('success', 'Image Deleted Successfully!');
    }
}
