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
            <h1>List majors</h1>
            <a href="{{route('majors.create')}}">
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
                @foreach ($majors as $majors)
                    <tr>
                        <td>{{$majors->id}}</td>
                        <td>{{$majors->name}}</td>
                        <td>
                            <button>
                                <a href="{{route('majors.show',$majors->id)}}">View Grade</a>
                            </button>
                        </td>
                        <td>
                            <button>
                                <a href="{{route('majors.edit',$majors->id)}}">Edit</a>
                            </button>
                        </td>
                        <td>
                            <form method="post" action="{{route('majors.destroy', $majors->id)}}">
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
