<div class="info-box" ng-controller="perfilInfoController">
    <a href tooltip-placement="bottom" uib-tooltip="Ver meu perfil" ng-click="modalOpen()"
       class="info-box-icon bg-yellow animate-icon" ng-class="">
        <i class="ion ion-android-alert hidden" ng-class="{show: msgWarning.length != ''}"></i>
        <i class="ion ion-android-happy hidden" ng-class="{show: msgWarning.length == ''}"></i>
    </a>

    <div class="info-box-content">
        <span class="info-box-text">Olá <?php if (isset($nome)) echo $nome; ?></span>
        <a href tooltip-placement="bottom" uib-tooltip="Ver chamados" class="info-box-number hidden" 
           ng-class="{show: msgWarning.length != ''}">
            Você tem 1000 precisam de atenção.
        </a>
        <span class="info-box-number hidden" ng-class="{show: msgWarning.length == ''}">
            Não há chamados em alerta.
        </span>
    </div>

    <div class="overlay" ng-class="{hidden : loading == false, show : loading == true}">
        <i class="fa fa-refresh fa-spin"></i>
    </div><!-- /.overlay -->
    
    <!-- /.info-box-content -->
</div>
