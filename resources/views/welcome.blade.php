@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-5">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <a href="/categories/create" class="btn btn-success mb-5 mt-1"> + Create Category</a>
                        <div class="d-block" style="max-height:500px;overflow:auto;">
                            <table id="items-table" class="table table-striped table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody id="items-table-body" class="table-light h-100">
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td><a href="/categories/{{ $category->id }}/edit"
                                                    class="text-decoration-none">
                                                    {{ $category->name }}</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Items</div>
                    <div class="card-body">
                        <a href="/items/create" class="btn btn-success mb-5 mt-1"> + Add Item</a>
                        <div class="d-block" style="max-height:500px;overflow:auto;">
                            <table id="items-table" class="table table-striped table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Category</th>
                                    </tr>
                                </thead>
                                <tbody id="items-table-body" class="table-light h-100">
                                    @foreach ($items as $item)
                                        <tr>
                                            <td><a href="/items/{{ $item->id }}/edit" class="text-decoration-none">
                                                    {{ $item->name }}</a></td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->category_id == 0 ? 'None' : $item->category->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
