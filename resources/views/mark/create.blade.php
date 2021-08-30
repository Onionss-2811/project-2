
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
    <h1>Add Mark</h1>
    {{-- <form method="post" action="{{route('mark.store')}}">
        @csrf
        <table>
            <tr>
                <td>Name Student:</td>
                <td>
                    <select name="id_student">
                        @foreach ($students as $students)
                        <option value="{{ $students->id}}">{{$students->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Name Subject:</td>
                <td>
                    <select name="id_subject">
                        @foreach ($subject as $subject)
                        <option value="{{ $subject->id}}">{{$subject->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Type Test:</td>
                <td>
                    <select name="type_test">
                        @foreach ($type_test as $type_test)
                        <option value="{{ $type_test->id}}">{{$type_test->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Mark:
                </td>
                <td>
                    <input type="text" name="mark">
                </td>
            </tr>
            <tr>
                <td><button>Back</button></td>
                <td><button>Submit</button></td>
            </tr>
        </table>
    </form> --}}
</body>
</html>
