@extends('backend.master')

@section('content')
<section>
    <div class="container-fluid">

        @if(Auth::user()->user_type == "patient")
        <h4 class="mt-4">Your Overview of Appoinments as a <span class="text-success">{{Auth::user()->user_type}} :<span></h4>
        <div class="row mt-3">
            <div class="col-lg-3 pt-4 pb-4 pl-5 pr-5 rounded text-white" style="background: #52c234;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #061700, #52c234);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #061700, #52c234); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            ">
                <a href="{{url('recent/approved/appoinment')}}" style="color:white;text-decoration:none">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Recent Approved Appoinments<h3>
                    </div>
                    <div class="col-lg-4">
                        <?php
                            $date = date('Y-m-d H:i:s');
                            $current_date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
                            $recent_approved = DB::table('appoinments')->where('patient_id',Auth::user()->id)->where('status',1)->where('appoinment_date','>=',$current_date)->count();
                        ?>
                        <h1>{{$recent_approved}}</h1>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 pt-4 pb-4 pl-5 pr-5 rounded text-white" style="background: #73C8A9;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #373B44, #73C8A9);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #373B44, #73C8A9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            ">
                <a href="{{url('pending/list/appoinment')}}" style="color:white;text-decoration:none">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Your Pending Appoinments<h3>
                    </div>
                    <div class="col-lg-4">
                        <?php
                            $date = date('Y-m-d H:i:s');
                            $current_date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
                            $pending_appoinments = DB::table('appoinments')->where('patient_id',Auth::user()->id)->where('status',0)->where('appoinment_date','>=',$current_date)->count();
                        ?>
                        <h1>{{$pending_appoinments}}</h1>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 pt-4 pb-4 pl-5 pr-5 rounded text-white" style="background: #636363;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #a2ab58, #636363);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #a2ab58, #636363); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            ">
                <a href="{{url('previous/approved/appoinment')}}" style="color:white;text-decoration:none">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Previous Approved Appoinments<h3>
                    </div>
                    <div class="col-lg-4">
                        <?php
                            $date = date('Y-m-d H:i:s');
                            $current_date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
                            $prev_approved = DB::table('appoinments')->where('patient_id',Auth::user()->id)->where('status',1)->where('appoinment_date','<',$current_date)->count();
                        ?>
                        <h1>{{$prev_approved}}</h1>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 pt-4 pb-4 pl-5 pr-5 rounded text-white" style="background: #333333; background: -webkit-linear-gradient(to left, #dd1818, #333333);
            background: linear-gradient(to left, #dd1818, #333333);">
                <a href="{{url('cancelled/appoinment')}}" style="color:white;text-decoration:none">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Your Cancelled Appoinments<h3>
                    </div>
                    <div class="col-lg-4">
                        <?php
                            $date = date('Y-m-d H:i:s');
                            $current_date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
                            $cancelled = DB::table('appoinments')->where('patient_id',Auth::user()->id)->where('status',0)->where('appoinment_date','<',$current_date)->count();
                        ?>
                        <h1>{{$cancelled}}</h1>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <h4 class="mt-5">Short Details of Your Upcoming Appoinments :</h4>
        <div class="row mt-3">

            <?php
                $appoinments = DB::table('appoinments')->where('patient_id',Auth::user()->id)->where('status',1)->where('appoinment_date','>=',$current_date)->orderBy('appoinment_date','asc')->get();
                $serial = 1;
            ?>

            @foreach ($appoinments as $appoinment)
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header bg-info text-white rounded">
                        <h5>{{$serial}}. Details of Appoinment</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php
                                $doctor = DB::table('doctors')->where('user_id',$appoinment->doctor_id)->first();
                                $newDate = Carbon\Carbon::createFromFormat('Y-m-d', $appoinment->appoinment_date)->format('jS F, Y');
                            ?>
                            <div class="col-md-3 text-center">
                                @if($doctor->image != null)
                                <img src="{{url($doctor->image)}}" height="90" width="90">
                                @else
                                    No Image
                                @endif
                            </div>
                            <div class="col-md-9">
                                <b>Doctor Name :</b> {{$doctor->name}}<br>
                                <b>Appoinment Date :</b> {{$newDate}}<br>
                                <b>Appoinment Time :</b> {{$appoinment->time_id}}<br>
                                <b>Contact :</b> {{$doctor->contact}}<br>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php $serial++ ?>
            @endforeach

        </div>
        @endif


        @if(Auth::user()->user_type == "doctor")
        <h4 class="mt-4">Your Overview of Appoinments as a <span class="text-success">{{Auth::user()->user_type}} :<span> </h4>
        <div class="row mt-3">
            <div class="col-lg-3 pt-4 pb-4 pl-5 pr-5 rounded text-white" style="background: #52c234;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #061700, #52c234);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #061700, #52c234); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            ">
                <a href="{{url('recent/approved/appoinment/for/doctor')}}" style="color:white;text-decoration:none">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Recent Approved Appoinments<h3>
                    </div>
                    <div class="col-lg-4">
                        <?php
                            $date = date('Y-m-d H:i:s');
                            $current_date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
                            $recent_approved = DB::table('appoinments')->where('doctor_id',Auth::user()->id)->where('status',1)->where('appoinment_date','>=',$current_date)->count();
                        ?>
                        <h1>{{$recent_approved}}</h1>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 pt-4 pb-4 pl-5 pr-5 rounded text-white" style="background: #73C8A9;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #373B44, #73C8A9);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #373B44, #73C8A9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            ">
                <a href="{{url('pending/list/appoinment/for/doctor')}}" style="color:white;text-decoration:none">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Your Pending Appoinments<h3>
                    </div>
                    <div class="col-lg-4">
                        <?php
                            $date = date('Y-m-d H:i:s');
                            $current_date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
                            $pending_appoinments = DB::table('appoinments')->where('doctor_id',Auth::user()->id)->where('status',0)->where('appoinment_date','>=',$current_date)->count();
                        ?>
                        <h1>{{$pending_appoinments}}</h1>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 pt-4 pb-4 pl-5 pr-5 rounded text-white" style="background: #636363;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #a2ab58, #636363);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #a2ab58, #636363); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            ">
                <a href="{{url('previous/approved/appoinment/by/doctor')}}" style="color:white;text-decoration:none">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Previous Approved Appoinments<h3>
                    </div>
                    <div class="col-lg-4">
                        <?php
                            $date = date('Y-m-d H:i:s');
                            $current_date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
                            $prev_approved = DB::table('appoinments')->where('doctor_id',Auth::user()->id)->where('status',1)->where('appoinment_date','<',$current_date)->count();
                        ?>
                        <h1>{{$prev_approved}}</h1>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 pt-4 pb-4 pl-5 pr-5 rounded text-white" style="background: #333333; background: -webkit-linear-gradient(to left, #dd1818, #333333);
            background: linear-gradient(to left, #dd1818, #333333);">
                <a href="{{url('cancelled/appoinment/by/doctor')}}" style="color:white;text-decoration:none">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Your Cancelled Appoinments<h3>
                    </div>
                    <div class="col-lg-4">
                        <?php
                            $date = date('Y-m-d H:i:s');
                            $current_date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
                            $cancelled = DB::table('appoinments')->where('doctor_id',Auth::user()->id)->where('status',0)->where('appoinment_date','<',$current_date)->count();
                        ?>
                        <h1>{{$cancelled}}</h1>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <h4 class="mt-5">Short Details of Your Upcoming Appoinments :</h4>
        <div class="row mt-3">

            <?php
                $appoinments = DB::table('appoinments')->where('doctor_id',Auth::user()->id)->where('status',1)->where('appoinment_date','>=',$current_date)->orderBy('appoinment_date','asc')->get();
                $serial = 1;
            ?>

            @foreach ($appoinments as $appoinment)
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header bg-info text-white rounded">
                        <h5>{{$serial}}. Details of Appoinment</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php
                                $patient = DB::table('patients')->where('user_id',$appoinment->patient_id)->first();
                                $newDate = Carbon\Carbon::createFromFormat('Y-m-d', $appoinment->appoinment_date)->format('jS F, Y');
                            ?>
                            <div class="col-md-3 text-center">
                                @if($patient->image != null)
                                <img src="{{url($patient->image)}}" height="90" width="90">
                                @else
                                    No Image
                                @endif
                            </div>
                            <div class="col-md-9">
                                <b>Patient Name :</b> {{$patient->name}}<br>
                                <b>Appoinment Date :</b> {{$newDate}}<br>
                                <b>Appoinment Time :</b> {{$appoinment->time_id}}<br>
                                <b>Contact :</b> {{$patient->contact}}<br>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php $serial++ ?>
            @endforeach

        </div>
        @endif





        @if(Auth::user()->user_type == "admin")
        <h4 class="mt-4">Overview of Appoinments as an <span class="text-success">{{Auth::user()->user_type}} :<span> </h4>
        <div class="row mt-3">
            <div class="col-lg-3 pt-4 pb-4 pl-5 pr-5 rounded text-white" style="background: #52c234;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #061700, #52c234);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #061700, #52c234); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            ">
                <a href="{{url('recent/approved/appoinment/for/admin')}}" style="color:white;text-decoration:none">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Recent Approved Appoinments<h3>
                    </div>
                    <div class="col-lg-4">
                        <?php
                            $date = date('Y-m-d H:i:s');
                            $current_date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
                            $recent_approved = DB::table('appoinments')->where('status',1)->where('appoinment_date','>=',$current_date)->count();
                        ?>
                        <h1>{{$recent_approved}}</h1>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 pt-4 pb-4 pl-5 pr-5 rounded text-white" style="background: #73C8A9;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #373B44, #73C8A9);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #373B44, #73C8A9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            ">
                <a href="{{url('pending/list/appoinment/for/admin')}}" style="color:white;text-decoration:none">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Recent Pending Appoinments<h3>
                    </div>
                    <div class="col-lg-4">
                        <?php
                            $date = date('Y-m-d H:i:s');
                            $current_date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
                            $pending_appoinments = DB::table('appoinments')->where('status',0)->where('appoinment_date','>=',$current_date)->count();
                        ?>
                        <h1>{{$pending_appoinments}}</h1>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 pt-4 pb-4 pl-5 pr-5 rounded text-white" style="background: #636363;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #a2ab58, #636363);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #a2ab58, #636363); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            ">
                <a href="{{url('previous/approved/appoinment/by/admin')}}" style="color:white;text-decoration:none">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Previous Approved Appoinments<h3>
                    </div>
                    <div class="col-lg-4">
                        <?php
                            $date = date('Y-m-d H:i:s');
                            $current_date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
                            $prev_approved = DB::table('appoinments')->where('status',1)->where('appoinment_date','<',$current_date)->count();
                        ?>
                        <h1>{{$prev_approved}}</h1>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 pt-4 pb-4 pl-5 pr-5 rounded text-white" style="background: #333333; background: -webkit-linear-gradient(to left, #dd1818, #333333);
            background: linear-gradient(to left, #dd1818, #333333);">
                <a href="{{url('cancelled/appoinment/by/admin')}}" style="color:white;text-decoration:none">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>ALL Cancelled Appoinments<h3>
                    </div>
                    <div class="col-lg-4">
                        <?php
                            $date = date('Y-m-d H:i:s');
                            $current_date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
                            $cancelled = DB::table('appoinments')->where('status',0)->where('appoinment_date','<',$current_date)->count();
                        ?>
                        <h1>{{$cancelled}}</h1>
                    </div>
                </div>
                </a>
            </div>
        </div>


        <div class="row mt-5">

            <div class="col-lg-6">
                <div class="card bar-chart-example">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4>Barchart of Appoinments over the year</h4>
                            </div>
                            <div class="col-lg-3 text-right">
                                <h4><?php echo date('Y') ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="barChartExample"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card line-chart-example">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-lg-9">
                          <h4>Linechart of Appoinments over the year</h4>
                      </div>
                      <div class="col-lg-3 text-right">
                          <h4><?php echo date('Y') ?></h4>
                      </div>
                  </div>
                  </div>
                  <div class="card-body">
                    <canvas id="lineChartExample"></canvas>
                  </div>
                </div>
              </div>

        </div>

        @endif
    </div>
</section>
@endsection


@section('footer_js')
<script>

    $(document).ready(function () {

    var brandPrimary = 'rgba(51, 179, 90, 1)';

    var BARCHARTEXMPLE    = $('#barChartExample'),
    LINECHARTEXMPLE   = $('#lineChartExample')


    var barChartExample = new Chart(BARCHARTEXMPLE, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov","Dec"],
            datasets: [
                {
                    label: "Approved Appoinments",
                    backgroundColor: [
                        'rgba(46, 204, 113, 0.7)',
                        'rgba(46, 204, 113, 0.7)',
                        'rgba(46, 204, 113, 0.7)',
                        'rgba(46, 204, 113, 0.7)',
                        'rgba(46, 204, 113, 0.7)',
                        'rgba(46, 204, 113, 0.7)',
                        'rgba(46, 204, 113, 0.7)',
                        'rgba(46, 204, 113, 0.7)',
                        'rgba(46, 204, 113, 0.7)',
                        'rgba(46, 204, 113, 0.7)',
                        'rgba(46, 204, 113, 0.7)',
                        'rgba(46, 204, 113, 0.7)'
                    ],
                    borderColor: [
                        'rgba(46, 204, 113, 1)',
                        'rgba(46, 204, 113, 1)',
                        'rgba(46, 204, 113, 1)',
                        'rgba(46, 204, 113, 1)',
                        'rgba(46, 204, 113, 1)',
                        'rgba(46, 204, 113, 1)',
                        'rgba(46, 204, 113, 1)',
                        'rgba(46, 204, 113, 1)',
                        'rgba(46, 204, 113, 1)',
                        'rgba(46, 204, 113, 1)',
                        'rgba(46, 204, 113, 1)',
                        'rgba(46, 204, 113, 1)'
                    ],
                    borderWidth: 1,
                    data: [{{$jan_app}}, {{$feb_app}}, {{$mar_app}}, {{$apr_app}}, {{$may_app}}, {{$june_app}}, {{$jul_app}}, {{$aug_app}}, {{$sep_app}}, {{$oct_app}}, {{$nov_app}}, {{$dec_app}}],
                }
            ]
        }
    });


    var lineChartExample = new Chart(LINECHARTEXMPLE, {
    type: 'line',
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov","Dec"],
        datasets: [
            {
                label: "Approved Appoinments",
                fill: true,
                lineTension: 0.3,
                backgroundColor: "rgba(51, 179, 90, 0.5)",
                borderColor: brandPrimary,
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                borderWidth: 1,
                pointBorderColor: brandPrimary,
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: brandPrimary,
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [{{$jan_app}}, {{$feb_app}}, {{$mar_app}}, {{$apr_app}}, {{$may_app}}, {{$june_app}}, {{$jul_app}}, {{$aug_app}}, {{$sep_app}}, {{$oct_app}}, {{$nov_app}}, {{$dec_app}}],
                spanGaps: false
            },
        ]
    }
});

    });


</script>
@endsection

