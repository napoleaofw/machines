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
                    <!-- <div class="pull-right">
                        <a href="{{ route('transactions.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova transação</a>
                    </div> -->
                </div>
                <div class="box-body table-responsive">
                    <table id="table-establishment" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Estabelecimento</th>
                                <th>Máquina</th>
                                <th>Usuário</th>
                                <th>Tipo</th>
                                <th>Quantidade de créditos</th>
                                <th>Valor do crédito</th>
                                <th>Valor da comissão</th>
                                <th>Valor total</th>
                                <th>Data</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($recordsTransaction as $recordTransaction)
                            <tr>
                                <td>{{ $recordTransaction->establishment ? $recordTransaction->establishment->trade_name : null }}</td>
                                <td>{{ $recordTransaction->machine ? $recordTransaction->machine->name : null }}</td>
                                <td>{{ $recordTransaction->createdBy ? $recordTransaction->createdBy->name : null }}</td>
                                <td><span class="label {{ $recordTransaction->type == 'revenue' ? 'label-success' : 'label-danger' }}">{{ $recordTransaction->type == 'revenue' ? 'Receita' : 'Despesa' }}</span></td>
                                <td>{{ $recordTransaction->credit_quantity }}</td>
                                <td>R$ {{ $recordTransaction->credit_value }}</td>
                                <td>R$ {{ $recordTransaction->commission_value }}</td>
                                <td>R$ {{ $recordTransaction->total_amount }}</td>
                                <td>{{ $recordTransaction->date }}</td>
                                <td>
                                    <a href="{{ route('transactions.show', $recordTransaction->id) }}" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Visualizar">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Estabelecimento</th>
                                <th>Máquina</th>
                                <th>Usuário</th>
                                <th>Tipo</th>
                                <th>Quantidade de créditos</th>
                                <th>Valor do crédito</th>
                                <th>Valor da comissão</th>
                                <th>Valor total</th>
                                <th>Data</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>