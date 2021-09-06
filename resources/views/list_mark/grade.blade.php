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
            <table border="1" class="table table-striped">
                <tr>
                    <th>Name</th>
                    <th>Chuyên Ngành</th>
                    <th>Khóa</th>
                    <th>View Mark</th>
                </tr>
                @foreach ($grade as $grade)
                    <tr>
                        <td>{{$grade->name}}</td>
                        <td>{{$grade->majors_name}}</td>
                        <td>{{$grade->courses_name}}</td>

                        <td>
                            <button>
                                <a href="/list_mark/mark_grade/{{$grade->id}}">View Mark</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
