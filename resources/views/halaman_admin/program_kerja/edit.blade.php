@extends('tampilan.admin')

@section('title', 'Edit Kegiatan Staff')

@section('admin')

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="nav-icon fas fa-copy"></i> Edit Program Kegiatan Staff</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Program Kegiatan Staff</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->

            <form action="{{ route('proses_program_edit', $edit->id) }}" method="POST">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label for="">Kode Kegiatan</label>
                                    <input type="text" name="kode_kegiatan" value="{{ $edit->kode_kegiatan }}"
                                        class="form-control form-control-sm" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Nama Kegiatan</label>
                                    <input type="text" name="nama_kegiatan" id="" value="{{ $edit->nama_kegiatan }}"
                                        class="form-control form-control-sm">
                                </div>

                                <div class="form-group">
                                    <label for="">Jenis Perjalanan</label>
                                    <select class="form-control" name="jenis_perjalanan" aria-label="Default select example"
                                        required>
                                        <option selected>{{ $edit->jenis_perjalanan }}</option>
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
                                    <input type="text" name="nilai" id="" value="{{ $edit->nilai }}"
                                        class="form-control form-control-sm">
                                </div>

                                <div class="form-group">
                                    <label for="">Kode Rekening</label>
                                    <input type="text" name="kode_rekening" id="" value="{{ $edit->kode_rekening }}"
                                        class="form-control form-control-sm">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('program_kerja') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
