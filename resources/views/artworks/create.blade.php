<!-- resources/views/artworks/create.blade.php -->
<form action="{{ route('artworks.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Titre :</label>
    <input type="text" name="title" id="title" required>

    <label for="artist">Artiste :</label>
    <input type="text" name="artist" id="artist" required>

    <label for="year">Année :</label>
    <input type="number" name="year" id="year" required>

    <label for="acquisition_date">Date d'acquisition :</label>
    <input type="date" name="acquisition_date" id="acquisition_date" required>

    <label for="estimated_price">Prix estimé :</label>
    <input type="number" step="0.01" name="estimated_price" id="estimated_price" required>

    <label for="description">Description :</label>
    <textarea name="description" id="description" required></textarea>

    <label for="photo">Photo :</label>
    <input type="file" name="photo" id="photo">

    <label for="category_id">Catégorie :</label>
    <select name="category_id" id="category_id" required>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <button type="submit">Ajouter</button>
</form>
