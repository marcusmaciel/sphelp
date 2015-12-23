<div class='sp-usuario-login' ng-controller="loginFormController">

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
                           maxlength="50" required sp-pattern="/^\w+$/"/>
                </div>

                <div class="form-group">
                    <label>
                        <span>Senha</span>
                        <i class="fa fa-unlock text-success"></i>
                    </label>
                    <input type="password" class="form-control" placeholder="**********"
                           ng-model="form.senha" maxlength="50" required/>
                </div>

            </div><!-- /.box-body -->

            <div class="box-footer text-right">
                <button type="submit" class="btn btn-success">Entrar</button>
            </div>

        </form><!--./form[name=loginForm]-->

    </div>

</div><!--sp-login-box-->
