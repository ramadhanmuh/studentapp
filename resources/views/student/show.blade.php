@extends('template')

@section('main')
    <div id="siswa" class="container my-3">
        <div class="float-right"><a href="{{ URL::to('student') }}" class="btn btn-primary">Kembali</a></div>
        <h2>Detail siswa</h2>
        <table class="table table-striped my-3">
            <tr>
                <th>NISN</th>
                <td>{{ $siswa->nisn }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $siswa->nama_siswa }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $siswa->tanggal_lahir->format('d-m-Y') }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $siswa->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Usia</th>
                <td>{{ $umur }} tahun</td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td>{{ !empty($siswa->telephone->nomor_telepon) ? $siswa->telephone->nomor_telepon : '-' }}</td>
            </tr>
        </table>
    </div>
@stop

@section('footer')
    @include('footer_fixed')
@stop