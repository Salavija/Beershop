<form action="{{ route('order.post') }}" method=POST>
	{{ crsf_field() }}

	<select>
		@foreach ($products as $product)
		<option value="{{ $product->id }}">{{ $product->tiitle }}</option>

		@endforech
	</select>

	<input type="text" name="Vardas">
	<input type="text" name="Vardas">
	<input type="numeris" name="Vardas">
</form>