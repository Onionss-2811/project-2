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
            <h1>Add Student</h1>
            <form method="post" action="{{route('student.store')}}" >
                @csrf
                <table class="table table-striped">
                    <tr>
                        <td>Code:</td>
                        <td><input type="text" name="code"></td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <select name="gender">
                                @foreach ($gender as $gender)
                                <option value="{{ $gender->id}}">{{$gender->name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td><input type="date" name="date_birth"></td>
                    </tr>
                    <tr>
                        <td>Grade:</td>
                        <td>
                            <select name="id_grade">
                                @foreach ($grade as $grade)
                                <option value="{{ $grade->id}}">{{$grade->name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="text" name="password"></td>
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
