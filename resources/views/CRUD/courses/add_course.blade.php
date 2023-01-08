@extends('../../dashboard')



@section('information')

<div class="container col-lg-12 form-crud">
<form action= {{url('/storecourses')}} method="POST">

   @csrf

   <div class="mb-3">
  <input type="text" class="form-control" name="name_course"  placeholder="Enter Name Course ">
</div>

   <div class="mb-3">
    <textarea class="form-control" name="description_course"  placeholder="Enter Ther Description Course" cols="30" rows="5"></textarea>
</div>


   <div class="mb-3">
  <input type="text" class="form-control" name="Trainer"  placeholder="Enter The Trainer">
</div>

<div class="mb-3">
  <input type="number" class="form-control" name="Hours" placeholder="Enter The League Hours">
</div>

<div class="mb-3">
    <input type="submit" class="form-control btn btn-crud" value="Add Course">
</div>

    </form>
</div>

@endsection