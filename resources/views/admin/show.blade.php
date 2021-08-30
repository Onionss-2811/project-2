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
    <h1>List admin</h1>
    <a href="{{route('admin.create')}}">
        Create
    </a>
    <table border="1" >
        <tr>
            <th>ID</th>
            <th>Role</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($admin as $admin)
            <tr>
                <td>{{$admin->id}}</td>
                <td>{{$admin->role_name}}</td>
                <td>{{$admin->name}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->password}}</td>
                <td>
                    <button>
                        <a href="{{route('admin.edit',$admin->id)}}">Edit</a>
                    </button>
                </td>
                <td>
                    <form method="post" action="{{route('admin.destroy', $admin->id)}}">
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
