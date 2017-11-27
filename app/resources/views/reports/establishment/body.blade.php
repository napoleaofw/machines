<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Relatório resumido por estabelecimento
            </h1>
        </section>
        <section class="report">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-globe"></i> Nome da empresa
                        <small class="pull-right">Data: 18/10/2017</small>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Data</th>
                            </tr>
                            <tr>
                                <th>Estabelecimento</th>
                            </tr>
                            <tr>
                                <th>Usuário</th>
                                <th>Máquina</th>
                                <th>Valor do crédito</th>
                                <th>Tipo</th>
                                <th>Valor de comissão</th>
                                <th>Valor total</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($recordsReport as $date => $recordsEstablishment)
                        <tr>
                            <th>Data: {{ $date ?: 'em aberto' }}</th>
                        </tr>
                            @foreach($recordsEstablishment as $establishment => $recordsTransaction)
                                <tr>
                                    <th>Estabelecimento: {{ $establishment }}</th>
                                </tr>
                                @foreach($recordsTransaction as $recordTransaction)
                                    <tr>
                                        <td>{{ $recordTransaction->createdBy->name }}</td>
                                        <td>{{ $recordTransaction->machine->code . ' - ' . $recordTransaction->machine->name }}</td>
                                        <td>R$ {{ $recordTransaction->credit_value }}</td>
                                        <td>{{ $recordTransaction->type == 'receive' ? 'Receita' : 'Despesa' }}</td>
                                        <td>R$ {{ $recordTransaction->commission_value }}</td>
                                        <td>R$ {{ $recordTransaction->credit_amount }}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endforeach
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>