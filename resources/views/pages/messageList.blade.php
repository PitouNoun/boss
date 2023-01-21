@extends('layout.master')
@section('content')
<section>
	@include('layout.nav')
</section>
<h1 class="my-3 mx-2">Message List</h1>

<table class="table table-striped m-0 px-5">

	<thead>
		<tr>
			<th class="text-center" scope="col">Full Name</th>
			<th class="text-center" scope="col">Email</th>
			<th class="text-center" scope="col">Subject</th>
			<th class="text-center" scope="col">Message</th>
		</tr>
	</thead>

	<tbody>
		@foreach($lists as $list)
		<tr>
			<td>{{ $list->fullname}}</td>
			<td>{{ $list->email }}</td>
			<td>{{ $list->subject }}</td>
            <td>{{ $list->message }}</td>
        </tr>
		@endforeach
	</tbody>
</table>
@stop