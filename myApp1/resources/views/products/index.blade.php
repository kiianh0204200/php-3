@extends('master')

@section('title')
LiSt Danh Sách
@endsection

@section('content')
<a class="btn btn-dark" href="{{ route('products.create') }}">Create</a>
<table class="table table-bordered" border="1" >
   <thead>
   <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>GMAIL</th>
        <th>PHONE</th>
        <th>IS_Trending</th>
        <th>ACTION</th>
    </tr>
   </thead>
   <tbody>
    @foreach ($data as $item)
        
   <tr>
        <th>{{ $item->id }}</th>
        <th>{{ $item->name }}</th>
        <th>{{ $item->email }}</th>
        <th>{{ $item->phone }}</th>
        <th>{{ $item->is_trening }}</th>
        <th>
            <a class="btn btn-danger" href="{{ route('products.show',$item->id) }}">Show</a>
            <a class="btn btn-info" href="{{ route('products.edit',$item->id) }}">Edit</a>

            <form  action="{{ route('products.destroy',$item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-primary" type="submit" >DELETE</button>
            </form>
        </th>
        
    </tr>
   </tbody>

   @endforeach

</table>
{{ $data->links() }}
@endsection