
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include ('menu.menu')
    <h1>Add Mark</h1>
    <div>
        <button>
            <a href="{{route('mark_importForm')}}">Thêm theo danh sách</a>
        </button>
        <button>
            <a href="#">Thêm theo cá nhân</a>
        </button>
    </div>
</body>
</html>
