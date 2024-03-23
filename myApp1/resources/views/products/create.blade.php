@extends('master')

@section('title')
Thêm Mới 
@endsection

@section('content')
<form action="{{ route('products.store') }}" method="POST">
@csrf
@method('POST')
<label for="name">Name</label><br>
<input id="name" name="name" type="text"><br>
<label for="email">Email</label><br>
<input id="email" name="email" type="text"><br>
<label for="phone">Phone</label><br>
<input id="phone" name="phone" type="text"><br>
<label for="is_trening">Is Trending</label><br>
<select name="is_trening" id="is_trening">
    <option value="">--chọn--</option>
    <option value="0">0</option>
    <option value="1">1</option>
</select><br>
<button class="btn btn-dark" type="submit">Thêm Mới</button>
<a class="btn btn-danger" href="{{ route('products.index') }}">Quay trở Lại</a>

</form>
@endsection
