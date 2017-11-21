<div class="modal fade" id="modal-invoice">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Gerar invoice</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label>Estabelecimento(s)</label>
                            <select class="form-control select2" multiple="multiple" data-placeholder="Selecione" style="width: 100%;">
                                <option value="estabelecimento1">Estabelecimento 1</option>
                                <option value="estabelecimento2">Estabelecimento 2</option>
                                <option value="estabelecimento3">Estabelecimento 3</option>
                                <option value="estabelecimento4">Estabelecimento 4</option>
                                <option value="estabelecimento5">Estabelecimento 5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                <a href="/invoice" class="btn btn-primary"><i class="fa fa-print"></i> Gerar</a>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1 class="">Dashboard<small>Painel de controle</small></h1>
            <div class="pull-right">
                <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#modal-invoice"><i class="fa fa-print"></i> Gerar invoice</button>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>R$ 15214,34</h3>
                            <p>Último fechamento</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>R$ 5472,46</h3>
                            <p>Saldo pendente</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-exclamation"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>R$ 8477,54</h3>
                            <p>Receitas</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-arrow-circle-up"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>R$ 3005,08</h3>
                            <p>Despesas</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-arrow-circle-down"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Últimas transações</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                        <tr>
                                            <th>Estabelecimento</th>
                                            <th>Máquina</th>
                                            <th>Usuário</th>
                                            <th>Tipo</th>
                                            <th>Quantidade de créditos</th>
                                            <th>Valor do crédito</th>
                                            <th>Valor total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nome fantasia 3</td>
                                            <td>Máquina 2</td>
                                            <td>Gerente - Usuário 1</td>
                                            <td><span class="label label-success">Receita</span></td>
                                            <td>54</td>
                                            <td>R$ 15,00</td>
                                            <td>R$ 810,00</td>
                                        </tr>
                                        <tr>
                                            <td>Nome fantasia 7</td>
                                            <td>Máquina 6</td>
                                            <td>Fiscal - Usuário 4</td>
                                            <td><span class="label label-success">Receita</span></td>
                                            <td>32</td>
                                            <td>R$ 6,00</td>
                                            <td>R$ 192,00</td>
                                        </tr>
                                        <tr>
                                            <td>Nome fantasia 2</td>
                                            <td>Máquina 8</td>
                                            <td>Gerente - Usuário 1</td>
                                            <td><span class="label label-danger">Despesa</span></td>
                                            <td>15</td>
                                            <td>R$ 86,00</td>
                                            <td>R$ 1290,00</td>
                                        </tr>
                                        <tr>
                                            <td>Nome fantasia 5</td>
                                            <td>Máquina 5</td>
                                            <td>Fiscal - Usuário 7</td>
                                            <td><span class="label label-info">Fechamento</span></td>
                                            <td>26</td>
                                            <td>R$ 1,00</td>
                                            <td>R$ 26,00</td>
                                        </tr>
                                        <tr>
                                            <td>Nome fantasia 8</td>
                                            <td>Máquina 3</td>
                                            <td>Fiscal - Usuário 4</td>
                                            <td><span class="label label-success">Receita</span></td>
                                            <td>25</td>
                                            <td>R$ 28,00</td>
                                            <td>R$ 700,00</td>
                                        </tr>
                                        <tr>
                                            <td>Nome fantasia 1</td>
                                            <td>Máquina 4</td>
                                            <td>Fiscal - Usuário 2</td>
                                            <td><span class="label label-danger">Despesa</span></td>
                                            <td>54</td>
                                            <td>R$ 32,00</td>
                                            <td>R$ 1728,00</td>
                                        </tr>
                                        <tr>
                                            <td>Nome fantasia 8</td>
                                            <td>Máquina 1</td>
                                            <td>Gerente - Usuário 1</td>
                                            <td><span class="label label-success">Receita</span></td>
                                            <td>68</td>
                                            <td>R$ 2,00</td>
                                            <td>R$ 136,00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="box-footer clearfix">
                            <a href="/transaction/register" class="btn btn-sm btn-primary btn-flat pull-left"><i class="fa fa-plus"></i> Nova transação</a>
                            <a href="/transaction/list" class="btn btn-sm btn-default btn-flat pull-right">Ver todas transações</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-gamepad"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Máquinas ativas</span>
                            <span class="info-box-number">65</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-gamepad"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Máquinas inativas</span>
                            <span class="info-box-number">4</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-bank"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Estabelecimentos ativos</span>
                            <span class="info-box-number">43</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-bank"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Estabelecimentos inativos</span>
                            <span class="info-box-number">2</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>