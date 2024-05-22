<h1>Actualizar estudiante</h1>
<form action="{{route('student.update', $estudiante)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    NAMES:
    <br>
    <input name="names" type="text" value="{{old('names',$student->names) }}">
    <br>
    </label>
    <br>
    <label>
    SURNAMES:
    <br>
    <input name="surnames" type="text" value="{{old('surnames',$student->surnames)}}">
    <br>
    </label>
    <br>
    EXPEDIENT
    <br>
    <input name="expedient" type="text" value="{{old('expedient',$student->expedient)}}">
    <br>
    </label>
    <br>
   
    <button  type="submit">STUDENT EDIT</button>
   
</form>