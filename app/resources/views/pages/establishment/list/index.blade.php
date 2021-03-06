<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('head')
        @include('pages.establishment.list.head')
        @include('style')
        @include('components.header.style')
        @include('components.sidebar.style')
        @include('pages.establishment.list.style')
    </head>
    <body class="app skin-black-light sidebar-mini">
        @include('pages.establishment.list.body')
        @include('script')
        @include('components.header.script')
        @include('components.sidebar.script')
        @include('pages.establishment.list.script')
    </body>
</html>