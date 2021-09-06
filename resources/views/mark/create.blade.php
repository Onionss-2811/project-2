
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
            <h1>Add Mark</h1>
            <div>
                <form method="POST" action="{{route('SearchStudent')}}">
                    @csrf
                    <span>Nhập mã sinh viên: </span>
                    <input type="text" name="code">
                    <button>Search</button>
                </form>
            </div>
            <div>
                <form method="POST" action="{{route('MarkImportFile')}}" enctype="multipart/form-data" action="">
                    @csrf
                    <label for="file">Import Excel: </label>
                    <input type="file" name="file">
                    <button>Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
