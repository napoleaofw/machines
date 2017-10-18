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
            @include('pages.establishment.list.table')
            <!--<div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Título</h3>
                </div>
                <div class="box-body">
                    Conteúdo
                </div>
            </div>-->
        </section>
    </div>
</div>