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
    <a href="{{route('grade.create')}}">
        Create
    </a>
    <table border="1" >
        <tr>
            <th>Name</th>
            <th>Major</th>
            <th>Course</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($grade as $grade)
            <tr>
                <td>{{$grade->name}}</td>
                <td>{{$grade->majors_name}}</td>
                <td>{{$grade->courses_name}}</td>
                <td>
                    <button>
                        <a href="{{route('grade.edit',$grade->id)}}">Edit</a>
                    </button>
                </td>
                <td>
                    <form method="post" action="{{route('grade.destroy', $grade->id)}}">
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
