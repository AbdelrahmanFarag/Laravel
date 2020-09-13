@extends('layouts.admin')

@section('content')
@include('Partials.errors')
    <div class="row">
        <div class="col-md-12">
           <form action="{{route('admin.update')}}" method="post">
               <div class="form-group">
                   <label for="title">Title</label>
                   <input
                       type="text"
                       class="form-control" id="title"
                       name="title"
                       value="{{$post['title']}}">
               </div>
               <div class="form-group">
                   <label for="price">Price</label>
                   <input type="text"
                          class="form-control"
                          id="price"
                          name="price"
                          value="{{$post['price']}}">

                   <label for="specilaity">Speciality</label>
                   <input type="text"
                          class="form-control"
                          id="speciality"
                          name="speciality"
                          value="{{$post['speciality']}}">

                   <label for="brand">Brand</label>
                   <input type="text"
                          class="form-control"
                          id="brand"
                          name="brand"
                          value="{{$post['brand]}}">
               </div>
               {{csrf_field()}}
               <input type="hidden" name="id" value="{{$postId}}">
               <button type="submit" class="btn btn-primary">Submit</button>
           </form>
        </div>
    </div>
@endsection
