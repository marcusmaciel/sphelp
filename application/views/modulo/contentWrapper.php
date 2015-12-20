<!--modulo/mainHeader-->
<div class="content-wrapper">

    <!-- content -->
    <section class="content">

        <div class="row">

            <!--área dinamica-->
            <div name="leftCol" class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                <?php
                if (isset($leftCol)) {
                    foreach ($leftCol as $componente => $html) {
                        echo $html;
                    };
                };
                ?>
            </div>

            <!--chamados em aberto (fixa em todo o sistema)-->
            <div name="rightCol" class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                <?php
                if (isset($rightCol)) {
                    foreach ($rightCol as $componente => $html) {
                        echo $html;
                    };
                };
                ?>
            </div>

        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
