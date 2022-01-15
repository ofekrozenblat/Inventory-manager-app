@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        @if ($isEditing)
                            {{ $item->name }}
                        @else
                            Add Item
                        @endif
                    </div>
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
                                <label>Item Name:</label><br>
                                <input type="text" name="name" @if ($isEditing)
                                disabled
                                value="{{ $item->name }}"
                                @endif
                                >
                                @if ($errors->get('name'))
                                    @foreach ($errors->get('name') as $error)
                                        <li class="text-danger unstyled">
                                            {{ $error }}
                                        </li>
                                    @endforeach
                                @endif
                            </div>
                            <div class="d-block pb-2">
                                <label>Item Quantity:</label><br>
                                <input type="number" name="quantity" min="1" @if ($isEditing)
                                value="{{ $item->quantity }}"
                                @endif>
                                @if ($errors->get('quantity'))
                                    @foreach ($errors->get('quantity') as $error)
                                        <li class="text-danger">
                                            {{ $error }}
                                        </li>
                                    @endforeach
                                @endif
                            </div>
                            <div class="d-block pb-2">
                                <label>Choose Item Category:</label><br>
                                <select id="categorylist" name="category">
                                    <option value="0" @if ($isEditing && $item->category_id == 0)
                                        selected="selected"
                                        @endif>None</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if ($isEditing && $item->category_id == $category->id)
                                            selected="selected"
                                    @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
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
