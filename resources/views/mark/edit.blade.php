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
            <h1>Edit student</h1>
            <form method="post" action="{{route('mark.update',$mark)}}">
                @csrf
                @method('PUT')
                <table class="table table-striped">
                    <tr>
                        <td>Name:</td>
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
                        <td>Name subject:</td>
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
                        <td>Type Test:</td>
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
                        <td>Number Of Test:</td>
                        <td>
                            <input type="text" name="number_of_test" value="{{$mark->number_of_test}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Mark:</td>
                        <td>
                            <input type="text" name="mark" value="{{$mark->mark}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Id Admin:</td>
                        <td>
                            <input type="text" name="id_admin" value="{{$mark->id_admin}}">
                        </td>
                    </tr>
                    <tr>
                        <td><button><a href="{{route('mark.index')}}">Back</a></button></td>
                        <td><button>Submit</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
