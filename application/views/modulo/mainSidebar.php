<aside class="main-sidebar" ng-controller="mainSidebarController">

    <section class="sidebar">

        <ul class="sidebar-menu">
            <li name="configuracoes"">
                <a href ng-click="goConfiguracao()">
                    <i class="fa fa-cogs"></i> 
                    <span>Configurações</span>
                    <div class="overlay hidden" ng-class="{show : loading == 'config'}">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div><!-- /.overlay -->
                </a>
            </li><!--/.[name="configuracoes"]-->
            <li name="clientes"">
                <a href ng-click="goCliente()">
                    <i class="fa fa-users"></i> 
                    <span>Clientes</span>
                    <div class="overlay hidden" ng-class="{show : loading == 'cliente'}">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div><!-- /.overlay -->
                </a>
            </li><!--/.[name="clientes"]-->
            <li name="usuarios">
                <a href ng-click="goUsuario()">
                    <i class="fa fa-mouse-pointer"></i> 
                    <span>Usuarios</span>
                    <div class="overlay hidden" ng-class="{show : loading == 'usuario'}">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div><!-- /.overlay -->
                </a>
            </li><!--/.[name="usuarios"]-->
            <li name="relatorios">
                <a href ng-click="goRelatorio()">
                    <i class="fa fa-files-o"></i> 
                    <span>Relatórios</span>
                    <div class="overlay hidden" ng-class="{show : loading == 'relatorio'}">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div><!-- /.overlay -->
                </a>
            </li><!--/.[name="relatorios"]-->

            <li name="logoff">
                <a href ng-click="logoff()">
                    <i class="fa fa-power-off"></i> 
                    <span>Sair</span>
                    <div class="overlay hidden" ng-class="{show : loading == 'logoff'}">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div><!-- /.overlay -->
                </a>
            </li><!--/.[name="relatorios"]-->

        </ul><!--/.sidebar-menu-->

    </section><!-- /.sidebar -->

</aside>
