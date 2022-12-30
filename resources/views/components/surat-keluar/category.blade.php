<p class="text-white mb-0">Pencarian Kategori Surat</p>
<select class="form-select mb-3" name="category" id="category-filter">
    <option value="all" selected>Semua Kategori</option>
    @foreach ($categories as $category)
        @if (request('kategori') == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
    @endforeach
</select>
