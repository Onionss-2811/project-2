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
                <p>DANH SÁCH ĐIỂM: </p>
            </div>
            <div class="tables">
                <div class="content">
                    <table class="table table-hover" >
                        <thead>
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
                        </thead>
                        <tbody>
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
                                        <button class="buton btn btn-outline-success btn-sm">
                                            <a class="link-edit" href="{{route('mark.edit',$listMark->id)}}">Edit</a>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
