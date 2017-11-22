<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('head')
        @include('pages.invoice.head')
        @include('style')
        @include('components.header.style')
        @include('components.sidebar.style')
        @include('pages.invoice.style')
    </head>
    <body class="app skin-black-light sidebar-mini">
        @include('pages.invoice.body')
        @include('script')
        @include('components.header.script')
        @include('components.sidebar.script')
        @include('pages.invoice.script')
    </body>
</html>