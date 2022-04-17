@extends('frontend.master')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-5 mb-5">
                        <div class="card-header bg-info text-white">
                            <b><i class="fas fa-user-md"></i> Doctor's List</b>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Degree</th>
                                    <th scope="col">Appoinment Date</th>
                                    <th scope="col">Appoinment Time Slot</th>
                                  </tr>
                                </thead>
                                <tbody>

                                    @foreach ($doctors as $doctor)
                                    <tr>
                                        <th scope="row">
                                            @if($doctor->image != null)
                                                <img src="{{url($doctor->image)}}" height="55" width="60">
                                            @endif
                                        </th>
                                        <td>{{$doctor->name}}</td>
                                        <td>{{$doctor->department_name}}</td>
                                        <td>{{$doctor->contact}}</td>
                                        <td>{{$doctor->degree}}</td>
                                        <td>
                                            @if($doctor->sat != null) Saturday,  @endif
                                            @if($doctor->sun != null) Sunday,  @endif
                                            @if($doctor->mon != null) Monday,  @endif
                                            @if($doctor->tue != null) Tuesday,  @endif
                                            @if($doctor->wed != null) Wednesday,  @endif
                                            @if($doctor->thu != null) Thursday,  @endif
                                            @if($doctor->fri != null) Friday,  @endif
                                        </td>
                                        <td>
                                            @php
                                                $times = DB::table('appoinment_times')->where('doctor_id',$doctor->user_id)->get();
                                            @endphp
                                            @foreach ($times as $time)
                                                {{$time->time}},
                                            @endforeach
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
