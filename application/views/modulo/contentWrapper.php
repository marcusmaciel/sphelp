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
                        <table class="table table-bordered table-fixed">
                            <tbody>
                                <tr>
                                    <th class="text-center" style="width: 40px;">#</th>
                                    <th style="width:35%">Empresa</th>
                                    <th style="width:calc(65%-80px);">Descrição</th>
                                    <th style="width: 40px;">SLA</th>
                                </tr>
                                <tr>
                                    <td class="text-center"><a href="#">1</a></td>
                                    <td>Update software</td>
                                    <td class="cover">
                                        impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. 
                                        Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, 
                                        permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a
                                    </td>
                                    <td><span class="badge bg-red">55%</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><a href="#">2</a></td>
                                    <td>Clean database</td>
                                    <td class="cover">
                                        ou palavras aleatórias que não parecem nem um pouco convincentes. Se você pretende usar uma passagem 
                                        de Lorem Ipsum, precisa ter certeza de que não há algo embaraçoso escrito escondido no meio do texto. 
                                        Todos os geradores de Lorem Ipsum na internet tendem a repetir pedaços predefinidos conforme necessário.
                                    </td>
                                    <td><span class="badge bg-yellow">70%</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><a href="#">3</a></td>
                                    <td>Cron job running</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light-blue">30%</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><a href="#">4</a></td>
                                    <td>Fix and squish bugs</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-green">90%</span></td>
                                </tr>
                            </tbody></table>
                    </div>
                    <!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
