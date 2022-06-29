<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>
        <style>
            .table-striped {
              font-family: Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }

            .table-striped td, .table-striped th {
              border: 1px solid #ddd;
              padding: 8px;
            }

            .table-striped tr:nth-child(even){background-color: #f2f2f2;}

            .table-striped tr:hover {background-color: #ddd;}

            .table-striped th {
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: left;
              background-color: #04AA6D;
              color: white;
        }
        </style>
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
        </div>

        @yield('content')
    </body>
</html>