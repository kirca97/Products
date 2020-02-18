<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Create Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Create A Product</h2><br  />
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}}</li>
                    @endforeach
            </ul>
        </div><br>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-success">
            <p>{{session()->get('success')}}</p>
        </div><br>
    @endif
    <form method="post" action="{{url('products')}}">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="price">Price:</label>
                <input type="text" class="form-control" name="price">
            </div>
        </div>

<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <button type="submit" class="btn btn-success"   >Add Product</button>
    </div>
</div>
</form>
</div>
</body>
</html>
