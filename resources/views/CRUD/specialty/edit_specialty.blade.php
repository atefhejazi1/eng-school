@extends('../../dashboard')



@section('information')

<div class="container col-lg-12 form-crud">
    <form action={{url('/updatespecialty')}} method="POST">

        @csrf

        <div class="mb-3">
            <input type="hidden" class="form-control" name="id" value="{{ $edit_spe->id }}">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="name_specialty" value="{{ $edit_spe->name_specialty }}">
        </div>

        <div class="mb-3">
            <textarea class="form-control" name="description_specialty" cols="30" rows="5">{{ $edit_spe->description_specialty }}</textarea>
        </div>


        <div class="mb-3">
            <input type="text" class="form-control" name="director_specialty" value="{{ $edit_spe->director_specialty }}">
        </div>


        <div class="mb-3">
            <input type="submit" class="form-control btn btn-success" value="update Specialty">
        </div>

    </form>
</div>

@endsection