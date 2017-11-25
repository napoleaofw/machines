@if($record['status'] == 'showing')
    <div class="modal fade" id="modal-transaction">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Dados da transação</h4>
                </div>
                <div class="modal-body">
                    @include('pages.transaction.form.components.form')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                    <a href="#" class="btn btn-warning"><i class="fa fa-retweet"></i> Lançar</a>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="modal fade" id="modal-machine">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Vincular máquina</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label>Máquina(s)</label>
                                <select class="form-control select2" multiple="multiple" data-placeholder="Selecione" style="width: 100%;">
                                @foreach($recordsMachine as $recordMachine)
                                    <option value="{{ $recordMachine->id }}">{{ $recordMachine->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                    <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Vincular</a>
                </div>
            </div>
        </div>
    </div>
@endif
<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Estabelecimento
                <small>Cadastro de estabelecimento</small>
            </h1>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Dados do estabelecimento</h3>
                    <div class="pull-right">
                @if($record['status'] == 'showing')
                        <a href="{{ route('establishments.edit', $recordEstablishment->id) }}" class="btn btn-info"><i class="fa fa-unlock-alt"></i> Editar</a>
                @else
                    @if($record['status'] == 'editing')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</button>
                    @endif
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Salvar</button>
                @endif
                    </div>
                </div>
                <div class="box-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Razão social</label>
                                    <input type="text" class="form-control" value="{{ $recordEstablishment->corporate_name }}" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Nome fantasia</label>
                                    <input type="text" class="form-control" value="{{ $recordEstablishment->trade_name }}" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Responsável</label>
                                    <input type="text" class="form-control" value="{{ $recordEstablishment->responsible }}" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Endereço</label>
                                    <input type="text" class="form-control" value="{{ $recordEstablishment->address }}" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control" value="{{ $recordEstablishment->email }}" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Fiscal</label>
                                    <select class="form-control" {{ $record['disabled'] }}>
                                        <option value="">Selecione</option>
                                    @foreach($recordsUser as $recordUser)
                                        <option value="{{ $recordUser->id }}" {{ isset($recordEstablishment->fiscal) && $recordEstablishment->fiscal->id == $recordUser->id ? 'selected': null }}>{{ $recordUser->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Situação</label>
                                    <select class="form-control" {{ $record['disabled'] }}>
                                        <option value="">Selecione</option>
                                        <option value="active" {{ $recordEstablishment->status == 'active' ? 'selected': null }}>Ativo</option>
                                        <option value="inactive" {{ $recordEstablishment->status == 'inactive' ? 'selected': null }}>Inativo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Telefone 1</label>
                                    <input type="text" class="form-control" value="{{ $recordEstablishment->phone1 }}" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Telefone 2</label>
                                    <input type="text" class="form-control" value="{{ $recordEstablishment->phone2 }}" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Telefone 3</label>
                                    <input type="text" class="form-control" value="{{ $recordEstablishment->phone3 }}" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Percentual de comissão</label>
                                    <input type="text" class="form-control" value="{{ $recordEstablishment->commission_percentage }}" {{ $record['disabled'] }}>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Máquinas vinculadas</h3>
                @if($record['status'] != 'showing')
                    <div class="pull-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-machine"><i class="fa fa-plus"></i> Novo vínculo</button>
                    </div>
                @endif
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
                    @if(count($recordEstablishment->machines) > 0)
                        @foreach($recordEstablishment->machines as $recordMachine)
                            <tr>
                                <td>{{ $recordMachine->code }}</td>
                                <td>{{ $recordMachine->name }}</td>
                                <td>{{ $recordMachine->description }}</td>
                                <td>R$ {{ $recordMachine->credit_value }}</td>
                                <td>{{ $recordMachine->observation }}</td>
                                <td>{{ $recordMachine->status == 'active' ? 'Ativo' : 'Inativo' }}</td>
                                <td>
                                @if($record['status'] == 'showing')
                                    <a href="#" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Novo lançamento" data-toggle="modal" data-target="#modal-transaction">
                                        <i class="fa fa-retweet"></i>
                                    </a>
                                @else
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
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