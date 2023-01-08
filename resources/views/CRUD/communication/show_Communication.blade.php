@extends('../../dashboard')


@section('information')

    
<ul class="list-group list-crud list-crud-com l_show col-lg-12">
  <li class="list-group-item list-crud-one">{{$show_com->id}}</li>
  <li class="list-group-item"> <span class="span-crud">Name</span> : {{$show_com->name_customer}}</li>
  <li class="list-group-item"><span class="span-crud">Email</span>: {{$show_com->Email}}</li>
  <li class="list-group-item"><span class="span-crud">Phone</span> : {{$show_com->phone_number}}</li>
  <li class="list-group-item"><span class="span-crud">Message</span>  : {{$show_com->message}}</li>

</ul>
<a type="submit" href="{{ url('/communication') }}" class="btn border border-primary mt-5 back">Back</a>




@endsection


