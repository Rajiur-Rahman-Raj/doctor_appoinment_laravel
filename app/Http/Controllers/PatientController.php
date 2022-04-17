<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Appoinment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class PatientController extends Controller
{
    public function myProfilePage(){
        if(Patient::where('user_id',Auth::user()->id)->exists()){
            $patient_info = Patient::where('user_id',Auth::user()->id)->first();
            return view('backend.patient.my_profile',compact('patient_info'));
        }
        else{
            $patient_info = null;
            return view('backend.patient.my_profile',compact('patient_info'));
        }
    }
    public function updatePatientInfo(Request $request){
        if(Patient::where('user_id',Auth::user()->id)->exists()){
            if($image = $request->file('image')){

                $destinationPath = public_path().'/patient_image/';
                $profileImage = str::random(5) . "-" . time() . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);

                Patient::where('user_id',Auth::user()->id)->update([
                    'name'        => $request->name,
                    'email'       => $request->email,
                    'user_id'     => Auth::user()->id,
                    'contact'     => $request->contact,
                    'nid'         => $request->nid,
                    'address'     => $request->address,
                    'image'       => 'patient_image/'.$profileImage,
                    'updated_at'  => Carbon::now(),
                ]);

                Toastr::success('Patient Profile Updated Successfully', 'Success');
                return back();
            }
            else{
                Patient::where('user_id',Auth::user()->id)->update([
                    'name'        => $request->name,
                    'email'       => $request->email,
                    'user_id'     => Auth::user()->id,
                    'contact'     => $request->contact,
                    'nid'         => $request->nid,
                    'address'     => $request->address,
                    'updated_at'  => Carbon::now(),
                ]);

                Toastr::success('Patient Profile Updated Successfully', 'Success');
                return back();
            }
        }
        else{
            if($image = $request->file('image')){

                $destinationPath = public_path().'/patient_image/';
                $profileImage = str::random(5) . "-" . time() . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);

                Patient::where('user_id',Auth::user()->id)->insert([
                    'name'        => $request->name,
                    'email'       => $request->email,
                    'user_id'     => Auth::user()->id,
                    'contact'     => $request->contact,
                    'nid'         => $request->nid,
                    'address'     => $request->address,
                    'image'       => 'patient_image/'.$profileImage,
                    'created_at'  => Carbon::now(),
                ]);

                Toastr::success('Patient Profile Created Successfully', 'Success');
                return back();
            }
            else{
                Patient::where('user_id',Auth::user()->id)->insert([
                    'name'        => $request->name,
                    'email'       => $request->email,
                    'user_id'     => Auth::user()->id,
                    'contact'     => $request->contact,
                    'nid'         => $request->nid,
                    'address'     => $request->address,
                    'created_at'  => Carbon::now(),
                ]);

                Toastr::success('Patient Profile Created Successfully', 'Success');
                return back();
            }
        }
    }

    public function getRecentApprovedList(){
        $date = date('Y-m-d H:i:s');
        $current_date = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
        $details = Appoinment::where('patient_id',Auth::user()->id)->where('status',1)->where('appoinment_date','>=',$current_date)->orderBy('appoinment_date','asc')->paginate(15);
        return view('backend.patient.recent_approved',compact('details'));
    }

    public function deleteRecentApproved($id){
        Appoinment::where('slug',$id)->delete();
        Toastr::error('Appoinment has been deleted', 'Deleted Successfully');
        return back();
    }

    public function printRecentApproved($id){
        $details = Appoinment::where('slug',$id)->first();
        $pdf = PDF::loadView('backend.patient.patients_appoinment_report', compact('details'));
        return $pdf->stream('patients_appoinment_report.pdf');
    }

    public function pendingListAppoinment(){
        $date = date('Y-m-d H:i:s');
        $current_date = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
        $details = DB::table('appoinments')->where('patient_id',Auth::user()->id)->where('status',0)->where('appoinment_date','>=',$current_date)->orderBy('appoinment_date','asc')->paginate(15);
        return view('backend.patient.pending_appoinments',compact('details'));
    }

    public function deletePendingAppoinment($id){
        Appoinment::where('slug',$id)->delete();
        Toastr::error('Appoinment has been deleted', 'Deleted Successfully');
        return back();
    }

    public function prevApprovedAppoinments(){
        $date = date('Y-m-d H:i:s');
        $current_date = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
        $details = DB::table('appoinments')->where('patient_id',Auth::user()->id)->where('status',1)->where('appoinment_date','<',$current_date)->orderBy('appoinment_date','asc')->paginate(15);
        return view('backend.patient.previous_approved',compact('details'));
    }

    public function deletePrevApprovedAppoinments($id){
        Appoinment::where('slug',$id)->delete();
        Toastr::error('Appoinment has been deleted', 'Deleted Successfully');
        return back();
    }

    public function cancelledAppoinment(){
        $date = date('Y-m-d H:i:s');
        $current_date = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
        $details = DB::table('appoinments')->where('patient_id',Auth::user()->id)->where('status',0)->where('appoinment_date','<',$current_date)->orderBy('appoinment_date','asc')->paginate(15);
        return view('backend.patient.cancelled_appoinments',compact('details'));
    }

    public function deleteCancelledAppoinment($id){
        Appoinment::where('slug',$id)->delete();
        Toastr::error('Appoinment has been deleted', 'Deleted Successfully');
        return back();
    }


}
