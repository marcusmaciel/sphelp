<aside class="control-sidebar control-sidebar-dark" ng-controller="controlSidebarController">
    <div name="chamados-em-aberto" class="tab-content">
        <h3 class="control-sidebar-heading">
            <span>Chamados em aberto</span>
            <span class="badge bg-green hidden" ng-class="{show:listaCHamados != 'undefined'}"
                  ng-if="listaChamados.length > 0">{{listaChamados.length}}</span>
        </h3>
        <ul class="control-sidebar-menu hidden" ng-class="{show:listaCHamados != 'undefined'}">

            <li class="overlay" ng-if="loading == true">
                <i class="fa fa-refresh fa-spin"></i>
            </li><!-- /.overlay -->

            <!--chamados-->
            <li ng-repeat="chamado in listaChamados"  ng-mouseover="limpaNovosChamados()">
                <span class="badge bg-blue">{{chamado._i}}</span>
                <div class="menu-info" tooltip-placement="left"
                     data-toggle="tooltip" uib-tooltip="{{chamado.descricao}}">
                    <h4 class="control-sidebar-subheading sp-text-overflow-ellipsis">{{chamado.descricao}}</h4>
                    <p>{{chamado.sla}}</p>
                </div>
            </li>

            <!--nenhum chamado-->
            <li ng-if="listaChamados.length == 0" style="justify-content: center;">
                <h4 class="control-sidebar-subheading sp-text-overflow-ellipsis">nenhum chamado em aberto!</h4>
            </li>

        </ul><!-- /.control-sidebar-menu -->
    </div><!--/.[name=chamados-em-aberto]-->
</aside>