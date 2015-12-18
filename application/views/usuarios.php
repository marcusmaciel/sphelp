<!DOCTYPE html>
<html>
    <?php if ($head) echo $head; ?>
    <body class="hold-transition skin-green sidebar-mini sidebar-collapse">
        <div class="wrapper">
            <?php if (isset($mainHeader)) echo $mainHeader; ?>
            <?php if (isset($mainSidebar)) echo $mainSidebar; ?>
            <?php if (isset($gerenciadorUsuarios)) echo $gerenciadorUsuarios; ?>
            <?php if (isset($mainFooter)) echo $mainFooter; ?>
            <?php if (isset($loginPage)) echo $loginPage; ?>
        </div>
        <script data-main="http://localhost/sphelp/assets/js/main.js" 
                src="<?php echo LAYOUT_ASSETS; ?>plugins/requirejs/require.js">
        </script>
    </body>
</html>