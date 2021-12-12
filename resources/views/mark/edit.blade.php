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
                <p>CHỈNH SỬA ĐIỂM: </p>
            </div>
            <div class="tables">
                <div class="content-create">
                    <form method="post" action="{{route('mark.update',$mark)}}">
                        @csrf
                        @method('PUT')
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="buton btn btn-outline-danger btn-sm">
                                            <a class="link-back" href="{{route('mark.index')}}">Back</a>
                                        </button>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Name:</th>
                                    <td>
                                        <select name="id_student">
                                            @foreach ($student as $student)
                                            <option @if ( $student->id == $mark->id_student ) selected @endif value="{{ $student->id}}">
                                                {{$student->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Name subject:</th>
                                    <td>
                                        <select name="id_subject">
                                            @foreach ($subject as $subject)
                                            <option @if ( $subject->id == $mark->id_subject ) selected @endif value="{{ $subject->id}}">
                                                {{$subject->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Type Test:</th>
                                    <td>
                                        <select name="type_test">
                                            @foreach ($type_test as $type_test)
                                            <option @if ( $type_test->id == $mark->type_test ) selected @endif value="{{ $type_test->id}}">
                                                {{$type_test->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Number Of Test:</th>
                                    <td>
                                        <input type="text" name="number_of_test" value="{{$mark->number_of_test}}" required>
                                    </td>
                                    <td><button class="buton btn btn-outline-success btn-sm">Submit</button></td>
                                </tr>
                                <tr>
                                    <th>Mark:</th>
                                    <td>
                                        <input type="text" name="mark" value="{{$mark->mark}}" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Id Admin:</th>
                                    <td>
                                        <input type="text" name="id_admin" value="{{$mark->id_admin}}" required>
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
