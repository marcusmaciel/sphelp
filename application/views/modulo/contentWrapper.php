<!--modulo/mainHeader-->
<div class="content-wrapper">

    <!-- content -->
    <section class="content">

        <div class="row">

            <?php
            if (isset($content)) {
                foreach ($content as $col => $html) {
                    echo $html;
                };
            };
            ?>

        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
