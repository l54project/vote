@extends('user/template/template')
@section('content')

<div class="card mb-3">
	<div class="card-header">
		<h5>Votting</h5>
	</div>
	<div class="card-body">
		<form action="" method="post">
			@csrf()
			@foreach ($polls as $i=>$poll )
			<div class="form-group">
				{{ $i+1 }}. <label for="">{{ $poll->kuis }}</label>


				@foreach ($poll->pilihan as $pilihan )
					
				<div class="form-check">
					<input class="form-check-input" type="radio" name="{{ $poll->id_poll }}" id="{{ $pilihan->id_pilihan }}" value="{{ $pilihan->id_pilihan }}">
					<label class="form-check-label" for="{{ $pilihan->id_pilihan }}">
					{{ $pilihan->opsi }}
					</label>
				</div>
				@endforeach
			

			</div >
				
			@endforeach
			<button class="btn btn-sm btn-primary" type="submit">Vote</button>
		</form>
	</div>
	<div class="card-footer">

	</div>

</div>

@endsection