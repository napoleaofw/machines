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
            <div class="box">
                <div class="box-header with-border">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Nova transação</button>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table id="table-establishment" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Estabelecimento</th>
                                <th>Máquina</th>
                                <th>Tipo</th>
                                <th>Valor</th>
                                <th>Data</th>
                                <th>Usuário</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Estabelecimento 1</td>
                                <td>Máquina 3</td>
                                <td><span class="label label-success">Receita</span></td>
                                <td>R$ 384,45</td>
                                <td>31/10/2017</td>
                                <td>Gerente - Usuário 1</td>
                            </tr>
                            <tr>
                                <td>Estabelecimento 8</td>
                                <td>Máquina 5</td>
                                <td><span class="label label-info">Fechamento</span></td>
                                <td>R$ 3684,69</td>
                                <td>26/10/2017</td>
                                <td>Gerente - Usuário 1</td>
                            </tr>
                            <tr>
                                <td>Estabelecimento 2</td>
                                <td>Máquina 1</td>
                                <td><span class="label label-success">Receita</span></td>
                                <td>R$ 525,74</td>
                                <td>25/10/2017</td>
                                <td>Fiscal - Usuário 4</td>
                            </tr>
                            <tr>
                                <td>Estabelecimento 5</td>
                                <td>Máquina 4</td>
                                <td><span class="label label-success">Receita</span></td>
                                <td>R$ 586,56</td>
                                <td>16/10/2017</td>
                                <td>Fiscal - Usuário 7</td>
                            </tr>
                            <tr>
                                <td>Estabelecimento 7</td>
                                <td>Máquina 8</td>
                                <td><span class="label label-success">Receita</span></td>
                                <td>R$ 655,95</td>
                                <td>09/10/2017</td>
                                <td>Fiscal - Usuário 2</td>
                            </tr>
                            <tr>
                                <td>Estabelecimento 2</td>
                                <td>Máquina 2</td>
                                <td><span class="label label-danger">Despesa</span></td>
                                <td>R$ 214,59</td>
                                <td>28/09/2017</td>
                                <td>Gerente - Usuário 1</td>
                            </tr>
                            <tr>
                                <td>Estabelecimento 6</td>
                                <td>Máquina 6</td>
                                <td><span class="label label-success">Receita</span></td>
                                <td>R$ 515,96</td>
                                <td>14/09/2017</td>
                                <td>Fiscal - Usuário 4</td>
                            </tr>
                            <tr>
                                <td>Estabelecimento 8</td>
                                <td>Máquina 7</td>
                                <td><span class="label label-danger">Despesa</span></td>
                                <td>R$ 55,62</td>
                                <td>03/09/2017</td>
                                <td>Fiscal - Usuário 8</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Estabelecimento</th>
                                <th>Máquina</th>
                                <th>Tipo</th>
                                <th>Valor</th>
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