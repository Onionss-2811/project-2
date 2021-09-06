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
            <h1>Đây là trang xem điểm</h1>
            <table border="1" class="table table-striped" >
                <tr>
                    <th>Code</th>
                    <th>Name Student</th>
                    <th>Name Grade</th>
                    <th>Type Test</th>
                    <th>Number of test</th>
                    <th>Mark</th>
                    <th>Admin</th>
                    <th>Edit</th>
                </tr>
                @foreach ($listMark as $listMark)
                    <tr>
                        <td>{{$listMark->code}}</td>
                        <td>{{$listMark->name_student}}</td>
                        <td>{{$listMark->name_subject}}</td>
                        <td>{{$listMark->name_type_test}}</td>
                        <td>{{$listMark->number_of_test}}</td>
                        <td>{{$listMark->mark}}</td>
                        <td>{{$listMark->name_admin}}</td>

                        <td>
                            <button>
                                <a href="{{route('mark.edit',$listMark->id)}}">Edit</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
