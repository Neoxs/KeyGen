@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new product</div>

                <div class="card-body">
                    <form action="/products" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter a titile" autocomplete="off">
                            <small id="nameHelp" class="form-text text-muted">Please enter your product name.</small>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Product Description</label>
                            <input name="description" type="text" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter a description" autocomplete="off">
                            <small id="descriptionHelp" class="form-text text-muted">Please give your product a small description</small>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Add product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
