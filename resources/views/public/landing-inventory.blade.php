@extends('layout.tesla-custom');
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h1>Inventory</h1>
            </div>
            <div class="col-md-8">
                <h6>Cars</h6>
                @foreach ($data as $d)
                    <ul>
                        <li>Model : {{ $d->model }}</li>
                        <li>trim : {{ $d->trim }}</li>
                        <li>ekpaint : {{ $d->ekpaint }}</li>
                        <li>inpaint : {{ $d->inpaint }}</li>
                        <li>wheels : {{ $d->wheels }}</li>
                        <li>autopilot : {{ $d->autopilot }}</li>
                        <li>seatlayout : {{ $d->seatlayout }}</li>
                        <li>additional : {{ $d->addutional }}</li>

                    </ul>
                @endforeach
            </div>
        </div>
    </div>
@endsection