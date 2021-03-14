@extends('layouts.main_template')

@section('isi')

<form action="{{ url('tanggapan/save') }}" method="post">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<table>
		<tr>
			<td>Tanggal Tanggapan</td>
			<td>:</td>
			<td><input type="date" name="tgl_tanggapan"></td>
		</tr>
		<tr>
			<td>Petugas ID</td>
			<td>:</td>
			<td>
				<select name="petugas_id">
					<option>- Pilih Petugas -</option>
					@foreach($data_petugas as $data1)
					<option value="{{ $data1->id }}">{{ $data1->nama }}</option>
					@endforeach
				</select>
			</td>
		</tr>
		<tr>s
			<td>Tanggapan</td>
			<td>:</td>
			<td><input type="text" name="tanggapan"></td>
		</tr>
		<tr>
			<td>Pengaduan ID</td>
			<td>:</td>
			<td>
				<select name="pengaduan_id">
					<option>- Pilih Pengaduan -</option>
					@foreach($data_pengaduan as $data2)
					<option value="{{ $data2->id }}">{{ $data2->isi_laporan }}</option>
					@endforeach
				</select>
			</td>
		</tr>
		<tr>
                <td></td>
                <td></td>
                <td><button>simpan</button></td>
            </tr>
	</table>
</form>

@endsection