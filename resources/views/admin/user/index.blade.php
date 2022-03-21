@extends('admin/template/template')
@section('content')


<div class="card">
	<div class="card-header">
		<h5>User</h5>
	</div>
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $key=>$user)

				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $user->nama }}</td>
					<td>{{ $user->username }}</td>
					<td>
						<a class="btn btn-sm btn-primary" href="">Edit</a>
						<a class="btn btn-sm btn-danger" href="">Hapus</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="card-footer"></div>
</div>


@endsection
