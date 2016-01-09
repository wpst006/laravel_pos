@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h3>Product Form</h3>

            <form class="form-horizontal" action="/save" method="post">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                               id="name" name="name" placeholder="name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="description"
                           class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3"
                            id="description" name="description" placeholder="description"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="quantity" class="col-sm-2 control-label">Quantity</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                               id="quantity" name="quantity" placeholder="quantity">
                    </div>
                </div>

                <div class="form-group">
                    <label for="price" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                               id="price" name="price" placeholder="price">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection