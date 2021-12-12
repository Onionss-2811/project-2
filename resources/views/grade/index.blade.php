<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
                <p>DANH SÁCH LỚP: </p>
            </div>
            <div class="tables">
                <div class="content">
                    <div class="btn-create">
                        <button class="buton btn btn-outline-success ">
                            <a class="link-edit" href="{{route('grade.create')}}">
                                Create
                            </a>
                        </button>
                    </div>
                    <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Major</th>
                                <th>Course</th>
                                <th>List Student</th>
                                <th>Edit</th>
                                {{-- <th>Delete</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($grades as $grade)
                            <tr>
                                <td>{{$grade->name}}</td>
                                <td>{{$grade->name_majors}}</td>
                                <td>{{$grade->name_course}}</td>
                                <td>
                                    <button class="buton btn btn-outline-primary btn-sm">
                                        <a class="link-show" href="{{route('grade.show',$grade->id)}}">View Students</a>
                                    </button>
                                </td>
                                <td>
                                    <button class="buton btn btn-outline-success btn-sm">
                                        <a class="link-edit" href="{{route('grade.edit',$grade->id)}}">Edit</a>
                                    </button>
                                </td>
                                {{-- <td>
                                    <form method="post" action="{{route('grade.destroy', $grade->id)}}">
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
                        <nav>{{$grades->links() }}</nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
