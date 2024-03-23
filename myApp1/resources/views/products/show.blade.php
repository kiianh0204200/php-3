@extends('master')

@section('title')
Sản phẩm chi tiết
@endsection

@section('content')

<table border=1 class="table  " >
   <thead >
   <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>GMAIL</th>
        <th>PHONE</th>
        <th>IS_Trending</th>
    </tr>
   </thead>
   <tbody>
        
   <tr>
        <th>{{ $data->id }}</th>
        <th>{{ $data->name }}</th>
        <th>{{ $data->email }}</th>
        <th>{{ $data->phone }}</th>
        <th>{{ $data->is_trening }}</th>
    </tr>
   </tbody>


</table>
<a class="btn btn-danger" href="{{ route('products.index') }}">Quay Lại</a>
@endsection