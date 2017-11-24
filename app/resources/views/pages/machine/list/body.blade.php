<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Máquinas
                <small>Lista de máquinas</small>
            </h1>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="pull-right">
                        <a href="{{ route('machines.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova máquina</a>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table id="table-machine" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Valor do crédito</th>
                                <th>Observação</th>
                                <th>Situação</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($recordsMachine as $recordMachine)
                            <tr>
                                <td>{{ $recordMachine->code }}</td>
                                <td>{{ $recordMachine->name }}</td>
                                <td>{{ $recordMachine->description }}</td>
                                <td>R$ {{ $recordMachine->credit_value }}</td>
                                <td>{{ $recordMachine->observation }}</td>
                                <td>{{ $recordMachine->status == 'active' ? 'Ativo' : 'Inativo' }}</td>
                                <td>
                                    <a href="{{ route('machines.show', $recordMachine->id) }}" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Visualizar">
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
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Valor do crédito</th>
                                <th>Observação</th>
                                <th>Situação</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>