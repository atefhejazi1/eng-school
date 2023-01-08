@extends('../../dashboard')


@section('information')

<ul class="list-group list-crud list-crud-com l_show col-lg-12" style="margin-top: 10px">
  <li class="list-group-item list-crud-one">{{$show_service->id}}</li>
  <li class="list-group-item"> <span class="span-crud">Name Service</span> : {{$show_service->name_service}}</li>
  <li class="list-group-item"><span class="span-crud">Description Service</span> : {{$show_service->description_service}}</li>
  <li class="list-group-item"><span class="span-crud">Update at </span>  : {{$show_service->updated_at}}</li>
  <li class="list-group-item"><span class="span-crud">Created at </span>  : {{$show_service->created_at}}</li>

</ul>

<a type="submit" href="{{ url('/Services') }}" class="btn border border-primary mt-5 back">Back</a>





@endsection


