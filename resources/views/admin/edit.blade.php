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
    <h1>Edit ADMIN</h1>
    <form method="post" action="{{route('admin.update', $admin)}}">
        @method('PUT')
        @csrf
        <table>
            <tr>
                <td>Role:</td>
                <td>
                    <select name="role">
                        @foreach ($role as $role)
                        <option @if ( $role->id == $admin->role ) selected @endif value="{{ $role->id}}">
                            {{$role->name}}
                        </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="{{$admin -> name}}"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="{{$admin -> email}}"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="password" value="{{$admin -> password}}"></td>
            </tr>
            <tr>
                <td><button><a href="{{route('admin.index')}}">Back</a></button></td>
                <td><button>Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
