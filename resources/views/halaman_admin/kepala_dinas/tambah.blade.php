@extends('tampilan.admin')

@section('title', 'Tambah Kepala Dinas')

@section('admin')

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="fas fa-users"></i> Tambah Kepala Dinas</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Kepala Dinas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->

            <form action="{{ route('proses_kepala_dinas_tambah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="">Nama lengkap</label>
                                    <input type="text" name="nama_lengkap" id="" class="form-control form-control-sm"
                                        required>
                                    @error('nama_lengkap')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Nip</label>
                                    <input type="text" name="nip" id="" class="form-control form-control-sm">
                                    @error('nip')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <input type="text" name="jabatan" id="" class="form-control form-control-sm">
                                    @error('jabatan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Golongan</label>
                                    <select class="form-control" name="golongan" onchange="kategori(this);"
                                        aria-label="Default select example">
                                        <option value="">Golongan</option>
                                        @php
                                            $golongan = ['IA', 'IB', 'IC', 'ID', 'IIA', 'IIB', 'IIC', 'IID', 'IIIA', 'IIIB', 'IIIC', 'IIID', 'IVA', 'IVB', 'IVC', 'IVD', 'IVE'];
                                        @endphp
                                        @foreach ($golongan as $g)
                                            <option value="{{ $g }}">{{ $g }}</option>
                                        @endforeach
                                    </select>
                                    @error('golongan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Pangkat</label>
                                    <input type="text" name="pangkat" id="pangkat" class="form-control form-control-sm"
                                        required>
                                    @error('pangkat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Unit</label>
                                    <input type="text" name="unit" id="" class="form-control form-control-sm" required>
                                    @error('unit')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Tingkatan Biaya</label>
                                    <select class="form-control" name="tingkat_biaya" aria-label="Default select example">
                                        <option value="">Tingkat Biaya</option>
                                        @php
                                            $biaya = ['A', 'B', 'C', 'D', 'E', 'F'];
                                        @endphp
                                        @foreach ($biaya as $b)
                                            <option value="{{ $b }}">{{ $b }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="1" class="form-label">Pilih Photo</label>
                                    <p>
                                        <input type="file" name="foto" id="imgInp" onchange="previewImage();">
                                </div>
                                <p>
                                    <img id="img-upload" style="width: 150px; height: 150px;" alt="image Upload" />
                                <p>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('kelola_kepala_dinas') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <script>
        function kategori(val) {
            $.ajax({
                type: 'POST',
                url: "{{ route('ajax_golongan_kepala_dinas') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "golongan": val.value
                },
                datatype: 'JSON',
                success: function(response) {
                    $("#pangkat").val(response.pangkat)
                }

            })
        }

        function previewImage() {
            document.getElementById("img-upload").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("imgInp").files[0]);

            oFReader.onload = function(oFREvent) {
                document.getElementById("img-upload").src = oFREvent.target.result;
            };
        };
    </script>
@endsection
