<!--modulo/mainHeader-->
<div class="content-wrapper">

    <!-- content -->
    <section class="content">
        <?php
        if (isset($content)) {
            foreach ($content as $row) {
                echo '<div class="row">';
                foreach ($row as $col) {
                    echo '<div class="' . $col['class'] . '">';
                    foreach($col['box'] as $box => $html){
                        echo $html;
                    };
                    echo '</div>';
                };
                echo '</div>';
            };
        };
        ?>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
