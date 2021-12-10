@extends('tampilan.admin')

@section('title', 'Tambah Surat Tugas Kepala Dinas')

@section('admin')

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="nav-icon fas fa-copy"></i> Tambah Surat Tugas Kepala Dinas</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Surat Tugas Kepala Dinas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->

            <form action="{{ route('proses_surattugaskepala_tambah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10">

                                <div class="row">
                                    <div class="col">
                                        <label for=""> Nomor Surat Tugas</label>
                                        <input type="text" name="no_surat_tugas" class="form-control"
                                            placeholder="Nomor Surat Tugas" value="{{ old('no_surat_tugas') }}">
                                        @error('no_surat_tugas')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        @php
                                            if (date('m') == '01') {
                                                $bln = 'I';
                                            } elseif (date('m') == '02') {
                                                $bln = 'II';
                                            } elseif (date('m') == '03') {
                                                $bln = 'III';
                                            } elseif (date('m') == '04') {
                                                $bln = 'IV';
                                            } elseif (date('m') == '05') {
                                                $bln = 'V';
                                            } elseif (date('m') == '06') {
                                                $bln = 'VI';
                                            } elseif (date('m') == '07') {
                                                $bln = 'VII';
                                            } elseif (date('m') == '08') {
                                                $bln = 'VIII';
                                            } elseif (date('m') == '09') {
                                                $bln = 'IX';
                                            } elseif (date('m') == '10') {
                                                $bln = 'X';
                                            } elseif (date('m') == '11') {
                                                $bln = 'XI';
                                            } else {
                                                $bln = 'XII';
                                            }
                                        @endphp
                                        <label for=""> &nbsp; </label>
                                        <input type="text" name="no_surat_tugas2"
                                            value="/ST/SETDA-{{ $bln }}/{{ date('Y') }}" class="form-control"
                                            placeholder="Last name" readonly>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col">
                                        <label for=""> Nomor SPPD</label>
                                        <input type="text" name="no_sppd" class="form-control" placeholder="Nomor SPPD"
                                            value="{{ old('no_sppd') }}">
                                        @error('no_sppd')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        @php
                                            if (date('m') == '01') {
                                                $bln = 'I';
                                            } elseif (date('m') == '02') {
                                                $bln = 'II';
                                            } elseif (date('m') == '03') {
                                                $bln = 'III';
                                            } elseif (date('m') == '04') {
                                                $bln = 'IV';
                                            } elseif (date('m') == '05') {
                                                $bln = 'V';
                                            } elseif (date('m') == '06') {
                                                $bln = 'VI';
                                            } elseif (date('m') == '07') {
                                                $bln = 'VII';
                                            } elseif (date('m') == '08') {
                                                $bln = 'VIII';
                                            } elseif (date('m') == '09') {
                                                $bln = 'IX';
                                            } elseif (date('m') == '10') {
                                                $bln = 'X';
                                            } elseif (date('m') == '11') {
                                                $bln = 'XI';
                                            } else {
                                                $bln = 'XII';
                                            }
                                        @endphp
                                        <label for=""> &nbsp; </label>
                                        <input type="text" name="no_sppd2"
                                            value="/ST/SETDA-{{ $bln }}/{{ date('Y') }}" class="form-control"
                                            readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <div class="d-flex">
                                        <input type="text" name="nama" id="nama" class="form-control form-control-sm"
                                            readonly>
                                        &nbsp;&nbsp;
                                        <button type="button" class="btn btn-dark btn-sm" id="btnNama">...</button>
                                    </div>
                                    @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">NIP</label>
                                    <input type="text" name="nip" id="nip" class="form-control form-control-sm" readonly>
                                    @error('nip')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <input type="text" name="jabatan" id="jabatan" class="form-control form-control-sm"
                                        readonly>
                                    @error('jabatan')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="tanggal" value="{{ old('tanggal') }}" id="tanggal"
                                        class="form-control form-control-sm">
                                    @error('tanggal')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Tanggal Berangkat</label>
                                    <input type="date" name="tanggal_berangkat" id=""
                                        value="{{ old('tanggal_berangkat') }}" class="form-control form-control-sm">
                                    @error('tanggal_berangkat')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Tanggal Kembali</label>
                                    <input type="date" name="tanggal_kembali" value="{{ old('tanggal_kembali') }}" id=""
                                        class="form-control form-control-sm">
                                    @error('tanggal_kembali')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Alat Angkutan Yang digunakan</label>
                                    <input type="text" name="alat_angkutan" value="{{ old('alat_angkutan') }}"
                                        class="form-control form-control-sm" list="alat_angkut" />
                                    <datalist id="alat_angkut">
                                        <option>Kendaraan Dinas</option>
                                        <option>Kendaraan Umum</option>
                                        <option>Pesawat</option>
                                    </datalist>
                                </div>

                                <div class="form-group">
                                    <label for="">Tempat Berangkat</label>
                                    <input type="text" name="tempat_berangkat" value="{{ old('tempat_berangkat') }}"
                                        class="form-control form-control-sm" list="tempat_brangkat" />
                                    <datalist id="tempat_brangkat">
                                        <option>Mamuju</option>
                                        <option>Polewali</option>
                                        <option>Mamasa</option>
                                        <option>Pasangkayu</option>
                                        <option>Majene</option>
                                    </datalist>
                                    @error('tempat_berangkat')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Tempat Tujuan</label>
                                    <input type="text" name="tempat_tujuan" value="{{ old('tempat_tujuan') }}"
                                        class="form-control form-control-sm" list="tempat_tujuan" />
                                    <datalist id="tempat_tujuan">
                                        <option>Mamuju</option>
                                        <option>Polewali</option>
                                        <option>Mamasa</option>
                                        <option>Pasangkayu</option>
                                        <option>Majene</option>
                                    </datalist>
                                    @error('tempat_tujuan')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Dasar Surat</label>
                                    <textarea class="form-control" name="dasar_surat" placeholder="Dasar Surat"
                                        id="floatingTextarea"></textarea>
                                    @error('dasar_surat')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Uraian</label>
                                    <textarea class="form-control" name="uraian" placeholder="Uraian"
                                        id="floatingTextarea"></textarea>
                                    @error('uraian')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Sumber Anggaran</label>
                                    <select class="form-control" name="sumber_anggaran" aria-label="Default select example">
                                        <option value="">Pilih Sumber Anggaran</option>
                                        @php
                                            $sumber = ['Segala biaya yang timbul akibat dikeluarkannya Surat Perintah Tugas ini dibebankan pada Anggaran Provinsi Sulawesi Barat', ' Segala biaya yang timbul akibat dikeluarkannya Surat Perintah Tugas ini dibebankan pada Panitia Pelaksana Kegiatan'];
                                        @endphp
                                        @foreach ($sumber as $s)
                                            <option value="{{ $s }}">{{ $s }}</option>
                                        @endforeach

                                    </select>
                                    @error('sumber_anggaran')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for=""> Surat Tugas ini mulai berlaku</label>
                                    <input type="date" name="mulai_berlaku" value="{{ old('mulai_berlaku') }}"
                                        class="form-control" id="">
                                    @error('mulai_berlaku')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Penandatanganan Dokumen</label>
                                    <select class="form-control" name="tanda_tangan_dokumen_id"
                                        aria-label="Default select example">
                                        <option value="">Pilih Penanda Tangan</option>
                                        @php
                                            $tanda_tangan = DB::table('tanda_tangan_dokumen')->get();
                                        @endphp
                                        @endphp
                                        @foreach ($tanda_tangan as $t)
                                            <option value="{{ $t->id }}">{{ $t->nama_lengkap }}</option>
                                        @endforeach

                                    </select>
                                    @error('tanda_tangan_dokumen_id')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
                        <a href="{{ route('kelola_surattugas') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>

    @include('halaman_admin.modal.surat_tugas_kepala_modal')

    <script>
        $(document).ready(function() {
            $("#btnNama").click(function() {
                $("#modalSuratTugasKepala").modal();
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
                let nama = data[0]
                let nip = data[1]
                let jabatan = data[2]

                $("#nama").val(nama);
                $("#nip").val(nip);
                $("#jabatan").val(jabatan);
                $("#modalSuratTugasKepala").modal('hide');
            })
        });

        function cari(val) {
            var search = val.value;
            $.ajax({
                type: 'POST',
                datatype: 'HTML',
                url: "{{ route('ajax_modal') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "cari": search,
                },
                success: function(output) {
                    let data = output;

                    let body = "";

                    data.forEach(item => {
                        body += `<tr class="d-flex w-100">
                            <td class="w-50">${item.nama_lengkap}</td>
                            <td class="w-25">${item.nip}</td>
                            <td class="w-25">${item.nip}</td>
                         <tr>`
                    });

                    $('#body').html(body);
                }
            })
        }
    </script>
@endsection
