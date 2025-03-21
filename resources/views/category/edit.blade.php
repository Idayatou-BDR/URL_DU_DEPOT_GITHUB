<!-- resources/views/categories/edit.blade.php -->
<form action="{{ route('categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nom de la catégorie :</label>
    <input type="text" name="name" id="name" value="{{ $category->name }}" required>

    <label for="description">Description :</label>
    <textarea name="description" id="description">{{ $category->description }}</textarea>

    <button type="submit">Mettre à jour</button>
</form>
