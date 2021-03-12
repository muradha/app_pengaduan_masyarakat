@extends('layouts.main_template');

@section('isi')

    <form action="{{ url('/petugas/save') }}" method="post">
        {{ csrf_field() }}
        {{ method_field('POST') }}
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>No telepon</td>
                <td>:</td>
                <td><input type="number" name="telp"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit">Simpan</button></td>
            </tr>
            
        </table>
        
    </form>


@endsection