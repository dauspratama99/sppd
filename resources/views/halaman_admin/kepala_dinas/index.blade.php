@extends('tampilan.admin')

@section('title', 'Kepala Dinas')

@section('admin')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-users"></i> Kepala Dinas</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Kepala Dinas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->
            <a href="{{ route('kepala_dinas_tambah') }}" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i> Tambah
                Data</a>

            <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nip</th>
                                    <th>Jabatan</th>
                                    <th>Golongan</th>
                                    <th>Pangkat</th>
                                    <th>Unit</th>
                                    <th>Tingkat Biaya</th>
                                    <th>Foto</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($index as $i)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $i->nama_lengkap }}</td>
                                        <td>{{ $i->nip }}</td>
                                        <td>{{ $i->jabatan }}</td>
                                        <td>{{ $i->golongan }}</td>
                                        <td>{{ $i->pangkat }}</td>
                                        <td>{{ $i->unit }}</td>
                                        <td>{{ $i->tingkat_biaya }}</td>
                                        <td><img src="{{ url('gambar/', $i->foto) }}" width="50%"></td>
                                        <td>
                                            <a href="{{ route('kepala_dinas_edit', $i->id) }}"
                                                class="btn btn-block btn-info mb-2"><i class="fas fa-edit"></i> <br>
                                                Edit</a>
                                            <form action="{{ route('kepala_dinas_delete', $i->id) }}" method="post">
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
