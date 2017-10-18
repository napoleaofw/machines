<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('pages.head')
        @include('pages.machine.list.head')
        @include('pages.style')
        @include('components.header.style')
        @include('components.sidebar.style')
        @include('pages.machine.list.style')
    </head>
    <body class="app skin-black-light sidebar-mini">
        @include('pages.machine.list.body')
        @include('pages.script')
        @include('components.header.script')
        @include('components.sidebar.script')
        @include('pages.machine.list.script')
    </body>
</html>