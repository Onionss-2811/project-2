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
            <h1>Add mark</h1>
            <form method="post" action="{{route('mark.store')}}" >
                @csrf
                <table class="table table-striped">
                    <tr>
                        <td>ID student:</td>
                        <td><input type="text" name="id_student"></td>
                    </tr>
                    <tr>
                        <td>Môn học:</td>
                        <td>
                            <select name="id_subject">
                                @foreach ($subject as $subject)
                                    <option value="{{ $subject->id}}">{{$subject->name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Kiểu thi:</td>
                        <td>
                            <select name="type_test">
                                @foreach ($type_test as $type_test)
                                    <option value="{{ $type_test->id}}">{{$type_test->name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Lần thi:</td>
                        <td><input type="text" name="number_of_test"></td>
                    </tr>
                    <tr>
                        <td>Điểm:</td>
                        <td><input type="text" name="mark"></td>
                    </tr>
                    <tr>
                        <td>Id Admin:</td>
                        <td><input type="text" name="id_admin"></td>
                    </tr>
                    <tr>
                        <td><button><a href="{{route('student.index')}}">Back</a></button></td>
                        <td><button>Submit</button></td>
                    </tr>
                </table>
            </form>
            <form method="POST" action="{{route('StudentImportFile')}}" enctype="multipart/form-data" action="">
                @csrf
                <label for="file">Import Excel: </label>
                <input type="file" name="file">
                <button>Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
