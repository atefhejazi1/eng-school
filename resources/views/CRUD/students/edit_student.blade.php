@extends('../../dashboard')




@section('information')

<div class="container col-lg-12 form-crud">
<form action= {{url('/updatestudent')}} method="POST">

   @csrf

   <div class="mb-3">
  <input type="hidden" class="form-control" name="id"    value="{{ $edit_student->id}}">
</div>

   <div class="mb-3">
  <input type="text" class="form-control" name="name_student"   value="{{ $edit_student->name_students}}" >
</div>


   <div class="mb-3">
  <input type="number" class="form-control" name="age"   value="{{ $edit_student->age_students}}">
</div>


   <div class="mb-3">
  <input type="number" class="form-control" name="phone_s" value="{{ $edit_student->phone_number}}">
</div>

<div class="mb-3">
  <input type="text" class="form-control" name="address"  value="{{ $edit_student->address}}">
</div>

<div class="mb-3">
  <input type="number" class="form-control" name="Identity_n"   value="{{ $edit_student->identity_number}}">
</div>

<div class="mb-3">
  <input type="text" class="form-control" name="Email_s"  value="{{ $edit_student->Email}}">
</div>

<div class="mb-3">
  <input type="text" class="form-control" name="Specialty"  value="{{ $edit_student->Specialty}}">
</div>

<div class="mb-3">
  <input type="number" class="form-control" name="level" value="{{ $edit_student->level}}">
</div>
<div class="mb-3">
    <input type="submit" class="form-control btn btn-success" value="Update Student">
</div>

    </form>
</div>

@endsection