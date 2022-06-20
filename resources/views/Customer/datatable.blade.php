@extends('Include.layout')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
@endsection

@section('content')
    <h3 class="fs-4 fw-semibold">Customer datatable</h3>
    <table class="table" id="datatable">
        @php
            $serial = 0;
        @endphp
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

@section('javascripts')
    {{-- JQUERY CDN LINK--}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    {{-- JQUERY DATATABLE CDN LINK --}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
        $('#datatable').DataTable();
         } );
    </script>
@endsection