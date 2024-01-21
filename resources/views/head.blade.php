<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/main.css">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    @include('partials.headerAdmin')
    @include('partials.sidebar')
    @yield('content')




    <!-- Essential javascripts for application to work-->
    <script src="/assets/admin/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/admin/js/popper.min.js"></script>
    <script src="/assets/admin/js/bootstrap.min.js"></script>
    <script src="/assets/admin/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="/assets/admin/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="/assets/admin/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/assets/admin/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#sampleTable').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20, 30, -1],
                [5, 10, 20, 30]
            ]
        });
    </script>
    <!-- Page specific javascripts-->

</body>

</html>
