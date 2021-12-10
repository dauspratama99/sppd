@extends('tampilan.admin')

@section('title', 'Detail Pegawai Surat Tugas')

@section('admin')

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="fas fa-users"></i> Detail Pegawai Surat Tugas</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Surat Tugas </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="card-title">Surat Tugas
                        @php
                            $det = isset($detail[0]) ? $detail[0] : false;

                            if($det){
                                echo $detail[0]->no_surat_tugas;
                            }
                        @endphp
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No SPPD</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nip</th>
                                    <th>Jabatan</th>
                                    <th>Tingkat Biaya</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detail as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->no_sppd }}</td>
                                    <td>{{ $item->nama_lengkap }}</td>
                                    <td>{{ $item->nip }}</td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>{{ $item->tingkat_biaya }}</td>
                                    <td> <a onclick="return confirm('Yakin Hapus Data Ini ??')" href="{{route("detail_delete", $item->id_surat)}}" class="btn btn-danger text-white">Hapus</a> </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="card-footer">
                    <a href="{{ route('kelola_surattugas') }}" class="btn btn-warning">Back</a>
                </div>
            </div>
            </form>
        </section>
        <!-- /.content -->
    </div>

@endsection
