<div class="box" name="chamados-em-aberto">
    <div class="box-header with-border">
        <h3 class="box-title">
            Chamados
        </h3>
        <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Procurar">
            </div>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <!--menu de filtros-->
        <div class="row"></div>

        <table class="table table-condensed table-hover table-fixed" style="display: none"
               ng-class="{show : listaChamados.length > 0}">
            <tbody>
                <tr>
                    <th class="text-center" style="width: 40px;">#</th>
                    <th>Empresa</th>
                    <th class="hidden-xs">Descrição</th>
                    <th class="hidden-xs">Tempo de espera</th>
                </tr>
                <tr tabindex="-1" ng-repeat="chamado in listaChamados">
                    <td class="text-center">
                        <a href="#">{{chamado._i}}</a>
                    </td>
                    <td>
                        <span ng-if="chamado.primeiroNome">{{chamado.primeiroNome}} </span>
                        <span ng-if="chamado.segundoNome">({{chamado.segundoNome}})</span>
                    </td>
                    <td class="cover hidden-xs">
                        {{chamado.descricao}}
                    </td>
                    <td class="hidden-xs">
                        <span class="badge">{{chamado.sla}}</span>
                    </td>
                </tr>
            <tbody>
        </table>
    </div>
    <!-- /.box-body -->
    <div class="overlay" ng-if="loading == true">
        <i class="fa fa-refresh fa-spin"></i>
    </div><!-- /.overlay -->
</div><!-- /.chamados -->