@extends('tampilan.admin')

@section('title_admin', 'Edit Data Peraturan')

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

            <form action="{{ route('proses_hotel_edit', $hotel_edit->id) }}" method="POST">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="card-title">Edit Data Hotel</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10">

                                <div class="form-group">
                                    <label for="">Tingkatan A </label>
                                    <input type="text" name="tarif_a" id="harga_satuan" value="{{ $hotel_edit->tarif_a }}"
                                        id="" class="form-control form-control-sm" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Tingakatan B</label>
                                    <input type="text" name="tarif_b" id="harga_satuan" value="{{ $hotel_edit->tarif_b }}"
                                        id="" class="form-control form-control-sm" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Tingkatan C</label>
                                    <input type="text" name="tarif_c" id="harga_satuan" value="{{ $hotel_edit->tarif_c }}"
                                        id="" class="form-control form-control-sm" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Tingkatan D</label>
                                    <input type="text" name="tarif_d" id="harga_satuan" value="{{ $hotel_edit->tarif_d }}"
                                        id="" class="form-control form-control-sm" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Tingkatan E</label>
                                    <input type="text" name="tarif_e" id="harga_satuan" value="{{ $hotel_edit->tarif_e }}"
                                        id="" class="form-control form-control-sm" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Tingkatan F</label>
                                    <input type="text" name="tarif_f" id="harga_satuan" value="{{ $hotel_edit->tarif_f }}"
                                        id="" class="form-control form-control-sm" required>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('biaya_hotel') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>

@endsection
