@extends('layout.tesla-admin')
@section('container')
    <h1>admin</h1>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <ul>
            <li>model_id(1-7) : <input type="number" name="model_id"></li>
            <li>model :<input type="text" name="model"></li>
            <li>note :<input type="text" name="note"></li>
            <li>gambar : <input type="file" name="image"></li>
            <li><input type="submit"></li>
        </ul>
    </form>
@endsection