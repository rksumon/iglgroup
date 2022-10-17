<?php

namespace App\Http\Controllers;

use App\Models\SisterConcern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SisterConcernController extends Controller
{

    public function Show(){

        $sisters = SisterConcern::all();

        return view('backend/sister_concern/view',compact('sisters', $sisters));


    }
    public function frontView(){
        $sisters = SisterConcern::all();
        return view('frontend.sister_concern',compact('sisters'));
    }
    public function sister_concern_single_view($id){
        $sisters = SisterConcern::all();
        $single = SisterConcern::findOrFail($id);

        return view('frontend.concern_single_view',compact('sisters','single'));
    }

    public function Edit(Request $request, $id){

        $sister = SisterConcern::findOrFail($id);
        return view('backend/sister_concern/edit',compact('sister', $sister));

    }

    public function create(Request $request){


        $validated = $request->validate([
            'name' => 'required|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'logo' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'url' => 'sometimes|string',
        ]);
        if($request->file('logo')) {
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('image/concern'), $imageName);
        }

        $sister = new SisterConcern();
        $sister->name = $request->name;
        $sister->short_description = $request->short_description;
        $sister->long_description = $request->long_description;
        $sister->logo = $imageName;
        $sister->url = $request->url;

        $sister->save();
        return back()->with('success', 'Sister Concern Created Successfully!');

    }
    public function update(Request $request, $id){


        $validated = $request->validate([
            'name' => 'required|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'logo' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'url' => 'string',
        ]);
        $imageName = '';
        if($request->file('logo')) {
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('image/concern'), $imageName);
        }
        $sister = SisterConcern::findOrFail($id);
        $sister->name = $request->name;
        $sister->short_description = $request->short_description;
        $sister->long_description = $request->long_description;
        $sister->logo = $imageName;
        $sister->url = $request->url;
        $sister->update();

        return back()->with('success', 'Sister Concern Update Successfully!');

    }


    public function destroy(Request $request, $id){
        $sister = SisterConcern::findOrFail($id);

        $image_path = public_path().'images/concern/'.$sister->logo;;

        if (File::exists($image_path)) {
            //File::delete($image_path);
            unlink($image_path);
        }

        SisterConcern::destroy($id);
        return back()->with('success', 'Sister Concern Deleted Successfully!');

    }
}
