<!DOCTYPE html>
<html>
    <?php if ($head) echo $head; ?>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php if ($mainHeader) echo $mainHeader; ?>
            <?php if ($mainSidebar) echo $mainSidebar; ?>
            <?php if ($contentWrapper) echo $contentWrapper; ?>
            <?php if ($mainFooter) echo $mainFooter; ?>
            <?php if ($loginPage) echo $loginPage; ?>
        </div>
        <?php if ($scripts) echo $scripts; ?>
    </body>
</html>