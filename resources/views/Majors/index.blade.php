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
                <p>DANH SÁCH CHUYÊN NGÀNH: </p>
            </div>
            <div class="tables">
                <div class="content">
                    <div class="btn-create">
                        <button class="buton btn btn-outline-success ">
                            <a class="link-edit" href="{{route('majors.create')}}">
                                Create
                            </a>
                        </button>
                    </div>
                    <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>List Grade</th>
                                <th>Edit</th>
                                {{-- <th>Delete</th> --}}
                            </tr>
                        </thead>
                        @foreach ($majors as $majors)
                        <tbody>
                            <tr>
                                <td>{{$majors->id}}</td>
                                <td style="font-weight: bold">{{$majors->name}}</td>
                                <td>
                                    <button class="buton btn btn-outline-primary btn-sm">
                                        <a class="link-show" href="{{route('majors.show',$majors->id)}}">View Grade</a>
                                    </button>
                                </td>
                                <td>
                                    <button class="buton btn btn-outline-success btn-sm">
                                        <a class="link-edit" href="{{route('majors.edit',$majors->id)}}">Edit</a>
                                    </button>
                                </td>
                                {{-- <td>
                                    <form method="post" action="{{route('majors.destroy', $majors->id)}}">
                                        @csrf
                                        @method('delete')
                                        <button class=" btn btn-outline-danger btn-sm">Delete</button>
                                    </form>
                                </td> --}}
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
