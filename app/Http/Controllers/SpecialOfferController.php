<?php

namespace App\Http\Controllers;

use App\Models\SpecialOffer;
use App\Models\SpecialOfferTranslation;
use Illuminate\Http\Request;

class SpecialOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sort_search = null;
        $special_offers = SpecialOffer::orderBy('created_at', 'desc');
        if (request()->has('search')){
            $sort_search = request()->search;
            $special_offers = $special_offers->where('name', 'like', '%'.$sort_search.'%');
        }
        $special_offers = $special_offers->paginate(12);
        return view('specialoffer.index',compact('special_offers','sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $lang  = $request->lang;
        return view('specialoffer.create',compact('lang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spcial_offer = new SpecialOffer;
        $spcial_offer->title = $request->title;
        $spcial_offer->price = $request->price;
        $spcial_offer->image = $request->image;
        $spcial_offer->discount_price = $request->discount_price;
        $spcial_offer->unit = $request->unit;
        $spcial_offer->description = $request->description;
        $spcial_offer->sorting_id = $request->sorting_id;
        $spcial_offer->status = 1;
        $spcial_offer->save();

        $translation = SpecialOfferTranslation::firstOrNew(['lang' => env('DEFAULT_LANGUAGE'), 'special_offer_id' => $spcial_offer->id]);
        $translation->title = $request->title;
        $translation->price = $request->price;
        $translation->image = $request->image;
        $translation->discount_price = $request->discount_price;
        $translation->unit = $request->unit;
        $translation->description = $request->description;
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
        $special_offer = SpecialOffer::find($id);
        return view('specialoffer.edit',compact('special_offer','lang'));
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
        //
        $spcial_offer = SpecialOffer::find($id);
        if ($request->lang == env('DEFAULT_LANGUAGE')) {
            $spcial_offer->title = $request->title;
            $spcial_offer->price = $request->price;
            $spcial_offer->image = $request->image;
            $spcial_offer->discount_price = $request->discount_price;
            $spcial_offer->unit = $request->unit;
            $spcial_offer->description = $request->description;
        }
        $spcial_offer->sorting_id = $request->sorting_id;
        $spcial_offer->save();

        $translation = SpecialOfferTranslation::firstOrNew(['lang' => $request->lang, 'special_offer_id' => $spcial_offer->id]);
        $translation->title = $request->title;
        $translation->price = $request->price;
        $translation->image = $request->image;
        $translation->discount_price = $request->discount_price;
        $translation->unit = $request->unit;
        $translation->description = $request->description;
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

        $offer = SpecialOffer::findOrFail($id);
        foreach ($offer->special_offer_translations as $key => $testimonial_translation) {
            $testimonial_translation->delete();
        }
        SpecialOffer::destroy($id);

        flash(translate('Special Offer has been deleted successfully'))->success();
        return redirect()->route('specialoffer.index');
    }

    public function updateStatus(Request $request)
    {
        $offer = SpecialOffer::findOrFail($request->id);
        $offer->status = $request->status;
        if($offer->save()){
            return 1;
        }
        return 0;
    }
}
