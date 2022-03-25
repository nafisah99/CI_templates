<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <style>
    @page {
        size: A4;
        margin-top: 0;
        margin-right: 30px;
    }

    body {
        font-size: 14px;
        line-height: 24px;
        font-family: "arial", "arial", Arial;
        color: black;
    }

    #f_themes {
        font-family: Arial;
        border-collapse: collapse;
        width: 100%;
        margin: 0 0 0 0;
        padding: 0 0 0 0;
    }

    #no_border {
        font-family: Arial;
        border-collapse: collapse;
        width: 100%;
        margin: 0 0 0 0;
        padding: 0 0 0 0;
    }


    #no_border td,
    #no_border th {
        border: none;
        padding: 8px;
        margin: 0 0 0 0;
        padding: 0 0 0 0;
    }



    #f_themes td,
    #f_themes th {
        border: 2px solid block;
        padding: 8px;
        margin: 0 0 0 0;
        padding: 0 0 0 0;
    }

    .titles {
        text-align: left;
    }

    #f_themes tr:nth-child(even) {
        background-color: white;
    }

    #f_themes tr:hover {
        background-color: #ddd;
    }

    #f_themes th,
    .colour {
        padding-top: 12px;
        /* background-color: #e2efda;
        color: #215e0c; */
        margin: 0 0 0 0;
        padding: 0 0 0 0;
    }

    #no_kwitansi {
        text-align: left;
        font-size: 12px;
    }

    #f_txt {
        padding-left: 10px;
    }
    </style>
    <link href="<?php echo base_url('assets/bootstrap5/css/bootstrap.min.css');?>" rel="stylesheet">
</head>

<body>
    <p style="text-align:right;">Halaman 01 / 01</p>
    <main>
        <table id="no_border" class="">
            <thead>
                <tr>
                    <td colspan="2">
                        <h2 class="titles" style="padding-right:200px">Kwitansi Pembayaran</h2>
                    </td>
                    <td colspan="3" id="no_kwitansi" style="padding-top: 20px;">
                        <b>Nomor Kwitansi</b><br>
                        BLI-SIPLah-S10000854470-1 <br>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="padding-top:20px">PT. LUMBUNG AMANAH SOLUSI <br>
                        Jl. Manunggal Pratama No. 8 <br>
                        085966656356</td>
                </tr>
                <br>
            </thead>
            <tbody id="f_themes">
                <tr>
                    <td colspan="" style="border-bottom:none; text-align:center;">Sudah terima dari</td>
                    <td colspan="4" style="padding-left:5px;">SMP NEGERI 3 SATU ATAP PAGUYAMAN PANTAI , Gorontalo</td>
                </tr>
                <tr>
                    <td colspan="" style="border-top:none; border-bottom:none; text-align:center;">Terbilang</td>
                    <td colspan="4" style="padding-left:5px;">Dua juta seratus enam puluh ribu rupiah</td>
                </tr>
                <tr>
                    <td colspan="" style="border-top:none; text-align:center;">Untuk Pembayaran</td>
                    <td colspan="4" style="padding-left:5px;">Kegiatan Jual Beli melalui Mitra SIPLah Blibli.com</td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table>
            <tbody>
                <tr>
                    <td colspan="5"><b>Catatan</b></td>
                </tr>
                <tr>
                    <td>
                        *Transaksi transfer antar bank akan dikenakan biaya administrasi <br>
                        *Pembayaran menggunakan BOSS00120 <br>
                        Via BRI 1017310202486323 <br>
                        an. BLIBLI SIPLAH
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" style="padding-top:30px">
                        <b>Jumlah RP</b> <br>
                        2.160.000
                    </td>
                    <td id="no_kwitansi" style="padding-left:100px">
                        Jakarta, 29 April 2021
                    </td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td style="padding-left:100px; padding-top:30px">Nama Penanggung Jawab</td>
                </tr>

            </tfoot>
        </table>
    </main>
    <script src=" <?php echo base_url('assets/bootstrap5/js/jquery.min.js');?>">
    </script>
    <script src="<?php echo base_url('assets/bootstrap-5.1.3-dist/js/bootstrap.min.js');?>">
    </script>
</body>

</html>