<div class="modal fade" id="modalSuratTugasKepala" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="p-3 text-center">
                <h5 class="modal-title" id="exampleModalLabel">Data Kepala Dinas</h5>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <label>Cari Nama : </label>
                        <input onkeyup="cari(this)" type="text" id="nama" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered overflow-auto" id="table_content"
                        style="display:block; width: 100%; height: 350px;">
                        <thead class="d-block w-100">
                            <tr class="d-flex w-100">
                                <th class="w-50">NAMA</th>
                                <th class="w-25">NIP</th>
                                <th class="w-25">JABATAN</th>
                            </tr>
                        </thead>
                        <tbody class="w-100 d-block" id="body">
                            @php
                                $kepaladinas = DB::table('kepala_dinas')->get();
                            @endphp
                            @foreach ($kepaladinas as $item)
                                <tr class="d-flex w-100">
                                    <td class="w-50">{{ $item->nama_lengkap }}</td>
                                    <td class="w-25">{{ $item->nip }}</td>
                                    <td class="w-25">{{ $item->jabatan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>

</div>
