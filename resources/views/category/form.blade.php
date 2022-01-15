@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        @if ($isEditing)
                            {{ $category->name }}
                        @else
                            Create Category
                        @endif
                    </div>
                    <div class="card-body">
                        <form @if ($isEditing)
                            action="/categories/{{ $category->id }}"
                            method="POST"
                        @else
                            action="/categories"
                            method="POST"
                            @endif>
                            @csrf
                            @if ($isEditing)
                                <input type="hidden" name="_method" value="DELETE">
                            @endif
                            <div class="d-block pb-2">
                                <label>Enter Category Name:</label><br>
                                <input type="text" name="name" @if ($isEditing)
                                disabled
                                value="{{ $category->name }}"
                                @endif
                                >
                            </div>
                            <div class="d-block pb-2">
                                @if ($isEditing)
                                    <button type="submit">Delete</button>
                                @else
                                    <button type="submit">Create Category</button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
