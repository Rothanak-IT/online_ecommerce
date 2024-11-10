<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Login</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        color: white !important;
    }

    .contanier {
        background-image: url("img/back.jpg");
        height: 100vh;
        width: 100% !important;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .w-50 {
        width: 30% !important;
        position: absolute !important;
        top: 120px;
        border: 2px solid cadetblue !important;
        border-radius: 10px;
        left: 35%;
    }

    .form-label {
        font-weight: 700;

    }

    .btn-success {
        background-color: black !important;
        border: none !important;
        width: 100px;
    }

    @media only screen and (max-width: 600px) {
        .w-50 {
            width: 100% !important;
            left: 0 !important;
        }
    }
</style>

<body>
    <div class="contanier">
        <header>
            <nav>
                <ul class='nav-bar'>
                <li><a href="" style=" color: #ffff " >T-Shirt Online</a></li>
                    <input type='checkbox' id='check' />
                    <span class="menu">
                    <li><a href="">Home</a></li>
                        <li><a href="">Products</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href=""></a></li>
                        <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
                    </span>
                    <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
                </ul>
            </nav>
        </header>

        <form action="/home" class="w-50 mx-auto py-5 shadow p-4">
            <h3 class="text-white">Login In</h3>
            <hr>
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email">
            </div>
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="Enter your password">
            </div>

            <div class="mb-3 d-flex " style="justify-content: space-between;">
                <button class="btn btn-primary">Login</button>
                <p class="form-label ms-auto mt-0"><a href="">Create New Account ? </a></p>
            </div>
        </form>
    </div>
</body>

</html>