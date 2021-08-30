<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include ('menu.menu')
    <h1>List Grade</h1>
    <a href="{{route('student.create')}}">
        Create
    </a>
    <table border="1" >
        <tr>
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
</body>
</html>
