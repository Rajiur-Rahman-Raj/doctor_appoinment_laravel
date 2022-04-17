@extends('backend.master')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-3">
                        <div class="card-header rounded bg-success text-white">
                            <b><i class="far fa-clock"></i> Recent Approved</b>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Appoinment Date</th>
                                        <th scope="col">Time Slot</th>
                                        <th scope="col">Patient Name</th>
                                        <th scope="col">Patient Photo</th>
                                        <th scope="col">Patient Mobile</th>
                                        <th scope="col">Address</th>
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
                                                $patient = DB::table('patients')->where('user_id',$detail->patient_id)->first();
                                            ?>
                                            {{$patient->name}}
                                        </td>
                                        <td>@if($patient->image != null) <img src="{{url($patient->image)}}" height="40" width="50"> @endif</td>
                                        <td>{{$patient->contact}}</td>
                                        <td>{{$patient->address}}</td>
                                        <td>
                                            <a href="{{url('delete/recent/approved/by/doctor')}}/{{$detail->slug}}" class="btn btn-sm btn-danger rounded">Cancel</a>
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
