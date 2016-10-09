<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Lockscreen</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/bootstrap/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/bootstrap/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper" style="max-width: 800px">
        <div class="lockscreen-logo">
            <a href="javascript:;"><b>Si</b>Kangkung</a>
        </div>

        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item" style="width: 580px">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="assets/dist/img/web-crawler-128.png" alt="Web Crawler">
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->
            <form class="lockscreen-credentials" action="<?= base_url() ?>get_product_detail" method="post">
                <div class="input-group">
                    <input type="text" name="product_detail_url" class="form-control" placeholder="product detail URL " value="<?= (empty($result['product_detail_url'])?'-':$result['product_detail_url']) ?>">

                    <div class="input-group-btn">
                        <button type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
                    </div>
                </div>
            </form>
            <!-- /.lockscreen credentials -->

        </div>

        <?php if (!empty($result)): ?>
            <div class="text-center">
                <b><?= $result['message'] ?></b>
            </div>

            <div class="help-block text-center">
                Produk : <b><?= (empty($result['produk'])?'-':$result['produk']) ?></b>
            </div>

            <div class="help-block text-center">
                Harga : <b><?= (empty($result['harga'])?'-':$result['harga']) ?></b>
            </div>
        <?php endif; ?>

        <div class="lockscreen-footer text-center">
            Design by <b><a href="http://almsaeedstudio.com" class="text-black">Almsaeed Studio</a></b><br>
            All rights reserved
        </div>
    </div>
    <!-- /.center -->

    <!-- jQuery 2.2.0 -->
    <script src="assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
