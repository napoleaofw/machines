<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Estabelecimentos
                <small>Lista de estabelecimentos</small>
            </h1>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="pull-right">
                        <a href="{{ route('establishments.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Novo estabelecimento</a>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table id="table-establishment" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nome fantasia</th>
                                <th>Responsável</th>
                                <th>E-mail</th>
                                <th>Fiscal</th>
                                <th>Percentual de comissão</th>
                                <th>Situação</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($recordsEstablishment as $recordEstablishment)
                            <tr>
                                <td>{{ $recordEstablishment->trade_name }}</td>
                                <td>{{ $recordEstablishment->responsible }}</td>
                                <td>{{ $recordEstablishment->email }}</td>
                                <td>{{ $recordEstablishment->fiscal ? $recordEstablishment->fiscal->name : null }}</td>
                                <td>{{ $recordEstablishment->commission_percentage }}</td>
                                <td>{{ $recordEstablishment->status == 'active' ? 'Ativo' : 'Inativo' }}</td>
                                <td>
                                    <a href="{{ route('establishments.show', $recordEstablishment->id) }}" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Visualizar">
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
                                <th>Nome fantasia</th>
                                <th>Responsável</th>
                                <th>E-mail</th>
                                <th>Fiscal</th>
                                <th>Percentual de comissão</th>
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