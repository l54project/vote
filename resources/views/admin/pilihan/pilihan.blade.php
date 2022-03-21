@extends('admin/template/template')
@section('content')


<div class="from-check">
	<input class="form-check-input" type="radio" name="makanan" id="makanan" value="option1" checked>
	<label class="from-check-label" for="makanan"></label>
</div>

<div class="from-check">
	<input class="form-check-input" type="radio" name="mobil" id="mobil" value="option2" checked>
	<label class="from-check-label" for="mobil"></label>
</div>

<div></div>


@endsection
