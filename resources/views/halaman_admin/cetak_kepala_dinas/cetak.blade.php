<!DOCTYPE html>
<html>

<head>
    <title>SPJ Kepala Dinas</title>
</head>

<body onload="print()">
    @php
        function penyebut($nilai){
            $nilai = abs($nilai);
            $huruf = ['', 'Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan', 'Sepuluh', 'Sebelas'];
            $temp = '';
            if ($nilai < 12) {
                $temp = ' ' . $huruf[$nilai];
            } elseif ($nilai < 20) {
                $temp = penyebut($nilai - 10) . ' Belas';
            } elseif ($nilai < 100) {
                $temp = penyebut($nilai / 10) . ' Puluh' . penyebut($nilai % 10);
            } elseif ($nilai < 200) {
                $temp = ' Seratus' . penyebut($nilai - 100);
            } elseif ($nilai < 1000) {
                $temp = penyebut($nilai / 100) . ' Ratus' . penyebut($nilai % 100);
            } elseif ($nilai < 2000) {
                $temp = ' Seribu' . penyebut($nilai - 1000);
            } elseif ($nilai < 1000000) {
                $temp = penyebut($nilai / 1000) . ' Ribu' . penyebut($nilai % 1000);
            } elseif ($nilai < 1000000000) {
                $temp = penyebut($nilai / 1000000) . ' Juta' . penyebut($nilai % 1000000);
            } elseif ($nilai < 1000000000000) {
                $temp = penyebut($nilai / 1000000000) . ' Milyar' . penyebut(fmod($nilai, 1000000000));
            } elseif ($nilai < 1000000000000000) {
                $temp = penyebut($nilai / 1000000000000) . ' Trilyun' . penyebut(fmod($nilai, 1000000000000));
            }
            return $temp;
        }

        function terbilang($nilai){
            if ($nilai < 0) {
                $hasil = 'Minus ' . trim(penyebut($nilai));
            } else {
                $hasil = trim(penyebut($nilai));
            }
            return $hasil;
        }
    @endphp
    <center>
        <div style="height: 100vh;">
            <table width="90%">
                <tr>
                    <td><img src="{{ asset('gambar/logo.png') }}" width="90" height="90"></td>
                    <td align="center">
                        <font style="font-family: Tahoma; font-size:12;">PEMERINTAH PROVINSI SULAWESI BARAT
                        </font>
                        <br>
                        <font style="font-family: Tahoma; font-size:14;"><b>{{ $tipe->user_tipe }}</b></font>
                        <br>
                        <font style="font-family: Tahoma; font-size:10;">Jl. H. Abd. Malik Pattana Endeng – Rangas –
                            Mamuju 91512 </font><br>
                        <font style="font-family: Tahoma; font-size:10;">e-mail : ................., website :
                            .................
                        </font><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr style="border: 2px solid black;">
                        <hr style="border: 0.3px solid rgb(104, 104, 104); margin-top: -4px;">
                    </td>
                </tr>
            </table>
            <table width="90%">
                <tr>
                    <font style="font-size:14;"><b>K W I T A N S I</b></font>
                </tr>

                <tr>
                    <td style="text-align: right;">Kode Rekening : {{ $cetak->kode_rekening }}
                    </td>
                </tr>
            </table>
            <table width="90%" cellpadding="5">
                <tr>
                    <td width="150">Nomor </td>
                    <td width="10">:</td>
                    <td></td>
                </tr>
                
                <tr>
                    <td>Nama Kegiatan </td>
                    <td>:</td>
                    <td>{{ $cetak->nama_kegiatan }}</td>
                </tr>

                <tr>
                    <td>Sudah Terima Dari </td>
                    <td>:</td>
                    <td><b>Bendahara Pengeluaran Badan Pengelola Keuangan dan Pendapatan Daerah</b></td>
                </tr>

                <tr>
                    <td>Uang Sejumlah </td>
                    <td>:</td>
                    <td width="100"><span style="border: 1px solid black; padding: 5px; display: block; font-weight: bold;">{{ terbilang($cetak->jumlah_total) }} Rupiah</span></td>
                </tr>

                <tr>
                    <td>Untuk Pembayaran </td>
                    <td>:</td>
                    <td> <span style="display: inline-block; width: 30em;">Belanja Perjalanan . an. {{ $cetak->nama_lengkap }} sesuai SPPD No.
                        {{ $cetak->no_sppd }} di {{ $cetak->daerah_tujuan }} terhitung mulai tanggal {{ \Carbon\Carbon::create($cetak->tanggal_berangkat)->isoFormat('D MMMM Y') }} s/d {{ \Carbon\Carbon::create($cetak->tanggal_kembali)->isoFormat('D MMMM Y') }}</span>
                    </td>
                </tr>

                <tr>
                    <td>Terbilang Rp </td>
                    <td>:</td>
                    <td><span style="border: 1px solid black; padding: 5px; display: inline-block; font-weight: bold; width: 11em; text-align: right;">{{ number_format($cetak->jumlah_total, 2, ',', '.') }}</span></td>
                </tr>
            </table>
            <table width="20%" style="margin: 0 auto;">
                <tr>
                    <td>
                        <font><br>Lunas Bayar</font>
                        <font><br>Tanggal,</font>
                    </td>
                </tr>
            </table>
            <br><br>
            <table width="90%">
                <tr align="justify">
                    <td> Mengetahui / Menyetujui <br>
                        Pengguna Anggaran </td>
                    <td>Bendahara Pengeluaran</td>
                    <td>Yang Menerima</td>
                </tr>
                <tr>
                    <td><br><br><br><br><br><br></td>
                    <td><br><br><br><br><br><br></td>
                    <td><br><br><br><br><br><br></td>
                </tr>
                <tr>
                    <td> <u><b>{{ strtoupper($cetak->nama_lengkap) }}</b></u><br>Nip: {{ $cetak->nip }} </td>
                    <td> <u><b>NURHAYATI, SE</b></u><br>Nip: 19861110 201001 2 051 </td>
                    <td> <u><b>{{ strtoupper($cetak->nama_lengkap) }}</b></u><br>Nip: {{ $cetak->nip }} </td>
                </tr>
            </table>
        </div>

        <div style="height: 100vh;">
            <table width="90%">
                <tr>
                    <font style="font-size:14;"><b>RINCIAN BIAYA PERJALANAN DINAS</b></font>
                    <br>
                </tr>
            </table>
            <br>

            <table width="90%">
                <tr>
                    <td>Lampiran SPPD No : {{ $cetak->no_sppd }}
                    </td>
                </tr>

                <tr>
                    <td>Tanggal : {{ \Carbon\Carbon::create($cetak->tanggal_berangkat)->isoFormat('D MMMM Y') }} s/d {{ \Carbon\Carbon::create($cetak->tanggal_kembali)->isoFormat('D MMMM Y') }}</td>
                </tr>
            </table>
            <br>

            <table style="border-collapse: collapse;" border="1" cellpadding="5" width="90%">

                <tr width="50%">

                    <th width="5%" style="text-align: center;">NO</th>
                    <th width="40%">PERINCIAN BIAYA</th>

                    <th width="20%">JUMLAH </th>

                    <th width="40%">KETERANGAN</th>

                </tr>

                <tbody>
                    <tr>
                        <td style="text-align: center">1</td>
                        <td>Uang Harian</td>

                        <td align="right">{{ number_format($cetak->uang_harian) }}</td>

                        <td></td>

                    </tr>
                    
                    <tr>
                        <td style="text-align: center">2</td>
                        <td>Transport Darat</td>

                        <td align="right">{{ number_format($cetak->biaya_transportasi_darat) }}</td>

                        <td></td>

                    </tr>

                    <tr>
                        <td style="text-align: center">3</td>
                        <td>Tiket Pesawat</td>

                        <td align="right">{{ number_format($cetak->biaya_tiket_pesawat) }}</td>

                        <td></td>

                    </tr>

                    <tr>
                        <td style="text-align: center">4</td>
                        <td>Biaya Bahan Bakar</td>

                        <td align="right">{{ number_format($cetak->biaya_bahan_bakar) }}</td>

                        <td></td>

                    </tr>

                    <tr>
                        <td style="text-align: center">5</td>
                        <td>Biaya Penginapan / Hotel</td>

                        <td align="right">{{ number_format($cetak->biaya_penginapan) }}</td>

                        <td></td>

                    </tr>
                    
                    <tr>
                        <td style="text-align: center">6</td>
                        <td>Biaya Representasi</td>

                        <td align="right">{{ number_format($cetak->biaya_representase) }}</td>

                        <td></td>

                    </tr>
                    
                    <tr>
                        <td style="text-align: center">7</td>
                        <td>Daftar Pernyataan Riil</td>

                        <td align="right">{{ number_format($cetak->daftar_pernyataan) }}</td>

                        <td></td>

                    </tr>

                    <tr>
                        <td colspan="2" style="text-align: center">
                            Jumlah
                        </td>

                        <td colspan="2" style="text-align: center">
                            {{ number_format($cetak->total_perjalanan_dinas, 2, ',', '.') }}
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <i><b>TERBILANG : </b> {{ terbilang($cetak->total_perjalanan_dinas) }} Rupiah</i>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            &nbsp;
                        </td>
                    </tr>
                </tbody>
            </table>

            <br>
            <table width="90%">
                <tr>
                    <td width="964"> Telah Dibayar Sejumlah
                        <br>Rp. &nbsp;&nbsp;{{ number_format($cetak->total_perjalanan_dinas, 2, ',', '.') }}
                    </td>
                    <td width="900" style="font-family: Arial; font-size:11; text-align:right;"> Mamuju, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2021 <br>
                        Telah Menerima
                        Jumlah
                        Uang Sebesar <br> Rp. &nbsp;&nbsp;{{ number_format($cetak->total_perjalanan_dinas, 2, ',', '.') }}
                    </td>
                </tr>
            </table>

            <br><br><br>
            <table width="90%">
                <tr>
                    <td width="964" style="font-family: Arial; font-size:11; text-align:left;"> <b><u>NURHAYATI, SE</u></b>
                        <br>Nip: 198611102010012051
                    </td>
                    <td width="900" style="font-family: Arial; font-size:11; text-align:right;"> <b><u>{{ strtoupper($cetak->nama_lengkap)}}</u></b> <br>
                        Nip: {{ $cetak->nip }} </td>
                </tr>
            </table>
            <br><br>

            <div colspan="2">
                <hr style="border: 2px solid black;">
            </div>
            <br>
            <table width="90%">
                <tr>
                    <font style="font-size:14;">PERHITUNGAN SPPD RAMPUNG</font>
                    <br>
                </tr>
                <tr>
            </table>
            <br>
            <table width="90%">
                <tr>
                    <td width="230"> Ditetapkan Sejumlah </td>
                    <td>:</td>
                    <td> Rp. &nbsp;&nbsp;{{ number_format($cetak->total_perjalanan_dinas, 2, ',', '.') }} </td>
                </tr>
                <tr>
                    <td> Yang Telah Dibayarkan Semula</td>
                    <td>:</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td> Sisa Kurang / Lebih </td>
                    <td>:</td>
                    <td>Rp. &nbsp;&nbsp;{{ number_format($cetak->total_perjalanan_dinas, 2, ',', '.') }}</td>
                </tr>
            </table>

            <table width="90%"><br>
                <br>
                <tr>
                    <td width="900" style="text-align:right;"> PENGGUNA
                        ANGGARAN </td>
                </tr>
            </table>

            <table width="90%"><br><br><br>
                <br>
                <tr>
                    <td width="150" style="vertical-align: top;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td width="900" style="font-family: Arial; font-size:11; text-align:right;"> <b><u>{{ strtoupper($cetak->nama_lengkap) }}</u>
                        </b> <br> Nip: {{ $cetak->nip }} </td>
                </tr>
            </table>
            <br><br><br><br>
        </div>

        <div style="height: 100vh">
            <table width="90%">
                <tr>
                    <font style="font-size:14;"><b>DAFTAR PENGELUARAN RILL</b></font>
                </tr>
                <tr>
            </table>

            <table width="90%">
                <br>
                <tr>
                    <td width="964"> Yang bertandatangan di
                        bawah ini :
                    </td>
                </tr>
            </table>

            <table width="90%"><br>
                <tr>
                    <td width="100" style="vertical-align: top;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td width="70"> Nama </td>
                    <td>:</td>
                    <td>{{ strtoupper($cetak->nama_lengkap ) }}</td>
                </tr>

                <tr>
                    <td width="100" style="vertical-align: top;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td> NIP </td>
                    <td>:</td>
                    <td>{{ $cetak->nip }}</td>
                </tr>

                <tr>
                    <td width="100" style="vertical-align: top;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td> Jabatan </td>
                    <td>:</td>
                    <td>{{ $cetak->jabatan }}</td>
                </tr>
            </table>

            <table width="90%"><br>
                
                <tr>
                    <td width="964"> Berdasarkan Surat
                        Perintah Perjalanan Dinas (SPPD) Nomor : {{ $cetak->no_sppd }}, tanggal
                        {{ $cetak->tanggal }} dengan ini kami menyatakan dengan sesungguhnya bahwa :

                    </td>
                </tr>
            </table>

            <table width="90%">
                <br>
                <tr>
                    <td width="964">1. Biaya transport
                        Pejabat / Pegawai dan atau biaya penginapan di bawah ini yang tidak dapat di peroleh
                        bukti - bukti pengeluarannya, meliputi :
                    </td>
                </tr>
            </table>
            <br>
            <table style="border-collapse: collapse" width="90%" border="1" cellpadding="5">
                <tr width="50%">
                    <th width="10%">NO</th>
                    <th width="40%">URAIAN</th>
                    <th width="40%">JUMLAH</th>
                </tr>
                    <tr>
                        <td style="text-align: center">1</td>
                        <td>Transport PP ( DARAT )</td>
                        <td align="right">{{ number_format($cetak->transport_pp, 2, ',', '.') }}</td>
                    </tr>

                    <tr>
                        <td style="text-align: center">2</td>

                        <td>Biaya Hotel 30 %</td>

                        <td align="right">{{ number_format($cetak->biaya_hotel, 2, ',', '.') }}</td>

                    </tr>

                    <tr>

                        <td style="text-align: center">3</td>

                        <td>Belanja BBM Kend Dinas</td>

                        <td align="right">{{ number_format($cetak->belanja_bbm, 2, ',', '.') }}</td>

                    </tr>
                    
                     <tr>

                        <td style="text-align: center">4</td>

                        <td>Jasa Medical Checkup</td>

                        <td align="right">{{ number_format($cetak->medical_checkup, 2, ',', '.') }}</td>

                    </tr>

                    <tr>

                        <td style="text-align: center">5</td>

                        <td>Transport dari tempat asal menuju Bandara / Terminal
                        </td>

                        <td align="right">{{ number_format($cetak->tinggal_to_bandara_terminal, 2, ',', '.') }}</td>

                    </tr>

                    <tr>

                        <td style="text-align: center">6</td>

                        <td>Transport dari Bandara / Terminal ke tempat tujuan</td>

                        <td align="right">{{ number_format($cetak->bandara_terminal_to_tujuan, 2, ',', '.') }}</td>

                    </tr>

                    <tr>

                        <td style="text-align: center">7</td>

                        <td>Transport dari tempat tujuan ke Bandara / Terminal</td>

                        <td align="right">{{ number_format($cetak->tujuan_bandara_terminal, 2, ',', '.') }}</td>

                    </tr>

                    <tr>

                        <td style="text-align: center">8</td>

                        <td>Transport dari Bandara / Terminal ke tempat asal</td>

                        <td align="right">{{ number_format($cetak->bandara_terminal_tinggal, 2, ',', '.') }}</td>

                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center">
                            Jumlah
                        </td>

                        <td align="right">
                            {{ number_format($cetak->total_riil, 2, ',', '.') }}
                        </td>
                    </tr>
            </table>

<br>
            <table width="90%">
                <tr>
                    <td style="vertical-align: top;">2. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>Jumlah uang tersebbut
                        pada angka di atas benar - benar dikeluarkan untuk pelaksanaan perjalanan dinas
                        dimaksudkan dan apabila dikemudian hari terdapat kelebihan atas pembayaran, kami bersedia untuk
                        menyetor kelebihan tersebut ke Kas Daerah.
                    </td>
                </tr>
            </table>
            <br>

            <table width="90%">
                <tr>
                    <td>Demikian
                        Pernyataan ini
                        kami buat dengan sebenarnya, untuk dipergunakan sebagaimana mestinya.
                    </td>
                </tr>
            </table>

            <br>

            <table width="90%" style="margin: 0 auto;">
                <tr>
                    <td width="964"> Mengetahui / Menyetujui
                        <br>Kuasa Pengguna Anggaran
                        <br><br><br><br><br><br>
                        <u> <b>{{ strtoupper($cetak->nama_lengkap) }}</b></u>
                        <br>Nip: {{ $cetak->nip }}
                    </td>
                    <td width="900"> Mamuju, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2021 <br> Pelaksana SPPD<br>
                        <br><br><br><br><br>
                        <b><u>{{ strtoupper($cetak->nama_lengkap) }}</u></b>
                        <br>
                        Nip: {{ $cetak->nip }}
                    </td>
                </tr>
            </table>
        </div>

</body>

</html>
