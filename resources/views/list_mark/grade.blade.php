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
                <p>THÔNG TIN HỌC SINH: </p>
            </div>
            <div class="tables">
                <div class="content">
                    <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Chuyên Ngành</th>
                                <th>Khóa</th>
                                <th>View Mark</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($grade as $grade)
                            <tr>
                                <td>{{$grade->name}}</td>
                                <td>{{$grade->name_majors}}</td>
                                <td>{{$grade->name_course}}</td>

                                <td>
                                    <button class="buton btn btn-outline-success btn-sm">
                                        <a class="link-edit" href="/list_mark/mark_grade/{{$grade->id}}">View Mark</a>
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
