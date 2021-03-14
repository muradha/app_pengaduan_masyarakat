
<table width="600" border="1" cellpadding="5" cellspacing="0">
    <tr>
        
        <th>Tanggal Tanggapan</th>
        <th>Tanggapan</th>
        <th>Status</th>
        <th>pengaduan</th>
        <th>Petugas</th>
    </tr>

    @foreach($data_tanggapan as $data)
    <tr>
        <td>{{ $data->tgl_tanggapan }}</td>
        <td>{{ $data->tanggapan }}</td>
        <td>{{ $data->pengaduan->status }}</td>
        <td>{{ $data->pengaduan->isi_laporan }}</td>
        <td>{{ $data->petugas->nama }}</td>
    </tr>
    @endforeach
</table>