@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Item</div>
                    <div class="card-body">
                        <form action="/items" method="POST">
                            @csrf
                            <div class="d-block pb-2">
                                <label>Enter Item Name:</label><br>
                                <input type="text" name="name">
                            </div>
                            <div class="d-block pb-2">
                                <label>Enter Item Quantity:</label><br>
                                <input type="number" name="quantity">
                            </div>
                            <div class="d-block pb-2">
                                <label>Choose Item Category:</label><br>
                                <input type="text" name="category" list="categorylist">
                                <datalist id="categorylist">
                                    <option value="None">
                                </datalist>
                            </div>
                            <div class="d-block pb-2">
                                <button type="submit">Create Item</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
