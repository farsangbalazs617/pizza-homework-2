@extends('main')

@section('content')

    <div class="container my-4">
        <h2>Your orders</h2>
        <div class="table">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">pizza name</th>
                  <th scope="col">amount</th>
                  <th scope="col">price</th>
                  <th scope="col">category</th>
                  <th scope="col">taken</th>
                  <th scope="col">dispatched</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                    <tr>
                    <td>{{$order->pizzaname}}</td>
                    <td>{{$order->amount}}</td>
                    <td>{{$order->pizzas->categories->price*$order->amount." Ft"}}</td>
                    <td>{{$order->pizzas->categoryname}}</td>
                    <td>{{$order->taken}}</td>
                    <td>
                        @if ($order->dispatched)
                            {{$order->dispatched}}       
                        @else
                            Not yet
                        @endif
                    </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </div>

@endsection