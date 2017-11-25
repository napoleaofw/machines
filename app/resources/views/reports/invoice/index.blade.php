<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('head')
        @include('reports.invoice.head')
        @include('style')
        @include('components.header.style')
        @include('components.sidebar.style')
        @include('reports.invoice.style')
    </head>
    <body class="app skin-black-light sidebar-mini">
        @include('reports.invoice.body')
        @include('script')
        @include('components.header.script')
        @include('components.sidebar.script')
        @include('reports.invoice.script')
    </body>
</html>