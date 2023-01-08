@extends('../../dashboard')


@section('information')

<ul class="list-group list-crud list-crud-com l_show col-lg-12" style="margin-top: 10px">
  <li class="list-group-item list-crud-one">{{$show_course->id}}</li>
  <li class="list-group-item"> <span class="span-crud">Name</span> : {{$show_course->name_course}}</li>
  <li class="list-group-item"><span class="span-crud">Description</span>: {{$show_course->description_course}}</li>
  <li class="list-group-item"><span class="span-crud">Trainer</span> : {{$show_course->trainer}}</li>
  <li class="list-group-item"><span class="span-crud">Hours Course</span>  : {{$show_course->hours_course}}</li>
  <li class="list-group-item"><span class="span-crud">Update at </span>  : {{$show_course->updated_at}}</li>
  <li class="list-group-item"><span class="span-crud">Created at </span>  : {{$show_course->created_at}}</li>

</ul>

<a type="submit" href="{{ url('/courses') }}" class="btn border border-primary mt-5 back">Back</a>




@endsection


