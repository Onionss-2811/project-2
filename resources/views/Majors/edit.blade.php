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
    <h1>Edit Majors</h1>
    <form method="post" action="{{route('majors.update', $majors->id)}}">
        @method('PUT')
        @csrf
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="{{$majors->name}}"></td>
            </tr>
            <tr>
                <td><button><a href="{{route('majors.index')}}">Back</a></button></td>
                <td><button>Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>