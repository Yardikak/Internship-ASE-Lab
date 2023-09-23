@section('title', 'Login')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dono's Store | @yield('title')</title>
</head>

<body class="bg-login">
    <div class="box-login">
        <div>
            <div class="logo-login">
                <p>
                    login
                </p>
            </div>
            <form class="form-login" action="">
                <p>Username</p>
                <input class="usn" type="text" required>
                <p>Login</p>
                <input class="pwd" type="password" required>
            </form>
            <button type="button" class="button-login">
                Login
            </button>
        </div>

    </div>


</body>

</html>