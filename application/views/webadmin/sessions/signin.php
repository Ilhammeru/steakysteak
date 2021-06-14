<!doctype html>

<html>

<head>
    <title>
        &Bobabar Webadmin
    </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="NOINDEX,NOFOLLOW">

    <!-- START STYLES -->

    <!-- Bootstrap v5.0.0 -->
    <link rel="stylesheet" href="<?=base_url();?>assets/bootstrap/dist/css/bootstrap.min.css?v5.0.0">
    
    <!-- END STYLES -->

    <!-- START PLUGINS -->

    <!-- jQuery v3.5.1 -->
    <script src="<?=base_url();?>assets/vendor/jquery/jquery-3.5.1.min.js?v3.5.1"></script>

    <!-- Bootstrap v5.0.0 -->
    <script src="<?=base_url();?>assets/bootstrap/dist/js/bootstrap.min.js?v5.0.0"></script>

    <!-- END PLUGINS -->

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
        }

        .form-signin {
            width: 100%;
            max-width: 350px;
            padding: 5px;
            margin: auto;
        }

        .box {
            height: 10vh;
            width: 10vh;
            background-color: #eaeaea;
            border-radius: .50rem;
        }

        .float-right {
            float: right;
        }

        .fs-10 {
            font-size: 10px;
        }

        .form-control, .form-control:focus {
            border: none;
            background-color: #eaeaea;
            font-size: .75rem;
            border-radius: .50rem;
            padding: .75rem 1rem;
            box-shadow: none;
            color: #6c757d;
        }

        .clr-primary {
            color: #0d6efd;
        }

        .center {
            display: block !important;
            text-align: -webkit-center !important;
        }

        .alert {
            border-radius: .50rem;
            font-size: .75rem;
            padding: .75rem;
        }
    </style>

</head>

<body class="text-center" onload="$('#username').focus();">

    <main class="form-signin">

        <form id="form-signin" method="post" action="<?=site_url('sessions/signin');?>">
        <input type="hidden" name="btn-login" value="true">

        <div class="row mb-4">

            <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 offset-4 offset-lg-4 offset-md-4 offset-sm-4 offset-xs-4 d-grid center">
                <div class="box"></div>
            </div>
            <!--/.col -->

        </div>
        <!--/.row -->
        
        <?=$this->layout_lib->load_view('webadmin/layouts/alerts');?>

        <div class="row mb-3">
            
            <div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 offset-2 offset-lg-2 offset-md-2 offset-sm-2 offset-xs-2">
                <input type="text" name="username" class="form-control" placeholder="Username" id="username">
            </div>
            <!--/.col -->

        </div>
        <!--/.row -->
            
        <div class="row mb-4">
            <div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 offset-2 offset-lg-2 offset-md-2 offset-sm-2 offset-xs-2">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="float-right fs-10 clr-primary p-1">Forgot password?</span>
            </div>
            <!--/.col -->
        </div>
        <!--/.row -->

        <div class="row">

            <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 offset-4 offset-lg-4 offset-md-4 offset-sm-4 offset-xs-4 d-grid">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <!--/.col -->
        </div>
        <!--/.row -->

        </form>
    </main>

    

</body>

</html>

