<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('pages.head')
        @include('pages.establishment.form.head')
        @include('pages.style')
        @include('components.header.style')
        @include('components.sidebar.style')
        @include('pages.establishment.form.style')
    </head>
    <body class="app skin-black-light sidebar-mini">
        @include('pages.establishment.form.body')
        @include('pages.script')
        @include('components.header.script')
        @include('components.sidebar.script')
        @include('pages.establishment.form.script')
    </body>
</html>