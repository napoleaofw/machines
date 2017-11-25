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
                                <th>Másquina</th>
                                <th>Observação</th>
                                <th>Saldo</th>
                                <th>Comissão</th>
                            </tr>
                        </thead>
                        <tbody>
                @foreach($recordsEstablishment as $recordEstablishment)
                    @if($recordEstablishment->transactions)
                        @foreach($recordEstablishment->transactions as $recordTransaction)
                            <tr>
                                <td>{{ }}</td>
                                <td>{{ }}</td>
                                <td>{{ }}</td>
                                <td>{{ }}</td>
                                <td>{{ }}</td>
                                <td>{{ }}</td>
                                <td>{{ }}</td>
                                <td>{{ }}</td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>