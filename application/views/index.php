<!DOCTYPE html>
<html>
    <?php if ($head) echo $head; ?>
    <body class="hold-transition skin-green sidebar-mini sidebar-collapse control-sidebar-open">
        <div class="wrapper">
            <?php if (isset($mainHeader)) echo $mainHeader; ?>
            <?php if (isset($mainSidebar)) echo $mainSidebar; ?>
            <?php if (isset($contentWrapper)) echo $contentWrapper; ?>
            <?php if (isset($mainFooter)) echo $mainFooter; ?>
            <?php if (isset($loginPage)) echo $loginPage; ?>
        </div>
    </body>
</html>