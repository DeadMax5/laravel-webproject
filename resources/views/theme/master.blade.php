@include('theme.partials.head')

@include('theme.partials.header')


@yield('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

@include('theme.partials.footer')
@include('theme.partials.script')