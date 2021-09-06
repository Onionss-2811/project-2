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
            <h1>List Grade</h1>
            <table border="1" class="table table-striped" >
                <tr>
                    <th>Tên</th>
                    <th>Ngành</th>
                    <th>Khóa</th>
                @foreach ($listGrade as $listGrade)
                    <tr>
                        <td>{{$listGrade->name}}</td>
                        <td>{{$listGrade->majors_name}}</td>
                        <td>{{$listGrade->courses_name}}</td>
                    </tr>
                @endforeach
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
