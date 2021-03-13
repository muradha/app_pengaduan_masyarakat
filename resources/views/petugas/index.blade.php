@extends('layouts.main_template')


@section('isi')
<table width="100%" border="1" cellpadding="5" cellspacing="0">



    <div style="margin:20px;">
        <a href="{{ url('/petugas/create') }}"><button>Tambah</button></a>
        <div style="float: right;">
            <form action="{{ url('/petugas') }}" method="get"><input type="text" placeholder="cari" name="kata_kunci" value="{{ $kata_kunci }}"></form>
            <button type="submit">Submit</button>
        </div>

    </div>


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
            <a href="{{ url('/petugas/edit', $data->id) }}"><button>edit</button></a>

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