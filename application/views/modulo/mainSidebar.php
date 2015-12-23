<aside class="main-sidebar" ng-controller="mainSidebarController">

    <section class="sidebar">

        <ul class="sidebar-menu">
            <li name="configuracoes"">
                <a href ng-click="goConfiguracao()">
                    <i class="fa fa-cogs"></i> 
                    <span>Configurações</span>
                </a>
            </li><!--/.[name="configuracoes"]-->
            <li name="clientes"">
                <a href ng-click="goCliente()">
                    <i class="fa fa-users"></i> 
                    <span>Clientes</span>
                </a>
            </li><!--/.[name="clientes"]-->
            <li name="usuarios">
                <a href ng-click="goUsuario()">
                    <i class="fa fa-mouse-pointer"></i> 
                    <span>Usuarios</span>
                </a>
            </li><!--/.[name="usuarios"]-->
            <li name="relatorios">
                <a href ng-click="goRelatorio()">
                    <i class="fa fa-files-o"></i> 
                    <span>Relatórios</span>
                </a>
            </li><!--/.[name="relatorios"]-->

            <li name="logoff">
                <a href ng-click="logoff()">
                    <i class="fa fa-power-off"></i> 
                    <span>Sair</span>
                </a>
            </li><!--/.[name="relatorios"]-->

        </ul><!--/.sidebar-menu-->

    </section><!-- /.sidebar -->

</aside>
