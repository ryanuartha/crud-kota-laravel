@extends('app')

@section('content')
    <h4>Detail Kota</h4>

    <a href="{{ route('kota.edit', $kota->id) }}"
       class="btn btn-info btn-sm">
        Ubah Kota
    </a>

    <table class="table table-responsive martop-sm">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $kota->id }}</td>
            </tr>
            <tr>
                <td>Nama Kota</td>
                <td>{{ $kota->nama_kota }}</td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>{{ $kota->getPropinsi->nama_propinsi ?? '-' }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('kota.index') }}" class="btn btn-default">
        Kembali
    </a>
@endsection