<div class="container-fluid">
    <h5>{{ (isset($title1))? $title1 : ""; }}</h5>
    @foreach ($data1 as $d)
        {{ $d->id }}
        {{ $d->title }}
    @endforeach
    <h5>{{ (isset($title2))? $title2 : ""; }}</h5>
    <h5>{{ (isset($title3))? $title3 : ""; }}</h5>
    <h5>{{ (isset($title4))? $title4 : ""; }}</h5>
    <h5>{{ (isset($title5))? $title5 : ""; }}</h5>
</div>