<!DOCTYPE html>
<html lang="fr_FR">
<head>	

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="language" content="fr" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="//getbootstrap.com/examples/dashboard/../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.3.0/css/bootstrap.min.css">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.3.0/css/bootstrap-theme.min.css">



    <!-- Custom styles for this template -->
    <?= $this->Html->css('theme.css') ?>
    <?= $this->Html->css('mediaqueries.css') ?>
    <?= $this->Html->css('menu.css') ?>
    <?= $this->Html->css('carrousel.css') ?>
    <?= $this->Html->css('simple-sidebar.css') ?>


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="//getbootstrap.com/examples/dashboard/../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="//getbootstrap.com/examples/dashboard/../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <style>
        .arrow {
            float: right;
        }
        .glyphicon.arrow:before {
            content: "\e079";
        }
        .active > a > .glyphicon.arrow:before {
            content: "\e114";
        }
        .fa.arrow:before {
            content: "\f104";
        }
        .active > a > .fa.arrow:before {
            content: "\f107";
        }
        .plus-times {
            float: right;
        }
        .fa.plus-times:before {
            content: "\f067";
        }
        .active > a > .fa.plus-times {
            filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .plus-minus {
            float: right;
        }
        .fa.plus-minus:before {
            content: "\f067";
        }
        .active > a > .fa.plus-minus:before {
            content: "\f068";
        }
    </style>

</head>
<body>
<?= $this->fetch('content') ?>        
</body>
</html>