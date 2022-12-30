<p class="text-white mb-0">Pencarian Kategori Surat</p>
<select class="form-select mb-3" name="category">
    <option value="all" selected>Semua Kategori</option>
    @foreach ($categories as $category)
        <option value="">{{ $category->name }}</option>
    @endforeach
</select>
