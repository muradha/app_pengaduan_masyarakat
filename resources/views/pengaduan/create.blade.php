@extends('layouts.main_template');

@section('isi')

    <form action="{{ url('/masyarakat/save') }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('POST') }}
        <table>
            <tr>
                <td>Tanggal Pengaduan</td>
                <td>:</td>
                <td><input type="text" name="tgl_pengaduan"></td>
            </tr>
            <tr>
                <td>Masyarkat</td>
                <td>:</td>
                <td><input type="text" name="masyarakat_id"></td>
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