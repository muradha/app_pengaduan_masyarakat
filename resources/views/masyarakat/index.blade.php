@extends('layouts.main_template');

@section('isi')


<div style="margin: 10px;">
    <a href="{{ url('masyarakat/create') }}"><button>Tambah</button></a>

    <div style="float: right;">
        <form action="{{ url('/masyarakat') }}" method="get">
            <input type="text" name="kata_kunci" placeholder="Nama" value="{{ $kata_kunci }}">
            <button type="submit">Cari</button>
        </form>
    </div>
</div>

<table width="100%" border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No. Telp</th>
        <th>Aksi</th>
    </tr>

    @foreach($data_masyarakat as $data)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $data->nik }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->telp }}</td>


        <td>
            <a href="{{ url('/masyarakat/edit', $data->id) }}">
                <button>Edit</button>
            </a>

            <form action="{{ url('/masyarakat/delete') }}" method="POST">
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