<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryItem;
use App\Models\GalleryItemTranslation;
use Illuminate\Http\Request;

class GalleryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sort_search = null;
        $gallery_items = GalleryItem::orderBy('created_at', 'desc');
        if (request()->has('search')){
            $sort_search = request()->search;
            $gallery_items = $gallery_items->where('name', 'like', '%'.$sort_search.'%');
        }
        $gallery_items = $gallery_items->paginate(12);
        return view('galleryitem.index',compact('gallery_items','sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $lang  = $request->lang;
        $galleries = Gallery::all();
        return view('galleryitem.create',compact('lang','galleries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery_item = new GalleryItem();
        $gallery_item->gallery_id = $request->gallery_id;
        $gallery_item->name = $request->name;
        $gallery_item->image = $request->image;
        $gallery_item->save();


        $translation = new GalleryItemTranslation;
        $translation->lang = env('DEFAULT_LANGUAGE');
        $translation->gallery_item_id = $gallery_item->id;
        $translation->gallery_id = $gallery_item->gallery_id;
        $translation->name = $gallery_item->name;
        $translation->image = $gallery_item->image;
        $translation->save();

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
        $galleries = Gallery::all();
        $gallery_item = GalleryItem::find($id);
        return view('galleryitem.edit',compact('gallery_item','lang','galleries'));
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
        $gallery_item = GalleryItem::find($id);

        $gallery_item->gallery_id = $request->gallery_id;
        if ($request->lang == env('DEFAULT_LANGUAGE')) {
            $gallery_item->name = $request->name;
            $gallery_item->image = $request->image;
        }
        $gallery_item->save();

        $translation = GalleryItemTranslation::firstOrNew(['lang' => $request->lang, 'gallery_item_id' => $gallery_item->id]);

        $translation->gallery_item_id = $gallery_item->id;
        $translation->gallery_id = $gallery_item->gallery_id;
        $translation->name = $request->name;
        $translation->image = $request->image;
        $translation->save();

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
        $gi = GalleryItem::findOrFail($id);
        foreach ($gi->gallery_item_translations as $key => $gi_translation) {
            $gi_translation->delete();
        }
        GalleryItem::destroy($id);

        flash(translate('Gallery Item has been deleted successfully'))->success();
        return redirect()->back();
    }
}
