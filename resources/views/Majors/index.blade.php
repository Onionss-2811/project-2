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
    <h1>List majors</h1>
    <a href="{{route('majors.create')}}">
        Create
    </a>
    <table border="1" >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($majors as $majors)
            <tr>
                <td>{{$majors->id}}</td>
                <td>{{$majors->name}}</td>
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
</body>
</html>
