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
            <h1>List Students</h1>
            <table border="1" class="table table-striped" >
                <tr>
                    <th>Code</th>
                    <th>Tên</th>
                    <th>Giới Tính</th>
                    <th>Ngày Sinh</th>
                    <th>Lớp</th>
                    <th>Email</th>
                    <th>Password</th>
                @foreach ($listGradeStudent as $listGradeStudent)
                    <tr>
                        <td>{{$listGradeStudent->code}}</td>
                        <td>{{$listGradeStudent->name}}</td>
                        <td>{{$listGradeStudent->name_gender}}</td>
                        <td>{{$listGradeStudent->date_birth}}</td>
                        <td>{{$listGradeStudent->name_grade}}</td>
                        <td>{{$listGradeStudent->email}}</td>
                        <td>{{$listGradeStudent->password}}</td>
                    </tr>
                @endforeach
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
