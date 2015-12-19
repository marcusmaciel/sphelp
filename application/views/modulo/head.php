<!--components/head-->
<head>
    <link rel="icon" type="image/png" href="<?php echo LAYOUT_ASSETS; ?>img/logo.png">
    <meta charset="utf-8">
    <script name="sphelp">
        window.sphelp = ['<?php echo $this->security->get_csrf_token_name(); ?>', '<?php echo $this->security->get_csrf_hash(); ?>'];
        document.head.querySelector('script[name=sphelp]').remove();
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPHelp</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="<?php echo LAYOUT_ASSETS; ?>css/style.css" rel="stylesheet" type="text/css" />
    <script data-main="http://localhost/sphelp/assets/js/main.js" src="<?php echo LAYOUT_ASSETS; ?>plugins/requirejs/require.js"></script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
