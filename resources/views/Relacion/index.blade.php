<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>STUDENT LIST</h1>

    @foreach ($students as $student)
    <tr>
        <br>
        <td>{{$student->names}}</td>
        <td>{{$student->surnames}}</td>
        <td>{{$student->expedient}}</td>
        <td><a href="{{route('student.show',$student->id)}}">DETAILS</a></td>
        <br>
     </tr>
    <form action="{{route('student.destroy',$student->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">DELETE</button>
        <td><a href="{{route('student.edit',$student->id)}}">EDIT</a></td> 
        </form> 
@endforeach
   
</body>
</html>