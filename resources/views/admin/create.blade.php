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
                <p>THÊM ADMIN: </p>
            </div>
            <div class="tables">
                <div class="content-create">
                    <form method="post" action="{{route('admin.store')}}">
                        @csrf
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="buton btn btn-outline-danger btn-sm">
                                            <a class="link-back" href="{{route('adminShow')}}">Trở lại</a>
                                        </button>
                                    </td>
                                </tr>
                            </thead>
                            <tr>
                                <th>Role</th>
                                <td>
                                    <select name="role">
                                        @foreach ($role as $role)
                                        <option value="{{ $role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Name:</th>
                                <td><input type="text" name="name" required></td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td><input type="text" name="email" required></td>
                                <td><button class="buton btn btn-outline-success btn-sm">Submit</button></td>
                            </tr>
                            <tr>
                                <th>Password:</th>
                                <td><input type="text" name="password" required></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
