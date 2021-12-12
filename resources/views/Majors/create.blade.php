<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="containe">
        @include ('menu.menu')
        <div class="admin">
            <div class="navbar">
                <div class="logo-nav-bar"></div>
            </div>
            <div class="title">
                <p>THÊM CHUYÊN NGÀNH: </p>
            </div>
            <div class="tables">
                <div class="content-create">
                    <form method="post" action="{{route('majors.store')}}">
                        @csrf
                        <table class="table table-hover" >
                            <thead>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="buton btn btn-outline-danger btn-sm">
                                            <a class="link-back" href="{{route('majors.index')}}">Trở lại</a>
                                        </button>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="font-weight: bold">Name:</td>
                                    <td><input type="text" name="name" required></td>
                                    <td><button class="buton btn btn-outline-success btn-sm">Submit</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
