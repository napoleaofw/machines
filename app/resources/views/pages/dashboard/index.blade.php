<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('head')
        @include('pages.dashboard.head')
        @include('style')
        @include('components.header.style')
        @include('components.sidebar.style')
        @include('pages.dashboard.style')
    </head>
    <body class="app skin-black-light sidebar-mini">
        @include('pages.dashboard.body')
        @include('script')
        @include('components.header.script')
        @include('components.sidebar.script')
        @include('pages.dashboard.script')
    </body>
</html>