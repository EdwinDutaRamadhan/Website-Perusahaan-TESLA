<div class="container-fluid">
    <h5>At Home</h5>
    @foreach ($data1 as $d)
        {{ $d->id }}
        {{ $d->title }}
    @endforeach
    <h5>On the Road</h5>
    <h5>Parts</h5>
</div>