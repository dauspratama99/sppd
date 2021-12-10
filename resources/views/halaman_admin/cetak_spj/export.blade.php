<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-SPJ-Staff.xls");
?>

<table>
    <tr>
        <td align="center" width="800" colspan="24">
            <font style="font-family: Tahoma; font-size:14;"><b>LAPORAN SPJ STAFF</b></font>
            <br>
            <font style="font-family: Tahoma; font-size:12;">
            <?php
                if(Request::segment(3) == ''){
                   echo "Data SPJ Keseluruhan";
                }else{
                    echo Request::segment(3);
                }
        ?>
        </font><br>
        </td>
    </tr>
</table>

<table border="1" style="border-collapse: collapse;">
    <tr>
        <th rowspan="2" style="font-family: Tahoma;">No</th>
        <th rowspan="2" style="font-family: Tahoma;">Nama</th>
        <th rowspan="2" style="font-family: Tahoma;">NIP</th>
        <th rowspan="2" style="font-family: Tahoma;">Jenis Perjalanan</th>
        <th rowspan="2" style="font-family: Tahoma;">Dalam Rangka</th>
        <th rowspan="2" style="font-family: Tahoma;">Bidang / Unit</th>
        <th rowspan="2" style="font-family: Tahoma;">Gol</th>
        <th rowspan="2" style="font-family: Tahoma;">Daerah Tujuan</th>
        <th rowspan="2" style="font-family: Tahoma;">Instansi Tujuan</th>
        <th colspan="2" style="font-family: Tahoma;">Tanggal</th>
        <th rowspan="2" style="font-family: Tahoma;">Selama (Hari)</th>
        <th colspan="2" style="font-family: Tahoma;">PSWT/KA/BUS/KAPAL</th>
        <th colspan="2" style="font-family: Tahoma;">KODE BOOKING - NOMOR TIKET - NOMOR SEAT</th>
        <th rowspan="2" style="font-family: Tahoma;">Nama Hotel / Penginapan</th>
        <th rowspan="2" style="font-family: Tahoma;">Nomor Kamar</th>
        <th rowspan="2" style="font-family: Tahoma;">Tanggal Check-in</th>
        <th rowspan="2" style="font-family: Tahoma;">Tanggal Check-out</th>
        <th rowspan="2" style="font-family: Tahoma;">Telp Hotel</th>
        <th rowspan="2" style="font-family: Tahoma;">Alamat Hotel</th>
        <th rowspan="2" style="font-family: Tahoma;">Kode Kegiatan</th>
        <th rowspan="2" style="font-family: Tahoma;">Nilai Kwitansi</th>
    </tr>
    <tr>
       <th style="font-family: Tahoma;">Pergi</th> 
       <th style="font-family: Tahoma;">Pulang</th> 
       
       <th style="font-family: Tahoma;">Pergi</th> 
       <th style="font-family: Tahoma;">Pulang</th> 
       
       <th style="font-family: Tahoma;">Pergi</th> 
       <th style="font-family: Tahoma;">Pulang</th>
    </tr>
    @foreach ($cetak as $i)
        <tr class="text-center">
            <td style="font-family: Tahoma;">{{ $loop->iteration }}</td>
            <td style="font-family: Tahoma;">{{ $i->nama_lengkap }}</td>
            <td style="font-family: Tahoma;">{{ $i->nip }}</td>
            <td style="font-family: Tahoma;">{{ $i->jenis_perjalanan }}</td>
            <td style="font-family: Tahoma;">{{ $i->uraian }}</td>
            <td style="font-family: Tahoma;">{{ $i->unit }}</td>
            <td style="font-family: Tahoma;">{{ $i->golongan }}</td>
            <td style="font-family: Tahoma;">{{ $i->daerah_tujuan }}</td>
            <td style="font-family: Tahoma;">{{ $i->instansi_tujuan }}</td>
            <td style="font-family: Tahoma;">{{ $i->tanggal_berangkat }}</td>
            <td style="font-family: Tahoma;">{{ $i->tanggal_kembali }}</td>
            <td style="font-family: Tahoma;">{{ $i->selama }}</td>
            <td style="font-family: Tahoma;">{{ $i->keberangkatan_nama_pesawat_ka_bus_kapal_lainnya }}</td>
            <td style="font-family: Tahoma;">{{ $i->kedatangan_nama_pesawat_ka_bus_kapal_lainnya }}</td>
            <td style="font-family: Tahoma;">{{ $i->keberangkatan_kode_booking }} - {{ $i->keberangkatan_nomor_tiket }} - {{ $i->keberangkatan_nomor_seat }}</td>
            <td style="font-family: Tahoma;">{{ $i->kedatangan_kode_booking }} - {{ $i->kedatangan_nomor_tiket }} - {{ $i->kedatangan_nomor_seat }}</td>
            <td style="font-family: Tahoma;">{{ $i->nama_hotel }}</td>
            <td style="font-family: Tahoma;">{{ $i->nomor_kamar }}</td>
            <td style="font-family: Tahoma;">{{ $i->tgl_checkin }}</td>
            <td style="font-family: Tahoma;">{{ $i->tgl_checkout }}</td>
            <td style="font-family: Tahoma;">{{ $i->telp_hotel }}</td>
            <td style="font-family: Tahoma;">{{ $i->alamat_hotel }}</td>
            <td style="font-family: Tahoma;">{{ $i->kode_kegiatan }}</td>
            <td style="font-family: Tahoma;">{{ $i->jumlah_total }}</td>
        </tr>
    @endforeach
</table>