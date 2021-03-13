@extends('layouts.main_template')


@section('isi')
<table width="600" border="1" cellpadding="5" cellspacing="0">

    <a href="{{ url('/petugas/create') }}"><button>Tambah</button></a>

    <tr>

        <th>Nama</th>
        <th>Email</th>
        <th>No. Telp</th>
        <th>Aksi</th>
    </tr>

    @foreach($data_petugas as $data)
    <tr>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->telp }}</td>
        <td>
            <form action="{{ url('petugas/delete') }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="hidden" name="id" value="{{ $data->id }}">
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection