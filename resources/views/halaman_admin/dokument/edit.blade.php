@extends('tampilan.admin')

@section('title', 'Edit Penanda Tangan Dokumen')

@section('admin')

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="nav-icon fas fa-copy"></i> Edit Penanda Tangan Dokumen</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Penanda Tangan Dokumen</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->

            <form action="{{ route('proses_dokument_edit', $edit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Nama lengkap</label>
                                    <input type="text" name="nama_lengkap" id="" value="{{ $edit->nama_lengkap }}"
                                        class="form-control form-control-sm" required>
                                    @error('nama_lengkap')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Nip</label>
                                    <input type="text" name="nip" id="" value="{{ $edit->nip }}"
                                        class="form-control form-control-sm">
                                    @error('nip')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <input type="text" name="jabatan" id="" value="{{ $edit->jabatan }}"
                                        class="form-control form-control-sm">
                                    @error('jabatan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Golongan</label>
                                    <select class="form-control" name="golongan" onchange="pilih(this)"
                                        aria-label="Default select example">
                                        <option selected>{{ $edit->golongan }}</option>
                                        @php
                                            $dokument = ['IA', 'IB', 'IC', 'ID', 'IIA', 'IIB', 'IIC', 'IID', 'IIIA', 'IIIB', 'IIIC', 'IIID', 'IVA', 'IVB', 'IVC', 'IVD', 'IVE'];
                                        @endphp
                                        @foreach ($dokument as $g)
                                            <option value="{{ $g }}">{{ $g }}</option>
                                        @endforeach
                                    </select>
                                    @error('golongan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Pangkat</label>
                                    <input type="text" name="pangkat" value="{{ $edit->pangkat }}" id="pangkat"
                                        class="form-control form-control-sm" required>
                                    @error('pangkat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Status Jabatan</label>
                                    <select class="form-control" name="status_jabatan" aria-label="Default select example">
                                        <option selected>{{ $edit->status_jabatan }}</option>
                                        @php
                                            $jabatan = ['Gubernur', 'Sekretaris Daerah', 'Asisten I', 'Asisten II', 'Asisten III', 'Penggunaan Anggaran', 'Kepala UPTBD', 'Kepala UPTD', 'PPK SKPD', 'PPTK SKPD'];
                                        @endphp
                                        @foreach ($jabatan as $b)
                                            <option value="{{ $b }}">{{ $b }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('kelola_dokument') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <script>
        function pilih(val) {
            $.ajax({
                url: "{{ route('ajax_dokument') }}",
                type: 'POST',
                datatype: 'JSON',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "document": val.value,
                },
                success: function(response) {
                    $('#pangkat').val(response.pangkat)
                }
            })
        }

    </script>
@endsection
