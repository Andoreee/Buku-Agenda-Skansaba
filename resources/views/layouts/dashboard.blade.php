<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    {{-- Bootstrap --}} {{-- Tak Pindah, Soale Error Nek ng ngisor(modal e ragelem muncul) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>


    {{-- Font --}}
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- My CSS --}}
    <link rel="stylesheet" href="/css/dashboard.css">

    {{-- Page Title --}}
    <title>{{ $title }} - Buku Agenda Skansaba</title>
</head>

<body id="page-top">
    <div id="wrapper">
        @include('sweetalert::alert')
        @include('components.sidebar')

        <div id="content-wrapper" class="d-flex flex-column" id="content-wrapper">

            <div id="content" id="content">

                @include('components.topbar')

                {{-- Main Content --}}
                <div class="container">
                    @yield('content')
                </div>

                @include('components.footer')

            </div>

        </div>

        {{-- JQuery --}}
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
            crossorigin="anonymous"></script>

        {{-- Datatables --}}
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/1.13.1/dataTables.bootstrap5.min.js"
            integrity="sha512-DK2sDFXaKlL6GyjjmKlL1YsuUiAuEKBqYqj0oYQijZQadPjTunVZYhDCOb8pv5CcIKwoz8ev+wMhJgaQcBN7xg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        {{-- My Js --}}
        <script src="/js/dashboard.js"></script>

        @if (Request::is('admin/surat-masuk'))
            <script src="/js/surat-masuk-filter.js"></script>
        @endif

        @if (Request::is('admin/surat-keluar'))
            <script src="/js/surat-keluar-filter.js"></script>
        @endif

</body>

</html>
