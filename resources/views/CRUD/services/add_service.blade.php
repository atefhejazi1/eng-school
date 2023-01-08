@extends('../../dashboard')



@section('information')

<div class="container col-lg-12 form-crud">
<form action= {{url('/storeservice')}} method="POST">

   @csrf

   <div class="mb-3">
  <input type="text" class="form-control" name="name_service"  placeholder="Enter Name Service ">
</div>

   <div class="mb-3">
    <textarea class="form-control" name="description_service"  placeholder="Enter Ther Description Service" cols="30" rows="5"></textarea>
</div>


<div class="mb-3">
    <input type="submit" class="form-control btn btn-crud" value="Add Service">
</div>

    </form>
</div>

@endsection