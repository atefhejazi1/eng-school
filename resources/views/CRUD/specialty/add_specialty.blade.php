@extends('../../dashboard')



@section('information')

<div class="container col-lg-12 form-crud">
<form action= {{url('/storespecialty')}} method="POST">

   @csrf

   <div class="mb-3">
  <input type="text" class="form-control" name="name_specialty"  placeholder="Enter Name Specialty ">
</div>

   <div class="mb-3">
    <textarea class="form-control" name="description_specialty"  placeholder="Enter Ther Description Specialty" cols="30" rows="5"></textarea>
</div>


   <div class="mb-3">
  <input type="text" class="form-control" name="director_specialty"  placeholder="Enter The Specialty">
</div>



<div class="mb-3">
    <input type="submit" class="form-control btn btn-crud" value="Add Specialty">
</div>

    </form>
</div>

@endsection