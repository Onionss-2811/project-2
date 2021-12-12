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
                <p>DANH SÁCH MÔN HỌC: </p>
            </div>
            <div class="tables">
                <div class="content">
                    <div class="btn-create">
                        <button class="buton btn btn-outline-success ">
                            <a class="link-edit" href="{{route('subject.create')}}">
                                Create
                            </a>
                        </button>
                    </div>
                    <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Short-Name</th>
                                <th>Name</th>
                                <th>Type-Test</th>
                                <th>Edit</th>
                                {{-- <th>Delete</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($subject as $subject)
                                <tr>
                                    <td>{{$subject->id}}</td>
                                    <td>{{$subject->short_name}}</td>
                                    <td style="font-weight: bold">{{$subject->name}}</td>
                                    <td>{{$subject->name_type_test}}</td>
                                    <td>
                                        <button class="buton btn btn-outline-success btn-sm">
                                            <a class="link-edit" href="{{route('subject.edit',$subject->id)}}">Edit</a>
                                        </button>
                                    </td>
                                    {{-- <td>
                                        <form method="post" action="{{route('subject.destroy', $subject->id)}}">
                                            @csrf
                                            @method('delete')
                                            <button class="buton btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
                                    </td> --}}
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
