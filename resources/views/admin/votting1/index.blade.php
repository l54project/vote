@extends('admin/template/template')
@section('content')

		<div class="card">
			<div class="card-header">
				<h5>Votting</h5>
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>ID Votting</th>
							<th>ID Login</th>
							<th>ID Poll</th>
							<th>ID Pilihan</th>
						</tr>
					</thead>
					<tbody>
						@foreach($vottings as $key=>$votting)
						<tr>
							<td>{{ $key+1 }}</td>
							<td>{{ $votting->id_login }}</td>
							<td>{{ $votting->id_poll }}</td>
							<td>{{ $votting->id_pilihan }}</td>
						</tr>	
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

@endsection