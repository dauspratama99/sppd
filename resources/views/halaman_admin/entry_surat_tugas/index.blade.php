@extends('tampilan.admin')

@section('title', 'Surat Tugas Staff')

@section('admin')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="fas fa-copy"></i> Entry Surat Tugas Staff</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Surat Tugas Staff</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->
            <a href="{{ route('surattugas_tambah') }}" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i>
                Tambah
                Data</a>

            <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 200px;">#</th>
                                    <th>No.</th>
                                    <th>No Surat Tugas</th>
                                    <th>Tanggal</th>
                                    <th>Tanggal Berangkat</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Selama</th>
                                    <th>Alat Angkutan</th>
                                    <th>Tempat Berangkat</th>
                                    <th>Tempat Tujuan</th>
                                    <th>Dasar Surat</th>
                                    <th>Uraian</th>
                                    <th>Sumber Anggaran</th>
                                    <th>Mulai Berlaku</th>
                                    <th>Tanda Tangan Dokumen</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($index as $i)
                                    <tr>
                                        <td>
                                            <div style="display: flex;">
                                                <a href="{{ route('detail_tambah', $i->id) }}"
                                                    class="btn btn-sm btn-primary mb-2"><i
                                                        class="fas fa-plus"></i>
                                                    Input Pegawai</a>

                                                &nbsp;&nbsp;

                                                <a href="{{ route('detail_surat', $i->id) }}" onclick="lala();"
                                                    class="btn btn-sm btn-info mb-2 "><i class="fas fa-eye"></i>
                                                    Lihat Pegawai</a>
                                            </div>

                                            <div style="display: flex;">
                                                <a href="{{ route('surattugas_edit', $i->id) }}"
                                                    class="btn btn-sm btn-warning mb-2"><i class="fas fa-edit"></i>Edit</a>
                                                &nbsp;&nbsp;
                                                <form action="{{ route('surattugas_hapus', $i->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger"> <i class="fas fa-trash">
                                                        </i>Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $i->no_surat_tugas }}</td>
                                        <td>{{ $i->tanggal }}</td>
                                        <td>{{ $i->tanggal_berangkat }}</td>
                                        <td>{{ $i->tanggal_kembali }}</td>
                                        <td>{{ $i->selama }}</td>
                                        <td>{{ $i->alat_angkutan }}</td>
                                        <td>{{ $i->tempat_berangkat }}</td>
                                        <td>{{ $i->tempat_tujuan }}</td>
                                        <td>{{ $i->dasar_surat }}</td>
                                        <td>{{ $i->uraian }}</td>
                                        <td>{{ $i->sumber_anggaran }}</td>
                                        <td>{{ $i->mulai_berlaku }}</td>
                                        <td>{{ $i->nm_lengkap }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

    <script>
        function lala() {
            $('#exampleModal').modal('show')
        }

    </script>

@endsection
