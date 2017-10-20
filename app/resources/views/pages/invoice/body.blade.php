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
                        <i class="fa fa-globe"></i> Nome da empresa
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
                                <th>Data</th>
                                <th>Máquina</th>
                                <th>Observação</th>
                                <th>Saldo</th>
                                <th>Comissão</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12/09/2017</td>
                                <td>Máquina 2</td>
                                <td></td>
                                <td>R$ 285,34</td>
                                <td>R$ 28,53</td>
                            </tr>
                            <tr>
                                <td>18/09/2017</td>
                                <td>Máquina 1</td>
                                <td>A máquina apresentou problema durante o período da tarde.</td>
                                <td>R$ 50,86</td>
                                <td>R$ 5,09</td>
                            </tr>
                            <tr>
                                <td>25/09/2017</td>
                                <td>Máquina 3</td>
                                <td></td>
                                <td>R$ 98,63</td>
                                <td>R$ 9,86</td>
                            </tr>
                            <tr>
                                <td>27/09/2017</td>
                                <td>Máquina 2</td>
                                <td></td>
                                <td>R$ 154,25</td>
                                <td>R$ 15,43</td>
                            </tr>
                            <tr>
                                <td>29/09/2017</td>
                                <td>Máquina 1</td>
                                <td></td>
                                <td>R$ 74,58</td>
                                <td>R$ 7,46</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <p class="lead">Comissão por máquina</p>
                    <div class="text-muted well well-sm no-shadow">
                        <div class="table-responsive table-machines">
                            <table class="table">
                                <tr>
                                    <th>Máquina 1:</th>
                                    <td>R$ 12,55</td>
                                </tr>
                                <tr>
                                    <th>Máquina 2:</th>
                                    <td>R$ 43,96</td>
                                </tr>
                                <tr>
                                    <th>Máquina 3:</th>
                                    <td>R$ 9,86</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-2 col-xs-12">
                    <p class="lead">Totais</p>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">Saldo:</th>
                                <td>R$ 561,94</td>
                            </tr>
                            <tr>
                                <th>Comissão:</th>
                                <td>R$ 56,19</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>R$ 505,75</td>
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