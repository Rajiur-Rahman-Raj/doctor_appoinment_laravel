<?php

namespace App\Http\Controllers;
use App\Doctor;
use App\Patient;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;
use App\Appoinment;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;

class BackendController extends Controller
{
    public function viewDoctorsList(){
        $infos = Doctor::paginate(20);
        return view('backend.doctor_list',compact('infos'));
    }

    public function deleteDoctor($id){
        Doctor::where('id',$id)->delete();
        Toastr::error('Doctor Deleted Successfully', 'Deleted');
        return back();
    }

    public function viewPatientsList(){
        $infos = Patient::paginate(20);
        return view('backend.patient_list',compact('infos'));
    }

    public function deletePatient($id){
        Patient::where('id',$id)->delete();
        Toastr::error('Doctor Deleted Successfully', 'Deleted');
        return back();
    }

    public function adminRegistrationPage(){
        $infos = User::where('user_type','admin')->get();
        return view('backend.admin_list',compact('infos'));
    }

    public function addNewAdmin(Request $request){
        User::insert([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'user_type'=> "admin",
            'created_at' => Carbon::now()
        ]);
        Toastr::success('New Admin registered Successfully', 'Successfull');
        return back();
    }

    public function deleteAdmin($id){
        User::where('id',$id)->delete();
        Toastr::error('Admin Deleted Successfully', 'Deleted');
        return back();
    }

    public function generateDoctorPDF(){
        $datas = Doctor::all();
        $pdf = PDF::loadView('backend.doctor_list_pdf', compact('datas'));
        return $pdf->stream('doctors.pdf');
    }

    public function generatePatientPDF(){
        $datas = Patient::all();
        $pdf = PDF::loadView('backend.patient_list_pdf', compact('datas'));
        return $pdf->stream('patients.pdf');
    }

    public function getRecentApprovedList(){
        $date = date('Y-m-d H:i:s');
        $current_date = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
        $details = Appoinment::where('status',1)->where('appoinment_date','>=',$current_date)->orderBy('appoinment_date','asc')->paginate(15);
        return view('backend.recent_approved',compact('details'));
    }

    public function deleteRecentApproved($id){
        Appoinment::where('slug',$id)->delete();
        Toastr::error('Appoinment has been deleted', 'Deleted Successfully');
        return back();
    }
    public function pendingListAppoinment(){
        $date = date('Y-m-d H:i:s');
        $current_date = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
        $details = DB::table('appoinments')->where('status',0)->where('appoinment_date','>=',$current_date)->orderBy('appoinment_date','asc')->paginate(15);
        return view('backend.pending_appoinments',compact('details'));
    }
    public function deletePendingAppoinment($id){
        Appoinment::where('slug',$id)->delete();
        Toastr::error('Appoinment has been deleted', 'Deleted Successfully');
        return back();
    }
    public function prevApprovedAppoinments(){
        $date = date('Y-m-d H:i:s');
        $current_date = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
        $details = DB::table('appoinments')->where('status',1)->where('appoinment_date','<',$current_date)->orderBy('appoinment_date','asc')->paginate(15);
        return view('backend.previous_approved',compact('details'));
    }
    public function deletePrevApprovedAppoinments($id){
        Appoinment::where('slug',$id)->delete();
        Toastr::error('Appoinment has been deleted', 'Deleted Successfully');
        return back();
    }
    public function cancelledAppoinment(){
        $date = date('Y-m-d H:i:s');
        $current_date = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
        $details = DB::table('appoinments')->where('status',0)->where('appoinment_date','<',$current_date)->orderBy('appoinment_date','asc')->paginate(15);
        return view('backend.cancelled_appoinments',compact('details'));
    }
    public function deleteCancelledAppoinment($id){
        Appoinment::where('slug',$id)->delete();
        Toastr::error('Appoinment has been deleted', 'Deleted Successfully');
        return back();
    }
}
