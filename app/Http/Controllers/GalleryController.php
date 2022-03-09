<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryTranslation;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sort_search = null;
        $galleries = Gallery::orderBy('created_at', 'desc')->where('parent_id',0);
        if (request()->has('search')){
            $sort_search = request()->search;
            $galleries = $galleries->where('name', 'like', '%'.$sort_search.'%');
        }
        $galleries = $galleries->paginate(12);
        return view('gallery.index',compact('galleries','sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $lang  = $request->lang;
        return view('gallery.create',compact('lang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = new Gallery;
        $gallery->title = $request->title;
        $gallery->name = $request->name;

        $gallery->save();

        $translation = new GalleryTranslation;
        $translation->lang = env('DEFAULT_LANGUAGE');
        $translation->gallery_id = $gallery->id;
        $translation->title = $gallery->title;
        $translation->name = $gallery->name;

        $translation->save();

        flash(translate('Gallery Created Successfully'))->success();
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
    public function edit(Request $request,$id)
    {
        $lang  = $request->lang;
        $gallery = Gallery::find($id);
        return view('gallery.edit',compact('gallery','lang'));
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
        $gallery = Gallery::find($id);
        if ($request->lang == env('DEFAULT_LANGUAGE')) {
            $gallery->title = $request->title;
            $gallery->name = $request->name;

        }

        $gallery->save();

        $translation = GalleryTranslation::firstOrNew(['lang' => $request->lang, 'gallery_id' => $gallery->id]);
        $translation->gallery_id = $gallery->id;
        $translation->title = $request->title;
        $translation->name = $request->name;

        $translation->save();

        flash(translate('Gallery Updated Successfully'))->success();
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
        $gallery = Gallery::findOrFail($id);
        //dd($gallery->children->count());
        foreach ($gallery->gallery_translations as $key => $gallery_translation) {
            $gallery_translation->delete();
        }
        if($gallery->parent_id == 0){
            foreach($gallery->children as $children) {
                $children->delete();
            }
            Gallery::destroy($id);
        }
        else{

            Gallery::destroy($id);
        }


        flash(translate('Gallery has been deleted successfully'))->success();
        return redirect()->back();
    }



    public function createSubcategory(Request $request)
    {
        $lang  = $request->lang;

        return view('gallery.create_subcategory',compact('lang'));
    }

    public function storeSubcategory(Request $request)
    {
        $subcategory = new Gallery();
        $subcategory->parent_id = $request->parent_id;
        $subcategory->name = $request->name;
        $subcategory->title = $request->title;

        $subcategory->save();

        $translation = new GalleryTranslation;
        $translation->lang = env('DEFAULT_LANGUAGE');
        $translation->gallery_id = $subcategory->id;
        $translation->title = $subcategory->title;
        $translation->name = $subcategory->name;

        $translation->save();
        flash(translate('Gallery Subcategory Created Successfully'))->success();
        return redirect()->back();
    }

    public function editSubcategory(Request $request,$id)
    {
        $lang  = $request->lang;
        $gallery = Gallery::find($id);
        return view('gallery.edit_subcategory',compact('gallery','lang'));
    }

    public function updateSubcategory(Request $request,$id)
    {
        $subcategory = Gallery::find($id);
        $subcategory->parent_id = $request->parent_id;
        $subcategory->name = $request->name;
        $subcategory->title = $request->title;

        $subcategory->save();

        $translation = GalleryTranslation::firstOrNew(['lang' => $request->lang, 'gallery_id' => $subcategory->id]);
        $translation->gallery_id = $subcategory->id;

        $translation->title = $subcategory->title;
        $translation->name = $subcategory->name;

        $translation->save();

        flash(translate('Gallery Subcategory Updated Successfully'))->success();
        return redirect()->back();
    }

    public function indexSubcategory()
    {
        $sort_search = null;
        $galleries = Gallery::where('parent_id','!=',0)->orderBy('created_at', 'desc');
        if (request()->has('search')){
            $sort_search = request()->search;
            $galleries = $galleries->where('name', 'like', '%'.$sort_search.'%');
        }
        $galleries = $galleries->paginate(12);

        return view('gallery.index_subcategory',compact('galleries','sort_search'));
    }
}
