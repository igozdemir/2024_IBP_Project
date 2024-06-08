<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <title>Giriş</title>
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
      }
      
      .login__box input {
          border: none;
          outline: none;
          padding: 0.45rem 0.875rem;
          font-family: 'Poppins', sans-serif;
          width: 100%;
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
  </style>
</head>
<body >
<main>
     
    @if (@session()->has('error')&& session('error')=='fail')
      <div class="alert alert-danger" role="alert">
        Giriş Bilgileri Hatalı
      </div>
    @endif
    
    @if (@session()->has('success'))
      <div class="alert alert-success" role="alert">
       {{session('success')}}
      </div >
    @endif

    <form action="{{route('loginpost')}}" method="post">
        @csrf
        <h1>GİRİŞ</h1>
        <div class="login__forms">
            <ion-icon class="fs-20" name="person-outline"></ion-icon>
            <label for="username"></label>
            <input type="text" name="username" id="username" placeholder="Username">
        </div>
        <div class="login__forms">
          <ion-icon class="fs-20" name="lock-closed-outline"></ion-icon>
            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <section>
            <button type="submit" class="btn-login">
              <ion-icon name="log-in-outline"></ion-icon>
            <span>Giriş</span>
          </button>
          <a href="{{route('register')}}" style="color:rgb(124, 44, 185);text-decoration: none;"><h5>Kayıt</h5></a>
        </section>
    </form>
</main>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>