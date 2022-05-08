@extends('main')

@section('content')
    <header>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Pizzas</h1>
        <p class="fs-5 text-muted">Our delicius pizzas</p>
        </div>
    </header>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        @foreach ($pizzas as $pizza)
            <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                <h4 class="my-0 fw-normal">{{$pizza->pname}}</h4>
                </div>
                <div class="card-body">
                <h1 class="card-title pricing-card-title">{{$pizza->categories->price}} Ft<small class="text-muted fw-light">/db</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>{{$pizza->categoryname}}</li>
                    @if ($pizza->vegetarian == 1)
                        <li>Vegetarian</li>
                    @endif
                </ul>
                @if (Auth::check())
                    <form action="{{route('order.store')}}" method="post">
                        @csrf
                        <div class="btn-group" role="group">
                            <button type="submit" class=" btn btn-lg btn-outline-warning">Order</button>
                            <input type="number" min="1" value="1" name="amount" class="form-control">
                            <input type="hidden" name="pizzaname" value="{{$pizza->pname}}">
                        </div>
                    </form>
                @endif
                </div>
            </div>
            </div>
        @endforeach
        </div>
    </div>

@endsection
