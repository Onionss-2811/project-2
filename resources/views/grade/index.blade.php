<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="main">
        @include ('menu.menu')
        <div>
            <h1>List Grade</h1>
            <a href="{{route('grade.create')}}">
                Create
            </a>
            <table border="1" class="table table-striped" >
                <tr>
                    <th>Name</th>
                    <th>Major</th>
                    <th>Course</th>
                    <th>List Student</th>
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
                                <a href="{{route('grade.show',$grade->id)}}">View Students</a>
                            </button>
                        </td>
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
        </div>
    </div>
</body>
</html>
