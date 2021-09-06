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
            <h1>List subject</h1>
            <a href="{{route('subject.create')}}">
                Create
            </a>
            <table border="1" class="table table-striped" >
                <tr>
                    <th>ID</th>
                    <th>Short-Name</th>
                    <th>Name</th>
                    <th>Type-Test</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($subject as $subject)
                    <tr>
                        <td>{{$subject->id}}</td>
                        <td>{{$subject->short_name}}</td>
                        <td>{{$subject->name}}</td>
                        <td>{{$subject->name_type_test}}</td>
                        <td>
                            <button>
                                <a href="{{route('subject.edit',$subject->id)}}">Edit</a>
                            </button>
                        </td>
                        <td>
                            <form method="post" action="{{route('subject.destroy', $subject->id)}}">
                                @csrf
                                @method('delete')
                                <button>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
