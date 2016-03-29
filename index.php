<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Asif Collection | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body class="img-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-7">
                <h2 class="font-bold" style="color: #fff; font-size: 40px; line-height: 70px;">Asif Saha Boutique</h2>
                <p style="color: #fff; font-size: 30px;">Warehouse &amp; Showroom management</p>
            </div>
            <div class="col-md-5">
                <div class="ibox-content">
                	<h3 style="margin-bottom: 10px; font-size: 12px;">Enter username &amp; password to login</h3>
                    <form class="m-t" role="form" action="login_chk.php" method="post">
                        <div class="form-group">
                            <input type="text" id="uname" name="uname" class="form-control" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" class="form-control" placeholder="Password" required="">
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6Le7OhsTAAAAAEGLVYAk3dllL3hLRVmBnGEUVaH1"></div>
                            <?php
                                if(isset($_REQUEST['captchaError'])){
                                	?> <p style='color:#FF0000'>Please verify captcha</p> <?php
                                }
                            ?>
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6" style="color: #000">
                Asif Saha Boutique
            </div>
            <div class="col-md-6 text-right">
               <small style="color: #000">© 2016-2017</small>
            </div>
        </div>
    </div>

</body>

<style>
	.rc-anchor-alert{
		display: none !important;
	}
</style>
<script>
	document.getElementById("uname").focus();
</script>
</html>
