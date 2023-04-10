@extends('layouts.master')

@section('content')
    <section class="section">
        <div class="card shadow-sm">
            <div class="card-header" style="padding-bottom: 0px">
                <h3>
                    Riwayat Registrasi
                </h3>
                <hr>
                @include('message')
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-6 ">
                        <a href="{{ route('admin.registrasi.export') }}"  class="btn btn-success" type="button" >
                            Export Excel
                        </a>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a href="https://docs.google.com/spreadsheets/d/1zZzgB_pYy2x5evP0yO8QtIDMLJnu9B4j58fiPukDwYk/edit?usp=sharing" target="_blank"  class="btn btn-success" type="button" >
                            Live Excel (5 Menit)
                        </a>
                    </div>
                </div>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jam Hadir</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registrasi as $regis)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $regis->siswa->nama }}</td>
                                <td>{{ $regis->siswa->kelas }}</td>
                                <td>{{ $regis->jam_hadir }}</td>
                                <td> <span
                                        class="badge bg-{{ $regis->status == 'Hadir' ? 'success' : 'danger' }}">{{ $regis->status }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
