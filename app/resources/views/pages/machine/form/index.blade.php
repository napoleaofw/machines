<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('head')
        @include('pages.machine.form.head')
        @include('style')
        @include('components.header.style')
        @include('components.sidebar.style')
        @include('pages.machine.form.style')
    </head>
    <body class="app skin-black-light sidebar-mini">
        @include('pages.machine.form.body')
        @include('script')
        @include('components.header.script')
        @include('components.sidebar.script')
        @include('pages.machine.form.script')
    </body>
</html>