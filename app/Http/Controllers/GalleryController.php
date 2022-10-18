<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use illuminate\Database\Eloquent\SoftDeletes;

class GalleryController extends Controller
{
   public function view(){

//       $galleries = Gallery::all();
       $galleries = Gallery::latest()
           ->distinct('year')
           ->select('id','year','image','created_at')
           ->get();
       $galleries = $galleries->unique('year');

       return view('backend/gallery/view',compact('galleries'));
   }
    public function program($id){

        $year_name = Gallery::findOrFail($id);
        $year_name =   $year_name->year;
        $galleries = Gallery::latest()
            ->select('id','year','program','image','created_at')
            ->where('year', '=', $year_name)
            ->get();
        $galleries = $galleries->unique('program');

        return view('backend/gallery/program_view',compact('galleries'));
    }
    public function photos($id){

        $year = Gallery::findOrFail($id);
        $year_name = $year->year;
        $program_name =  $year->program;
        $galleries = Gallery::latest()
            ->select('id','year','program','image','caption','created_at')
            ->where('year', '=', $year_name)
            ->where('program', '=', $program_name)
            ->get();
        $galleries = $galleries->unique('program');

        return view('backend/gallery/photos',compact('galleries'));
    }
   public function trash(){
       $galleries = Gallery::onlyTrashed()->get();
       return view('backend/gallery/trash',compact('galleries'));
   }
   public function trash_restore($id){

        $galleries = Gallery::withTrashed()->find($id);
       $galleries->restore();
       return redirect('admin/gallery/view')->with('success', 'Photo Restore Successfully!');
   }

   public function create(){
       return view('backend/gallery/create');
   }
   public function store(Request $request){

       $validated = $request->validate([
           'year' => 'required|string|max:255',
           'program' => 'sometimes|string|max:255',
           'caption' => 'sometimes|string|max:255',
           'image' => 'required|mimes:png,jpg,jpeg|max:2048',
       ]);
       if($request->file('image')) {
           $imageName = time() . '.' . $request->image->extension();
           $request->image->move(public_path('image/gallery'), $imageName);
       }else{
           $imageName ='no-image.jpg';
       }

       $gallery = new Gallery();
       $gallery->year = $request->year;
       $gallery->program= $request->program;
       $gallery->image = $imageName;
       $gallery->caption = $request->caption;
       $gallery->save();
       return back()->with('success', 'Photo Upload Successfully!');
   }

    public function destroy(Request $request,$id){

        $gallery = Gallery::findOrFail($id);

//        $image_path = public_path().'images/gallery/'.$gallery->image;
//
//        if (File::exists($image_path)) {
//            //File::delete($image_path);
//            unlink($image_path);
//        }
        $gallery->delete();
       // Gallery::destroy($id);
        return back()->with('success', 'Image Deleted Successfully!');
    }
}
