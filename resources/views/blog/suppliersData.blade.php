<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{URL::to('CSS/styles.css')}}">

    <title>Mediservice Equipments</title>
    <link rel="icon" href="img1.png">

</head>

<table class=" table table-striped">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    </thead>
    <tbody>
        @foreach($supplier as $suppliers)
            <tr>
                <td>{{$suppliers->name}}</td>
                <td>{{$suppliers->email}}</td>
                <td>{{$suppliers->phone}}</td>

            </tr>

                </div>
            </div>
        @endforeach
    </tbody>
</table>

