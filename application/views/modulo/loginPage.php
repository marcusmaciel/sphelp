<!--modulo/loginPage-->
<div class='sp-login-page' ng-controller="loginFormController">

    <div class='sp-login-box'>

        <div class='logo'>
            <img src="<?php echo LAYOUT_ASSETS; ?>img/logo-light.svg">
        </div><!--logo-->

        <div class="box box-success">

            <!-- form start -->
            <form role="form">

                <div class="box-body">

                    <div class="form-group">
                        <label>
                            <span>Login</span>
                            <i class="fa fa-sign-in text-success"></i>
                        </label>
                        <input type="usuario" class="form-control" placeholder="admin">
                    </div>

                    <div class="form-group">
                        <label>
                            <span>Senha</span>
                            <i class="fa fa-unlock text-success"></i>
                        </label>
                        <input type="senha" class="form-control" placeholder="**********">
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success">Entrar</button>
                </div>

            </form>

        </div>

        <footer class='callback'>

        </footer>

    </div><!--sp-login-box-->

    <div class="sp-login-footer">

        <div class="copyright">
            &copy; SystemPort Technology Ltda - todos os direitos reservados.
        </div><!--copyright-->

        <div class="versao">
            Versão <b>alpha</b>
        </div><!--versao->
        
    </div><!--sp-login-footer-->

    </div>