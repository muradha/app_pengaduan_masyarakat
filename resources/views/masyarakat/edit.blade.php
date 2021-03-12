@extends('layouts.main_template');

@section('isi')

    <form action="{{ url('/masyarakat/save') }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <table>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><input type="text" name="nik" value="{{ $masyarakat->nik }}"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="{{ $masyarakat->nama }}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email"name="email" value="{{ $masyarakat->email }}"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><input type="number"name="telp" value="{{ $masyarakat->telp }}"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button>simpan</button></td>
            </tr>
            
        </table>
    </form>

@endsection