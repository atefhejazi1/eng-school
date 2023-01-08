@extends('../../dashboard')




@section('information')

<div class="container col-lg-12 form-crud">
<form action= {{url('/storerooms')}} method="POST">

   @csrf

   <div class="mb-3">
  <input type="text" class="form-control" name="name_room"  placeholder="Enter Name room ">
</div>

   <div class="mb-3">
  <input type="number" class="form-control" name="number_r"  placeholder="Enter Number room">
</div>


   <div class="mb-3">
  <input type="number" class="form-control" name="number_t"  placeholder="Enter Number Tables">
</div>

<div class="mb-3">
  <input type="number" class="form-control" name="number_ch" placeholder="Enter Number Chairs" >
</div>

<div class="mb-3">
  <input type="number" class="form-control" name="number_p" placeholder="Enter Number planks" >
</div>
<div class="mb-3">
    <input type="submit" class="form-control btn btn-crud" value="Add Room">
</div>

    </form>
</div>

@endsection