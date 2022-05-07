@extends('dashboard')

@section('dash_content')

    <h1>Pizza managament</h1>
    <div class="container">
    <div class="row">
        @foreach ($pizzas as $pizza)
            <div class="col-4">
                <div class="card my-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$pizza->pname}}</h5>
                        <p class="card-text">{{$pizza->categoryname}}</p>
                        @if($pizza->vegetarian == 1)
                            <p class="card-text">Vegetarian</p>
                        @endif
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$pizza->pname}}">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>

    <!-- Modals -->
    @foreach ($pizzas as $pizza)
        <div class="modal fade" id="exampleModal{{$pizza->pname}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="pname" class="col-form-label">Pizza name:</label>
                        <input type="text" class="form-control" id="pname" name="pname" value="{{$pizza->pname}}">
                    </div>
                    <div class="mb-3">
                        
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
    @endforeach

@endsection