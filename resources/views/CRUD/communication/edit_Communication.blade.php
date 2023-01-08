@extends('../../dashboard')



@section('information')

<div class="container col-lg-12 form-crud">
<form action= {{url('/updateCommunication')}} method="POST">

   @csrf

   <div class="mb-3">
  <input type="hidden" class="form-control" name="id"  placeholder="Enter Name Customer " value={{ $edit_com->id}}>
</div>
   <div class="mb-3">
  <input type="text" class="form-control" name="name"  placeholder="Enter Name Customer " value={{ $edit_com->name_customer}}>
</div>

   <div class="mb-3">
  <input type="email" class="form-control" name="email"  placeholder="Enter Your Email" value={{ $edit_com->Email}}>
</div>


   <div class="mb-3">
  <input type="tel" class="form-control" name="phone"  placeholder="Enter Your Phone" value={{ $edit_com->phone_number}}>
</div>

<div class="mb-3">
  <input class="form-control" name="message" placeholder="Enter Your Message"  value= {{ $edit_com->message }}>
</div>
<div class="mb-3">
    <input type="submit" class="form-control btn btn-success" value="updateCommunication">
</div>

    </form>
</div>

@endsection