@extends('layout.tesla-admin')
@section('container')
    <div class="container-fluid">
        <h2>inven admin</h2>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>
    </div>

    @include('public.admin.section-inven-add')
@endsection
