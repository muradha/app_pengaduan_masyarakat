@extends('layouts.main_template')

@section('isi')

    <form action="{{ url('/pengaduan/update') }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <input type="hidden" name="id" value="{{ $data_pengaduan->id }}">

        <table>
            <tr>
                <td>Tanggal Pengaduan</td>
                <td>:</td>
                <td><input type="date" name="tgl_pengaduan" value="{{ $data_pengaduan->tgl_pengaduan}}"></td>
            </tr>
            <tr>
                <td>Masyarkat</td>
                <td>:</td>
                <td>
                	<select name="masyarakat_id">
                		<option> Pilih Masyarakat </option>
                		@foreach($data as $hasil)
                		<option value="{{ $hasil->id }}" @if($hasil->id==$data_pengaduan->masyarakat_id) selected="" @endif>{{ $hasil->nama }}</option>
                		@endforeach
                	</select>
                </td>
            </tr>
            <tr>
                <td>Isi Laporan</td>
                <td>:</td>
                <td><input type="text"name="isi_laporan" value="{{ $data_pengaduan->isi_laporan}}"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td><input type="text"name="foto" value="{{ $data_pengaduan->foto}}"></td>
            </tr>
             <tr>
                <td>Status</td>
                <td>:</td>
                <td><input type="text"name="status" value="{{ $data_pengaduan->status}}"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button>simpan</button></td>
            </tr>
            
        </table>
    </form>

@endsection