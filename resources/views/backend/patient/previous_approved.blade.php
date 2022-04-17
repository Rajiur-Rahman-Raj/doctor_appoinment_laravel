@extends('backend.master')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-3">
                        <div class="card-header rounded bg-info text-white">
                            <b><i class="fas fa-history"></i> Previous Approved Appoinments</b>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Doctor Name</th>
                                        <th scope="col">Doctor Photo</th>
                                        <th scope="col">Doctor Mob</th>
                                        <th scope="col">Patient Name</th>
                                        <th scope="col">Patient Mob</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl=1; ?>
                                    @foreach ($details as $detail)
                                    <tr>
                                        <th scope="row">{{$sl}}</th>
                                        <td>
                                            <?php
                                                $newDate = Carbon\Carbon::createFromFormat('Y-m-d', $detail->appoinment_date)->format('jS F, Y');
                                            ?>
                                            {{$newDate}}
                                        </td>
                                        <td>{{$detail->time_id}}</td>
                                        <td>
                                            <?php
                                                $doctor = DB::table('doctors')->where('user_id',$detail->doctor_id)->first();
                                            ?>
                                            {{$doctor->name}}
                                        </td>
                                        <td>@if($doctor->image != null) <img src="{{url($doctor->image)}}" height="40" width="50"> @endif</td>
                                        <td>{{$doctor->contact}}</td>
                                        <td>
                                            <?php
                                                $patient = DB::table('patients')->where('user_id',$detail->patient_id)->first();
                                            ?>
                                            {{$patient->name}}
                                        </td>
                                        <td>{{$patient->contact}}</td>
                                        <td>
                                            <a href="{{url('delete/previous/appoinments')}}/{{$detail->slug}}" class="btn btn-sm btn-danger rounded">Delete</a>
                                        </td>
                                    </tr>
                                    <?php $sl++ ?>
                                    @endforeach

                                </tbody>
                              </table>
                              {{ $details->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
