@extends('../../dashboard')


@section('information')

<ul class="list-group list-crud list-crud-com l_show col-lg-12" style="margin-top: 10px">
  <li class="list-group-item list-crud-one">{{$show_student->id}}</li>
  <li class="list-group-item"> <span class="span-crud">Name</span> : {{$show_student->name_students}}</li>
  <li class="list-group-item"><span class="span-crud">Age Student</span>: {{$show_student->age_students}}</li>
  <li class="list-group-item"><span class="span-crud"></span>Phone Number : {{$show_student->phone_number}}</li>
  <li class="list-group-item"><span class="span-crud">Address </span>  : {{$show_student->address}}</li>
  <li class="list-group-item"><span class="span-crud">Identity Number </span>  : {{$show_student->identity_number}}</li>
  <li class="list-group-item"><span class="span-crud">Email </span>  : {{$show_student->Email}}</li>
  <li class="list-group-item"><span class="span-crud">Specialty </span>  : {{$show_student->Specialty}}</li>
  <li class="list-group-item"><span class="span-crud">Level</span>  : {{$show_student->level}}</li>
  <li class="list-group-item"><span class="span-crud">Update at </span>  : {{$show_student->updated_at}}</li>
  <li class="list-group-item"><span class="span-crud">Created at </span>  : {{$show_student->created_at}}</li>

</ul>

<a type="submit" href="{{ url('/students') }}" class="btn border border-primary mt-5 back">Back</a>





@endsection


