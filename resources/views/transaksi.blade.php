@extends('layout')
@section('content')
<br>
<button type="button" class="btn btn-success btn-xs">Tambah Transaksi</button>
<table class="table">
    <thead>
        <th>Nomor Transaksi</th>
        <th>Jumlah</th>
        <th>Bayar</th>
        <th>Kembali</th>
        <th>Action</th>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="#" class="btn btn-danger btn-xs">Hapus</a>
                <a href="#" class="btn btn-warning">Edit</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
