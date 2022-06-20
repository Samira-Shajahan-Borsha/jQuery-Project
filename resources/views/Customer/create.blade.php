@extends('Include.layout')

@section('content')
    <h1 class="fs-3 text-center">Add Customer</h1><br><br>
    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label for="" class="fs-4">First Name: </label>
                <input type="text" class="form-control" placeholder="Enter first name" aria-label="First name" name="firstName">
            </div>
            <div class="col-md-6">
                <label for="" class="fs-4">Last Name: </label>
                <input type="text" class="form-control" placeholder="Enter last Name" aria-label="Last name" name="lastName">
            </div>
            <div class="col-md-6">
                <label for="" class="fs-4">Email: </label>
                <input type="text" class="form-control" placeholder="Enter your email" aria-label="Last name" name="email">
            </div>
          </div><br><br>
          <button type="submit" class="btn btn-outline-dark">Add Customer</button>
    </form>

@endsection
