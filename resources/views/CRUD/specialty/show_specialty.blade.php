@extends('../../dashboard')


@section('information')

<ul class="list-group list-crud list-crud-com l_show col-lg-12" style="margin-top: 10px">
  <li class="list-group-item list-crud-one">{{$show_spe->id}}</li>
  <li class="list-group-item"> <span class="span-crud">Name</span> : {{$show_spe->name_specialty}}</li>
  <li class="list-group-item"><span class="span-crud">Description</span>: {{$show_spe->description_specialty}}</li>
  <li class="list-group-item"><span class="span-crud">Director Specialty</span> : {{$show_spe->director_specialty}}</li>
  <li class="list-group-item"><span class="span-crud">Update at </span>  : {{$show_spe->updated_at}}</li>
  <li class="list-group-item"><span class="span-crud">Created at </span>  : {{$show_spe->created_at}}</li>

</ul>

<a type="submit" href="{{ url('/specialty_students') }}" class="btn border border-primary mt-5 back">Back</a>





@endsection


