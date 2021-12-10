@extends('tampilan.admin')

@section('title_admin', 'Tampilan Index')

@section('admin')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="fas fa-money-bill-wave ml-1 mr-1"></i> Kelola Data Biaya</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Transportasi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <!-- Default box -->

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="card-title">Transportasi Terminal</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Provinsi</th>
                                    <th>Satuan</th>
                                    <th>Besaran</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($terminal as $t)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $t->provinsi }}</td>
                                        <td>{{ $t->satuan }}</td>
                                        <td>{{ number_format($t->besaran) }}</td>
                                        <td>
                                            <a href="{{ route('terminal_edit', $t->id) }}"
                                                class="btn btn-block btn-info mb-2"><i class="fas fa-edit"></i>
                                                Edit</a>
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

        <section class="content">
            <!-- Default box -->

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="card-title">Transportasi Bendahara</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Provinsi</th>
                                    <th>Satuan</th>
                                    <th>Besaran</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bandara as $i)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $i->provinsi }}</td>
                                        <td>{{ $i->satuan }}</td>
                                        <td>{{ number_format($i->besaran) }}</td>
                                        <td>
                                            <a href="{{ route('bandara_edit', $i->id) }}"
                                                class="btn btn-block btn-info mb-2"><i class="fas fa-edit"></i>
                                                Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
