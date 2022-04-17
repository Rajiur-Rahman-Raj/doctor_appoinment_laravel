<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #0097e6;
  color: white;
}
</style>
</head>
<body>

<h2 style="text-align:center">Patient's List</h2>
<br>

<table>
  <tr>
    <th>Image</th>
    <th>Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>NID</th>
    <th>Address</th>
    <th>Date</th>
  </tr>

  @foreach ($datas as $data)
  <tr>
    <td>
        <img src="{{ public_path($data->image) }}" height="40" width="50">
    </td>
    <td>{{$data->name}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->contact}}</td>
    <td>{{$data->nid}}</td>
    <td>{{$data->address}}</td>
    <td>
        <?php
            $newDate = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d/m/Y');
        ?>
        {{$newDate}}
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>
