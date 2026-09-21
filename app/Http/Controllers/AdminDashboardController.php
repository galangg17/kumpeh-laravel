<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Article;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        $totalProducts = Product::count();
        $totalArticles = Article::count();
        $totalStories = Story::count();

        $recentProducts = Product::latest()->take(5)->get();
        $recentArticles = Article::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalProducts',
            'totalArticles',
            'totalStories',
            'recentProducts',
            'recentArticles'
        ));
    }

    // ==================== PRODUCTS CRUD WITH FILE UPLOAD ====================
    public function productsIndex()
    {
        $products = Product::latest()->paginate(15);
        return view('admin.products.index', compact('products'));
    }

    public function productsCreate()
    {
        return view('admin.products.create');
    }

    public function productsStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'weight' => 'nullable|string',
            'packaging' => 'nullable|string',
            'stock' => 'required|integer|min:0',
            'main_image' => 'nullable|string',
            'main_image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
        ]);

        if ($request->hasFile('main_image_file')) {
            $path = $request->file('main_image_file')->store('products', 'public');
            $validated['main_image'] = '/storage/' . $path;
        } elseif (empty($validated['main_image'])) {
            $validated['main_image'] = 'https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?auto=format&fit=crop&q=80&w=800';
        }

        $validated['slug'] = Str::slug($validated['name']) . '-' . time();
        $validated['is_featured'] = $request->has('is_featured');

        Product::create($validated);

        return redirect()->route('admin.products.index')->with('success', 'Produk baru berhasil ditambahkan!');
    }

    public function productsEdit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function productsUpdate(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'weight' => 'nullable|string',
            'packaging' => 'nullable|string',
            'stock' => 'required|integer|min:0',
            'main_image' => 'nullable|string',
            'main_image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
        ]);

        if ($request->hasFile('main_image_file')) {
            $path = $request->file('main_image_file')->store('products', 'public');
            $validated['main_image'] = '/storage/' . $path;
        } elseif (empty($validated['main_image'])) {
            $validated['main_image'] = $product->main_image;
        }

        $validated['is_featured'] = $request->has('is_featured');

        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success', 'Data produk berhasil diperbarui!');
    }

    public function productsDestroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus!');
    }

    // ==================== ARTICLES CRUD WITH FILE UPLOAD ====================
    public function articlesIndex()
    {
        $articles = Article::latest()->paginate(15);
        return view('admin.articles.index', compact('articles'));
    }

    public function articlesCreate()
    {
        return view('admin.articles.create');
    }

    public function articlesStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:255',
            'content' => 'required|string',
            'featured_image' => 'nullable|string',
            'featured_image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'author' => 'required|string',
        ]);

        if ($request->hasFile('featured_image_file')) {
            $path = $request->file('featured_image_file')->store('articles', 'public');
            $validated['featured_image'] = '/storage/' . $path;
        } elseif (empty($validated['featured_image'])) {
            $validated['featured_image'] = 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1200';
        }

        $validated['slug'] = Str::slug($validated['title']) . '-' . time();
        $validated['is_published'] = $request->has('is_published');

        Article::create($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berita baru berhasil ditambahkan!');
    }

    public function articlesEdit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article'));
    }

    public function articlesUpdate(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:255',
            'content' => 'required|string',
            'featured_image' => 'nullable|string',
            'featured_image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'author' => 'required|string',
        ]);

        if ($request->hasFile('featured_image_file')) {
            $path = $request->file('featured_image_file')->store('articles', 'public');
            $validated['featured_image'] = '/storage/' . $path;
        } elseif (empty($validated['featured_image'])) {
            $validated['featured_image'] = $article->featured_image;
        }

        $validated['is_published'] = $request->has('is_published');

        $article->update($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berita berhasil diperbarui!');
    }

    public function articlesDestroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berita berhasil dihapus!');
    }

    // ==================== STORIES CRUD WITH FILE UPLOAD ====================
    public function storiesIndex()
    {
        $stories = Story::latest()->paginate(15);
        return view('admin.stories.index', compact('stories'));
    }

    public function storiesCreate()
    {
        return view('admin.stories.create');
    }

    public function storiesStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'quote' => 'required|string',
            'story' => 'required|string',
            'photo_url' => 'nullable|string',
            'photo_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
        ]);

        if ($request->hasFile('photo_file')) {
            $path = $request->file('photo_file')->store('stories', 'public');
            $validated['photo_url'] = '/storage/' . $path;
        } elseif (empty($validated['photo_url'])) {
            $validated['photo_url'] = 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800';
        }

        $validated['slug'] = Str::slug($validated['name']) . '-' . time();

        Story::create($validated);

        return redirect()->route('admin.stories.index')->with('success', 'Cerita warga baru berhasil ditambahkan!');
    }

    public function storiesEdit($id)
    {
        $story = Story::findOrFail($id);
        return view('admin.stories.edit', compact('story'));
    }

    public function storiesUpdate(Request $request, $id)
    {
        $story = Story::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'quote' => 'required|string',
            'story' => 'required|string',
            'photo_url' => 'nullable|string',
            'photo_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
        ]);

        if ($request->hasFile('photo_file')) {
            $path = $request->file('photo_file')->store('stories', 'public');
            $validated['photo_url'] = '/storage/' . $path;
        } elseif (empty($validated['photo_url'])) {
            $validated['photo_url'] = $story->photo_url;
        }

        $story->update($validated);

        return redirect()->route('admin.stories.index')->with('success', 'Cerita warga berhasil diperbarui!');
    }

    public function storiesDestroy($id)
    {
        $story = Story::findOrFail($id);
        $story->delete();

        return redirect()->route('admin.stories.index')->with('success', 'Cerita warga berhasil dihapus!');
    }
}
