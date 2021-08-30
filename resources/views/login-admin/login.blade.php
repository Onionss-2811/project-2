<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h1>Đăng nhập</h1>
            <form class="form" action="{{ route('login-admin-process') }}" method="post">
                @csrf
                <input type="email" name="email" placeholder="Enter your email...">
                <input type="password" type="password" name="password" placeholder="Enter your password...">

                    @if (Session::exists('error'))
                        {{Session::get('error')}}
                    @endif
                <div>
                    <button type="submit">Đăng nhập</button>
                </div>

            </form>
        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</body>
</html>
{{-- <form  action="{{ route('login-process') }}" method="post">
     @csrf
    <div class="container-form">
        <div class="form-input">
            <input class="form-control" type="email" name="email"placeholder="Enter your email ..." >
        </div>
        <div class="form-input">
            <input class="form-control" type="password" name="password" placeholder="Enter your password ..." >
        </div>
        <div class="form-input">
            @if (Session::exists('error'))
                {{Session::get('error')}}
            @endif
        </div>
        <div class="btn-login">
            <button class="btn btn-primary btn-sm">Đăng nhập</button>
        </div>
    </div>
</form> --}}

{{-- $("#login-button").click(function(event){
    event.preventDefault();

$('form').fadeOut(500);
$('.wrapper').addClass('form-success');
}); --}}
