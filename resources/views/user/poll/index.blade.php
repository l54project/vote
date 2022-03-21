@extends('admin/template/template')
@section('content')


<div class="card">
	<div class="card-header">
		<h5>Poll</h5>
	</div>
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Kuis</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($polls as $key=>$poll)

				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $poll->kuis }}</td>
					<td>
						<a class="btn btn-sm btn-primary" href="{{ url('panel/pilihan') }}">\/</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="card-footer"></div>
</div>


@endsection
