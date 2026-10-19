@extends('app')

@section('content')
    <h4>Tambah Kota</h4>

    <form action="{{ route('kota.store') }}" method="POST">
        @csrf

        <div class="form-group {{ $errors->has('nama_kota') ? 'has-error' : '' }}">
            <label for="nama_kota" class="control-label">Nama Kota</label>
            <input
                type="text"
                class="form-control"
                id="nama_kota"
                name="nama_kota"
                placeholder="Nama Kota"
                value="{{ old('nama_kota') }}"
            >

            @if ($errors->has('nama_kota'))
                <span class="help-block">
                    {{ $errors->first('nama_kota') }}
                </span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('id_propinsi') ? 'has-error' : '' }}">
            <label for="id_propinsi" class="control-label">Provinsi</label>

            <select
                name="id_propinsi"
                id="id_propinsi"
                class="form-control"
            >
                <option value="">-- Pilih Provinsi --</option>

                @foreach ($propinsi as $p)
                    <option
                        value="{{ $p->id }}"
                        {{ old('id_propinsi') == $p->id ? 'selected' : '' }}
                    >
                        {{ $p->nama_propinsi }}
                    </option>
                @endforeach
            </select>

            @if ($errors->has('id_propinsi'))
                <span class="help-block">
                    {{ $errors->first('id_propinsi') }}
                </span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">Simpan</button>

            <a href="{{ route('kota.index') }}" class="btn btn-default">
                Kembali
            </a>
        </div>
    </form>
@endsection