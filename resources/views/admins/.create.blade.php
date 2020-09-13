@extends('Layouts.admin')

@section('content')
@include('Partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('admin.create')}}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="speciality">Speciality</label>
                    <input type="text" class="form-control" id="speciality" name="speciality">
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand">
                </div>
                <div class="form-group">
                    <label for="speciality">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="form-group">
                    <label for="speciality">Specification</label>
                    <input type="text" class="form-control" id="specification" name="specification">
                </div>
                <div class="form-group">
                    <label for="speciality">Image Url</label>
                    <input type="string" class="form-control" id="imageUrl" name="imageUrl">
                </div>
{{--                <div class="form-group">--}}
{{--                    <input type="file" id="myfile" name="myfile">--}}
{{--                </div>--}}
                {{csrf_field()}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

