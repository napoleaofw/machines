<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('pages.head')
        @include('pages.transaction.form.head')
        @include('pages.style')
        @include('components.header.style')
        @include('components.sidebar.style')
        @include('pages.transaction.form.style')
    </head>
    <body class="app skin-black-light sidebar-mini">
        @include('pages.transaction.form.body')
        @include('pages.script')
        @include('components.header.script')
        @include('components.sidebar.script')
        @include('pages.transaction.form.script')
    </body>
</html>