<div class="modal fade" id="modalBiayaRepresentase" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="p-3 text-center">
            <h5 class="modal-title" id="exampleModalLabel">Peraturan Gubernur Sumatera Barat</h5>
            <span>Nomor : 40 Tahun 2017</span>
            <br>
            <span><b>Satuan Biaya Uang Representase Perjalanan Dinas</b></span>
            <br>
            <div class="row mt-4">
                <div class="col-md-6 offset-md-3">
                    <select name="jabatan" id="pilihjabatan" class="form-control">
                        <option value="">Pilih Jabatan</option>
                        @php
                            $jabatan = DB::table('biaya_representasi')->get();
                        @endphp
                        @foreach ($jabatan as $item)
                            <option value="{{ $item->jabatan }}">{{ $item->jabatan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
          </div>
        <div class="modal-body" id="tableRepresentase">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
</div>

