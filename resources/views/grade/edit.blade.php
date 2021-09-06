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
            <h1>Edit grade</h1>
            <form method="post" action="{{route('grade.update',$grade)}}">
                @csrf
                @method('PUT')
                <table class="table table-striped">
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value="{{$grade->name}}"></td>
                    </tr>
                    <tr>
                        <td>Majors</td>
                        <td>
                            <select name="id_majors">
                                @foreach ($majors as $majors)
                                <option @if ( $majors->id == $grade->id_majors ) selected @endif value="{{ $majors->id}}">
                                    {{$majors->name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr></tr>
                        <td>Course</td>
                        <td>
                            <select name="id_course">
                                @foreach ($courses as $courses)
                                <option @if ( $courses->id == $grade->id_course ) selected @endif value="{{ $courses->id}}">
                                    {{$courses->name}}
                                </option>
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
        </div>
    </div>
</body>
</html>
