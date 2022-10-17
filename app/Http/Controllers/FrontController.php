<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Program;
use App\Models\SisterConcern;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function home(){
        $sisters = SisterConcern::all();
        return view('frontend/home',compact('sisters'));
    }
    public function about(){
        $sisters = SisterConcern::all();
        return view('frontend/about',compact('sisters'));
    }
    public function team(){
        $sisters = SisterConcern::all();
        return view('frontend/team',compact('sisters'));
    }
    public function teamStaff(){
        $sisters = SisterConcern::all();
        return view('frontend/team_staff',compact('sisters'));
    }
    public function contact(){
        $sisters = SisterConcern::all();
        return view('frontend/contact',compact('sisters'));
    }
    public function gallery(){
         $years = Year::all();
//        $galleries = Gallery::all();
        $sisters = SisterConcern::all();
//        return view('frontend/photo_gallery',compact('sisters','galleries','years'));
        return view('frontend/photo_gallery',compact('sisters','years'));
    }
    public function yearProgram($id){

        $programs = Program::all()->where('year_id','==',$id);
        $sisters = SisterConcern::all();
        return view('frontend/gallery_year_program',compact('sisters','programs'));
    }
    public function yearPhoto($id){
        $galleries = DB::table('galleries')->where('program_id', $id)->get();
        //$galleries = Gallery::all();
        $sisters = SisterConcern::all();
        return view('frontend/gallery_year_program_photo',compact('sisters','galleries'));
    }

    public function sister_concern_view(){
        $sisters = SisterConcern::all();
        return view('frontend.sister_concern',compact('sisters'));
    }
    public function sister_concern_single_view($id){
        $sisters = SisterConcern::all();
        $single = SisterConcern::findOrFail($id);

        return view('frontend.concern_single_view',compact('sisters','single'));
    }
}
