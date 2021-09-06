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
            <h1>List course</h1>
            <a href="{{route('course.create')}}">
                Create
            </a>
            <table border="1" class="table table-striped" >
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>List Grade</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($course as $course)
                    <tr>
                        <td>{{$course->id}}</td>
                        <td>{{$course->name}}</td>
                        <td>
                            <button>
                                <a href="{{route('course.show',$course->id)}}">View Grade</a>
                            </button>
                        </td>
                        <td>
                            <button>
                                <a href="{{route('course.edit',$course->id)}}">Edit</a>
                            </button>
                        </td>
                        <td>
                            <form method="post" action="{{route('course.destroy', $course ->id)}}">
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
