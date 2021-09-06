<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="main">
        @include ('menu.menu')
        <div>
            <div>
                <form method="POST" action="{{route('ListMarkSearch')}}">
                    @csrf
                    <table class="table table-striped">
                        <tr>
                            <td>Nhập mã sinh viên:</td>
                            <td><input type="text" name="code"></td>
                            <td><button>Search</button></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div>
                <form method="POST" action="{{route('ListMarkGradeSearch')}}">
                    @csrf
                    <table class="table table-striped">
                        <tr>
                            <td>Nhập lớp:</td>
                            <td><input type="text" name="name"></td>
                            <td> <button>Search</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
