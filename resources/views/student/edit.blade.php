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
    <h1>Edit student</h1>
    <form method="post" action="{{route('student.update',$student)}}">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="{{$student->name}}"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <select name="gender">
                        @foreach ($gender as $gender)
                        <option @if ( $gender->id == $student->gender ) selected @endif value="{{ $gender->id}}">
                            {{$gender->name}}
                        </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="date_birth" value="{{$student->date_birth}}"></td>
            </tr>
            <tr>
                <td>Grade:</td>
                <td>
                    <select name="id_grade">
                        @foreach ($grade as $grade)
                        <option @if ( $grade->id == $student->id_grade ) selected @endif value="{{ $grade->id}}">
                            {{$grade->name}}
                        </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="{{$student->email}}"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="password" value="{{$student->password}}"></td>
            </tr>
            <tr>
                <td><button><a href="{{route('student.index')}}">Back</a></button></td>
                <td><button>Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
