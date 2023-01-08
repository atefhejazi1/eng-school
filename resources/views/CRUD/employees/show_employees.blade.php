@extends('../../dashboard')


@section('information')

<ul class="list-group list-crud list-crud-emp l_show" style="margin-top: 10px">
  <li class="list-group-item list-crud-one">{{$show_emp->id}}</li>
  <li class="list-group-item"> <span class="span-crud">Name</span> : {{$show_emp->name}}</li>
  <li class="list-group-item"><span class="span-crud">Age</span>: {{$show_emp->age}}</li>
  <li class="list-group-item"><span class="span-crud">Address</span> : {{$show_emp->address}}</li>
  <li class="list-group-item"><span class="span-crud">Phone</span>  : {{$show_emp->phone_Number}}</li>
  <li class="list-group-item"><span class="span-crud">Gender</span>  : {{$show_emp->gender}}</li>
  <li class="list-group-item"><span class="span-crud">Department</span>  : {{$show_emp->department}}</li>
  <li class="list-group-item"><span class="span-crud">Job_Title</span>  : {{$show_emp->job_Title}}</li>
  <li class="list-group-item"><span class="span-crud">Job_Description</span>  : {{$show_emp->job_Description}}</li>
  <li class="list-group-item"><span class="span-crud">Job_Grade</span>  : {{$show_emp->job_Grade}}</li>
  <li class="list-group-item"><span class="span-crud">Updated_at</span>  : {{$show_emp->updated_at}}</li>
  <li class="list-group-item"><span class="span-crud">Created_at</span>  : {{$show_emp->created_at}}</li>

</ul>

<a type="submit" href="{{ url('/employees') }}" class="btn border border-primary mt-5 back">Back</a>





@endsection