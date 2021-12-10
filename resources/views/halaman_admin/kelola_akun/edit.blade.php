 @extends('tampilan.admin')

 @section('title_admin', 'Edit Data Akun')

 @section('admin')

     <div class="content-wrapper">

         <div class="content-header">
             <div class="container-fluid">
                 <div class="row mb-2">
                     <div class="col-sm-6">

                         <h1><i class="fas fa-users"></i> Kelola Akun</h1>

                     </div>
                     <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                             <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                             <li class="breadcrumb-item active">Kelola Akun</li>
                         </ol>
                     </div>
                 </div>
             </div>
         </div>
         <section class="content">
             <!-- Default box -->

             <form action="{{ route('proses_akun_edit', $edit->id) }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="card card-primary card-outline">
                     <div class="card-header">
                         <div class="card-title">Edit data Akun</div>
                     </div>
                     <div class="card-body">
                         <div class="row">
                             <div class="col-sm-10">
                                 <div class="form-group">
                                     <label for="">Nama Akun</label>
                                     <input type="text" name="nama" value="{{ $edit->nama }}"
                                         class="form-control form-control-sm" required>
                                     @error('name')
                                         <small class="text-danger">{{ $message }}</small>
                                     @enderror
                                 </div>

                                 <div class="form-group">
                                     <label for="">Username</label>
                                     <input type="text" name="username" value="{{ $edit->username }}"
                                         class="form-control form-control-sm" required>
                                     @error('email')
                                         <small class="text-danger">{{ $message }}</small>
                                     @enderror
                                 </div>

                                 <div class="form-group">
                                     <label for="">Alamat</label>
                                     <input type="text" name="alamat" value="{{ $edit->alamat }}"
                                         class="form-control form-control-sm" required>
                                     @error('email')
                                         <small class="text-danger">{{ $message }}</small>
                                     @enderror
                                 </div>

                                 <div class="form-group">
                                     <label for="">Nomor Telepon</label>
                                     <input type="text" name="nomor_hp" value="{{ $edit->nomor_hp }}"
                                         class="form-control form-control-sm" required>
                                     @error('email')
                                         <small class="text-danger">{{ $message }}</small>
                                     @enderror
                                 </div>

                                 <div class="form-group">
                                     <label for="">Status</label>
                                     <select class="form-control" name="status" aria-label="Default select example">
                                         <option value="{{ $edit->status }}">{{ $edit->status }}</option>
                                         <option value="admin">Admin</option>
                                         <option value="kwitansi">Kwitansi</option>
                                         <option value="surat_tugas">Surat Tugas</option>
                                     </select>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="card-footer">
                         <button type="submit" class="btn btn-primary">Update</button>
                         <a href="{{ route('kelola_akun') }}" class="btn btn-warning">Back</a>
                     </div>
                 </div>
             </form>
         </section>
         <!-- /.content -->
     </div>
 @endsection
