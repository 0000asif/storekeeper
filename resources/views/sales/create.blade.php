@extends('layouts.app')

@section('content')
    <h1>Record Sale</h1>
    <form action="{{ route('sales.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="product_id">Product</label>
            <select name="product_id" class="form-control" required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity_sold">Quantity Sold</label>
            <input type="number" name="quantity_sold" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Record Sale</button>
    </form>
@endsection
