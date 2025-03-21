<!-- resources/views/categories/index.blade.php -->
@foreach($categories as $category)
    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
@endforeach
