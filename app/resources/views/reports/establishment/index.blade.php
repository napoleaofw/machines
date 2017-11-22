<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('head')
        @include('reports.establishment.head')
        @include('style')
        @include('components.header.style')
        @include('components.sidebar.style')
        @include('reports.establishment.style')
    </head>
    <body class="app skin-black-light sidebar-mini">
        @include('reports.establishment.body')
        @include('script')
        @include('components.header.script')
        @include('components.sidebar.script')
        @include('reports.establishment.script')
    </body>
</html>