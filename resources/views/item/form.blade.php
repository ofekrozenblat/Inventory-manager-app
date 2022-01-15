@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Item</div>
                    <div class="card-body">
                        <form @if ($isEditing)
                            action="/items/{{ $item->id }}"
                            method="POST"
                        @else
                            action="/items"
                            method="POST"
                            @endif>
                            @csrf
                            @if ($isEditing)
                                <input type="hidden" name="_method" value="PUT">
                            @endif
                            <div class="d-block pb-2">
                                <label>Enter Item Name:</label><br>
                                <input type="text" name="name" @if ($isEditing)
                                disabled
                                value="{{ $item->name }}"
                                @endif
                                >
                            </div>
                            <div class="d-block pb-2">
                                <label>Enter Item Quantity:</label><br>
                                <input type="number" name="quantity" min="1" @if ($isEditing)
                                value="{{ $item->quantity }}"
                                @endif>
                            </div>
                            <div class="d-block pb-2">
                                <label>Choose Item Category:</label><br>
                                <input type="text" name="category" list="categorylist">
                                <datalist id="categorylist">
                                    <option value="None">
                                </datalist>
                            </div>
                            <div class="d-block pb-2">
                                @if ($isEditing)
                                    <button type="submit">Update Item</button>
                                @else
                                    <button type="submit">Add Item</button>
                                @endif
                            </div>
                        </form>
                        @if ($isEditing)
                            <form action="/items/{{ $item->id }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
