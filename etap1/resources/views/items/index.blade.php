@extends('layouts.app')

@section('content')
<h1>Items</h1>
<a href="{{ route('items.create') }}">Create New Item</a>
<ul>
    @foreach ($items as $item)
    <!-- Inside the foreach loop in index.blade.php -->
    <li>
        {{ $item->name }}
        <a href="{{ route('items.edit', $item) }}">Edit</a>
        <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE') <!-- This is important for the delete method -->
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection