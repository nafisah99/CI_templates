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
        margin: 1cm 10px 10px;
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

    #f_themes td,
    #f_themes th {
        border: 2px solid block;
        padding: 8px;
        margin: 0 0 0 0;
        padding: 0 0 0 0;
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

    #f_txt {
        padding-left: 10px;
    }
    </style>
    <link href="<?php echo base_url('assets/bootstrap5/css/bootstrap.min.css');?>" rel="stylesheet">
</head>

<body>
    <main>
        <h3 style="text-align:center;"> TEMPELKAN DI LUAR PAKET</h3>
        <table id="f_themes" class="tables_sett">
            <thead class="">
                <tr>
                    <th rowspan="2" colspan="2" style="border-right:none"><img
                            style="width:300px; height:130px; padding-right:100px;"
                            src="<?php echo 'assets/picture/siplah_black.JPG'?>" alt="" />
                    </th>
                    <th colspan="2" style="border-bottom:none; border-left:none;padding-top:50px">
                        <img style="width:80px;height:70px;" src="<?php echo 'assets/picture/payung.png'?>" alt="" />
                        <img style="width:80px; height:60px; max-width:175px;"
                            src="<?php echo 'assets/picture/gelas_pecah.png'?>" alt="" />
                        <img style="width:80px;height:70px; max-width:175px;"
                            src="<?php echo 'assets/picture/fragile.jpg'?>" alt="" />
                    </th>
                </tr>
                <tr>
                    <td colspan="2" style="border-left:none; text-align:center; border-top:none; text-align:center;">
                        <b>TANGANI DENGAN HATI-HATI</b>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2" id="f_txt" style="padding-left:10px;"><b>No. Pesanan :</b> S10000854470</td>
                    <td colspan="2" id="f_txt" style="padding-left:10px;"><b>Tanggal Pesan :</b> 26 Apr 2021 10:04</td>
                </tr>
                <tr>
                    <td colspan="4" id="f_txt" style="padding-left:10px;padding-bottom:10px;">
                        <b> Penerima</b> : <br>
                        NANANG KHOIRUDIN <br>
                        SMP NEGERI 3 SATU ATAP PAGUYAMAN PANTAI <br>
                        Gorontalo, Kec. Paguyaman Pantai Kab. Boalemo Prov. Gorontalo <br>
                        <b>No. Telepon </b> : 085398604616
                    </td>
                </tr>
                <tr>
                    <td colspan="4" id="f_txt" style="padding-left:10px;padding-bottom:10px;">
                        <b>Pengirim</b> : <br>
                        PT. LUMBUNG AMANAH SOLUSI <br>
                        Jl. Manunggal Pratama No. 8, Kec. Makasar Kota Jakarta Timur Prov. D.K.I. Jakarta <br>
                        No. Telepon : 085966656356 <br>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" id="f_txt" style="padding-left:10px;padding-bottom:10px;">
                        Jumlah Barang : 1
                    </td>
                </tr>
                <tr>
                    <td colspan="4" id="f_txt" style="padding-left:10px;padding-bottom:10px;">
                        <b>Perhatian </b> : <br>
                        -. Periksa barang dengan teliti saat paket diterima <br>
                        -. Pastikan jumlah dan barang sesuai dengan pesanan <br>
                        -. Segera lakukan Konfirmasi Terima di halaman akun Anda setelah barang diperiksa. <br>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
    <script src="<?php echo base_url('assets/bootstrap5/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap-5.1.3-dist/js/bootstrap.min.js');?>"></script>
</body>

</html>