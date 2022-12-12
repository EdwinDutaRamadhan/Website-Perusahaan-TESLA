<div class="container-fluid">
    <div class="table-responsive mt-3">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Order Id</th>
                    <th scope="col">User</th>
                    <th scope="col">Item</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Order At</th>
                </tr>
            </thead>
            <tbody>
                @if (count($data) > 0)
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->user->name }}</td>
                            <td>{{ $d->title }}</td>
                            <td>{{ $d->type }}</td>
                            <td>${{ $d->price }}</td>
                            <td>{{ $d->quantity }}</td>
                            <td>{{ $d->method }}</td>
                            <td>{{ $d->created_at }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" align="center">
                            <b>Tidak ada order</b>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
