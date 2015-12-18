<!--modulo/loginPage-->
<div class='sp-login-page' ng-controller="loginFormController">

    <div class='sp-login-box'>

        <div class='logo'>
            <img src="<?php echo LAYOUT_ASSETS; ?>img/logo-light.svg">
        </div><!--logo-->

        <div class="box box-success">

            <form name="loginForm" novalidate ng-submit="loginForm.$valid && autenticar(form)">

                <div class="box-body">

                    <div class="form-group">
                        <label>
                            <span>Login</span>
                            <i class="fa fa-sign-in text-success"></i>
                        </label>
                        <input name="login" type="text" ng-model="form.login" 
                               class="form-control" placeholder="admin"
                               maxlength="50" required sp-pattern="/^\w+$/"
                               uib-tooltip="campo obrigatório"/>
                    </div>

                    <div class="form-group">
                        <label>
                            <span>Senha</span>
                            <i class="fa fa-unlock text-success"></i>
                        </label>
                        <input type="password" class="form-control" placeholder="**********"
                               ng-model="form.senha" maxlength="50" required
                               uib-tooltip="campo obrigatório">
                    </div>

                </div><!-- /.box-body -->

                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success">Entrar</button>
                </div>

            </form><!--./form[name=loginForm]-->

        </div>

        <div class="alert {{callbackMessage.class}} callback" ng-class="{show : callbackMessage != null}">
            {{callbackMessage.text}}
        </div><!--alert-->

    </div><!--sp-login-box-->

    <div class="sp-login-footer">

        <div class="copyright hidden-xs">
            Copyright &copy 2000-2015 System Port Technology. Todos os direitos reservados.
        </div><!--copyright-->

        <div class="copyright visible-xs">
            SystemPort Technology.
        </div><!--copyright-->


        <div class="versao">
            Versão <b>alpha</b>
        </div><!--versao-->

    </div><!--sp-login-footer-->

</div>