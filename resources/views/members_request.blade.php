@extends('layouts.admin')

@section('content')

<div class="container">
<div>

<hr/>
<h3 style="color: blue" align="center"> Admin Dashboard</h3>
<hr/>
<h4 style="color: blue" align="center">List of Accredited Members </h4>

<table class="table table-striped table-hover">
<tr>
<th>S/N</th>
<th>Names</th>
<th>Phone No</th>
<th>DOB</th>
<th>Gender</th>
<th>Passport</th>
<th>Email</th>
<th>Address</th>
<th>State</th>
<th> LGA /LCDA </th>
<th> Part Reg No </th>
<th> Accreditation No </th>
</tr>

<tbody>
     @foreach($members as $member)
<tr>
<td>{{ $member->id }}</td>
<td>{{ $member->name }}</td>
<td>{{ $member->phone_no }}</td>
<td>{{ $member->dob}}</td>
<td>{{ $member->gender }}</td>
<td><img src="{{ asset( Storage::url($member->passport_name) ) }}" /></td>

     <!-- <td><img src='{{ url('/storage/app/passports/'.$member->passport_name) }}'></td> -->


<td>{{ $member->email }}</td>
<td>{{ $member->address }}</td>
<td>{{ $member->state }}</td>
<td>{{ $member->lgalcda }}</td>
<td>{{ $member->party_reg_no }}</td>
<td>{{ $member->acc_no }}</td>

</tr>

@endforeach
</tbody>
</table>
</div>
</div>
@include ('layouts.footer') 
@endsection
