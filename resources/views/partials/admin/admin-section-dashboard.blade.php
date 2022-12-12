<p class="text-muted">{{ Auth::user()->name }}</p>
<hr class="my-2">
<h4>Car Inventory Edit History ({{ count($dataInventory) }})</h4>
<div class="table-responsive mt-3">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Model</th>
                <th scope="col">Color</th>
                <th scope="col">Price</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
            </tr>
        </thead>
        <tbody>
           @if (count($dataInventory) > 0)
                @foreach ($dataInventory as $d)
                    <tr>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->model }}</td>
                        <td>{{ $d->color }}</td>
                        <td>{{ $d->fee }}</td>
                        <td>{{ $d->created_at }}</td>
                        <td>{{ $d->updated_at }}</td>
                    </tr>
                 @endforeach
           @else
               <tr>
                <td colspan="6" align="center">
                    <b>Tidak ada data log</b>
                </td>
               </tr>
           @endif
        </tbody>
    </table>
</div>
<h4>Shops Edit History ({{ count($dataShop) }})</h4>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">Model</th>
                <th scope="col">Price</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
            </tr>
        </thead>
        <tbody>
            @if (count($dataShop) > 0)
                @foreach ($dataShop as $d)
                    <tr>
                        <td>{{ $d->title }}</td>
                        <td>{{ $d->type }}</td>
                        <td>{{ ($d->model == null)? "-" : $d->model; }}</td>
                        <td>{{ $d->price }}</td>
                        <td>{{ $d->created_at }}</td>
                        <td>{{ $d->updated_at }}</td>
                    </tr>
                 @endforeach
            @else
            <tr>
                <td colspan="6" align="center">
                    <b>Tidak ada data log</b>
                </td>
               </tr>
            @endif
        </tbody>
    </table>
</div>
