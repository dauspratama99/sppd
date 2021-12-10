<div class="modal fade" id="modalUangHarian" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="p-3 text-center">
            <h5 class="modal-title" id="exampleModalLabel">Peraturan Gubernur Sumatera Barat</h5>
            <span>Nomor : 40 Tahun 2017</span>
            <br>
            <span><b>Satuan Biaya Uang Harian Perjalanan Dinas Dalam Negeri</b></span>
          </div>
          <div class="modal-body">
            Luar Wilayah Sulawesi Barat
            <div class="table-responsive">
              <table class="table table-bordered overflow-auto" id="table_uang_harian_luar" style="display:block; width: 100%; height: 220px;">
                  <thead class="d-block w-100">
                      <tr class="d-flex w-100">
                        <th class="w-50">PROVINSI</th>
                        <th class="w-50">UANG HARIAN LUAR KOTA</th>
                      </tr>
                  </thead>
                  <tbody class="w-100 d-block">
                    @php
                        $uangharianluar = DB::table('uang_harian_luar')->get();
                    @endphp
                    @foreach ($uangharianluar as $item)
                      <tr class="d-flex w-100">
                          <td class="w-50">{{ $item->provinsi }}</td>
                          <td class="w-50">{{ $item->harga }}</td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>

            <br>
            Dalam Wilayah Sulawesi Barat
            <div class="table-responsive">
                <table class="table table-bordered overflow-auto" id="table_uang_harian_dalam" style="display:block; width: 100%; height: 110px;">
                    <thead class="d-block w-100">
                        <tr class="d-flex w-100">
                          <th class="w-50">PROVINSI</th>
                          <th class="w-50">UANG HARIAN DALAM KOTA</th>
                        </tr>
                    </thead>
                    <tbody class="w-100 d-block">
                    @php
                        $uanghariandalam = DB::table('uang_harian_dalam')->get();
                    @endphp
                    @foreach ($uanghariandalam as $item)
                        <tr class="d-flex w-100">
                            <td class="w-50">{{ $item->provinsi }}</td>
                            <td class="w-50">{{ $item->harga }}</td>
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

