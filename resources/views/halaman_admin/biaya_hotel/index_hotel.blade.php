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
                            <li class="breadcrumb-item active">Hotel</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="card-title">Hotel</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Provinsi</th>
                                    <th>Kategori</th>
                                    <th>Tingakatan A </th>
                                    <th>Tingakatan B </th>
                                    <th>Tingakatan C </th>
                                    <th>Tingakatan D </th>
                                    <th>Tingakatan E </th>
                                    <th>Tingakatan F </th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hotel as $i)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $i->provinsi }}</td>
                                        <td>{{ $i->kategori }}</td>
                                        <td>{{ number_format($i->tarif_a) }}</td>
                                        <td>{{ number_format($i->tarif_b) }}</td>
                                        <td>{{ number_format($i->tarif_c) }}</td>
                                        <td>{{ number_format($i->tarif_d) }}</td>
                                        <td>{{ number_format($i->tarif_e) }}</td>
                                        <td>{{ number_format($i->tarif_f) }}</td>
                                        <td>
                                            <a href="{{ route('hotel_edit', $i->id) }}"
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
