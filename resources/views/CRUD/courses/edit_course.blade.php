@extends('../../dashboard')



@section('information')

<div class="container col-lg-12 form-crud">
    <form action={{url('/updatecourses')}} method="POST">

        @csrf

        <div class="mb-3">
            <input type="hidden" class="form-control" name="id" value="{{ $edit_course->id }}">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="name_course" value="{{ $edit_course->name_course }}">
        </div>

        <div class="mb-3">
            <textarea class="form-control" name="description_course" cols="30" rows="5">{{ $edit_course->description_course }}</textarea>
        </div>


        <div class="mb-3">
            <input type="text" class="form-control" name="Trainer" value="{{ $edit_course->trainer }}">
        </div>

        <div class="mb-3">
            <input type="number" class="form-control" name="Hours" value={{ $edit_course->hours_course }}>
        </div>

        <div class="mb-3">
            <input type="submit" class="form-control btn btn-crud" value="Add Course">
        </div>

    </form>
</div>

@endsection