@extends('layouts.app')

@section('content')
    <h1>Edit Item</h1>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Spécifie que la requête sera une mise à jour -->

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $item->name }}" required>
        </div>

        <div>
            <label>Description:</label>
            <textarea name="description" required>{{ $item->description }}</textarea>
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
