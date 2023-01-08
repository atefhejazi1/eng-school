@extends('../../dashboard')




@section('information')

<div class="container col-lg-12 form-crud">
<form action= {{url('/updaterooms')}} method="POST">

   @csrf

   <div class="mb-3">
  <input type="hidden" class="form-control" name="id"  value= {{$edit_room->id }}>
</div>

   <div class="mb-3">
  <input type="text" class="form-control" name="name_room"  value= {{$edit_room->name_room }}>
</div>

   <div class="mb-3">
  <input type="number" class="form-control" name="number_r"  value= {{$edit_room->number_room }}>
</div>


   <div class="mb-3">
  <input type="number" class="form-control" name="number_t"  value= {{$edit_room->number_tables }}>
</div>

<div class="mb-3">
  <input type="number" class="form-control" name="number_ch"  value= {{$edit_room->number_chairs }}>
</div>

<div class="mb-3">
  <input type="number" class="form-control" name="number_p"  value= {{$edit_room->plank }}>
</div>
<div class="mb-3">
    <input type="submit" class="form-control btn btn-success" value="Update Room">
</div>

    </form>
</div>

@endsection