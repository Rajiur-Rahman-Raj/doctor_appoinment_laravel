<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // january
        $jan_from = date('Y')."-01-01";
        $jan_to = date('Y')."-01-31";
        $jan_app = DB::table('appoinments')->where('status',1)->whereBetween('appoinment_date', [$jan_from,$jan_to])->count();

        // Feb
        $feb_from = date('Y')."-02-01";
        $feb_to = date('Y')."-02-31";
        $feb_app = DB::table('appoinments')->where('status',1)->whereBetween('appoinment_date', [$feb_from,$feb_to])->count();

        // March
        $mar_from = date('Y')."-03-01";
        $mar_to = date('Y')."-03-31";
        $mar_app = DB::table('appoinments')->where('status',1)->whereBetween('appoinment_date', [$mar_from,$mar_to])->count();

        // April
        $apr_from = date('Y')."-04-01";
        $apr_to = date('Y')."-04-31";
        $apr_app = DB::table('appoinments')->where('status',1)->whereBetween('appoinment_date', [$apr_from,$apr_to])->count();

        // May
        $may_from = date('Y')."-05-01";
        $may_to = date('Y')."-05-31";
        $may_app = DB::table('appoinments')->where('status',1)->whereBetween('appoinment_date', [$may_from,$may_to])->count();

        // June
        $june_from = date('Y')."-06-01";
        $june_to = date('Y')."-06-31";
        $june_app = DB::table('appoinments')->where('status',1)->whereBetween('appoinment_date', [$june_from,$june_to])->count();

        // July
        $jul_from = date('Y')."-07-01";
        $jul_to = date('Y')."-07-31";
        $jul_app = DB::table('appoinments')->where('status',1)->whereBetween('appoinment_date', [$jul_from,$jul_to])->count();

        // August
        $aug_from = date('Y')."-08-01";
        $aug_to = date('Y')."-08-31";
        $aug_app = DB::table('appoinments')->where('status',1)->whereBetween('appoinment_date', [$aug_from,$aug_to])->count();

        // Spetember
        $sep_from = date('Y')."-09-01";
        $sep_to = date('Y')."-09-31";
        $sep_app = DB::table('appoinments')->where('status',1)->whereBetween('appoinment_date', [$sep_from,$sep_to])->count();

        // October
        $oct_from = date('Y')."-10-01";
        $oct_to = date('Y')."-10-31";
        $oct_app = DB::table('appoinments')->where('status',1)->whereBetween('appoinment_date', [$oct_from,$oct_to])->count();

        // Novermber
        $nov_from = date('Y')."-11-01";
        $nov_to = date('Y')."-11-31";
        $nov_app = DB::table('appoinments')->where('status',1)->whereBetween('appoinment_date', [$nov_from,$nov_to])->count();

        // December
        $dec_from = date('Y')."-12-01";
        $dec_to = date('Y')."-12-31";
        $dec_app = DB::table('appoinments')->where('status',1)->whereBetween('appoinment_date', [$dec_from,$dec_to])->count();

        return view('backend.dashboard',compact('jan_app','feb_app','mar_app','apr_app','may_app','june_app','jul_app','aug_app','sep_app','oct_app','nov_app','dec_app'));
    }
}
