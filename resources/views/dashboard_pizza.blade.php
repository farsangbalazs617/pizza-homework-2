@extends('dashboard')

@section('dash_content')

    <h1>Pizza managament</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createPizzaModal">Create pizza</button>
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
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{str_replace(' ', '', $pizza->pname)}}">Edit</button>
                            <form action="{{route('pizza.delete')}}" method="POST">
                                @csrf
                                <input type="hidden" name="pname" value="{{$pizza->pname}}">
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>

    <!-- Modals -->
    @foreach ($pizzas as $pizza)
        <div class="modal fade" id="exampleModal{{str_replace(' ', '', $pizza->pname)}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit {{$pizza->pname}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('pizza.update')}}" method="POST">
                @csrf
            <div class="modal-body">
                        <input type="hidden" class="form-control" name="pname" value="{{$pizza->pname}}">
                    <div class="mb-3">
                        <label for="category">Category</label>
                        <select class="form-select form-select-sm" name="pcategory" aria-label=".form-select-sm example">
                            @foreach ($categories as $category)
                                <option name="category" @if ($pizza->categoryname === $category->cname)
                                    selected
                                @endif>{{$category->cname}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <input class="form-check-input" type="checkbox" name="vegetarian" value="{{$pizza->vegetarian}}" @if ($pizza->vegetarian == 1)
                            checked
                        @endif id="vegetarian">
                        <label class="form-check-label" for="vegetarian">
                            Vegetarian
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    @endforeach

    <!-- Create modal -->
    <div class="modal fade" id="createPizzaModal" tabindex="-1" aria-labelledby="createPizzaModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPizzaModal">Create pizza</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('pizza.store')}}" method="POST">
            <div class="modal-body">
                    @csrf
                <div class="mb-3">
                    <label for="pizza-name" class="col-form-label">Pizza name</label>
                    <input type="text" name="pizzaname" class="form-control" id="pizza-name">
                </div>
                <div class="mb-3">
                    <label for="category">Category</label>
                    <select class="form-select form-select-sm" name="pcategory" aria-label=".form-select-sm example">
                        @foreach ($categories as $category)
                            <option name="category" @if ($pizza->categoryname === $category->cname)
                                selected
                            @endif>{{$category->cname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                        <input class="form-check-input" type="checkbox" name="vegetarian" id="creat-vegetarian">
                        <label class="form-check-label" for="create-vegetarian">
                            Vegetarian
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>

@endsection