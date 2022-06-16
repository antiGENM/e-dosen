<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Nunito -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap');

        * {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <!-- Boostrap v.5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <title>E-Dosen</title>
</head>
<body>
    
    @include('dashboard.layouts.navbar')

    <section>
        @yield('sidebar')
        
        <div class="container-fluid mx-0 ">
            @yield('container')
        </div>
    </section>

    @include('dashboard.layouts.footer')
    
</body>
</html>