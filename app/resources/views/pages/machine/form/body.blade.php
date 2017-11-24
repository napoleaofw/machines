<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Máquina
                <small>Cadastro de máquina</small>
            </h1>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Dados da máquina</h3>
                    <div class="pull-right">
                @if($record['status'] == 'showing')
                        <a href="{{ route('machines.edit', $recordMachine->id) }}" class="btn btn-info"><i class="fa fa-unlock-alt"></i> Editar</a>
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
                                    <label>Estabelecimento</label>
                                    <select class="form-control" {{ $record['disabled'] }}>
                                        <option value="">Selecione</option>
                                    @foreach($recordsEstablishment as $recordEstablishment)
                                        <option value="{{ $recordEstablishment->id }}" {{ isset($recordMachine->establishment) && $recordMachine->establishment->id == $recordEstablishment->id ? 'selected': null }}>{{ $recordEstablishment->trade_name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" value="{{ $recordMachine->name }}" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Situação</label>
                                    <select class="form-control" {{ $record['disabled'] }}>
                                        <option value="">Selecione</option>
                                        <option value="active" {{ $recordMachine->status == 'active' ? 'selected': null }}>Ativo</option>
                                        <option value="inactive" {{ $recordMachine->status == 'inactive' ? 'selected': null }}>Inativo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea class="form-control" {{ $record['disabled'] }}>{{ $recordMachine->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Código</label>
                                    <input type="text" class="form-control" value="{{ $recordMachine->code }}" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Valor do crédito</label>
                                    <input type="text" class="form-control" value="{{ $recordMachine->credit_value }}" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Observação</label>
                                    <textarea class="form-control" {{ $record['disabled'] }}>{{ $recordMachine->observation }}</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>