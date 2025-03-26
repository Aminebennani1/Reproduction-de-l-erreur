<!-- resources/views/items/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Item</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description" required></textarea>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection