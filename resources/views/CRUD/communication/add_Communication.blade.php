@extends('../../dashboard')


@section('operation')
<li class="mr-4"><a href="{{url('/communication')}}">allCommunication</a></li>
<li><a href="{{url('/addcommunication')}}">addCommunication</a></li>
@endsection

@section('information')

<div class="container col-lg-12 form-crud">
<form action= {{url('/storecommunication')}} method="POST">

   @csrf

   <div class="mb-3">
  <input type="text" class="form-control" name="name"  placeholder="Enter Name Customer ">
</div>

   <div class="mb-3">
  <input type="email" class="form-control" name="email"  placeholder="Enter Your Email">
</div>


   <div class="mb-3">
  <input type="tel" class="form-control" name="phone"  placeholder="Enter Your Phone">
</div>

<div class="mb-3">
  <input type="text" class="form-control" name="message" placeholder="Enter Your Message" >
</div>
<div class="mb-3">
    <input type="submit" class="form-control btn btn-crud" value="Add Communication">
</div>

    </form>
</div>

@endsection