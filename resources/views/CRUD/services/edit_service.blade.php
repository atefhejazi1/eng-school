@extends('../../dashboard')



@section('information')

<div class="container col-lg-12 form-crud">
    <form action={{url('/updateservice')}} method="POST">

        @csrf

        <div class="mb-3">
            <input type="hidden" class="form-control" name="id" value="{{ $edit_service->id }}">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="name_service" value="{{ $edit_service->name_service }}">
        </div>

        <div class="mb-3">
            <textarea class="form-control" name="description_service" cols="30" rows="5">{{ $edit_service->description_service }}</textarea>
        </div>


        <div class="mb-3">
    <input type="submit" class="form-control btn btn-success" value="update Service">
</div>
    </form>
</div>

@endsection