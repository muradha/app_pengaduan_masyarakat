@extends('layouts.main_template');

@section('isi')

<table width="600" border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        
        <th>Tanggal Pengaduan</th>
      <th>  Masyarkat ID
        </th>
        <th>Isi Laporan</th>
        <th>Status</th>
    </tr>

    @foreach($data_pengaduan as $data)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ date('d-m-Y', strtotime($data->tgl_pengaduan))	}}</td>
        <td>{{ $data->masyarakat->nama }}</td>
        <td>{{ $data->isi_laporan }}</td>
        <td>{{ $data->status }}</td>
    </tr>
    @endforeach
</table>
@endsection