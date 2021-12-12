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
                                <th>Code</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Date Birth</th>
                                <th>Grade</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>View Mark</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $student)
                                <tr>
                                    <td>{{$student->code}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->name_gender}}</td>
                                    <td>{{$student->date_birth}}</td>
                                    <td>{{$student->name_grade}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->password}}</td>

                                    <td>
                                        <button class="buton btn btn-outline-primary  btn-sm">
                                            <a class="link-show" href="/list_mark/mark_student/{{$student->id}}">View Mark</a>
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
