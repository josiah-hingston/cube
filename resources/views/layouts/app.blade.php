<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cube</title>
        <link rel="stylesheet" href="/css/app.css">
        <link href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.5.0/sweet-alert.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/sandstone/bootstrap.min.css" rel="stylesheet" integrity="sha256-Ay17X/itZzhUFkDfLB9MICE7tbVwtPuFhcwDpABdbEA= sha512-eTtl6Aa3v8DrTCYWH7cAfXt6QW8DpsFn0hdCcYIWe6VDMyPMikXBWd/9bZR5YZNrmHBBu4KGdVgfPs1aEEgVIw==" crossorigin="anonymous">
    </head>

    <body style="background-color: #d35400;">

        @include('partials.nav')

        <div class="container">
            @yield('content')
        </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.9/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.5.0/sweet-alert.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#myTable').DataTable({
                    ordering: false,
                    paging: true,
                    pageLength: 20,
                    select: true
                });

                $('#starterTable').DataTable({
                    ordering: false,
                    paging: false,
                    select: true
                });
            });
        </script>
        
    </body>
</html>