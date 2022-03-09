<?php

namespace App\Http\Controllers;

use App\Models\PageCategory;
use App\Models\PageCategoryTranslation;
use Illuminate\Http\Request;

class PageCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sort_search = null;
        $categories = PageCategory::orderBy('created_at', 'desc');
        if (request()->has('search')) {
            $sort_search = request()->search;
            $categories = $categories->where('name', 'like', '%' . $sort_search . '%');
        }
        $categories = $categories->paginate(12);
        return view('page_category.index', compact('categories', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang  = request()->lang;
        return view('page_category.create', compact('lang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new PageCategory;

        $category->name = $request->name;

        $category->save();

        $translation = new PageCategoryTranslation();
        $translation->lang = env('DEFAULT_LANGUAGE');
        $translation->page_category_id = $category->id;

        $translation->name = $category->name;

        $translation->save();

        flash(translate('Page Category Created Successfully'))->success();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $lang  = $request->lang;
        $category = PageCategory::find($id);
        return view('page_category.edit', compact('category', 'lang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = PageCategory::find($id);
        if ($request->lang == env('DEFAULT_LANGUAGE')) {

            $category->name = $request->name;
        }

        $category->save();

        $translation = PageCategoryTranslation::firstOrNew(['lang' => $request->lang, 'page_category_id' => $category->id]);
        $translation->page_category_id = $category->id;

        $translation->name = $request->name;

        $translation->save();

        flash(translate('Page Category Updated Successfully'))->success();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = PageCategory::findOrFail($id);

        $count = $category->rooms->count();

        if($count >0)
        {
            flash(translate('Please remove selected page category from rooms'))->warning();

            return redirect()->back();
        }
        //dd($gallery->children->count());
        foreach ($category->pagecategory_translations as $key => $translation) {
            $translation->delete();
        }
        PageCategory::destroy($id);
        flash(translate('Page Category has been deleted successfully'))->success();
        return redirect()->back();
    }
}
