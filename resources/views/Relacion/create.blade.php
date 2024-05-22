<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>REGISTER STUDENTS</h1>
    <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data"> 
    
        @csrf
        
        <label>
            <h2>NAMES</h2>
            <br>
            <input type="text" name="names">
        </label>
        <br>
        <label>
            <h2>SURNAMES</h2>
            <br>
            <input type="text" name="surnams">
        </label>
        <br><label>
            <h2>EXPEDIENT</h2>
            <br>
            <input type="text" name="expedient">
        </label>
        <br>
        <button type="submit">SEND:</button>
    </form>

</body>
</html>