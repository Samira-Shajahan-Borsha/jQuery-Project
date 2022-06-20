@extends('Include.layout')

@section('content')
<table class="table">
    @php
        $serial = 0;
    @endphp
    <h3 class="fs-4 fw-semibold">Customer Table</h3>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($customers as $customer)
        <tr>
            <td>{{ ++$serial }}</td>
            <td>{{ $customer->first_name }}</td>
            <td>{{ $customer->last_name }}</td>
            <td>{{ $customer->email }}</td>
        @endforeach
    </tbody>
  </table>


@endsection