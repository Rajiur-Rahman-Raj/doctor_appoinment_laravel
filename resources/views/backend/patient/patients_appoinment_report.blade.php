<h2 style="text-align: center">Online Doctor Apppointment</h2>
<br>
<hr>

<br>

<b><u>Appointment's Details :</u></b><br>
Appointment Date : {{$details->appoinment_date}}<br>
Appointment Day : {{$details->date_id}}<br>
Appointment Time : {{$details->time_id}}<br>

<br>

<b><u>Patient's Details :</u></b><br>
Patient Name : {{$details->name}}<br>
Patient Email : {{$details->email}}<br>
Patient Contact : {{$details->contact}}<br>

<br>

@php
    $doctor = DB::table('doctors')->where('user_id',$details->doctor_id)->first();
@endphp

<b><u>Doctor's Details :</u></b><br>
Doctor Name : {{$doctor->name}}<br>
Doctor Contact : {{$doctor->contact}}<br>
