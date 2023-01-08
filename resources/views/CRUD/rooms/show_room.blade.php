@extends('../../dashboard')


@section('information')

<ul class="list-group list-crud list-crud-com l_show col-lg-12" style="margin-top: 10px">
  <li class="list-group-item list-crud-one">{{$show_room->id}}</li>
  <li class="list-group-item"> <span class="span-crud">Name</span> : {{$show_room->name_room}}</li>
  <li class="list-group-item"><span class="span-crud">Number Room</span>: {{$show_room->number_room}}</li>
  <li class="list-group-item"><span class="span-crud">Number Tables</span> : {{$show_room->number_tables}}</li>
  <li class="list-group-item"><span class="span-crud">Number Chairs</span>  : {{$show_room->number_chairs}}</li>
  <li class="list-group-item"><span class="span-crud">Number planks</span>  : {{$show_room->plank}}</li>
  <li class="list-group-item"><span class="span-crud">Number planks</span>  : {{$show_room->updated_at}}</li>
  <li class="list-group-item"><span class="span-crud">Number planks</span>  : {{$show_room->created_at}}</li>

</ul>

<a type="submit" href="{{ url('/rooms') }}" class="btn border border-primary mt-5 back">Back</a>





@endsection


