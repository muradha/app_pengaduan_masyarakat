@extends('layouts.main_template')

@section('isi')

    <form action="{{ url('/masyarakat/update') }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

        <input type="hidden" name="id" value="{{ $data_masyarakat->id }}">

        <table>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><input type="text" name="nik" value="{{ $data_masyarakat->nik }}"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="{{ $data_masyarakat->nama }}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email"name="email" value="{{ $data_masyarakat->email }}"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><input type="number"name="telp" value="{{ $data_masyarakat->telp }}"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button>simpan</button></td>
            </tr>
            
        </table>
    </form>

@endsection