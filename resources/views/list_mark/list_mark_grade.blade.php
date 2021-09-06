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
            <h1>Danh sách điểm theo lớp</h1>
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
                @foreach ($listMarkGrade as $listMarkGrade)
                    <tr>
                        <td>{{$listMarkGrade->code}}</td>
                        <td>{{$listMarkGrade->name_student}}</td>
                        <td>{{$listMarkGrade->name_subject}}</td>
                        <td>{{$listMarkGrade->name_type_test}}</td>
                        <td>{{$listMarkGrade->number_of_test}}</td>
                        <td>{{$listMarkGrade->mark}}</td>
                        <td>{{$listMarkGrade->name_admin}}</td>

                        <td>
                            <button>
                                <a href="{{route('mark.edit',$listMarkGrade->id)}}">Edit</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
