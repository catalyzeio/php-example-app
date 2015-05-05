@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Database Demo</h1>
			<p class="lead">This is a sample php application for deployment on PaaS using Laravel. This shows a simple database connection.</p>
			<table class="table table-hover">
	      <thead>
	        <tr>
	          <th>ID</th>
	          <th>User IP</th>
	          <th>User Agent</th>
	        </tr>
	      </thead>
	      <tbody>
					@foreach ($visitors as $visitor)
	        <tr>
	          <th scope="row">{{ $visitor->id }}</th>
	          <td>{{ $visitor->user_ip }}</td>
	          <td>{{ $visitor->user_agent }}</td>
	        </tr>
					@endforeach
	      </tbody>
	    </table>
		</div>
	</div>
</div>
@endsection
