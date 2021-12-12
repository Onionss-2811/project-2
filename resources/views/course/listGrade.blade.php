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
                <p>DANH SÁCH LỚP THEO KHÓA: </p>
            </div>
            <div class="tables">
                <div class="content-create">
                    <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Ngành</th>
                                <th>Khóa</th>
                                <th>List Student</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listGrade as $listGrade)
                                <tr>
                                    <td>{{$listGrade->name}}</td>
                                    <td>{{$listGrade->name_majors}}</td>
                                    <td>{{$listGrade->name_course}}</td>
                                    <td>
                                        <button class="buton btn btn-outline-primary btn-sm">
                                            <a class="link-show" href="{{route('grade.show',$listGrade->id)}}">View Students</a>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
