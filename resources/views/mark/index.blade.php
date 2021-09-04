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
    <h1>Đây là trang xem điểm</h1>
    <a href="{{route('mark.create')}}">Thêm điểm</a>
    <table border="1" >
        <tr>
            <th>Name Student</th>
            <th>Name Grade</th>
            <th>Type Test</th>
            <th>Number of test</th>
            <th>Mark</th>
            <th>Admin</th>
            <th>Edit</th>
        </tr>
        @foreach ($mark as $mark)
            <tr>
                <td>{{$mark->name_student}}</td>
                <td>{{$mark->name_subject}}</td>
                <td>{{$mark->name_type_test}}</td>
                <td>{{$mark->number_of_test}}</td>
                <td>{{$mark->mark}}</td>
                <td>{{$mark->name_admin}}</td>

                <td>
                    <button>
                        <a href="{{route('mark.edit',$mark->id)}}">Edit</a>
                    </button>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
