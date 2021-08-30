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
    <h1>Add ADMIN</h1>
    <form method="post" action="{{route('admin.store')}}">
        @csrf
        <table>
            <tr>
                <td>Role:</td>
                <td>
                    <select name="role">
                        @foreach ($role as $role)
                        <option value="{{ $role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td><button>Back</button></td>
                <td><button>Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
