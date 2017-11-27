<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Relatório resumido por estabelecimento
            </h1>
        </section>
        <section class="content">
        <!-- <section class="report"> -->
            <div class="box box-widget">
                <div class="box-body">
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
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Usuário</th>
                                        <th>Máquina</th>
                                        <th class="text-right">Valor do crédito</th>
                                        <th>Tipo de transação</th>
                                        <th class="text-right">Valor de comissão</th>
                                        <th class="text-right">Valor total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($recordsReport as $date => $recordsEstablishment)
                                <tr>
                                    <th colspan="6">Data: {{ $date ?: 'em aberto' }}</th>
                                </tr>
                                    @foreach($recordsEstablishment as $establishment => $recordsTransaction)
                                        <tr>
                                            <th colspan="6">Estabelecimento: {{ $establishment }}</th>
                                        </tr>
                                        @foreach($recordsTransaction as $recordTransaction)
                                            <tr>
                                                <td>{{ $recordTransaction->createdBy->name }}</td>
                                                <td>{{ $recordTransaction->machine->code . ' - ' . $recordTransaction->machine->name }}</td>
                                                <td class="text-right">R$ {{ $recordTransaction->credit_value }}</td>
                                                <td>{{ $recordTransaction->type == 'receive' ? 'Receita' : 'Despesa' }}</td>
                                                <td class="text-right">R$ {{ $recordTransaction->commission_value }}</td>
                                                <td class="text-right">R$ {{ $recordTransaction->credit_amount }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th class="text-right" colspan="2">Total estabelecimento {{ $establishment }}:</th>
                                            <th class="text-right">R$ {{ 'XXXXX' }}</th>
                                            <th></th>
                                            <th class="text-right">R$ {{ 'XXXXX' }}</th>
                                            <th class="text-right">R$ {{ 'XXXXX' }}</th>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th class="text-right" colspan="2">Total data {{ $date }}:</th>
                                        <th class="text-right">R$ {{ 'XXXXX' }}</th>
                                        <th></th>
                                        <th class="text-right">R$ {{ 'XXXXX' }}</th>
                                        <th class="text-right">R$ {{ 'XXXXX' }}</th>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th class="text-right" colspan="2">Total:</th>
                                    <th class="text-right">R$ {{ 'XXXXX' }}</th>
                                    <th></th>
                                    <th class="text-right">R$ {{ 'XXXXX' }}</th>
                                    <th class="text-right">R$ {{ 'XXXXX' }}</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>