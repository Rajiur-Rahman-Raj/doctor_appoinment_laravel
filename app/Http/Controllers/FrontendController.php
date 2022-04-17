<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Doctor;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function viewDepartments(){
        return view('frontend.department');
    }

    public function viewAllDoctor(){
        $doctors = DB::table('doctors')
                        ->join('departments','doctors.category_id','=','departments.id')
                        ->select('doctors.*','departments.name as department_name')
                        ->get();

        return view('frontend.doctors',compact('doctors'));
    }

    public function doctorByDepartment($id){
        $doctors = DB::table('doctors')
                        ->join('departments','doctors.category_id','=','departments.id')
                        ->select('doctors.*','departments.name as department_name')
                        ->where('doctors.category_id',$id)
                        ->get();

        return view('frontend.doctors',compact('doctors'));
    }
}
