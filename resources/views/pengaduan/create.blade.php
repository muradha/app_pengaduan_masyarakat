@extends('layouts.main_template');

@section('isi')

    <form action="{{ url('/pengaduan/save') }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('POST') }}
        <table>
            <tr>
                <td>Tanggal Pengaduan</td>
                <td>:</td>
                <td><input type="date" name="tgl_pengaduan"></td>
            </tr>
            <tr>
                <td>Masyarkat</td>
                <td>:</td>
                <td>
                	<select name="masyarakat_id">
                		<option> Pilih Masyarakat </option>
                		@foreach($data as $hasil)
                		<option value="{{ $hasil->id }}">{{ $hasil->nama }}</option>
                		@endforeach
                	</select>
                </td>
            </tr>
            <tr>
                <td>Isi Laporan</td>
                <td>:</td>
                <td><input type="text"name="isi_laporan"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td><input type="text"name="foto"></td>
            </tr>
             <tr>
                <td>Status</td>
                <td>:</td>
                <td><input type="text"name="status"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button>simpan</button></td>
            </tr>
            
        </table>
    </form>

@endsection