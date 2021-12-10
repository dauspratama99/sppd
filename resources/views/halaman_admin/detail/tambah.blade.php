@extends('tampilan.admin')

@section('title', 'Tambah Pegawai Surat Tugas')

@section('admin')

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="fas fa-users"></i> Tambah Pegawai Surat Tugas</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Surat Tugas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->

            <form action="{{ route('proses_detail_tambah', $surat->id) }}" method="POST">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="card-title">Surat Tugas {{ $surat->no_surat_tugas }}</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10">

                                <div class="row mt-2 mb-2">
                                    <div class="col">
                                        <label for=""> Nomor SPPD</label>
                                        <input type="text" name="no_sppd[]" class="form-control"
                                            placeholder="Nomor SPPD">
                                        @if(Session("no_sppd") !== null)
                                            <div class="alert alert-danger mt-2">{{ Session("no_sppd") }}</div>
                                        @endif
                                    </div>
                                    <div class="col">
                                    @php
                                        if(date('m') == '01'){
                                            $bln = 'I';
                                        }else if(date('m') == '02'){
                                            $bln = 'II';
                                        }else if(date('m') == '03'){
                                            $bln = 'III';
                                        }else if(date('m') == '04'){
                                            $bln = 'IV';
                                        }else if(date('m') == '05'){
                                            $bln = 'V';
                                        }else if(date('m') == '06'){
                                            $bln = 'VI';
                                        }else if(date('m') == '07'){
                                            $bln = 'VII';
                                        }else if(date('m') == '08'){
                                            $bln = 'VIII';
                                        }else if(date('m') == '09'){
                                            $bln = 'IX';
                                        }else if(date('m') == '10'){
                                            $bln = 'X';
                                        }else if(date('m') == '11'){
                                            $bln = 'XI';
                                        }else{
                                            $bln = 'XII';
                                        }
                                    @endphp

                                        <label for=""> &nbsp; </label>
                                        <input type="text" name="no_sppd2[]" value="/SPPD/KEU-{{ $bln }}/{{ date('Y')}}" class="form-control"
                                            placeholder="Last name" readonly>
                                    </div>
                                    <div class="col">
                                        <input type="hidden" name="surat_tugas_id" value="{{ $surat->id }}">
                                        <label for="1" class="form-label">Pegawai </label>
                                        <select class="form-control" name="nip[]" aria-label="Default select example">
                                            <option value="">Pilih Pegawai</option>
                                            @foreach ($pegawai as $item)
                                                <option value="{{ $item->nip }}">{{ $item->nama_lengkap }}</option>
                                            @endforeach
                                        </select>
                                         @if(Session("nip") !== null)
                                            <div class="alert alert-danger mt-2">{{ Session("nip") }}</div>
                                        @endif
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="text-white">Add</label><br>
                                            <button type="button" class="btn btn-success" id="tambah-nip"><i
                                                    class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 add-nip">
                            <!--  -->
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('kelola_surattugas') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>

    <script src="{{ url('assets') }}/plugins/jquery/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

            var unik = 1;

            $('#tambah-nip').click(function(e) {
                e.preventDefault();
                $('.add-nip').append(`<div class="row" id="remove-field-${unik}">
                        <div class="col">
                            <label for=""> Nomor SPPD</label>
                            <input type="text" name="no_sppd[]" class="form-control" placeholder="Nomor SPPD">
                                @error('no_sppd')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col">
                            <label for=""> &nbsp; </label>
                            <input type="text" name="no_sppd2[]" value="/SPPD/SETDA-III/2021" class="form-control" placeholder="Last name" readonly>
                        </div>

                        <div class="col">
                            <label for="1" class="form-label">NIP</label>
                            <select class="form-control" name="nip[]" aria-label="Default select example">
                                        <option selected>Pilih Pegawai</option>
                                        @foreach ($pegawai as $item)
                                            <option value="{{ $item->nip }}">{{ $item->nama_lengkap }}</option>
                                        @endforeach
                                    </select>

                        </div>
                        <div class="col" id="remove-button-${unik}">
                            <div class="form-group">
                                <label for="" class="text-white">Add</label><br>
                                <button type="button" class="btn btn-danger" onclick="removeElement(${unik})"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>`);
                unik++;
            });
        });

        function removeElement(unik) {
            $('#remove-field-' + unik).remove()
            $('#remove-button-' + unik).remove()
        }

    </script>

@endsection
