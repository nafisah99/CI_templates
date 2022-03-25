<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/bootstrap5/css/bootstrap.min.css');?>" rel="stylesheet">
</head>

<body>

    <div class="container">
        <h1><?php echo $content;?></h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">File</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>ShippingLabel</td>
                    <td><a href="<?php echo base_url("templateController/templates"); ?>" type="button"
                            class="btn btn-primary">Print</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Kwitansi</td>
                    <td><a href="<?php echo base_url("templateController/sec_templates"); ?>" type="button"
                            class="btn btn-primary">Print</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>SPK</td>
                    <td><a href="<?php echo base_url("templateController/thr_templates"); ?>" type="button"
                            class="btn btn-primary">Print</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>BAST</td>
                    <td><a href="<?php echo base_url("templateController/fth_templates"); ?>" type="button"
                            class="btn btn-primary">Print</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

    <script src="<?php echo base_url('assets/bootstrap5/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap5/js/bootstrap.min.js');?>"></script>
</body>

</html>