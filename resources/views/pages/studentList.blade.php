@extends('layout.master')
@section('content')
<section class="header">
	@include('layout.nav')
	<div class="text-box">
		<h1>Most Prestigious University</h1>
		<p>MAMA was established in 2010 as a Cambodian university with a United Kingdom curriculum.<br>There are 5 founders who envisioned a new university that would meet international standards and be based on the UK educational system.
		</p>
	</div>
</section>
<h1 class="my-3 mx-2">Submission List</h1>

<table class="table table-striped m-0 px-5">

	<thead>
		<tr>
			<th class="text-center" scope="col">ID</th>
			<th class="text-center" scope="col">Name</th>
			<th class="text-center" scope="col">Father Name</th>
			<th class="text-center" scope="col">Birthday</th>
			<th class="text-center" scope="col">Gender</th>
			<th class="text-center" scope="col">Father Email</th>
			<th class="text-center" scope="col">Father Phone</th>
			<th class="text-center" scope="col">Address</th>
			<th class="text-center" scope="col">Mother Name</th>
			<th class="text-center" scope="col">Sibling</th>
			<th class="text-center" scope="col">Mother Email</th>
			<th class="text-center" scope="col">Mother Phone</th>
			<th class="text-center" scope="col">Father Job</th>
			<th class="text-center" scope="col">Father Qualification</th>
			<th class="text-center" scope="col">Mother Job</th>
			<th class="text-center" scope="col">Mother Qualification</th>

		</tr>
	</thead>

	<tbody>
		@foreach($lists as $list)
		<tr>
			<td>{{ $list->id }}</td>

			<td>{{ $list->u_f_name }} {{ $list->u_l_name }}</td>

			<td>{{ $list->u_father }}</td>
			<td>{{ $list->u_birthday }}</td>

			<td>{{ $list->u_gender }}</td>
			<td>{{ $list->femail }}</td>
			<td>{{ $list->fphone }}</td>
			<td>{{ $list->u_address }}</td> 

			<td>{{ $list->u_mother }}</td>
			<td>{{ $list->u_sibling }}</td>
			<td>{{ $list->memail }}</td> 
			<td>{{ $list->mphone }}</td>

			 <td>{{ $list->f_occ }}</td> 
			<td>{{ $list->f_qu }}</td>
			 <td>{{ $list->m_occ }}</td>
  			<td>{{ $list->m_qu }}</td>

		@endforeach
	</tbody>
</table>
@stop