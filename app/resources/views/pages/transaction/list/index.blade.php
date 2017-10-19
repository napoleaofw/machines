<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('pages.head')
        @include('pages.transaction.list.head')
        @include('pages.style')
        @include('components.header.style')
        @include('components.sidebar.style')
        @include('pages.transaction.list.style')
    </head>
    <body class="app skin-black-light sidebar-mini">
        @include('pages.transaction.list.body')
        @include('pages.script')
        @include('components.header.script')
        @include('components.sidebar.script')
        @include('pages.transaction.list.script')
    </body>
</html>