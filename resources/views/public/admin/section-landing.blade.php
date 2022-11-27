<div class="container-fluid">
    <table class="table">
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->model_id }}</td>
            <td>{{ $d->model }}</td>
            <td>{{ $d->note }}</td>
            <td><img src="{{ asset('storage/'.$d->image) }}" alt="null" width="100px"></td>
        </tr>
        @endforeach
    </table>
</div>
