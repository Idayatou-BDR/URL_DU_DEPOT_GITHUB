<!-- resources/views/categories/create.blade.php -->
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <label for="name">Nom de la catégorie :</label>
    <input type="text" name="name" id="name" required>

    <label for="description">Description :</label>
    <textarea name="description" id="description"></textarea>

    <button type="submit">Ajouter</button>
</form>
