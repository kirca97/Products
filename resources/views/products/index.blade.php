<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Products Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Products</h1>
    <a href="{{action('ProductController@create')}}" class="btn btn-primary">Create Product</a>
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product['id']}}</td>
                <td>{{$product['name']}}</td>
                <td>{{$product['price']}}</td>
                <td><a href="{{action('ProductController@edit', $product['id'])}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('ProductController@destroy', $product['id'])}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
