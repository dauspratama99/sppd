@extends('tampilan.admin')

@section('title', 'Edit Data SPJ Staff')

@section('admin')

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="nav-icon fas fa-copy"></i> Edit SPJ Staff</h1>
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
            <form action="{{ route('proses_spj_edit', $edit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="" method="POST">
                                    <fieldset style="border: 1px solid #ccc; padding: 15px;">
                                        <legend style="font-size: 18px;">Daftar Pengeluaran Riil</legend>
                                        <div class="mb-3 row">
                                            <label for="no_sppd" class="col-sm-2 col-form-label">Nomor (SPPD)</label>
                                            <div class="col-sm-5">
                                                <select class="form-control" name="no_sppd" id="no_sppd" required>
                                                    <option value="">Pilih Nomor (SPPD)</option>
                                                    @php
                                                        $sppd = DB::table('detail_surat')->get();
                                                    @endphp
                                                    </option>
                                                    @foreach ($sppd as $t)
                                                        <option value="{{ $t->no_sppd }}">{{ $t->no_sppd }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('no_sppd')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                            <script>
                                                document.getElementsByName("no_sppd")[0].value = "{{ $edit->no_sppd }}"
                                            </script>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama</label>

                                            <div class="col-sm-5">
                                                <input type="text" name="nama_lengkap" value="{{ $edit->nama_lengkap }}"
                                                    id="nama_lengkap" class="form-control form-control-sm" required readonly>
                                            </div>
                                            @error('nama_lengkap')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="nip" class="col-sm-2 col-form-label">Nip</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="nip" id="nip" value="{{ $edit->nip }}"
                                                    class="form-control form-control-sm" required readonly>
                                            </div>
                                            @error('nip')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="jabatan" id="jabatan"
                                                    class="form-control form-control-sm" value="{{ $edit->jabatan }}"
                                                    required readonly>
                                            </div>
                                            @error('jabatan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="">Pangkat</label>
                                                    <input type="text" name="pangkat" id="pangkat"
                                                        class="form-control form-control-sm" value="{{ $edit->pangkat }}"
                                                        required readonly>
                                                    @error('pangkat')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="">Golongan</label>
                                                    <input type="text" name="golongan" id="golongan"
                                                        class="form-control form-control-sm"
                                                        value="{{ $edit->golongan }}" required readonly>
                                                    @error('golongan')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="unit" class="col-sm-2 col-form-label">Unit</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="unit" id="unit"
                                                    class="form-control form-control-sm" value="{{ $edit->unit }}"
                                                    required readonly>
                                            </div>
                                            @error('unit')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tingkat_biaya" class="col-sm-2 col-form-label">Tingkat Biaya</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="tingkat_biaya"
                                                    value="{{ $edit->tingkat_biaya }}" id="tingkat_biaya"
                                                    class="form-control form-control-sm" required readonly>
                                            </div>
                                            @error('tingkat_biaya')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tanggal_berangkat" class="col-sm-2 col-form-label">Tgl
                                                Berangkat</label>
                                            <div class="col-sm-5">
                                                <input type="date" name="tanggal_berangkat"
                                                    value="{{ $edit->tanggal_berangkat }}" id="tanggal_berangkat"
                                                    class="form-control form-control-sm" required readonly>
                                            </div>
                                            @error('tanggal_berangkat')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tanggal_kembali" class="col-sm-2 col-form-label">Tgl Kembali</label>
                                            <div class="col-sm-5">
                                                <input type="date" name="tanggal_kembali"
                                                    value="{{ $edit->tanggal_kembali }}" id="tanggal_kembali"
                                                    class="form-control form-control-sm" required readonly>
                                            </div>
                                            @error('tanggal_kembali')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="selama" class="col-sm-2 col-form-label">Selama</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="selama" value="{{ $edit->selama }}" id="selama"
                                                    class="form-control form-control-sm" required readonly>
                                            </div>
                                            @error('selama')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <fieldset style="border: 1px solid #ccc; padding: 15px;">
                                            <legend style="font-size: 18px;">Biaya Transportasi</legend>
                                            <div class="col-sm-12">
                                                <div class="mb-3 row">
                                                    <label for="tinggalToBandaraTerminal" class="col-sm-5 col-form-label">1.
                                                        Sewa Transport T.Tinggal Ke Bandara / Terminal</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="tinggal_to_bandara_terminal"
                                                            id="tinggalToBandaraTerminal"
                                                            class="form-control form-control-sm"
                                                            value="{{ $edit->tinggal_to_bandara_terminal }}" required>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <button type="button" class="btn btn-dark btn-sm"
                                                            id="btnTransportTinggalBandaraTerminal">...</button>
                                                    </div>
                                                    @error('tinggal_to_bandara_terminal')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="bandaraTerminalToTujuan" class="col-sm-5 col-form-label">2.
                                                        Sewa Transport Bandara / Terminal Ke T.Tujuan</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="bandara_terminal_to_tujuan"
                                                            id="bandaraTerminalToTujuan"
                                                            class="form-control form-control-sm"
                                                            value="{{ $edit->bandara_terminal_to_tujuan }}" required>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <button type="button" class="btn btn-dark btn-sm"
                                                            id="btnTransportBandaraTerminalTujuan">...</button>
                                                    </div>
                                                    @error('bandara_terminal_to_tujuan')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="tujuanBandaraTerminal" class="col-sm-5 col-form-label">3.
                                                        Sewa Transport Bandara / Terminal Ke T.Tujuan</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="tujuan_bandara_terminal"
                                                            id="tujuanBandaraTerminal"
                                                            value="{{ $edit->tujuan_bandara_terminal }}"
                                                            class="form-control form-control-sm" required>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <button type="button" class="btn btn-dark btn-sm"
                                                            id="btnTransportTujuanBandaraTerminal">...</button>
                                                    </div>
                                                    @error('tujuan_bandara_terminal')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="bandaraTerminaltinggal" class="col-sm-5 col-form-label">4.
                                                        Sewa Transport Bandara / Terminal Ke T.Tinggal </label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="bandara_terminal_tinggal"
                                                            id="bandaraTerminaltinggal"
                                                            value="{{ $edit->bandara_terminal_tinggal }}"
                                                            class="form-control form-control-sm" required>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <button type="button" class="btn btn-dark btn-sm"
                                                            id="btnTransportBandaraTerminalTinggal">...</button>
                                                    </div>
                                                    @error('bandara_terminal_tinggal')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="biayaHotel" class="col-sm-5 col-form-label">5. Biaya Hotel
                                                        30% </label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="biaya_hotel"
                                                            value="{{ $edit->biaya_hotel }}" id="biayaHotel"
                                                            class="form-control form-control-sm" required>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <button type="button" class="btn btn-dark btn-sm"
                                                            id="btnBiayaHotel">...</button>
                                                    </div>
                                                    @error('biaya_hotel')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="belanjaBBM" class="col-sm-5 col-form-label">6. Belanja BBM
                                                        Kend. Dinas </label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="belanja_bbm" id="belanjaBBM"
                                                            class="form-control form-control-sm"
                                                            value="{{ $edit->belanja_bbm }}">
                                                    </div>
                                                    @error('belanja_bbm')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="transportPP" class="col-sm-5 col-form-label">7. Transport PP
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="transport_pp" id="transportPP"
                                                            class="form-control form-control-sm"
                                                            value="{{ $edit->transport_pp }}" required>
                                                    </div>
                                                    @error('transport_pp')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="medicalCheckup" class="col-sm-5 col-form-label">8. Jasa
                                                        Medical Checkup </label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="medical_checkup" id="medicalCheckup"
                                                            class="form-control form-control-sm"
                                                            value="{{ $edit->medical_checkup }}" required>
                                                    </div>
                                                    @error('medical_checkup')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <input type="hidden" name="total_riil" value="{{ $edit->total_riil }}"
                                                    id="inputanTotalRiil">
                                                <div style="font-size: 20px;">Total : Rp. <span id="totalRiil"></span></div>
                                            </div>
                                        </fieldset>

                                    </fieldset>
                                    <fieldset style="border: 1px solid #ccc; padding: 15px;">
                                        <legend style="font-size: 18px;">Rincian Biaya Perjalanan Dinas</legend>
                                        <div class="mb-3 row">
                                            <label for="uangHarian" class="col-sm-3 col-form-label">1. Uang Harian </label>
                                            <div class="col-sm-2">
                                                <input type="text" name="uang_harian" id="uangHarian"
                                                    class="form-control form-control-sm" value="{{ $edit->uang_harian }}"
                                                    required>
                                            </div>
                                            <div class="col-sm-1">
                                                <button type="button" class="btn btn-dark btn-sm"
                                                    id="btnUangHarian">...</button>
                                            </div>
                                            @error('uang_harian')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="biayaTransportasiDarat" class="col-sm-3 col-form-label">2. Biaya
                                                Transportasi Darat </label>
                                            <div class="col-sm-2">
                                                <input type="text" name="biaya_transportasi_darat"
                                                    id="biayaTransportasiDarat"
                                                    value="{{ $edit->biaya_transportasi_darat }}"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('biaya_transportasi_darat')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="biayaTiketPesawat" class="col-sm-3 col-form-label">3. Biaya
                                                Transportasi Pesawat </label>
                                            <div class="col-sm-2">
                                                <input type="text" name="biaya_tiket_pesawat" id="biayaTiketPesawat"
                                                    class="form-control form-control-sm"
                                                    value="{{ $edit->biaya_tiket_pesawat }}" required>
                                            </div>
                                            @error('biaya_tiket_pesawat')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="biayaBahanBakar" class="col-sm-3 col-form-label">4. Biaya Bahan
                                                Bakar </label>
                                            <div class="col-sm-2">
                                                <input type="text" name="biaya_bahan_bakar"
                                                    value="{{ $edit->biaya_bahan_bakar }}" id="biayaBahanBakar"
                                                    class="form-control form-control-sm">
                                            </div>
                                            @error('biaya_bahan_bakar')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="biayaPenginapan" class="col-sm-3 col-form-label">5. Biaya Penginapan
                                            </label>
                                            <div class="col-sm-2">
                                                <input type="text" name="biaya_penginapan" id="biayaPenginapan"
                                                    class="form-control form-control-sm"
                                                    value="{{ $edit->biaya_penginapan }}" required>
                                            </div>
                                            <div class="col-sm-1">
                                                <button type="button" class="btn btn-dark btn-sm"
                                                    id="btnBiayaPenginapan">...</button>
                                            </div>
                                            @error('biaya_penginapan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="biayaRepresentase" class="col-sm-3 col-form-label">6. Biaya
                                                Representase</label>
                                            <div class="col-sm-2">
                                                <input type="text" name="biaya_representase" id="biayaRepresentase"
                                                    class="form-control form-control-sm"
                                                    value="{{ $edit->biaya_representase }}" required>
                                            </div>
                                            <div class="col-sm-1">
                                                <button type="button" class="btn btn-dark btn-sm"
                                                    id="btnBiayaRepresentase">...</button>
                                            </div>
                                            @error('biaya_representase')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="daftarPernyataan" class="col-sm-3 col-form-label">7. Daftar
                                                Pernyataan RIIL </label>
                                            <div class="col-sm-2">
                                                <input type="text" name="daftar_pernyataan"
                                                    value="{{ $edit->daftar_pernyataan }}" id="daftarPernyataan"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('daftar_pernyataan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="hidden" name="total_perjalanan_dinas"
                                                value="{{ $edit->total_perjalanan_dinas }}" id="inputanPerjalananDinas">
                                            <div style="font-size: 20px;">Total : Rp. <span
                                                    id="totalPerjalananDinas"></span></div>
                                        </div>
                                    </fieldset>
                                    <fieldset style="border: 1px solid #ccc; padding: 15px;">
                                        <legend style="font-size: 18px;">Kwitansi</legend>
                                        <div class="mb-3 row">
                                            <label for="kodeKegiatan" class="col-sm-2 col-form-label">Kode Kegiatan</label>

                                            <div class="col-sm-3">
                                                <select class="form-control" name="kode_kegiatan" id="pilihKodeKegiatan"
                                                    required disabled>
                                                    <option value="">Pilih Kode Kegiatan</option>
                                                    @php
                                                        $kegiatan = DB::table('program_kerja')->get();
                                                    @endphp
                                                    @foreach ($kegiatan as $item)
                                                        <option value="{{ $item->kode_kegiatan }}">
                                                            {{ $item->kode_kegiatan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('kode_kegiatan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <script>
                                                document.getElementsByName("kode_kegiatan")[0].value = "{{ $edit->kode_kegiatan }}"
                                            </script>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="nilaiKegiatan" class="col-sm-2 col-form-label">Nilai
                                                Kegiatan</label>

                                            <div class="col-sm-3">
                                                <input type="text" name="nilai_kegiatan" id="nilaiKegiatan"
                                                    class="form-control form-control-sm"
                                                    value="{{ $edit->nilai_kegiatan }}" required readonly>
                                            </div>
                                            @error('nilai_kegiatan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="sisaNilaiKegiatan" class="col-sm-2 col-form-label">Sisa Nilai
                                                Kegiatan</label>

                                            <div class="col-sm-3">
                                                <input type="text" name="sisa_nilai_kegiatan" id="sisaNilaiKegiatan"
                                                    class="form-control form-control-sm"
                                                    value="{{ $edit->sisa_nilai_kegiatan }}" required readonly>
                                            </div>
                                            @error('sisa_nilai_kegiatan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="keperluan" class="col-sm-2 col-form-label">Keperluan
                                                (Uraian)</label>

                                            <div class="col-sm-3">
                                                <textarea name="keperluan" id="keperluan" cols="30" rows="3"
                                                    class="form-control" required readonly>{{ $edit->keperluan }}</textarea>
                                            </div>
                                            @error('keperluan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </fieldset>
                                    <fieldset style="border: 1px solid #ccc; padding: 15px;">
                                        <legend style="font-size: 18px;">Rincian Perjalanan Dinas</legend>
                                        <div class="mb-3 row">
                                            <label for="daerahTujuan" class="col-sm-2 col-form-label">Daerah Tujuan</label>

                                            <div class="col-sm-3">
                                                <input type="text" name="daerah_tujuan"
                                                    value="{{ $edit->daerah_tujuan }}" id="daerahTujuan"
                                                    class="form-control" required>
                                            </div>
                                            @error('daerah_tujuan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="instansiTujuan" class="col-sm-2 col-form-label">Instansi
                                                Tujuan</label>

                                            <div class="col-sm-3">
                                                <input type="text" name="instansi_tujuan" id="instansiTujuan"
                                                    class="form-control form-control-sm"
                                                    value="{{ $edit->instansi_tujuan }}" required>
                                            </div>
                                            @error('instansi_tujuan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <fieldset style="border: 1px solid #ccc; padding: 15px;">
                                            <legend style="font-size: 18px;">Keberangkatan</legend>
                                            <div class="mb-3 row ml-3">
                                                <label for="keberangkatan_namaPesawatKaBusKapalLainnya"
                                                    class="col-sm-2 col-form-label">Nama
                                                    Pesawat/KA/BUS/Kapal/Lainnya</label>

                                                <div class="col-sm-3">
                                                    <input type="text"
                                                        name="keberangkatan_nama_pesawat_ka_bus_kapal_lainnya"
                                                        id="keberangkatan_namaPesawatKaBusKapalLainnya"
                                                        class="form-control form-control-sm"
                                                        value="{{ $edit->keberangkatan_nama_pesawat_ka_bus_kapal_lainnya }}"
                                                        required>
                                                </div>
                                                @error('keberangkatan_nama_pesawat_ka_bus_kapal_lainnya')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 row ml-3">
                                                <label for="keberangkatan_kodeBooking" class="col-sm-2 col-form-label">Kode
                                                    Booking</label>

                                                <div class="col-sm-3">
                                                    <input type="text" name="keberangkatan_kode_booking"
                                                        id="keberangkatan_kodeBooking"
                                                        value="{{ $edit->keberangkatan_kode_booking }}"
                                                        class="form-control" required>
                                                </div>
                                                @error('keberangkatan_kode_booking')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 row ml-3">
                                                <label for="keberangkatan_nomorTiket" class="col-sm-2 col-form-label">Nomor
                                                    Tiket</label>

                                                <div class="col-sm-3">
                                                    <input type="text" name="keberangkatan_nomor_tiket"
                                                        id="keberangkatan_nomorTiket"
                                                        value="{{ $edit->keberangkatan_nomor_tiket }}"
                                                        class="form-control" required>
                                                </div>
                                                @error('keberangkatan_nomor_tiket')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 row ml-3">
                                                <label for="keberangkatan_nomorSeat" class="col-sm-2 col-form-label">Nomor
                                                    Seat (T.duduk)</label>

                                                <div class="col-sm-3">
                                                    <input type="text" name="keberangkatan_nomor_seat"
                                                        id="keberangkatan_nomorSeat"
                                                        value="{{ $edit->keberangkatan_nomor_seat }}"
                                                        class="form-control" required>
                                                </div>
                                                @error('keberangkatan_nomor_seat')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 row ml-3">
                                                <label for="keberangkatan_nomorFlight" class="col-sm-2 col-form-label">Nomor
                                                    Flight</label>

                                                <div class="col-sm-3">
                                                    <input type="text" name="keberangkatan_nomor_flight"
                                                        id="keberangkatan_nomorFlight"
                                                        value="{{ $edit->keberangkatan_nomor_flight }}"
                                                        class="form-control" required>
                                                </div>
                                                @error('keberangkatan_nomor_flight')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </fieldset>
                                        <fieldset style="border: 1px solid #ccc; padding: 15px;">
                                            <legend style="font-size: 18px;">Kedatangan</legend>
                                            <div class="mb-3 row ml-3">
                                                <label for="kedatangan_namaPesawatKaBusKapalLainnya"
                                                    class="col-sm-2 col-form-label">Nama
                                                    Pesawat/KA/BUS/Kapal/Lainnya</label>

                                                <div class="col-sm-3">
                                                    <input type="text" name="kedatangan_nama_pesawat_ka_bus_kapal_lainnya"
                                                        id="kedatangan_namaPesawatKaBusKapalLainnya"
                                                        class="form-control form-control-sm"
                                                        value="{{ $edit->kedatangan_nama_pesawat_ka_bus_kapal_lainnya }}"
                                                        required>
                                                </div>
                                                @error('kedatangan_nama_pesawat_ka_bus_kapal_lainnya')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 row ml-3">
                                                <label for="kedatangan_kodeBooking" class="col-sm-2 col-form-label">Kode
                                                    Booking</label>

                                                <div class="col-sm-3">
                                                    <input type="text" name="kedatangan_kode_booking"
                                                        id="kedatangan_kodeBooking"
                                                        value="{{ $edit->kedatangan_kode_booking }}" class="form-control"
                                                        required>
                                                </div>
                                                @error('kedatangan_kode_booking')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 row ml-3">
                                                <label for="kedatangan_nomorTiket" class="col-sm-2 col-form-label">Nomor
                                                    Tiket</label>

                                                <div class="col-sm-3">
                                                    <input type="text" name="kedatangan_nomor_tiket"
                                                        id="kedatangan_nomorTiket"
                                                        value="{{ $edit->kedatangan_nomor_tiket }}" class="form-control"
                                                        required>
                                                </div>
                                                @error('kedatangan_nomor_tiket')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 row ml-3">
                                                <label for="kedatangan_nomorSeat" class="col-sm-2 col-form-label">Nomor Seat
                                                    (T.duduk)</label>

                                                <div class="col-sm-3">
                                                    <input type="text" name="kedatangan_nomor_seat"
                                                        id="kedatangan_nomorSeat"
                                                        value="{{ $edit->kedatangan_nomor_seat }}" class="form-control"
                                                        required>
                                                </div>
                                                @error('kedatangan_nomor_seat')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 row ml-3">
                                                <label for="kedatangan_nomorFlight" class="col-sm-2 col-form-label">Nomor
                                                    Flight</label>

                                                <div class="col-sm-3">
                                                    <input type="text" name="kedatangan_nomor_flight"
                                                        id="kedatangan_nomorFlight"
                                                        value="{{ $edit->kedatangan_nomor_flight }}" class="form-control"
                                                        required>
                                                </div>
                                                @error('kedatangan_nomor_flight')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </fieldset>
                                    </fieldset>

                                    <fieldset style="border: 1px solid #ccc; padding: 15px;">
                                        <legend style="font-size: 18px;">Data Hotel</legend>
                                        <div class="mb-3 row">
                                            <label for="namaHotel" class="col-sm-2 col-form-label">Nama Hotel</label>

                                            <div class="col-sm-3">
                                                <input type="text" name="nama_hotel" value="{{ $edit->nama_hotel }}"
                                                    id="namaHotel" class="form-control" required>
                                            </div>
                                            @error('nama_hotel')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="nomorKamar" class="col-sm-2 col-form-label">Nomor Kamar</label>

                                            <div class="col-sm-3">
                                                <input type="text" name="nomor_kamar" id="nomorKamar"
                                                    class="form-control form-control-sm" value="{{ $edit->nomor_kamar }}"
                                                    required>
                                            </div>
                                            @error('nomor_kamar')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tglCheckin" class="col-sm-2 col-form-label">Tanggal Checkin</label>

                                            <div class="col-sm-3">
                                                <input type="date" name="tgl_checkin" id="tglCheckin"
                                                    class="form-control form-control-sm" value="{{ $edit->tgl_checkin }}"
                                                    required>
                                            </div>
                                            @error('tgl_checkin')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tglCheckout" class="col-sm-2 col-form-label">Tanggal
                                                Checkout</label>

                                            <div class="col-sm-3">
                                                <input type="date" name="tgl_checkout" id="tglCheckout"
                                                    class="form-control form-control-sm"
                                                    value="{{ $edit->tgl_checkout }}" required>
                                            </div>
                                            @error('tgl_checkout')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="email" class="col-sm-2 col-form-label">Email</label>

                                            <div class="col-sm-3">
                                                <input type="text" name="email" id="email"
                                                    class="form-control form-control-sm" value="{{ $edit->email }}"
                                                    required>
                                            </div>
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="telpHotel" class="col-sm-2 col-form-label">Telp Hotel</label>

                                            <div class="col-sm-3">
                                                <input type="text" name="telp_hotel" id="telpHotel"
                                                    class="form-control form-control-sm" value="{{ $edit->telp_hotel }}"
                                                    required>
                                            </div>
                                            @error('telp_hotel')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="alamatHotel" class="col-sm-2 col-form-label">Alamat Hotel</label>

                                            <div class="col-sm-3">
                                                <textarea name="alamat_hotel" id="alamatHotel" cols="30" rows="3"
                                                    class="form-control" required> {{ $edit->alamat_hotel }} </textarea>
                                            </div>
                                            @error('alamat_hotel')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </fieldset>
                                    <fieldset style="border: 1px solid #ccc; padding: 15px;">
                                        <legend style="font-size: 18px;"><u>Lampiran Kwitansi</legend>
                                        <div class="mb-3 row">
                                            <label for="dokumenPendukung" class="col-sm-2 col-form-label">Dokumen
                                                Pendukung</label>

                                            <div class="col-sm-3">
                                                <input type="file" name="dokumen_pendukung"
                                                    value="{{ $edit->dokumen_pendukung }}" id="dokumenPendukung"
                                                    required>
                                            </div>
                                            @error('dokumen_pendukung')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
                        <a href="{{ route('kelola_spj') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>

    @include('halaman_admin.modal.transport_tinggal_bandara_terminal_modal')
    @include('halaman_admin.modal.transport_bandara_terminal_tujuan_modal')
    @include('halaman_admin.modal.transport_tujuan_bandara_terminal_modal')
    @include('halaman_admin.modal.transport_bandara_terminal_tinggal_modal')
    @include('halaman_admin.modal.biaya_hotel_staff_modal')
    @include('halaman_admin.modal.biaya_penginapan_modal')
    @include('halaman_admin.modal.uang_harian_modal')
    @include('halaman_admin.modal.biaya_representase_modal')

    <script>
        $(document).ready(function() {
            // Transportasi Tempat Tinggal To Bandara / Terminal
            $("#btnTransportTinggalBandaraTerminal").click(function() {
                $("#modalTransportTinggalBandaraTerminal").modal();
            });

            $("#table_content tbody").dblclick(function(e) {
                e = e || window.event;
                var data = [];
                var target = e.srcElement || e.target;

                while (target && target.nodeName !== "TR") {
                    target = target.parentNode;
                }
                if (target) {
                    var cells = target.getElementsByTagName("td");
                    for (var i = 0; i < cells.length; i++) {
                        data.push(cells[i].innerHTML);
                    }
                }
                let harga = data[2]

                $("#tinggalToBandaraTerminal").val(harga);
                $("#modalTransportTinggalBandaraTerminal").modal('hide');
            })

            $("#table_content_terminal tbody").dblclick(function(e) {
                e = e || window.event;
                var data = [];
                var target = e.srcElement || e.target;

                while (target && target.nodeName !== "TR") {
                    target = target.parentNode;
                }
                if (target) {
                    var cells = target.getElementsByTagName("td");
                    for (var i = 0; i < cells.length; i++) {
                        data.push(cells[i].innerHTML);
                    }
                }
                let harga = data[2]

                $("#tinggalToBandaraTerminal").val(harga);
                $("#modalTransportTinggalBandaraTerminal").modal('hide');
            })

            // Transportasi Bandara / Terminal To Tujuan
            $("#btnTransportBandaraTerminalTujuan").click(function() {
                $("#modalTransportBandaraTerminalTujuan").modal();
            });

            $("#table_content2 tbody").dblclick(function(e) {
                e = e || window.event;
                var data = [];
                var target = e.srcElement || e.target;

                while (target && target.nodeName !== "TR") {
                    target = target.parentNode;
                }
                if (target) {
                    var cells = target.getElementsByTagName("td");
                    for (var i = 0; i < cells.length; i++) {
                        data.push(cells[i].innerHTML);
                    }
                }
                let harga = data[2]

                $("#bandaraTerminalToTujuan").val(harga);
                $("#modalTransportBandaraTerminalTujuan").modal('hide');
            })

            $("#table_content_terminal2 tbody").dblclick(function(e) {
                e = e || window.event;
                var data = [];
                var target = e.srcElement || e.target;

                while (target && target.nodeName !== "TR") {
                    target = target.parentNode;
                }
                if (target) {
                    var cells = target.getElementsByTagName("td");
                    for (var i = 0; i < cells.length; i++) {
                        data.push(cells[i].innerHTML);
                    }
                }
                let harga = data[2]

                $("#bandaraTerminalToTujuan").val(harga);
                $("#modalTransportBandaraTerminalTujuan").modal('hide');
            })

            // Transportasi Tujuan to Bandara / Terminal
            $("#btnTransportTujuanBandaraTerminal").click(function() {
                $("#modalTransportTujuanBandaraTerminal").modal();
            });

            $("#table_content3 tbody").dblclick(function(e) {
                e = e || window.event;
                var data = [];
                var target = e.srcElement || e.target;

                while (target && target.nodeName !== "TR") {
                    target = target.parentNode;
                }
                if (target) {
                    var cells = target.getElementsByTagName("td");
                    for (var i = 0; i < cells.length; i++) {
                        data.push(cells[i].innerHTML);
                    }
                }
                let harga = data[2]

                $("#tujuanBandaraTerminal").val(harga);
                $("#modalTransportTujuanBandaraTerminal").modal('hide');
            })

            $("#table_content_terminal3 tbody").dblclick(function(e) {
                e = e || window.event;
                var data = [];
                var target = e.srcElement || e.target;

                while (target && target.nodeName !== "TR") {
                    target = target.parentNode;
                }
                if (target) {
                    var cells = target.getElementsByTagName("td");
                    for (var i = 0; i < cells.length; i++) {
                        data.push(cells[i].innerHTML);
                    }
                }
                let harga = data[2]

                $("#tujuanBandaraTerminal").val(harga);
                $("#modalTransportTujuanBandaraTerminal").modal('hide');
            })

            // Transportasi Bandara/Terminal to Tempat Tinggal
            $("#btnTransportBandaraTerminalTinggal").click(function() {
                $("#modalTransportBandaraTerminalTinggal").modal();
            });

            $("#table_content4 tbody").dblclick(function(e) {
                e = e || window.event;
                var data = [];
                var target = e.srcElement || e.target;

                while (target && target.nodeName !== "TR") {
                    target = target.parentNode;
                }
                if (target) {
                    var cells = target.getElementsByTagName("td");
                    for (var i = 0; i < cells.length; i++) {
                        data.push(cells[i].innerHTML);
                    }
                }
                let harga = data[2]

                $("#bandaraTerminaltinggal").val(harga);
                $("#modalTransportBandaraTerminalTinggal").modal('hide');
            })

            $("#table_content_terminal4 tbody").dblclick(function(e) {
                e = e || window.event;
                var data = [];
                var target = e.srcElement || e.target;

                while (target && target.nodeName !== "TR") {
                    target = target.parentNode;
                }
                if (target) {
                    var cells = target.getElementsByTagName("td");
                    for (var i = 0; i < cells.length; i++) {
                        data.push(cells[i].innerHTML);
                    }
                }
                let harga = data[2]

                $("#bandaraTerminaltinggal").val(harga);
                $("#modalTransportBandaraTerminalTinggal").modal('hide');
            })

            $("#btnBiayaHotel").click(function() {
                $("#modalBiayaHotelStaff").modal();
            });

            $("#kategori").change(function() {
                let kategori = this.value
                $.ajax({
                    type: "POST",
                    url: "{{ route('get_biaya') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "kategori": kategori
                    },
                    dataType: "JSON",
                    success: function(response) {
                        let biayahotel = response;
                        let data = JSON.parse(JSON.stringify(biayahotel))
                        let table_a = "";
                        let table_b = "";
                        let table_c = "";
                        let table_d = "";
                        let table_e = "";
                        let table_f = "";
                        data.forEach(item => {
                            table_a += `<tr class="d-flex w-100">
                                                <td class="w-50">${item.provinsi }</td>
                                                <td class="w-50">${item.tarif_a }</td>
                                            </tr>`

                            table_b += `<tr class="d-flex w-100">
                                            <td class="w-50">${item.provinsi }</td>
                                            <td class="w-50">${item.tarif_b }</td>
                                        </tr>`

                            table_c += `<tr class="d-flex w-100">
                                <td class="w-50">${item.provinsi }</td>
                                <td class="w-50">${item.tarif_c }</td>
                            </tr>`

                            table_d += `<tr class="d-flex w-100">
                                <td class="w-50">${item.provinsi }</td>
                                <td class="w-50">${item.tarif_d }</td>
                            </tr>`

                            table_d += `<tr class="d-flex w-100">
                                <td class="w-50">${item.provinsi }</td>
                                <td class="w-50">${item.tarif_d }</td>
                            </tr>`

                            table_e += `<tr class="d-flex w-100">
                                <td class="w-50">${item.provinsi }</td>
                                <td class="w-50">${item.tarif_e }</td>
                            </tr>`

                            table_f += `<tr class="d-flex w-100">
                                <td class="w-50">${item.provinsi }</td>
                                <td class="w-50">${item.tarif_f }</td>
                            </tr>`
                        });

                        let html = `
                        <div class="row">
                            <div class="col-sm-2">
                                <div style="min-height: 100px;">
                                <small>Tingkat Perjalanan A <br>
                                Gubernur / Wkl. Gubernur,<br>
                                Pimp. DPRD dan Eselon 1</small></div>
                                <div class="table-responsive" style="display:block; width: 180px; height: 300px;">
                                    <table class="table table-bordered overflow-auto" id="table_content_a" style="font-size: 14px;">
                                        <thead class="d-block w-100">
                                            <tr class="d-flex w-100">
                                                <th class="w-50">PROVINSI</th>
                                                <th class="w-50">BIAYA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="w-100 d-block">
                                        ${table_a}
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div style="min-height: 100px;">
                                <small>
                                Tingkat Perjalanan B <br>
                                Pejabat Eselon II, Anggota DPRD<br>
                                Fungsional IV/c dan Tenaga Ahli</small></div>
                                <div class="table-responsive" style="display:block; width: 180px; height: 300px;">
                                    <table class="table table-bordered overflow-auto" id="table_content_b" style="font-size: 14px;">
                                        <thead class="d-block w-100">
                                            <tr class="d-flex w-100">
                                                <th class="w-50">PROVINSI</th>
                                                <th class="w-50">BIAYA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="w-100 d-block">
                                        ${table_b}
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div style="min-height: 100px;">
                                <small>
                                Tingkat Perjalanan C <br>
                                Pejabat Eselon III,<br>
                                Fungsional Gol.IV/a dan IV/b</small></div>
                                <div class="table-responsive" style="display:block; width: 180px; height: 300px;">
                                    <table class="table table-bordered overflow-auto" id="table_content_c" style="font-size: 14px;">
                                        <thead class="d-block w-100">
                                            <tr class="d-flex w-100">
                                                <th class="w-50">PROVINSI</th>
                                                <th class="w-50">BIAYA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="w-100 d-block">
                                        ${table_c}
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div style="min-height: 100px;">
                                <small>
                                Tingkat Perjalanan D <br>
                                Pejabat Eselon IV,<br>
                                Fungsional Gol.III/c dan III/d
                                </small></div>
                                <div class="table-responsive" style="display:block; width: 180px; height: 300px;">
                                    <table class="table table-bordered overflow-auto" id="table_content_d" style="font-size: 14px;">
                                        <thead class="d-block w-100">
                                            <tr class="d-flex w-100">
                                                <th class="w-50">PROVINSI</th>
                                                <th class="w-50">BIAYA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="w-100 d-block">
                                        ${ table_d }
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div  style="min-height: 100px;">
                                <small>
                                Tingkat Perjalanan E <br>
                                Non Eselon Gol IV, III dan<br>
                                Fungsional trampil Gol.III/b dan III/b</small></div>
                                <div class="table-responsive" style="display:block; width: 180px; height: 300px;">
                                    <table class="table table-bordered overflow-auto" id="table_content_e" style="font-size: 14px;">
                                        <thead class="d-block w-100">
                                            <tr class="d-flex w-100">
                                                <th class="w-50">PROVINSI</th>
                                                <th class="w-50">BIAYA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="w-100 d-block">
                                        ${table_e}
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div  style="min-height: 100px;">
                                <small>
                                Tingkat Perjalanan F <br>
                                Non Eselon Gol II, I PTT dan<br>
                                Non PNS yang disetarakan</small></div>
                                <div class="table-responsive" style="display:block; width: 180px; height: 300px;">
                                    <table class="table table-bordered overflow-auto" id="table_content_f" style="font-size: 14px;">
                                        <thead class="d-block w-100">
                                            <tr class="d-flex w-100">
                                                <th class="w-50">PROVINSI</th>
                                                <th class="w-50">BIAYA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="w-100 d-block">
                                            ${table_f}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>`;
                        $("#tableHotel").html(html);

                        tingkatan_a()
                        tingkatan_b()
                        tingkatan_c()
                        tingkatan_d()
                        tingkatan_e()
                        tingkatan_f()

                    }
                });
            })

            function tingkatan_a() {
                $("#table_content_a tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[1]

                    $("#biayaHotel").val(harga);
                    $("#modalBiayaHotelStaff").modal('hide');
                })
            }

            function tingkatan_b() {
                $("#table_content_b tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[1]

                    $("#biayaHotel").val(harga);
                    $("#modalBiayaHotelStaff").modal('hide');
                })
            }

            function tingkatan_c() {
                $("#table_content_c tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[1]

                    $("#biayaHotel").val(harga);
                    $("#modalBiayaHotelStaff").modal('hide');
                })
            }

            function tingkatan_d() {
                $("#table_content_d tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[1]

                    $("#biayaHotel").val(harga);
                    $("#modalBiayaHotelStaff").modal('hide');
                })
            }

            function tingkatan_e() {
                $("#table_content_e tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[1]

                    $("#biayaHotel").val(harga);
                    $("#modalBiayaHotelStaff").modal('hide');
                })
            }

            function tingkatan_f() {
                $("#table_content_f tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[1]

                    $("#biayaHotel").val(harga);
                    $("#modalBiayaHotelStaff").modal('hide');
                })
            }

            $("#btnUangHarian").click(function() {
                $("#modalUangHarian").modal();
            });

            $("#table_uang_harian_luar tbody").dblclick(function(e) {
                e = e || window.event;
                var data = [];
                var target = e.srcElement || e.target;

                while (target && target.nodeName !== "TR") {
                    target = target.parentNode;
                }
                if (target) {
                    var cells = target.getElementsByTagName("td");
                    for (var i = 0; i < cells.length; i++) {
                        data.push(cells[i].innerHTML);
                    }
                }
                let harga = data[1]

                $("#uangHarian").val(harga);
                $("#modalUangHarian").modal('hide');
            })

            $("#table_uang_harian_dalam tbody").dblclick(function(e) {
                e = e || window.event;
                var data = [];
                var target = e.srcElement || e.target;

                while (target && target.nodeName !== "TR") {
                    target = target.parentNode;
                }
                if (target) {
                    var cells = target.getElementsByTagName("td");
                    for (var i = 0; i < cells.length; i++) {
                        data.push(cells[i].innerHTML);
                    }
                }
                let harga = data[1]

                $("#uangHarian").val(harga);
                $("#modalUangHarian").modal('hide');
            })

            $("#btnBiayaPenginapan").click(function() {
                $("#modalBiayaPenginapan").modal();
            });

            $("#kategoriPenginapan").change(function() {
                let kategori = this.value
                $.ajax({
                    type: "POST",
                    url: "{{ route('get_biaya') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "kategori": kategori
                    },
                    dataType: "JSON",
                    success: function(response) {
                        let biayahotel = response;
                        let data = JSON.parse(JSON.stringify(biayahotel))
                        let table_a = "";
                        let table_b = "";
                        let table_c = "";
                        let table_d = "";
                        let table_e = "";
                        let table_f = "";
                        data.forEach(item => {
                            table_a += `<tr class="d-flex w-100">
                                                <td class="w-50">${item.provinsi }</td>
                                                <td class="w-50">${item.tarif_a }</td>
                                            </tr>`

                            table_b += `<tr class="d-flex w-100">
                                            <td class="w-50">${item.provinsi }</td>
                                            <td class="w-50">${item.tarif_b }</td>
                                        </tr>`

                            table_c += `<tr class="d-flex w-100">
                                <td class="w-50">${item.provinsi }</td>
                                <td class="w-50">${item.tarif_c }</td>
                            </tr>`

                            table_d += `<tr class="d-flex w-100">
                                <td class="w-50">${item.provinsi }</td>
                                <td class="w-50">${item.tarif_d }</td>
                            </tr>`

                            table_d += `<tr class="d-flex w-100">
                                <td class="w-50">${item.provinsi }</td>
                                <td class="w-50">${item.tarif_d }</td>
                            </tr>`

                            table_e += `<tr class="d-flex w-100">
                                <td class="w-50">${item.provinsi }</td>
                                <td class="w-50">${item.tarif_e }</td>
                            </tr>`

                            table_f += `<tr class="d-flex w-100">
                                <td class="w-50">${item.provinsi }</td>
                                <td class="w-50">${item.tarif_f }</td>
                            </tr>`
                        });

                        let html = `
                        <div class="row">
                            <div class="col-sm-2">
                                <div style="min-height: 100px;">
                                <small>Tingkat Perjalanan A <br>
                                Gubernur / Wkl. Gubernur,<br>
                                Pimp. DPRD dan Eselon 1</small></div>
                                <div class="table-responsive" style="display:block; width: 180px; height: 300px;">
                                    <table class="table table-bordered overflow-auto" id="table_content_penginapan_a" style="font-size: 14px;">
                                        <thead class="d-block w-100">
                                            <tr class="d-flex w-100">
                                                <th class="w-50">PROVINSI</th>
                                                <th class="w-50">BIAYA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="w-100 d-block">
                                        ${table_a}
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div style="min-height: 100px;">
                                <small>
                                Tingkat Perjalanan B <br>
                                Pejabat Eselon II, Anggota DPRD<br>
                                Fungsional IV/c dan Tenaga Ahli</small></div>
                                <div class="table-responsive" style="display:block; width: 180px; height: 300px;">
                                    <table class="table table-bordered overflow-auto" id="table_content_penginapan_b" style="font-size: 14px;">
                                        <thead class="d-block w-100">
                                            <tr class="d-flex w-100">
                                                <th class="w-50">PROVINSI</th>
                                                <th class="w-50">BIAYA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="w-100 d-block">
                                        ${table_b}
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div style="min-height: 100px;">
                                <small>
                                Tingkat Perjalanan C <br>
                                Pejabat Eselon III,<br>
                                Fungsional Gol.IV/a dan IV/b</small></div>
                                <div class="table-responsive" style="display:block; width: 180px; height: 300px;">
                                    <table class="table table-bordered overflow-auto" id="table_content_penginapan_c" style="font-size: 14px;">
                                        <thead class="d-block w-100">
                                            <tr class="d-flex w-100">
                                                <th class="w-50">PROVINSI</th>
                                                <th class="w-50">BIAYA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="w-100 d-block">
                                        ${table_c}
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div style="min-height: 100px;">
                                <small>
                                Tingkat Perjalanan D <br>
                                Pejabat Eselon IV,<br>
                                Fungsional Gol.III/c dan III/d
                                </small></div>
                                <div class="table-responsive" style="display:block; width: 180px; height: 300px;">
                                    <table class="table table-bordered overflow-auto" id="table_content_penginapan_d" style="font-size: 14px;">
                                        <thead class="d-block w-100">
                                            <tr class="d-flex w-100">
                                                <th class="w-50">PROVINSI</th>
                                                <th class="w-50">BIAYA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="w-100 d-block">
                                        ${ table_d }
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div  style="min-height: 100px;">
                                <small>
                                Tingkat Perjalanan E <br>
                                Non Eselon Gol IV, III dan<br>
                                Fungsional trampil Gol.III/b dan III/b</small></div>
                                <div class="table-responsive" style="display:block; width: 180px; height: 300px;">
                                    <table class="table table-bordered overflow-auto" id="table_content_penginapan_e" style="font-size: 14px;">
                                        <thead class="d-block w-100">
                                            <tr class="d-flex w-100">
                                                <th class="w-50">PROVINSI</th>
                                                <th class="w-50">BIAYA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="w-100 d-block">
                                        ${table_e}
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div  style="min-height: 100px;">
                                <small>
                                Tingkat Perjalanan F <br>
                                Non Eselon Gol II, I PTT dan<br>
                                Non PNS yang disetarakan</small></div>
                                <div class="table-responsive" style="display:block; width: 180px; height: 300px;">
                                    <table class="table table-bordered overflow-auto" id="table_content_penginapan_f" style="font-size: 14px;">
                                        <thead class="d-block w-100">
                                            <tr class="d-flex w-100">
                                                <th class="w-50">PROVINSI</th>
                                                <th class="w-50">BIAYA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="w-100 d-block">
                                            ${table_f}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>`;
                        $("#tableHotelPenginapan").html(html);

                        tingkatan_penginapan_a()
                        tingkatan_penginapan_b()
                        tingkatan_penginapan_c()
                        tingkatan_penginapan_d()
                        tingkatan_penginapan_e()
                        tingkatan_penginapan_f()

                    }
                });
            })

            function tingkatan_penginapan_a() {
                $("#table_content_penginapan_a tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[1]

                    $("#biayaPenginapan").val(harga);
                    $("#modalBiayaPenginapan").modal('hide');
                })
            }

            function tingkatan_penginapan_b() {
                $("#table_content_penginapan_b tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[1]

                    $("#biayaPenginapan").val(harga);
                    $("#modalBiayaPenginapan").modal('hide');
                })
            }

            function tingkatan_penginapan_c() {
                $("#table_content_penginapan_c tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[1]

                    $("#biayaPenginapan").val(harga);
                    $("#modalBiayaPenginapan").modal('hide');
                })
            }

            function tingkatan_penginapan_d() {
                $("#table_content_penginapan_d tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[1]

                    $("#biayaPenginapan").val(harga);
                    $("#modalBiayaPenginapan").modal('hide');
                })
            }

            function tingkatan_penginapan_e() {
                $("#table_content_penginapan_e tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[1]

                    $("#biayaPenginapan").val(harga);
                    $("#modalBiayaPenginapan").modal('hide');
                })
            }

            function tingkatan_penginapan_f() {
                $("#table_content_penginapan_f tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[1]

                    $("#biayaPenginapan").val(harga);
                    $("#modalBiayaPenginapan").modal('hide');
                })
            }

            $("#btnBiayaRepresentase").click(function() {
                $("#modalBiayaRepresentase").modal();
            });

            $("#pilihjabatan").change(function() {
                let jabatan = this.value
                $.ajax({
                    type: "POST",
                    url: "{{ route('get_representase') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "jabatan": jabatan
                    },
                    dataType: "JSON",
                    success: function(response) {
                        let biayaRepresentase = response;
                        let data = JSON.parse(JSON.stringify(biayaRepresentase))
                        let table_luar = "";
                        let table_dalam = "";
                        data.forEach(item => {
                            table_luar += `<tr class="d-flex w-100">
                                                <td class="w-100">${item.luar_daerah }</td>
                                            </tr>`

                            table_dalam += `<tr class="d-flex w-100">
                                            <td class="w-100">${item.dalam_daerah }</td>
                                        </tr>`
                        });

                        let html = `
                        <div class="row">
                            <div class="col-sm-6">
                                Luar Daerah
                                <div class="table-responsive" style="display:block; width: 180px; height: 300px;">
                                    <table class="table table-bordered overflow-auto" id="table_luar">
                                        <thead class="d-block w-100">
                                            <tr class="d-flex w-100">
                                                <th class="w-100">Luar Daerah</th>
                                            </tr>
                                        </thead>
                                        <tbody class="w-100 d-block">
                                        ${table_luar}
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                Dalam Daerah
                                <div class="table-responsive" style="display:block; width: 180px; height: 300px;">
                                    <table class="table table-bordered overflow-auto" id="table_dalam">
                                        <thead class="d-block w-100">
                                            <tr class="d-flex w-100">
                                                <th class="w-100">Dalam Daerah</th>
                                            </tr>
                                        </thead>
                                        <tbody class="w-100 d-block">
                                        ${table_dalam}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>`;
                        $("#tableRepresentase").html(html);

                        tingkatan_luar()
                        tingkatan_dalam()

                    }
                });
            })

            function tingkatan_luar() {
                $("#table_luar tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[0]

                    $("#biayaRepresentase").val(harga);
                    $("#modalBiayaRepresentase").modal('hide');
                })
            }

            function tingkatan_dalam() {
                $("#table_dalam tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[0]

                    $("#biayaRepresentase").val(harga);
                    $("#modalBiayaRepresentase").modal('hide');
                })
            }

            $("#no_sppd").change(function(e) {
                let no_sppd = this.value;
                $.ajax({
                    type: "POST",
                    url: "{{ route('cek_sppd') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "no_sppd": no_sppd
                    },
                    dataType: "JSON",
                    success: function(response) {
                        $('#nama_lengkap').val(response.nama_lengkap)
                        $('#nip').val(response.nip)
                        $('#jabatan').val(response.jabatan)
                        $('#pangkat').val(response.pangkat)
                        $('#golongan').val(response.golongan)
                        $('#unit').val(response.unit)
                        $('#tingkat_biaya').val(response.tingkat_biaya)
                        $('#tanggal_berangkat').val(response.tanggal_berangkat)
                        $('#tanggal_kembali').val(response.tanggal_kembali)
                        $('#selama').val(response.selama)
                        $('#keperluan').val(response.uraian)
                        $('#daerahTujuan').val(response.tempat_tujuan)
                    }
                });
            });

            $("#pilihKodeKegiatan").change(function() {
                let kode = this.value

                $.ajax({
                    type: "POST",
                    url: "{{ route('get_kegiatan') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "kode": kode
                    },
                    dataType: "JSON",
                    success: function(response) {
                        let tinggalToBandaraTerminal = $("#tinggalToBandaraTerminal").val() ? $(
                            "#tinggalToBandaraTerminal").val() : 0
                        let bandaraTerminalToTujuan = $("#bandaraTerminalToTujuan").val() ? $(
                            "#bandaraTerminalToTujuan").val() : 0
                        let tujuanBandaraTerminal = $("#tujuanBandaraTerminal").val() ? $(
                            "#tujuanBandaraTerminal").val() : 0
                        let bandaraTerminaltinggal = $("#bandaraTerminaltinggal").val() ? $(
                            "#bandaraTerminaltinggal").val() : 0
                        let biayaHotel = $("#biayaHotel").val() ? $("#biayaHotel").val() : 0
                        let belanjaBBM = $("#belanjaBBM").val() ? $("#belanjaBBM").val() : 0
                        let transportPP = $("#transportPP").val() ? $("#transportPP").val() : 0
                        let medicalCheckup = $("#medicalCheckup").val() ? $("#medicalCheckup")
                            .val() : 0
                        let uangHarian = $("#uangHarian").val() ? $("#uangHarian").val() : 0
                        let biayaTransportasiDarat = $("#biayaTransportasiDarat").val() ? $(
                            "#biayaTransportasiDarat").val() : 0
                        let biayaTiketPesawat = $("#biayaTiketPesawat").val() ? $(
                            "#biayaTiketPesawat").val() : 0
                        let biayaBahanBakar = $("#biayaBahanBakar").val() ? $(
                            "#biayaBahanBakar").val() : 0
                        let biayaPenginapan = $("#biayaPenginapan").val() ? $(
                            "#biayaPenginapan").val() : 0
                        let biayaRepresentase = $("#biayaRepresentase").val() ? $(
                            "#biayaRepresentase").val() : 0
                        let daftarPernyataan = $("#daftarPernyataan").val() ? $(
                            "#daftarPernyataan").val() : 0

                        let pengeluaran = parseInt(tinggalToBandaraTerminal) + parseInt(
                                bandaraTerminalToTujuan) + parseInt(tujuanBandaraTerminal) +
                            parseInt(bandaraTerminaltinggal) + parseInt(biayaHotel) + parseInt(
                                belanjaBBM) + parseInt(transportPP) + parseInt(medicalCheckup) +
                            parseInt(uangHarian) + parseInt(biayaTransportasiDarat) + parseInt(
                                biayaTiketPesawat) + parseInt(biayaBahanBakar) + parseInt(
                                biayaPenginapan) + parseInt(biayaRepresentase) + parseInt(
                                daftarPernyataan)

                        let nilai = response.nilai
                        let total = parseInt(nilai) - parseInt(pengeluaran)

                        $("#nilaiKegiatan").val(response.nilai)
                        $("#sisaNilaiKegiatan").val(total)
                    }
                });
            })

            function hitungTotalRiil() {
                let tinggalToBandaraTerminal = $("#tinggalToBandaraTerminal").val() ? $("#tinggalToBandaraTerminal")
                    .val() : 0
                let bandaraTerminalToTujuan = $("#bandaraTerminalToTujuan").val() ? $("#bandaraTerminalToTujuan")
                    .val() : 0
                let tujuanBandaraTerminal = $("#tujuanBandaraTerminal").val() ? $("#tujuanBandaraTerminal").val() :
                    0
                let bandaraTerminaltinggal = $("#bandaraTerminaltinggal").val() ? $("#bandaraTerminaltinggal")
                    .val() : 0
                let biayaHotel = $("#biayaHotel").val() ? $("#biayaHotel").val() : 0
                let belanjaBBM = $("#belanjaBBM").val() ? $("#belanjaBBM").val() : 0
                let transportPP = $("#transportPP").val() ? $("#transportPP").val() : 0
                let medicalCheckup = $("#medicalCheckup").val() ? $("#medicalCheckup").val() : 0

                let total = parseInt(tinggalToBandaraTerminal) + parseInt(bandaraTerminalToTujuan) + parseInt(
                    tujuanBandaraTerminal) + parseInt(bandaraTerminaltinggal) + parseInt(biayaHotel) + parseInt(
                    belanjaBBM) + parseInt(transportPP) + parseInt(medicalCheckup)

                $("#totalRiil").html(total)
                $("#inputanTotalRiil").val(total)
            }
            $("#tinggalToBandaraTerminal").keyup(function() {
                hitungTotalRiil()
            })
            $("#bandaraTerminalToTujuan").keyup(function() {
                hitungTotalRiil()
            })
            $("#tujuanBandaraTerminal").keyup(function() {
                hitungTotalRiil()
            })
            $("#bandaraTerminaltinggal").keyup(function() {
                hitungTotalRiil()
            })
            $("#biayaHotel").keyup(function() {
                hitungTotalRiil()
            })
            $("#belanjaBBM").keyup(function() {
                hitungTotalRiil()
            })
            $("#transportPP").keyup(function() {
                hitungTotalRiil()
            })
            $("#medicalCheckup").keyup(function() {
                hitungTotalRiil()
            })

            function hitungPerjalananDinas() {
                let uangHarian = $("#uangHarian").val() ? $("#uangHarian").val() : 0
                let biayaTransportasiDarat = $("#biayaTransportasiDarat").val() ? $("#biayaTransportasiDarat")
                    .val() : 0
                let biayaTiketPesawat = $("#biayaTiketPesawat").val() ? $("#biayaTiketPesawat").val() : 0
                let biayaBahanBakar = $("#biayaBahanBakar").val() ? $("#biayaBahanBakar").val() : 0
                let biayaPenginapan = $("#biayaPenginapan").val() ? $("#biayaPenginapan").val() : 0
                let biayaRepresentase = $("#biayaRepresentase").val() ? $("#biayaRepresentase").val() : 0
                let daftarPernyataan = $("#daftarPernyataan").val() ? $("#daftarPernyataan").val() : 0

                let total = parseInt(uangHarian) + parseInt(biayaTransportasiDarat) + parseInt(biayaTiketPesawat) +
                    parseInt(biayaBahanBakar) + parseInt(biayaPenginapan) + parseInt(biayaRepresentase) + parseInt(
                        daftarPernyataan)

                $("#totalPerjalananDinas").html(total)
                $("#inputanPerjalananDinas").val(total)
            }

            $("#uangHarian").keyup(function() {
                hitungPerjalananDinas()
            })

            $("#biayaTransportasiDarat").keyup(function() {
                hitungPerjalananDinas()
            })

            $("#biayaTiketPesawat").keyup(function() {
                hitungPerjalananDinas()
            })

            $("#biayaBahanBakar").keyup(function() {
                hitungPerjalananDinas()
            })

            $("#biayaPenginapan").keyup(function() {
                hitungPerjalananDinas()
            })

            $("#biayaRepresentase").keyup(function() {
                hitungPerjalananDinas()
            })

            $("#daftarPernyataan").keyup(function() {
                hitungPerjalananDinas()
            })

        });
    </script>

@endsection
