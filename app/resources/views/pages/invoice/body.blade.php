<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Invoice
                <small>#000000001</small>
            </h1>
        </section>
        <section class="invoice">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-globe"></i> Nome da empresa.
                        <small class="pull-right">Data: 18/10/2017</small>
                    </h2>
                </div>
            </div>
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    De
                    <address>
                        <strong>Nome da empresa</strong><br>
                        Rua da empresa, 100 - Centro<br>
                        Porto Alegre - RS, 00000-000<br>
                        Telefone: (51) 99999-9999<br>
                        E-mail: empresa@empresa.com
                    </address>
                </div>
                <div class="col-sm-4 invoice-col">
                    Para
                    <address>
                        <strong>Estabelecimento</strong><br>
                        Rua do estabelecimento, 200 - Centro<br>
                        São Paulo - SP, 00000-000<br>
                        Telefone: (11) 98888-8888<br>
                        E-mail: estabelecimento@00000-000.com
                    </address>
                </div>
                <div class="col-sm-4 invoice-col">
                    <b>Invoice #000000001</b><br>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Data</th>
                                <th>Máquina</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Receita</td>
                                <td>12/09/2017</td>
                                <td>Máquina 2</td>
                                <td>R$ 285,34</td>
                            </tr>
                            <tr>
                                <td>Despesa</td>
                                <td>18/09/2017</td>
                                <td>Máquina 1</td>
                                <td>R$ 50,86</td>
                            </tr>
                            <tr>
                                <td>Receita</td>
                                <td>25/09/2017</td>
                                <td>Máquina 3</td>
                                <td>R$ 98,63</td>
                            </tr>
                            <tr>
                                <td>Receita</td>
                                <td>27/09/2017</td>
                                <td>Máquina 2</td>
                                <td>R$ 154,25</td>
                            </tr>
                            <tr>
                                <td>Receita</td>
                                <td>29/09/2017</td>
                                <td>Máquina 1</td>
                                <td>R$ 74,58</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-6">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">Receita:</th>
                                <td>R$ 612,80</td>
                            </tr>
                            <tr>
                                <th>Despesa:</th>
                                <td>R$ 50,86</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>R$ 561,94</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row no-print">
                <div class="col-xs-12">
                    <button type="button" class="btn btn-default btn-print"><i class="fa fa-print"></i> Imprimir</a>
                    <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Finalizar</button>
                </div>
            </div>
        </section>
    </div>
</div>