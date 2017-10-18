<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('pages.head')
        @include('pages.user.list.head')
        @include('pages.style')
        @include('components.header.style')
        @include('components.sidebar.style')
        @include('pages.user.list.style')
    </head>
    <body class="app skin-black-light sidebar-mini">
        @include('pages.user.list.body')
        @include('pages.script')
        @include('components.header.script')
        @include('components.sidebar.script')
        @include('pages.user.list.script')
    </body>
</html>