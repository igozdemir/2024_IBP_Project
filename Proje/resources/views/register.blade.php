<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: none;
        }
        body {
            background: #eee;
        }
        .login__forms {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-height: 100vh;
        }
        .login__box {
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 4px;
            padding: 0.875rem;
            margin-bottom: 1rem;
            width: 450px;
        }
        .login__box input {
            border: none;
            outline: none;
            padding: 0.45rem 0.675rem; /* Genişlik azaltıldı */
            font-family: 'Poppins', sans-serif;
            width: calc(100% - 30px); /* Genişlik azaltıldı ve ikonlarla boşluk bırakıldı */
        }
        .btn-login {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #3a3a3a;
            color: #fff;
            padding: 0.875rem;
            width: 12rem;
            box-shadow: 4px 4px #2a2a2a;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            transition: 300ms;
        }
        .btn-login:hover {
            transform: translateY(7px);
            transition: 300ms;
        }
        .btn-login span {
            padding-left: 10px;
        }
        .fs-20 {
            font-size: 24px;
        }
        .input-container {
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 4px;
            padding: 0.875rem;
            margin-bottom: 1rem;
            width: 350px;
        }
        .input-container ion-icon {
            margin-right: 15px; /* İkonlarla boşluk artırıldı */
        }
        footer {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        footer h3, footer a {
            margin: 5px 0;
        }
    </style>
</head>
<body>
<main>
    <form action="{{route('registerpost')}}" method="post">
        @csrf
        <h1>KAYDOL</h1>
        <div class="input-container">
            <ion-icon class="fs-20" name="person-outline"></ion-icon>
            <input type="text" name="username" id="username" placeholder="Username">
        </div>
        <div class="input-container">
            <ion-icon class="fs-20" name="mail-outline"></ion-icon>
            <input type="email" name="email" id="email" placeholder="E mail">
        </div>
        <div class="input-container">
            <ion-icon class="fs-20" name="lock-closed-outline"></ion-icon>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div class="input-container">
            <ion-icon class="fs-20" name="lock-closed-outline"></ion-icon>
            <input type="password" name="password2" id="password2" placeholder="Password again">
        </div>
        <div>
            <button class="btn-login" type="reset"><ion-icon name="log-in-outline"></ion-icon>Reset</button>     
        </div>
        <button class="btn-login" type="submit"><ion-icon name="log-in-outline"></ion-icon>Kayıt</button>
        <footer>
            <h3>Already a member?</h3>
            <a href="{{route('login')}}"><h3>Login here</h3></a>
        </footer>
    </form>
</main>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
