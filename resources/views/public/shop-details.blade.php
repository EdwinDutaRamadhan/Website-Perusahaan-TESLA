@extends('layout.tesla-shop')
@section('container')
<h2>detail</h2>
    @foreach ($data as $d)
        <table>
            <tr>
                <td>Nama : {{ $d->nama }}</td>
                <td>harga : {{ $d->harga }}</td>
                <td>deskripsi : {{ $d->deskripsi }}</td>
                <td>guide : {{ $d->guide }}</td>
            </tr>
        </table>
    @endforeach
@endsection()