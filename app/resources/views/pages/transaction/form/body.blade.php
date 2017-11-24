<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Transação
                <small>Cadastro de transação</small>
            </h1>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Dados da transação</h3>
                    <div class="pull-right">
                    @if($record['status'] == 'showing')
                        <a href="{{ route('transactions.edit', 1) }}" class="btn btn-info"><i class="fa fa-unlock-alt"></i> Editar</a>
                    @else
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Salvar</button>
                    @endif
                    </div>
                </div>
                <div class="box-body">
                    @include('pages.transaction.form.components.form')
                </div>
            </div>
        </section>
    </div>
</div>