@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcumb">
				<li><a href="{{url('/home')}}">Dashboard</a></li>
				<li class="active">Penulis</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Penulis</h2>
				</div>
				<div class="panel-body">
					Diisi dengan data table
				</div>
			</div>
		</div>
	</div>
</div>
@endsection