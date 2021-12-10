@extends('tampilan.admin')

@section('title', 'Tambah Kegiatan Kepala Dinas')

@section('admin')

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="nav-icon fas fa-copy"></i> Tambah Program Kegiatan Kepala Dinas</h1>

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

            <form action="{{ route('proses_program_kepala_tambah') }}" method="POST">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label for="">Kode Kegiatan</label>
                                    <input type="text" name="kode_kegiatan" id="" class="form-control form-control-sm"
                                        required>
                                </div>
                                @error('kode_kegiatan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="">Nama Kegiatan</label>
                                    <input type="text" name="nama_kegiatan" id="" class="form-control form-control-sm">
                                </div>

                                <div class="form-group">
                                    <label for="">Jenis Perjalanan</label>
                                    <select class="form-control" name="jenis_perjalanan" aria-label="Default select example"
                                        required>
                                        <option selected>Pilih Jenis Perjalanan</option>
                                        @php
                                            $jalan = ['Dinas Dalam Daerah', 'Dinas Luar Daerah', 'Dinas Luar Negeri'];
                                        @endphp
                                        @foreach ($jalan as $g)
                                            <option value="{{ $g }}">{{ $g }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Nilai</label>
                                    <input type="text" name="nilai" id="" class="form-control form-control-sm">
                                </div>

                                <div class="form-group">
                                    <label for="">Kode Rekening</label>
                                    <input type="text" name="kode_rekening" id="" class="form-control form-control-sm">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('program_kerja_kepala') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
