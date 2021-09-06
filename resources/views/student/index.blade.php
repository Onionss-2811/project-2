<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
            @include ('menu.menu')
        <div>
            <h1>List Student</h1>
            <a href="{{route('student.create')}}">
                Create
            </a>
            <table border="1"  class="table table-striped">
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Date Birth</th>
                    <th>Grade</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Edit</th>
                    <th>Delete</th>
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
                                <a href="{{route('student.edit',$student->id)}}">Edit</a>
                            </button>
                        </td>
                        <td>
                            <form method="post" action="{{route('student.destroy', $student->id)}}">
                                @csrf
                                @method('delete')
                                <button>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
