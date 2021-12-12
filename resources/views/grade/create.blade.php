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
                <p>THÊM LỚP: </p>
            </div>
            <div class="tables">
                <div class="content-create">
                    <form method="post" action="{{route('grade.store')}}">
                        @csrf
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="buton btn btn-outline-danger btn-sm">
                                            <a class="link-back" href="{{route('grade.index')}}">Trở lại</a>
                                        </button>
                                    </td>
                                </tr>
                            </thead>
                            <tr>
                                <th>Name:</th>
                                <td><input type="text" name="name" required></td>
                            </tr>
                            <tr>
                                <th>Majors</th>
                                <td>
                                    <select name="id_majors">
                                        @foreach ($majors as $majors)
                                        <option value="{{ $majors->id}}">{{$majors->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td><button class="buton btn btn-outline-success btn-sm">Submit</button></td>
                            </tr>
                            <tr></tr>
                                <th>Course</th>
                                <td>
                                    <select name="id_course">
                                        @foreach ($courses as $courses)
                                        <option value="{{ $courses->id}}">{{$courses->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
