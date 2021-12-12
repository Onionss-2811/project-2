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
                <p>THÊM ĐIỂM: </p>
            </div>
            <div class="tables">
                <div class="content-create">
                    <form method="post" action="{{route('mark.store')}}" >
                        @csrf
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td></td>
                                    <th>THÊM THEO CÁ NHÂN</th>
                                    <td>
                                        <button class="buton btn btn-outline-danger btn-sm">
                                            <a class="link-back" href="{{route('student.index')}}">Back</a>
                                        </button>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>ID student:</th>
                                    <td><input type="text" name="id_student" required></td>
                                </tr>
                                <tr>
                                    <th>Môn học:</th>
                                    <td>
                                        <select name="id_subject">
                                            @foreach ($subject as $subject)
                                                <option value="{{ $subject->id}}">{{$subject->name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Kiểu thi:</th>
                                    <td>
                                        <select name="type_test">
                                            @foreach ($type_test as $type_test)
                                                <option value="{{ $type_test->id}}">{{$type_test->name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Lần thi:</th>
                                    <td><input type="text" name="number_of_test" required></td>
                                    <td><button class="buton btn btn-outline-success btn-sm">Submit</button></td>
                                </tr>
                                <tr>
                                    <th>Điểm:</th>
                                    <td><input type="text" name="mark" required></td>
                                </tr>
                                <tr>
                                    <th>Id Admin:</th>
                                    <td><input type="text" name="id_admin" required></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <form method="POST" action="{{route('MarkImportFile')}}" enctype="multipart/form-data" action="">
                        @csrf
                        <table>
                            <thead>
                                <td></td>
                                <th>THÊM THEO DANH SÁCH</th>
                                <td></td>
                            </thead>
                            <tbody>
                                <th>Import Excel:</th>
                                <td><input type="file" name="file"></td>
                                <td><button class="buton btn btn-outline-success btn-sm">Submit</button></td>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
