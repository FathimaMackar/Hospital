@extends('staffhome')

<div class ="row">
	<div class="col-md-12">
		<br>
		<h3>User data</h3>
		<table border = "1">
<tr>

<td>Name</td>
<td>Email Id</td>
<td>Phone</td>
<!-- <td>City Name</td>
<td>Email</td> -->
</tr>

@foreach ($userr as $item)
<tr>

<td>{{ $item['user_name'] }}</td>
<td>{{ $item['user_email']}}</td>
<td>{{ $item['user_phone']}}</td>

</tr>
@endforeach
		
	</div>
</div>