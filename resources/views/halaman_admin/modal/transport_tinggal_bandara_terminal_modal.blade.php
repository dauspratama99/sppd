<div class="modal fade" id="modalTransportTinggalBandaraTerminal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="p-3 text-center">
            <h5 class="modal-title" id="exampleModalLabel">Peraturan Gubernur Sumatera Barat</h5>
            <span>Nomor : 40 Tahun 2017</span>
            <br>
            <span><b>Satuan Biaya Taksi Pemerintah Provinsi Sulawesi Barat</b></span>
          </div>
        <div class="modal-body">
        Transportasi Ke Bandara
        <div class="table-responsive">
          <table class="table table-bordered overflow-auto" id="table_content" style="display:block; width: 100%; height: 200px;">
              <thead class="d-block w-100">
                  <tr class="d-flex w-100">
                    <th class="w-50">PROVINSI</th>
                    <th class="w-25">SATUAN</th>
                    <th class="w-25">BESARAN</th>
                  </tr>
              </thead>
              <tbody class="w-100 d-block">
                @php
                    $transportbandara = DB::table('transportasi_to_bandara')->get();
                @endphp
                @foreach ($transportbandara as $bandara)
                  <tr class="d-flex w-100">
                      <td class="w-50">{{ $bandara->provinsi }}</td>
                      <td class="w-25">{{ $bandara->satuan }}</td>
                      <td class="w-25">{{ $bandara->besaran }}</td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>

        <br>
        Transportasi Ke Terminal
        <div class="table-responsive">
            <table class="table table-bordered overflow-auto" id="table_content_terminal" style="display:block; width: 100%; height: 120px;">
                <thead class="d-block w-100">
                    <tr class="d-flex w-100">
                      <th class="w-50">PROVINSI</th>
                      <th class="w-25">SATUAN</th>
                      <th class="w-25">BESARAN</th>
                    </tr>
                </thead>
                <tbody class="w-100 d-block">
                @php
                    $transportterminal = DB::table('transportasi_to_terminal')->get();
                @endphp
                @foreach ($transportterminal as $terminal)
                    <tr class="d-flex w-100">
                        <td class="w-50">{{ $terminal->provinsi }}</td>
                        <td class="w-25">{{ $terminal->satuan }}</td>
                        <td class="w-25">{{ $terminal->besaran }}</td>
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

