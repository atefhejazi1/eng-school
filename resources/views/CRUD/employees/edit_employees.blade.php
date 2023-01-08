@extends('../../dashboard')


@section('information')

<div class="container col-lg-12 form-crud">
<form action= {{url('/updateemployees')}} method="POST">
   @csrf

   <div class="mb-5">

  <input type="hidden" class="form-control" name="id"  value={{ $edit_emp->id}}>
</div>
   <div class="mb-5">

<label class="mt-4 mb-2 ms-1 ">Name:</label>

  <input type="text" class="form-control" name="name"   value={{ $edit_emp->name}}>
</div>

   <div class="mb-5">
<label class="mt-4 ms-1 mb-2">Age:</label>

  <input type="number" class="form-control" name="age"   value={{ $edit_emp->age}}>
</div>


   <div class="mb-5">
<label class="mt-4 ms-1 mb-2">Address:</label>

  <input type="tel" class="form-control" name="address"   value={{ $edit_emp->address}}>
</div>


<div class="mb-5">
<label class="mt-4 ms-1 mb-2">Phone:</label>

  <input type="tel" class="form-control" name="phone"   value= {{ $edit_emp->phone_Number}}>
</div>


<div class="mb-5">
<label class="mt-4 ms-1 mb-2">Gender:</label>

  <input type="text" class="form-control" name="gender" value= {{ $edit_emp->gender}} >
</div>


<div class="mb-5">
<label class="m-3 ms-1 mb-2">Department:</label>

<select name="department" class="form-control w-25">
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
<label class="mt-4 ms-1 mb-2">Job Title:</label>

  <input type="text" class="form-control" name="jobT" value= {{ $edit_emp->job_Title }} >
</div>


<div class="mb-5">
<label class="mt-4 ms-1 mb-2">Job Description:</label>

    <textarea name="jopD"  class="form-control" cols="30" rows="5">{{ $edit_emp->job_Description }}</textarea>
</div>

<div class="mb-5">

<label class="m-3 ms-1 mb-2">Choose a Job Grade:</label>
<select name="job_Grade" class="form-control w-25">
<option value="1">Manager</option>
    <option value="2">Trainer</option>
    <option value="3">marketer</option>
    <option value="4">blogger</option>
    <option value="5">owner</option>
    <option value="6">photographer</option>
</select>
</div>

<div class="mb-5">
    <input type="submit" class="form-control btn btn-success" value="Updat Eemployee">
</div>

    </form>
</div>

@endsection