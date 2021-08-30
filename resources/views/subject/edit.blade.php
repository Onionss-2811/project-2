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
    <h1>Edit Subject</h1>
    <form method="post" action="{{route('subject.update', $subject)}}">
        @method('PUT')
        @csrf
        <table>
            <tr>
                <td>Short-name:</td>
                <td><input type="text" name="short_name" value="{{$subject -> short_name}}"></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="{{$subject -> name}}"></td>
            </tr>
            <tr>
                <td>Type-test:</td>
                <td>
                    <select name="type_test">
                        @foreach ($typetest as $typetest)
                        <option @if ( $typetest->id == $subject->type_test ) selected @endif value="{{ $typetest->id}}">
                            {{$typetest->name}}
                        </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td><button><a href="{{route('subject.index')}}">Back</a></button></td>
                <td><button>Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
