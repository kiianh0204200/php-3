@extends('master')

@section('title')
Thêm Mới 
@endsection

@section('content')
<form action="{{ route('products.update', $product->id) }}" method="POST">
@csrf   
@method('PUT')
<label for="name">Name</label><br>
<input id="name" name="name" type="text" value="{{ $product->name }}"><br>
<label for="email">Email</label><br>
<input id="email" name="email" type="text" value="{{ $product->email }}"><br>
<label for="phone">Phone</label><br>
<input id="phone" name="phone" type="text" value="{{ $product->phone }}"><br>
<label for="is_trening">Is Trending</label><br>
<select name="is_trening" id="is_trening" >
    <option value="">--chọn--</option>
    <option value="0" {{ $product['is_trending'] == 0 ? 'selected' : '' }}>0</option>
    <option value="1" {{ $product['is_trending'] == 0 ? 'selected' : '' }}>1</option>
</select><br>
<button class="btn btn-dark" type="submit">Thêm Mới</button>
<a class="btn btn-danger" href="{{ route('products.index') }}">Quay trở Lại</a>

</form>
@endsection
