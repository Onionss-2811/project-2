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
                <p>CHỈNH SỬA HỌC SINH: </p>
            </div>
            <div class="tables">
                <div class="content-create">
                    <form method="post" action="{{route('student.update',$student)}}">
                        @csrf
                        @method('PUT')
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="buton btn btn-outline-danger btn-sm">
                                            <a class="link-back" href="{{route('student.index')}}">Back</a>
                                        </button>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Code:</th>
                                    <td><input type="text" name="code" value="{{$student->code}}"></td>
                                </tr>
                                <tr>
                                    <th>Name:</th>
                                    <td><input type="text" name="name" value="{{$student->name}}"></td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
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
                                    <th>Date of Birth:</th>
                                    <td><input type="date" name="date_birth" value="{{$student->date_birth}}"></td>
                                    <td><button class="buton btn btn-outline-success btn-sm">Submit</button></td>
                                </tr>
                                <tr>
                                    <th>Grade:</th>
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
                                    <th>Email:</th>
                                    <td><input type="text" name="email" value="{{$student->email}}" readonly></td>
                                </tr>
                                <tr>
                                    <th>Password:</th>
                                    <td><input type="text" name="password" value="{{$student->password}}"></td>
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
