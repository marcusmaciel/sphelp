<!--modulo/mainHeader-->
<div class="content-wrapper">

    <!-- content -->
    <section class="content">

        <div class="row">

            <!--área dinamica (manipulável sobre as ações do menu)-->
            <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12" ng-controller="dinamicPartialController">
                <div class="box box-success" id="dinamicPartial">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Estatísticas
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        adadsadasas
                    </div>
                    <!-- /.box-body -->
                </div><!-- /.box -->
            </div>

            <!--chamados em aberto (fixa em todo o sistema)-->
            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Chamados em aberto
                            <span class="badge bg-green">300</span>
                        </h3>
                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool">
                                <i class="fa fa-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" id="info-chamados">
                        <table class="table table-condensed table-hover table-fixed">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 40px;">#</th>
                                    <th>Empresa</th>
                                    <th class="hidden-xs">Descrição</th>
                                    <th class="hidden-xs" style="width: 70px">SLA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr tabindex="-1">
                                    <td class="text-center"><a href="#">1</a></td>
                                    <td>Update software</td>
                                    <td class="cover hidden-xs">
                                        impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. 
                                        Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, 
                                        permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a
                                    </td>
                                    <td class="hidden-xs"><span class="badge">aberto</span></td>
                                </tr>
                                <tr tabindex="-1">
                                    <td class="text-center"><a href="#">2</a></td>
                                    <td>Clean database</td>
                                    <td class="cover hidden-xs">
                                        ou palavras aleatórias que não parecem nem um pouco convincentes. Se você pretende usar uma passagem 
                                        de Lorem Ipsum, precisa ter certeza de que não há algo embaraçoso escrito escondido no meio do texto. 
                                        Todos os geradores de Lorem Ipsum na internet tendem a repetir pedaços predefinidos conforme necessário.
                                    </td>
                                    <td class="hidden-xs"><span class="badge">aberto</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><a href="#">3</a></td>
                                    <td>Cron job running</td>
                                    <td class="cover hidden-xs">
                                        impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. 
                                        Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, 
                                        permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a
                                    </td>
                                    <td class="hidden-xs"><span class="badge">aberto</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><a href="#">4</a></td>
                                    <td>Fix and squish bugs</td>
                                    <td class="cover hidden-xs">
                                        impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. 
                                        Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, 
                                        permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a
                                    </td>
                                    <td class="hidden-xs"><span class="badge">aberto</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
