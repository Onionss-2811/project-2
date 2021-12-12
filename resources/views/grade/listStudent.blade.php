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
                <p>DANH SÁCH HỌC SINH: </p>
            </div>
            <div class="tables">
                <div class="content">
                    <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Tên</th>
                                <th>Sex</th>
                                <th>Ngày Sinh</th>
                                <th>Lớp</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Mark</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listGradeStudent as $listGradeStudent)
                                <tr>
                                    <td>{{$listGradeStudent->code}}</td>
                                    <td>{{$listGradeStudent->name}}</td>
                                    <td>{{$listGradeStudent->name_gender}}</td>
                                    <td>{{$listGradeStudent->date_birth}}</td>
                                    <td>{{$listGradeStudent->name_grade}}</td>
                                    <td>{{$listGradeStudent->email}}</td>
                                    <td>{{$listGradeStudent->password}}</td>
                                    <td>
                                        <button class="buton btn btn-outline-primary  btn-sm">
                                            <a class="link-show" href="/list_mark/mark_student/{{$listGradeStudent->id}}">Mark</a>
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
