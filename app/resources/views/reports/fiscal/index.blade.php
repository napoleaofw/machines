<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('head')
        @include('reports.fiscal.head')
        @include('style')
        @include('components.header.style')
        @include('components.sidebar.style')
        @include('reports.fiscal.style')
    </head>
    <body class="app skin-black-light sidebar-mini">
        @include('reports.fiscal.body')
        @include('script')
        @include('components.header.script')
        @include('components.sidebar.script')
        @include('reports.fiscal.script')
    </body>
</html>