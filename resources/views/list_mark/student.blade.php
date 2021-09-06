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
                    <th>Code</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Date Birth</th>
                    <th>Grade</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>View Mark</th>
                </tr>
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
                            <button>
                                <a href="/list_mark/mark_student/{{$student->id}}">View Mark</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
