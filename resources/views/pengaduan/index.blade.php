@extends('layouts.main_template')

@section('isi')

<a href="{{ url('pengaduan/create')}}"><button>Tambah</button></a>

<table width="100%" border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Tanggal Pengaduan</th>
      <th>  Masyarkat ID
        </th>
        <th>Isi Laporan</th>
        <th>Status</th>
        <th>aksi</th>
    </tr>

    @foreach($data_pengaduan as $data)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ date('d-m-Y', strtotime($data->tgl_pengaduan))	}}</td>
        <td>{{ $data->masyarakat->nama }}</td>
        <td>{{ $data->isi_laporan }}</td>
        <td>{{ $data->status }}</td>
        <td>
            <a href="{{ url('pengaduan/edit', $data->id)}}">
                <button>edit</button>
            </a>
             <form action="{{ url('/pengaduan/delete') }}" method="POST">
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