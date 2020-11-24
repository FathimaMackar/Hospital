 <!DOCTYPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table align="center">
<tr>

<td>Name</td>
<td>Email Id</td>
<td>Phone</td>
<!-- <td>City Name</td>
<td>Email</td> -->
</tr>
@foreach ($data as $item)
<tr>

<td>{{ $item->user_name }}</td>
<td>{{ $item->user_email }}</td>
<td>{{ $item->user_phone }}</td>


</tr>
@endforeach
</table>
</body>
</html>