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
                        <a href="{{ route('machines.edit', 1) }}" class="btn btn-info"><i class="fa fa-unlock-alt"></i> Editar</a>
                    @else
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</button>
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
                                        <option value="estabelecimento1">Estabelecimento 1</option>
                                        <option value="estabelecimento2">Estabelecimento 2</option>
                                        <option value="estabelecimento3">Estabelecimento 3</option>
                                        <option value="estabelecimento4">Estabelecimento 4</option>
                                        <option value="estabelecimento5">Estabelecimento 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Situação</label>
                                    <select class="form-control" {{ $record['disabled'] }}>
                                        <option value="">Selecione</option>
                                        <option value="active">Ativo</option>
                                        <option value="inactive">Inativo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea class="form-control" {{ $record['disabled'] }}></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Código</label>
                                    <input type="text" class="form-control" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Valor do crédito</label>
                                    <input type="text" class="form-control" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Observação</label>
                                    <textarea class="form-control" {{ $record['disabled'] }}></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>