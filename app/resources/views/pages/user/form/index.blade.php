a<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('pages.head')
        @include('pages.user.form.head')
        @include('pages.style')
        @include('components.header.style')
        @include('components.sidebar.style')
        @include('pages.user.form.style')
    </head>
    <body class="app skin-black-light sidebar-mini">
        @include('pages.user.form.body')
        @include('pages.script')
        @include('components.header.script')
        @include('components.sidebar.script')
        @include('pages.user.form.script')
    </body>
</html>