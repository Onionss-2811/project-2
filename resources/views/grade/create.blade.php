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
    <h1>Add Majors</h1>
    <form method="post" action="{{route('grade.store')}}">
        @csrf
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Majors</td>
                <td>
                    <select name="id_majors">
                        @foreach ($majors as $majors)
                        <option value="{{ $majors->id}}">{{$majors->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr></tr>
                <td>Course</td>
                <td>
                    <select name="id_course">
                        @foreach ($courses as $courses)
                        <option value="{{ $courses->id}}">{{$courses->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td><button><a href="{{route('grade.index')}}">Back</a></button></td>
                <td><button>Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
