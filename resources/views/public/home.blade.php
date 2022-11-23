@extends('layout.tesla')
@section('container')
        {{-- <img src="{{ asset("img/M3-Homepage-Desktop-LHD.png") }}" class="img-fluid" alt="..."> --}}
        <div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white" style="
        background-image : url({{ asset("img/M3-Homepage-Desktop-LHD.png") }}); ">
            <div class="container">
                <h1 class="mb-4 h2">Jumbotron</h1>
                <h2>test</h2>

                <form action="" class="m-5">
                    <button>tset</button>
                    <button>test</button>
                </form>
            </div>

        </div>
@endsection()
