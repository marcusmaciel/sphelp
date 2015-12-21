<!--modulo/controlSidebar-->
<aside class="control-sidebar control-sidebar-dark">
    <div name="chamados-em-aberto" class="tab-content" ng-controller="controlSidebarController">
        <h3 class="control-sidebar-heading">
            <span>Chamados em aberto</span>
            <span class="badge bg-green" ng-if="listaChamados.length > 0">{{listaChamados.length}}</span>
        </h3>
        <ul class="control-sidebar-menu">
            
            <li class="overlay" ng-if="loading == true">
                <i class="fa fa-refresh fa-spin"></i>
            </li><!-- /.overlay -->

            <li ng-repeat="chamado in listaChamados">
                <span class="badge bg-blue">{{chamado._i}}</span>
                <div class="menu-info" tooltip-placement="left"
                       data-toggle="tooltip" uib-tooltip="{{chamado.descricao}}">
                    <h4 class="control-sidebar-subheading sp-text-overflow-ellipsis">{{chamado.descricao}}</h4>
                    <p>{{chamado.sla}}</p>
                </div>
            </li>
            
        </ul><!-- /.control-sidebar-menu -->
    </div><!--/.[name=chamados-em-aberto]-->
</aside>