<html>
<head>
    <title>Event Listener</title>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
</head>
    <body>
        <div class="container">
            <div class="col-md-12">
                <form action="{{route('product.create')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="nameProduct" class="col-sm-3 control-label">Name Product</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="Name Product">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nameProduct" class="col-sm-3 control-label">Price Product</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="price" placeholder="Peice Product">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nameProduct" class="col-sm-3 control-label">Content</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="content" placeholder="Content">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nameProduct" class="col-sm-3 control-label">Active</label>
                        <div class="col-sm-9">
                            <input type="checkbox" class="form-control" name="active" >
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-success" value="Create">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>