</html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<title>Paymaster</title>

</head>

<body>

    @include('nav') 
    <div class="container">
        @yield('content')
    </div>

   <footer> @include('footer') </footer>
   

</body>

</html>