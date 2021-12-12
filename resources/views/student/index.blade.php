<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin.css">
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
                <p>DANH SÁCH HỌC SINH: </p>
            </div>
            <div class="tables">
                <div class="content">
                    <div class="btn-create">
                        <button class="buton btn btn-outline-success ">
                            <a class="link-edit" href="{{route('student.create')}}">
                                Create
                            </a>
                        </button>
                    </div>
                    <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Date Birth</th>
                                <th>Grade</th>
                                <th>Email</th>
                                {{-- <th>Password</th> --}}
                                <th>Edit</th>
                                {{-- <th>Delete</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{$student->code}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->name_gender}}</td>
                                    <td>{{$student->date_birth}}</td>
                                    <td>{{$student->name_grade}}</td>
                                    <td>{{$student->email}}</td>
                                    {{-- <td>{{$student->password}}</td> --}}

                                    <td>
                                        <button class="buton btn btn-outline-success btn-sm">
                                            <a class="link-edit" href="{{route('student.edit',$student->id)}}">Edit</a>
                                        </button>
                                    </td>
                                    {{-- <td>
                                        <form method="post" action="{{route('student.destroy', $student->id)}}">
                                            @csrf
                                            @method('delete')
                                            <button class="buton btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination">
                        <nav>{{$students->links() }}</nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
