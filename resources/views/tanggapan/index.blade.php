
<table width="600" border="1" cellpadding="5" cellspacing="0">
    <tr>
        
        <th>Tanggal Tanggapan</th>
        <th>Tanggapan</th>
    </tr>

    @foreach($data_tanggapan as $data)
    <tr>
        <td>{{ $data->tgl_tanggapan }}</td>
        <td>{{ $data->tanggapan }}</td>
    </tr>
    @endforeach
</table>