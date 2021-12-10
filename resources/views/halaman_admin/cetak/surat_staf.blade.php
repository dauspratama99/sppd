<!DOCTYPE html>
<html>

<head>
    <title>Surat SPPD Staff</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }

        table tr .text2 {
            text-align: right;
            font-size: 10px;
        }

        table tr .text {
            font-size: 10px;
        }

        table tr td {
            font-size: 10px;
        }

        .table,
        th,
        td {}

    </style>

    {{-- <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script> --}}
</head>

<body onload="print()">
    {{-- <div class="container" width="50"> --}}
    @foreach ($detail_surat as $item)
        <center style="display: flex; height: 100vh;">
            <div style="width: 50%;">
                <table width="95%">
                    <tr>
                        <td><img src="{{ asset('gambar/logo.png') }}" width="90" height="90">
                        </td>
                        <td class="ml-5">
                            <center>
                                <font style="font-family: Tahoma; font-size:12;">PEMERINTAH PROVINSI SULAWESI BARAT
                                </font>
                                <br>
                                <font style="font-family: Tahoma; font-size:14;"><b>BADAN PENGELOLA KEUANGAN DAN
                                        PENDAPATAN DAERAH
                                    </b>
                                </font>
                                <br>
                                {{-- <font style="font-family: Tahoma; font-size:14;">KOMPLEKS PERKANTORAN GUBERNUR – RANGAS
                                    BARU</font>
                                <br> --}}
                                <font style="font-family: Tahoma; font-size:10;">Jl. H. Abd. Malik Pattana Endeng –
                                    Rangas –
                                    Mamuju 91512 </font><br>
                                <font style="font-family: Tahoma; font-size:10;">e-mail : ................., website :
                                    .................
                                </font><br>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr style="border: 1px solid black;">
                        </td>
                    </tr>

                    <table width="95%">
                        <tr>
                            <td style="font-family: Arial; font-size:11; text-align: right;">Nomor :
                                {{ $item->no_sppd }}
                            </td>
                        </tr>
                    </table>
                    <br>

                    <table width="95%">
                        <tr>
                            <td style="font-family: Arial; font-size:11; text-align: center;"><b>SURAT PERINTAH
                                    PERJALANAN DINAS (SPPD)
                            </td>
                        </tr>
                    </table>

                    <table width="95%" border="1" cellpadding="5">
                        <tr>
                            <td style="font-family: Arial; font-size:6;">1</td>
                            <td style="font-family: Arial; font-size:6;" width="50%">Pengguna Anggaran</td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">
                                <b>{{ $item->t_status_jabatan }}</b>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">2</td>
                            <td style="font-family: Arial; font-size:6;">Nama Kepala Daerah/ Wakil Kepala Daerah/
                                Pimpinan/ Anggota DPRD/ Nama PNS dan NIP/PTT
                                yang melaksanakan Perjalanan Dinas</td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">
                                <b>{{ $item->nama_lengkap }}</b><br><br>
                                {{ $item->nip }}
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">3</td>
                            <td style="font-family: Arial; font-size:6;">a. Pangkat dan Golongan<br>
                                b. Jabatan/ Instansi<br>
                                c. Tingkat Biaya Perjalanan Dinas</td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">
                                a. {{ $item->pangkat }} {{ $item->golongan }}<br>
                                b. {{ $item->jabatan }}<br>
                                c. {{ $item->tingkat_biaya }}</td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">4</td>
                            <td style="font-family: Arial; font-size:6;">Maksud Perjalanan Dinas</td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">{{ $item->uraian }}</td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">5</td>
                            <td style="font-family: Arial; font-size:6;">Alat angkutan yang dipergunakan </td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">
                                {{ $item->alat_angkutan }}</td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">6</td>
                            <td style="font-family: Arial; font-size:6;">a. Tempat berangkat<br>
                                b. Tempat tujuan</td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">a.
                                {{ $item->tempat_berangkat }}<br>
                                b. {{ $item->tempat_tujuan }}</td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">7</td>
                            <td style="font-family: Arial; font-size:6;">a. Lamanya Perjalanan Dinas<br>
                                b. Tanggal berangkat<br>
                                c. Tanggal harus kembali/ tiba ditempat
                                Baru*)</td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">a.
                                {{ $item->selama }}<br>
                                b. {{ $item->tanggal_berangkat }}<br>
                                c. {{ $item->tanggal_kembali }}</td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">8</td>
                            <td style="font-family: Arial; font-size:6;">Pengikut : Nama</td>
                            <td style="font-family: Arial; font-size:6;">Tanggal Lahir</td>
                            <td style="font-family: Arial; font-size:6;">Keterangan</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="font-family: Arial; font-size:6;">1.<br>
                                2.<br>
                                3.<br>
                                4.<br>
                                5.
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">9</td>
                            <td style="font-family: Arial; font-size:6;">Pembebanan Anggaran<br>
                                a. SKPD<br>
                                b. Akun</td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">a. DINAS PERPUSTAKAAN DAN ARSIP
                                <br>
                                b.
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">10</td>
                            <td style="font-family: Arial; font-size:6;">Keterangan Lain-lain</td>
                            <td colspan="2"></td>
                        </tr>
                    </table>
                    <table width="80%">
                        <tr>
                            <td style="font-family: Arial; font-size:11; text-align: left;">Coret yang tidak perlu *)
                            </td>
                        </tr>
                    </table>

                    <table width="50%" style="margin-left: 330px;">
                        <tr>
                            <td>
                                <font style="font-family: Tahoma; font-size:6;">Dikeluarkan di Mamuju
                                </font>
                                <br>
                                <font style="font-family: Tahoma; font-size:6;">Pada tanggal, {{ \Carbon\Carbon::create($item->tanggal)->isoFormat('D MMMM Y') }}</font><br>
                                <font style="font-family: Tahoma; font-size:6;"><b>
                                        {{ $item->t_status_jabatan }}</b>
                                </font><br>

                            </td>
                        </tr>
                    </table>
                    <br><br><br>
                    <table width="50%" style="margin-left: 330px">
                        <tr>
                            <td>

                                <font style="font-family: Tahoma; font-size:10;"><b>
                                        {{ $item->nm_lengkap }}</b>
                                </font><br>
                                <font style="font-family: Tahoma; font-size:12;">Pangkat :
                                    {{ $item->t_pangkat }}
                                </font>
                                <br>
                                <font style="font-family: Tahoma; font-size:10;">NIP. : {{ $item->t_nip }}
                                </font><br>

                            </td>
                        </tr>
                    </table>

                </table>
            </div>
            <div style="width: 50%;">
                <table border="1" style="width: 95%">
                    <tr>
                        <td style="width: 50%; padding: 5px"></td>
                        <td style="width: 50%; padding: 5px">
                            <table>
                                <tr>
                                    <td width="10" style="vertical-align: top">I.</td>
                                    <td width="100">Berangkat dari <br>(Tempat Kedudukan) </td>
                                    <td width="5">:</td>
                                    <td>{{ $item->tempat_berangkat }}</td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100">Ke </td>
                                    <td width="5">:</td>
                                    <td>{{ $item->tempat_tujuan }}</td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100">Pada Tanggal</td>
                                    <td width="5">:</td>
                                    <td>{{ \Carbon\Carbon::create($item->tanggal_berangkat)->isoFormat('D MMMM Y') }}</td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100"></td>
                                    <td width="5"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100" colspan="3"><span
                                            style="font-weight: 600;">{{ $item->t_status_jabatan }}
                                            <br><br><br><br><br><u>{{ $item->nm_lengkap }}</u></span>
                                        <br><br>NIP. {{ $item->t_nip }}
                                    </td>
                                    <td width="5"></td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 50%; padding: 5px">
                            <table>
                                <tr>
                                    <td width="10" style="vertical-align: top">II.</td>
                                    <td width="100">Tiba di</td>
                                    <td width="5">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100">Pada Tanggal </td>
                                    <td width="5">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100" colspan="3"><span>Kepala
                                            <br><br><br><br><br><br><u>(……………………………………………..)</u></span>
                                        <br><br>NIP
                                    </td>
                                    <td width="5"></td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width: 50%; padding: 5px">
                            <table>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100">Berangkat dari</td>
                                    <td width="5">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100">Ke </td>
                                    <td width="5">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100">Pada Tanggal</td>
                                    <td width="5">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100" colspan="3"><span>Kepala
                                            <br><br><br><br><u>(……………………………………………..)</u></span>
                                        <br><br>NIP
                                    </td>
                                    <td width="5"></td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 50%; padding: 5px">
                            <table>
                                <tr>
                                    <td width="10" style="vertical-align: top">III.</td>
                                    <td width="100">Tiba di</td>
                                    <td width="5">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100">Pada Tanggal </td>
                                    <td width="5">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100" colspan="3"><span>Kepala
                                            <br><br><br><br><br><br><u>(……………………………………………..)</u></span>
                                        <br><br>NIP
                                    </td>
                                    <td width="5"></td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width: 50%; padding: 5px">
                            <table>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100">Berangkat dari</td>
                                    <td width="5">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100">Ke </td>
                                    <td width="5">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100">Pada Tanggal</td>
                                    <td width="5">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100" colspan="3"><span>Kepala
                                            <br><br><br><br><u>(……………………………………………..)</u></span>
                                        <br><br>NIP
                                    </td>
                                    <td width="5"></td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 50%; padding: 5px">
                            <table width="100%">
                                <tr>
                                    <td width="10" style="vertical-align: top">IV.</td>
                                    <td width="100">Tiba di <br>(Tempat Kedudukan)</td>
                                    <td width="5">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100">Pada Tanggal </td>
                                    <td width="5">:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100" colspan="3"><span>Pengguna Anggaran
                                            <br><br><br><br><br><u><b>{{ $item->nm_lengkap }}</b></u></span>
                                        <br><br>NIP. {{ $item->t_nip }}
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width: 50%; padding: 5px">
                            <table width="100%">
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td colspan="3" align="justify">Telah diperiksa dengan keterangan bahwa perjalanan
                                        tersebut atas perintah pejabat yang berwenang dan semata-mata untuk kepentingan
                                        jabatan dalam waktu yang sesingkat-singkatnya.</td>
                                    <td width="5"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="10" style="vertical-align: top"></td>
                                    <td width="100" colspan="3"><span>Pengguna Anggaran
                                            <br><br><br><br><br><u><b>{{ $item->nm_lengkap }}</b></u></span>
                                        <br><br>NIP. {{ $item->t_nip }}
                                    </td>
                                    <td width="5"></td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px" colspan="2">
                            V. Catatan Lain-lain
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px" colspan="2">
                            <table>
                                <tr>
                                    <td>VI.</td>
                                    <td>PERHATIAN</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        Pengguna Anggaran / Kuasa Pengguna Anggaran yang menerbitkan SPPD, Kepala Daerah
                                        /
                                        Wakil Kepala DaerahPimpinan dan Anggota DPRD, PNS dan PTT yang melakukan
                                        Perjalanan dinas, para pejabat yang mengesahkan tangga l berangkat / tiba, serta
                                        bendahara pengeluaran bertanggungjawab berdasarkan peraturan-peraturan keuangan
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </center>
    @endforeach
    {{-- </div> --}}
</body>

</html>
