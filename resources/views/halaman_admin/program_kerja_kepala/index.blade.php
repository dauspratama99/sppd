@extends('tampilan.admin')

@section('title', 'Kegiatan Kepala Dinas')

@section('admin')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="nav-icon fas fa-copy"></i> Program Kegiatan Kepala Dinas</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Program Kegiatan Kepala Dinas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->
            <a href="{{ route('program_kepala_tambah') }}" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i>
                Tambah
                Data</a>

            <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Kode Kegiatan</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Jenis Perjalanan</th>
                                    <th>Nilai</th>
                                    <th>Kode Rekening</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($index as $i)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $i->kode_kegiatan }}</td>
                                        <td>{{ $i->nama_kegiatan }}</td>
                                        <td>{{ $i->jenis_perjalanan }}</td>
                                        <td>{{ $i->nilai }}</td>
                                        <td>{{ $i->kode_rekening }}</td>
                                        <td>
                                            <a href="{{ route('program_kepala_edit', $i->id) }}"
                                                class="btn btn-block btn-info mb-2"><i class="fas fa-edit"></i>Edit</a>
                                            <form action="{{ route('program_kepala_hapus', $i->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-block btn-danger"> <i class="fas fa-trash">
                                                    </i>Delete</button>
                                            </form>
                                        </td>
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
@endsection
