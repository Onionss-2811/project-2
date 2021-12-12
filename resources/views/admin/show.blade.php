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
                <p>DANH SÁCH ADMIN: </p>
            </div>
            <div class="tables">
                <div class="content">
                    <div class="btn-create">
                        <button class="buton btn btn-outline-success ">
                            <a class="link-edit" href="{{route('admin.create')}}">
                                Create
                            </a>
                        </button>
                    </div>
                    <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                {{-- <th>password</th> --}}
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin as $admin)
                            <tr>
                                <td>{{$admin->name_role}}</td>
                                <td>{{$admin->name}}</td>
                                <td>{{$admin->email}}</td>
                                {{-- <td>{{$admin->password}}</td> --}}
                                <td>
                                    <button class="buton btn btn-outline-success btn-sm">
                                        <a class="link-edit" href="{{route('admin.edit',$admin->id)}}">Edit</a>
                                    </button>
                                </td>
                                <td>
                                    <form method="post" action="{{route('admin.destroy', $admin->id)}}">
                                        @csrf
                                        @method('delete')
                                        <button class="buton btn btn-outline-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
</body>
</html>
