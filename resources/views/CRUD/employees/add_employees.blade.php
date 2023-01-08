@extends('../../dashboard')


@section('information')

<div class="container col-lg-12 form-crud">
<form action= {{url('/storeemployees')}} method="POST">

   @csrf
   
   <div class="mb-5">
  <input type="text" class="form-control" name="name"  placeholder="Enter Name Employee ">
</div>

<div class="mb-5">
<input type="number" class="form-control" name="age"  placeholder="Enter Your Age">
</div>


   <div class="mb-5">
  <input type="text" class="form-control" name="address"  placeholder="Enter Your Address">
</div>



<div class="mb-5">
  <input type="tel" class="form-control" name="phone" placeholder="Enter Your Phone" >
</div>

<div class="mb-5">
  <input type="text" class="form-control" name="gender" placeholder="Enter Your Gender" >
</div>


<div class="mb-5">
<label class="m-3 ms-2">Choose a Department:</label>

<select name="department" class="form-control">
    <option value="1">Programming</option>
    <option value="2">Marketing</option>
    <option value="3">Photography</option>
    <option value="4">montage</option>
    <option value="5">design</option>
    <option value="6">electronics</option>
    <option value="7">external</option>
    <option value="8">courses</option>
    <option value="9">administration</option>
</select>
</div>


<div class="mb-5">
  <input type="text" class="form-control" name="jobT" placeholder="Enter Your Job Title	" >
</div>


<div class="mb-5">
    <textarea name="jopD"  class="form-control" cols="30" rows="5" placeholder="Enter Your Job Description"></textarea>
</div>

<div class="mb-5">

<label class="m-3 ms-2">Choose a Job Grade:</label>
<select name="job_Grade" class="form-control">
<option value="1">Manager</option>
    <option value="2">Trainer</option>
    <option value="3">marketer</option>
    <option value="4">blogger</option>
    <option value="5">owner</option>
    <option value="6">photographer</option>
</select>
</div>


<div class="mb-5">
    <input type="submit" class="form-control btn btn-crud" value="addemployees">
</div>


    </form>
</div>

@endsection