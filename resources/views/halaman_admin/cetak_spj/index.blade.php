@extends('tampilan.admin')

@section('title', 'SPJ Staff')

@section('admin')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="fas fa-users"></i> Cetak SPJ Staff</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">SPJ Staff</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <form class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="jenisPerjalanan" class="sr-only">Jenis Perjalanan</label>
                            <select class="form-control" id="jenisPerjalanan" name="jenis_perjalanan">
                                <?php 
                                if(isset($_GET['jenis_perjalanan'])){
                                    if($_GET['jenis_perjalanan'] == 'Dinas Dalam Daerah'){
                                ?>
                                <option value="">Pilih Jenis Perjalanan</option>
                                <option selected value="Dinas Dalam Daerah">Dinas Dalam Daerah</option>
                                <option value="Dinas Luar Daerah">Dinas Luar Daerah</option>
                                
                                <?php }else if($_GET['jenis_perjalanan'] == 'Dinas Luar Daerah'){ ?>
                                <option value="">Pilih Jenis Perjalanan</option>
                                <option value="Dinas Dalam Daerah">Dinas Dalam Daerah</option>
                                <option selected value="Dinas Luar Daerah">Dinas Luar Daerah</option>
                                
                                <?php }else{ ?>
                                <option selected value="">Pilih Jenis Perjalanan</option>
                                <option value="Dinas Dalam Daerah">Dinas Dalam Daerah</option>
                                <option value="Dinas Luar Daerah">Dinas Luar Daerah</option>
                                
                                <?php }}else{ ?>
                                <option selected value="">Pilih Jenis Perjalanan</option>
                                <option value="Dinas Dalam Daerah">Dinas Dalam Daerah</option>
                                <option value="Dinas Luar Daerah">Dinas Luar Daerah</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <button type="submit" class="btn btn-primary mb-2">Cari</button>
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <a href="{{ route('export_spj', @$_GET['jenis_perjalanan']) }}" class="btn btn-success"><i class="fas fa-download"></i> Export Excel</a>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <?php
                        if(isset($_GET['jenis_perjalanan'])){
                            $jenis = $_GET['jenis_perjalanan'];
        
                            if($_GET['jenis_perjalanan'] == ''){
                                echo "<b>Keseluruhan</b>";
                            }else{
                                echo "<b>".$jenis."</b>";
                            }
                        }else{
                            echo "<b>Keseluruhan</b>";
                        }
        
                    ?>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>No</th>
                                    <th>No SPPD</th>
                                    <th>Nama Lengkap</th>
                                    <th>NIP</th>
                                    <th>Tanggal Berangkat</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Selama</th>
                                    <th>Jenis Perjalanan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($index as $i)
                                    <tr>
                                        <td style="width: 100px;">
                                            <a href="{{ route('spj_cetak2', $i->id_spj) }}"
                                                class="btn btn-sm btn-success mb-2" target="blank"><i class="fas fa-print"
                                                    ></i>
                                                Cetak</a>

                                            <button type="button" class="btn btn-info" id="btnDetailSpj"
                                                data-id="{{ $i->id_spj }}" onclick="modalSpjStaff({{ $i->id_spj }})"><i class="fa fa-eye"></i> Detail</button>
                                            {{-- <form action="{{ route('spj_delete', $i->id_spj) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                            </form> --}}
                                        </td>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $i->no_sppd }}</td>
                                        <td>{{ $i->nama_lengkap }}</td>
                                        <td>{{ $i->nip }}</td>
                                        <td>{{ $i->tanggal_berangkat }}</td>
                                        <td>{{ $i->tanggal_kembali }}</td>
                                        <td>{{ $i->selama }} hari</td>
                                        <td>{{ $i->jenis_perjalanan }}</td>
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

    @include('halaman_admin.modal.spj_staff_modal')

    <script>
        function modalSpjStaff(id) {
            $("#modalSpjStaff").modal();
            $.ajax({
                    type: "GET",
                    url: "{{ route('get_spj_staff') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    dataType: "JSON",
                    success: function (response) {
                    let html = `
                        <table class="table table-bordered">
                            <tr>
                                <td>No SPPD</td>
                                <td>${response.no_sppd}</td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>${response.nama_lengkap}</td>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td>${response.nip}</td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>${response.jabatan}</td>
                            </tr>
                            <tr>
                                <td>Pangkat</td>
                                <td>${response.pangkat}</td>
                            </tr>
                            <tr>
                                <td>Golongan</td>
                                <td>${response.golongan}</td>
                            </tr>
                            <tr>
                                <td>Unit</td>
                                <td>${response.unit}</td>
                            </tr>
                            <tr>
                                <td>Tingkat Biaya</td>
                                <td>${response.tingkat_biaya}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Berangkat</td>
                                <td>${response.tanggal_berangkat}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Kembali</td>
                                <td>${response.tanggal_kembali}</td>
                            </tr>
                            <tr>
                                <td>Sewa Transport T.Tinggal ke Bandara/Terminal</td>
                                <td>${response.tinggal_to_bandara_terminal}</td>
                            </tr>
                            <tr>
                                <td>Sewa Transport Bandara/Terminal ke T.Tujuan</td>
                                <td>${response.bandara_terminal_to_tujuan}</td>
                            </tr>
                            <tr>
                                <td>Sewa Transport T.Tujuan ke Bandara/Terminal</td>
                                <td>${response.tujuan_bandara_terminal}</td>
                            </tr>
                            <tr>
                                <td>Sewa Transport Bandara/Terminal ke T.Tinggal</td>
                                <td>${response.bandara_terminal_tinggal}</td>
                            </tr>
                            <tr>
                                <td>Biaya Hotel 30%</td>
                                <td>${response.biaya_hotel}</td>
                            </tr>
                            <tr>
                                <td>Belanja BBM Kendaraan Dinas</td>
                                <td>${response.belanja_bbm}</td>
                            </tr>
                            <tr>
                                <td>Transport PP</td>
                                <td>${response.transport_pp}</td>
                            </tr>
                            <tr>
                                <td>Jasa Medical Check Up</td>
                                <td>${response.medical_checkup}</td>
                            </tr>
                            <tr>
                                <td>Uang Harian</td>
                                <td>${response.uang_harian}</td>
                            </tr>
                            <tr>
                                <td>Biaya Transportasi Darat</td>
                                <td>${response.biaya_transportasi_darat}</td>
                            </tr>
                            <tr>
                                <td>Biaya Tiket Pesawat</td>
                                <td>${response.biaya_tiket_pesawat}</td>
                            </tr>
                            <tr>
                                <td>Biaya Bahan Bakar</td>
                                <td>${response.biaya_bahan_bakar}</td>
                            </tr>
                            <tr>
                                <td>Biaya Penginapan</td>
                                <td>${response.biaya_penginapan}</td>
                            </tr>
                            <tr>
                                <td>Biaya Representase</td>
                                <td>${response.biaya_representase}</td>
                            </tr>
                            <tr>
                                <td>Daftar Pernyataan Riil</td>
                                <td>${response.daftar_pernyataan}</td>
                            </tr>
                            <tr>
                                <td>Kode Kegiatan</td>
                                <td>${response.kode_kegiatan}</td>
                            </tr>
                            <tr>
                                <td>Nilai Kegiatan</td>
                                <td>${response.nilai_kegiatan}</td>
                            </tr>
                            <tr>
                                <td>Sisa Nilai Kegiatan</td>
                                <td>${response.sisa_nilai_kegiatan}</td>
                            </tr>
                            <tr>
                                <td>Keperluan (Uraian)</td>
                                <td>${response.keperluan}</td>
                            </tr>
                            <tr>
                                <td>Daerah Tujuan</td>
                                <td>${response.daerah_tujuan}</td>
                            </tr>
                            <tr>
                                <td>Instansi Tujuan</td>
                                <td>${response.instansi_tujuan}</td>
                            </tr>

                            <tr>
                                <td>Keberangkatan - Nama Pesawat/KA/BUS/Kapal/Lainnya</td>
                                <td>${response.keberangkatan_nama_pesawat_ka_bus_kapal_lainnya}</td>
                            </tr>
                            <tr>
                                <td>Keberangkatan - Kode Booking</td>
                                <td>${response.keberangkatan_kode_booking}</td>
                            </tr>
                            <tr>
                                <td>Keberangkatan - Nomor Tiket</td>
                                <td>${response.keberangkatan_nomor_tiket}</td>
                            </tr>
                            <tr>
                                <td>Keberangkatan - Nomor Seat (T.duduk)</td>
                                <td>${response.keberangkatan_nomor_seat}</td>
                            </tr>
                            <tr>
                                <td>Keberangkatan - Nomor Flight</td>
                                <td>${response.keberangkatan_nomor_flight}</td>
                            </tr>

                            <tr>
                                <td>Kedatangan - Nama Pesawat/KA/BUS/Kapal/Lainnya</td>
                                <td>${response.kedatangan_nama_pesawat_ka_bus_kapal_lainnya}</td>
                            </tr>
                            <tr>
                                <td>Kedatangan - Kode Booking</td>
                                <td>${response.kedatangan_kode_booking}</td>
                            </tr>
                            <tr>
                                <td>Kedatangan - Nomor Tiket</td>
                                <td>${response.kedatangan_nomor_tiket}</td>
                            </tr>
                            <tr>
                                <td>Kedatangan - Nomor Seat (T.duduk)</td>
                                <td>${response.kedatangan_nomor_seat}</td>
                            </tr>
                            <tr>
                                <td>Kedatangan - Nomor Flight</td>
                                <td>${response.kedatangan_nomor_flight}</td>
                            </tr>

                            <tr>
                                <td>Nama HOTEL</td>
                                <td>${response.nama_hotel}</td>
                            </tr>
                            <tr>
                                <td>Nomor Kamar</td>
                                <td>${response.nomor_kamar}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Check In</td>
                                <td>${response.tgl_checkin}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Check Out</td>
                                <td>${response.tgl_checkout}</td>
                            </tr>
                            <tr>
                                <td>E-Mail</td>
                                <td>${response.email}</td>
                            </tr>
                            <tr>
                                <td>Telp HOTEL</td>
                                <td>${response.telp_hotel}</td>
                            </tr>
                            <tr>
                                <td>Alamat HOTEL</td>
                                <td>${response.alamat_hotel}</td>
                            </tr>
                            <tr>
                                <td>Dokumen Pendukung</td>
                                <td>
                                    <a href="/gambar/${response.dokumen_pendukung}" target="_blank">${response.dokumen_pendukung}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Keseluruhan</td>
                                <td>${response.jumlah_total}</td>
                            </tr>
                        </table>`
                    $("#tableSpjStaff").html(html)
                }
            });
        }
    </script>

@endsection
