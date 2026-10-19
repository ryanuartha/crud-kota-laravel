@extends('app')

@section('content')
    <h3>Manajemen Tabel Kota</h3>

    <a href="{{ route('kota.create') }}" class="btn btn-info btn-sm">
        Tambah Kota
    </a>

    @if (session('success'))
        <div class="alert alert-success martop-sm">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kota</th>
                <th>Provinsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kota as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <a href="{{ route('kota.show', $item->id) }}">
                            {{ $item->nama_kota }}
                        </a>
                    </td>
                    <td>
                        {{ $item->getPropinsi->nama_propinsi ?? '-' }}
                    </td>
                    <td>
                        <a href="{{ route('kota.edit', $item->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('kota.destroy', $item->id) }}"
                              method="POST"
                              style="display: inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus kota ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada data kota.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $kota->links() }}
@endsection