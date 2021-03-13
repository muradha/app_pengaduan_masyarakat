@extends('layouts.main_template')

@section('isi')

    <form action="{{ url('/petugas/update') }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

        <input type="hidden" name="id" value="{{ $data_petugas->id }}">

        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="{{ $data_petugas->nama }}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email"name="email" value="{{ $data_petugas->email }}"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><input type="number"name="telp" value="{{ $data_petugas->telp }}"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button>simpan</button></td>
            </tr>
            
        </table>
    </form>

@endsection