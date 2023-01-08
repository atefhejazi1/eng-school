@extends('../../dashboard')




@section('information')

<div class="container col-lg-12 form-crud">
<form action= {{url('/storestudents')}} method="POST">

   @csrf

   <div class="mb-3">
  <input type="text" class="form-control" name="name_student"  placeholder="Enter Name Student ">
</div>


   <div class="mb-3">
  <input type="number" class="form-control" name="age"  placeholder="Enter Age Student">
</div>


   <div class="mb-3">
  <input type="number" class="form-control" name="phone_s"  placeholder="Enter Phone Student">
</div>

<div class="mb-3">
  <input type="text" class="form-control" name="address"  placeholder="Enter Address Student ">
</div>

<div class="mb-3">
  <input type="number" class="form-control" name="Identity_n" placeholder="Enter identity number Student" >
</div>

<div class="mb-3">
  <input type="text" class="form-control" name="Email_s"  placeholder="Enter Email Student ">
</div>

<div class="mb-3">
  <input type="text" class="form-control" name="Specialty"  placeholder="Enter Specialty Student ">
</div>

<div class="mb-3">
  <input type="number" class="form-control" name="level" placeholder="Enter Level Student" >
</div>
<div class="mb-3">
    <input type="submit" class="form-control btn btn-crud" value="Add Student">
</div>

    </form>
</div>

@endsection