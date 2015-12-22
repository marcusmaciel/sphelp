<div class="box box-red">
    <div class="box-header with-border">
        <h3 class="box-title">
            Clientes com restrição
        </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <?php file_get_contents('http://www.nfe.fazenda.gov.br/portal/disponibilidade.aspx')?>
    </div>
    <!-- /.box-body -->
</div><!-- /.box -->
