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
                <p>CHỈNH SỬA LỚP: </p>
            </div>
            <div class="tables">
                <div class="content-create">
                    <form method="post" action="{{route('grade.update',$grade)}}">
                        @csrf
                        @method('PUT')
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="buton btn btn-outline-danger btn-sm">
                                            <a class="link-back" href="{{route('grade.index')}}">Back</a>
                                        </button>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Name:</th>
                                    <td><input type="text" name="name" value="{{$grade->name}}" required></td>
                                </tr>
                                <tr>
                                    <th>Majors</th>
                                    <td>
                                        <select name="id_majors">
                                            @foreach ($majors as $majors)
                                            <option @if ( $majors->id == $grade->id_majors ) selected @endif value="{{ $majors->id}}">
                                                {{$majors->name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><button class="buton btn btn-outline-success btn-sm">Submit</button></td>
                                </tr>
                                <tr></tr>
                                    <th>Course</th>
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
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
