<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use App\Models\ReviewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::latest()->paginate(4);
        $categories = Categories::all();
        $user = auth()->user();


        return view('infonewportal.index', [
            'articles' => $articles,
            'categories' => $categories,
            'user' => $user,
        ]);

//        return view('infonewportal.index', compact('articles', 'categories', 'user'))
//            ->with('i', (\request()->input('page', 1) - 1) * 4);
    }

    public function getArticlesByCategory($slug)
    {
        $categories = Categories::orderBy('category')->get();
        $current_category = Categories::where('category_slug', $slug)->first();
        $user = auth()->user();

        return view('infonewportal.index', [
            'articles' => $current_category->articles()->paginate(4),
            'categories' => $categories,
            'user' => $user,
        ]);
    }

    public function getArticle($slug_category, $slug_article)
    {
        $article = Articles::where('article_slug', $slug_article)->first();
        $categories = Categories::orderBy('category')->get();
        $user = auth()->user();
        $comments = ReviewModel::where('article_id', $article->id)->get()->toArray();

        return view('infonewportal.article', [
            'article' => $article,
            'categories' => $categories,
            'user' => $user,
            'slug_category' => $slug_category,
            'comments' => $comments,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::orderBy('category')->get();
        $user = auth()->user();

        return view('infonewportal.add', [
            'categories' => $categories,
            'user' => $user,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'filled|required',
            'description' => 'filled|required',
            'content' => 'filled|required',
            'category_id' => 'filled|required',
            'user_id' => 'filled|required',
            'article_slug' => 'filled|required',
            // файл должен быть картинкой (jpeg, png, bmp, gif, svg или webp)
            // поддерживаемые MIME файла (image/jpeg, image/png)
            'userfile' => 'image', 'mimetypes:image/jpeg,image/png',
        ]);

        if ($request->isMethod('post') && $request->file('userfile')) {

            $file = $request->file('userfile');
            $upload_folder = 'public/images';
            $filename = $file->getClientOriginalName(); // image.jpg

            Storage::putFileAs($upload_folder, $file, $filename);

        }

        $request['photo'] = '/storage/images/' . $filename;

        Articles::create($request->all());

        return redirect('/')->with('success', 'Всё хорошо!');
//        return redirect()->route('/')->with('success', 'Всё хорошо!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Articles $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $article)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Articles $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $article)
    {
        $categories = Categories::orderBy('category')->get();
        $user = auth()->user();

        return view('infonewportal.edit', [
            'article' => $article,
            'categories' => $categories,
            'user' => $user,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Articles $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $article)
    {
//        die($request);
        $request->validate([
            'title' => 'filled|required',
            'description' => 'filled|required',
            'content' => 'filled|required',
            'category_id' => 'filled|required',
            'user_id' => 'filled|required',
            'article_slug' => 'filled|required',
            // файл должен быть картинкой (jpeg, png, bmp, gif, svg или webp)
            // поддерживаемые MIME файла (image/jpeg, image/png)
            'userfile' => 'image', 'mimetypes:image/jpeg,image/png',
        ]);

        if ($request->isMethod('PUT') && $request->file('userfile')) {

            $file = $request->file('userfile');
            $upload_folder = 'public/images';
            $filename = $file->getClientOriginalName(); // image.jpg

            Storage::putFileAs($upload_folder, $file, $filename);

            $request['photo'] = '/storage/images/' . $filename;

        }

        $article->update($request->all());

        return redirect('/')->with('success', 'Всё хорошо!');
//        return redirect()->route('/')->with('success', 'Всё хорошо!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Articles $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $article)
    {
        $article->delete();

        return redirect('/')->with('success', 'Всё хорошо!');
    }
}
