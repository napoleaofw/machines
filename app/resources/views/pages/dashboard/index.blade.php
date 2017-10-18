<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('pages.head')
        @include('pages.dashboard.head')
        @include('pages.style')
        @include('components.sidebar.style')
        @include('pages.dashboard.style')
    </head>
    <body class="app skin-black-light sidebar-mini">
        @include('components.sidebar.content')
        @include('pages.dashboard.body')
        @include('pages.script')
        @include('components.sidebar.script')
        @include('pages.dashboard.script')
    </body>
</html>