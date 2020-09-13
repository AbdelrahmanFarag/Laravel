<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <ul class="nav">

            <li class="nav-item">
                <a class="nav-link disabled" href="{{route('blog.index')}}">Mediservice Guide</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('blog.index')}}">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('other.about')}}">About</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('blog.login')}}">Login</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('blog.registration')}}">Register</a>
{{--                <select class="nav-link" id="register" name="register">--}}
{{--                    <option value="Register as client">Register as client</option>--}}
{{--                    <option href="{{route('blog.registration')}}"--}}
{{--                            value="Register as supplier">Register as supplier</option>--}}
{{--                </select>--}}
            </li>

            <form action="{{\Illuminate\Support\Facades\URL:: to('/search')}}" method="Post">
                {{csrf_field()}}
                <div class="input-group">
                    <input type="text" class="form-control" name="searchTerm"
                           placeholder="Search for..." value="{{ isset($searchTerm) ? $searchTerm : '' }}">
                    <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </span>
                </div>
            </form>







        </ul>
    </div>
</div>



