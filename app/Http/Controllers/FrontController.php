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
//        $galleries = Gallery::all();
        // get all "where year is distinct" and "year last image"
        $galleries = Gallery::latest()
            ->distinct('year')
            ->select('id','year','image','created_at')
            ->get();
        $galleries = $galleries->unique('year');
        $sisters = SisterConcern::all();
        return view('frontend/gallery/gallery',compact('galleries','sisters'));
    }
    public function gallery_year_program($id){
        $year_name = Gallery::findOrFail($id);
        $year_name =   $year_name->year;
        $galleries = Gallery::latest()
            ->select('id','year','program','image','created_at')
            ->where('year', '=', $year_name)
            ->get();
         $galleries = $galleries->unique('program');
        $sisters = SisterConcern::all();
        return view('frontend/gallery/program',compact('galleries','sisters'));

    }
    public function gallery_year_program_photo($id){
        $year = Gallery::findOrFail($id);
        $year_name = $year->year;
        $program_name =  $year->program;
        $galleries = Gallery::latest()
            ->select('id','year','program','image','created_at')
            ->where('year', '=', $year_name)
            ->where('program', '=', $program_name)
            ->get();
//        return $galleries;
        //$galleries = $galleries->unique('program');
        $sisters = SisterConcern::all();
        return view('frontend/gallery/program_photo',compact('galleries','sisters'));

    }

    public function sister_concern_view(){
        $sisters = SisterConcern::all();
        return view('frontend.sister_concern/sister_concern',compact('sisters'));
    }
    public function sister_concern_single_view($id){
        $sisters = SisterConcern::all();
        $single = SisterConcern::findOrFail($id);

        return view('frontend.sister_concern.single_view',compact('sisters','single'));
    }
}
