<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index', [
            'title' => 'Kategori',
            'categories' => Category::latest()->limit(1000)->get()
        ]);
    }

    public function create()
    {
        return view('category.create', [
            'title' => 'Kategori'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255'
        ]);

        $validatedData['slug'] = Str::slug($validatedData['name']);

        Category::create($validatedData);
        Alert::success("Berhasil", 'Berhasil Menambahkan Kategori');
        return redirect('/admin/kategori');
    }

    public function edit($id)
    {
        $category = Category::where('id', $id)->first();

        if ($category == null) {
            return redirect()->back();
        }

        return view('category.edit', [
            'title' => 'Kategori',
            'category' => $category
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($request->old_name == $request->name) {
            $validatedData = $request->validate([
                'name' => 'required|max:255'
            ]);
        } else {
            $validatedData = $request->validate([
                'name' => 'required|unique:categories|max:255'
            ]);
        }

        $validatedData['slug'] = Str::slug($validatedData['name']);

        Category::where('id', $id)->update($validatedData);
        Alert::success("Berhasil", 'Berhasil Mengubah Kategori');
        return redirect('/admin/kategori');
    }

    public function destroy($id)
    {
        $category = Category::where('id', $id)->first();

        if ($category == null) {
            return redirect()->back();
        }

        Category::destroy($category->id);

        Alert::success('Berhasil', 'Berhasil Menghapus Data Kategori');
        return redirect('/admin/kategori');
    }
}