<!DOCTYPE html>
<html>
    <title>All Messages</title>
<head>
<style>
.container{
        padding: 100px;
    }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  padding:50px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(1) {
  background-color: gray;
}
tr:nth-child(even) {
  background-color: #dddddd;
}

h2{
    text-align:center;
}
</style>
</head>
<body>

<h2>All successfully Send Messages</h2> 
<div class="container">
<table>
  <tr>
    <th>Phone No</th>
    <th>Massage</th>
    <th>Timestamp</th>
  </tr>
  @foreach($list as $data)
  <tr>
    <td>{{$data->phone}}</td>
    <td>{{$data->msg}}</td>
    <td>{{$data->created_at}}</td>
  </tr>
  @endforeach

</table>
</div>
</body>
</html>

