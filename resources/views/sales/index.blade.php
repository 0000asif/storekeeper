@extends('layouts.app')

@section('content')
    <h1>Sales Transactions</h1>
    <a href="{{ route('sales.create') }}" class="btn btn-primary">Record Sale</a>
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity Sold</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($salesTransactions as $transaction)
                <tr>
                    <td>{{ $transaction->product->name }}</td>
                    <td>{{ $transaction->quantity_sold }}</td>
                    <td>{{ $transaction->created_at }}</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection
