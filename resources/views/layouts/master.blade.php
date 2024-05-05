<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>

    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,
        body {
            background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        .container {
            height: 100%;
            align-content: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            height: 500px;
            /* Increased height for registration form */
            width: 400px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 20px;
            border-radius: 15px;
        }

        .card-header h3 {
            margin-bottom: 30px;
        }

        .input-group-prepend span {
            width: 50px;
            background-color: #FFC312;
            color: black;
            border: none;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid white;
            color: white;
            outline: none;
            height: 40px;
            width: 100%;
            margin-bottom: 20px;
        }

        input[type="text"]::placeholder,
        input[type="email"]::placeholder,
        input[type="password"]::placeholder {
            color: white;
        }

        .form-group {
            margin-top: 20px;
        }

        .login_btn {
            width: 100%;
            background-color: #FFC312;
            color: black;
            border: none;
            border-radius: 20px;
            padding: 10px;
            font-weight: bold;
            cursor: pointer;
        }

        .login_btn:hover {
            background-color: white;
            color: black;
        }

        .links {
            margin-top: 20px;
            text-align: center;
        }

        .links a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container mx-auto px-4 py-5">
        @yield('content')
    </div>

    <footer class="bg-gray-800 text-white text-center py-4 mt-10">
        <!-- Footer content -->
    </footer>

    <!-- Include Bootstrap's JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
