<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Transações
                <small>Lista de transações</small>
            </h1>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="pull-right">
                        <a href="/transaction/register" class="btn btn-primary"><i class="fa fa-plus"></i> Nova transação</a>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table id="table-establishment" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Estabelecimento</th>
                                <th>Máquina</th>
                                <th>Tipo</th>
                                <th>Quantidade créditos</th>
                                <th>Valor crédito</th>
                                <th>Valor total</th>
                                <th>Data</th>
                                <th>Usuário</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Estabelecimento 1</td>
                                <td>Máquina 3</td>
                                <td><span class="label label-success">Receita</span></td>
                                <td>54</td>
                                <td>R$ 15,00</td>
                                <td>R$ 810,00</td>
                                <td>31/10/2017</td>
                                <td>Gerente - Usuário 1</td>
                            </tr>
                            <tr>
                                <td>Estabelecimento 8</td>
                                <td>Máquina 5</td>
                                <td><span class="label label-info">Fechamento</span></td>
                                <td>32</td>
                                <td>R$ 6,00</td>
                                <td>R$ 192,00</td>
                                <td>26/10/2017</td>
                                <td>Gerente - Usuário 1</td>
                            </tr>
                            <tr>
                                <td>Estabelecimento 2</td>
                                <td>Máquina 1</td>
                                <td><span class="label label-success">Receita</span></td>
                                <td>15</td>
                                <td>R$ 86,00</td>
                                <td>R$ 1290,00</td>
                                <td>25/10/2017</td>
                                <td>Fiscal - Usuário 4</td>
                            </tr>
                            <tr>
                                <td>Estabelecimento 5</td>
                                <td>Máquina 4</td>
                                <td><span class="label label-success">Receita</span></td>
                                <td>26</td>
                                <td>R$ 1,00</td>
                                <td>R$ 26,00</td>
                                <td>16/10/2017</td>
                                <td>Fiscal - Usuário 7</td>
                            </tr>
                            <tr>
                                <td>Estabelecimento 7</td>
                                <td>Máquina 8</td>
                                <td><span class="label label-success">Receita</span></td>
                                <td>25</td>
                                <td>R$ 28,00</td>
                                <td>R$ 700,00</td>
                                <td>09/10/2017</td>
                                <td>Fiscal - Usuário 2</td>
                            </tr>
                            <tr>
                                <td>Estabelecimento 2</td>
                                <td>Máquina 2</td>
                                <td><span class="label label-danger">Despesa</span></td>
                                <td>54</td>
                                <td>R$ 32,00</td>
                                <td>R$ 1728,00</td>
                                <td>28/09/2017</td>
                                <td>Gerente - Usuário 1</td>
                            </tr>
                            <tr>
                                <td>Estabelecimento 6</td>
                                <td>Máquina 6</td>
                                <td><span class="label label-success">Receita</span></td>
                                <td>68</td>
                                <td>R$ 2,00</td>
                                <td>R$ 136,00</td>
                                <td>14/09/2017</td>
                                <td>Fiscal - Usuário 4</td>
                            </tr>
                            <tr>
                                <td>Estabelecimento 8</td>
                                <td>Máquina 7</td>
                                <td><span class="label label-danger">Despesa</span></td>
                                <td>38</td>
                                <td>R$ 68,00</td>
                                <td>R$ 2584,00</td>
                                <td>03/09/2017</td>
                                <td>Fiscal - Usuário 8</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Estabelecimento</th>
                                <th>Máquina</th>
                                <th>Tipo</th>
                                <th>Quantidade créditos</th>
                                <th>Valor crédito</th>
                                <th>Valor total</th>
                                <th>Data</th>
                                <th>Usuário</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>