<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\TestimonialTranslation;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $sort_search = null;
        $testimonials = Testimonial::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $testimonials = $testimonials->where('name', 'like', '%'.$sort_search.'%');
        }
        $testimonials = $testimonials->paginate(12);
        return view('testimonial.index',compact('testimonials','sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $testimonial = new Testimonial;
        $testimonial->name = $request->name;
        $testimonial->image = $request->image;
        $testimonial->designation = $request->designation;
        $testimonial->description = $request->description;
        $testimonial->sorting_id = $request->sorting_id;
        $testimonial->status = 1;
        $testimonial->save();

        $testimonial_translation = TestimonialTranslation::firstOrNew(['lang' => env('DEFAULT_LANGUAGE'), 'testimonial_id' => $testimonial->id]);
        $testimonial_translation->name = $request->name;
        $testimonial_translation->image = $request->image;
        $testimonial_translation->designation = $request->designation;
        $testimonial_translation->description = $request->description;
        $testimonial_translation->save();

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
        //
        $lang  = $request->lang;
        $testimonial = Testimonial::find($id);
        return view('testimonial.edit',compact('testimonial','lang'));
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
        $testimonial = Testimonial::find($id);
        if ($request->lang == env('DEFAULT_LANGUAGE')) {
            $testimonial->name = $request->name;
            $testimonial->image = $request->image;
            $testimonial->designation = $request->designation;
            $testimonial->description = $request->description;
        }
        $testimonial->sorting_id = $request->sorting_id;
        $testimonial->save();

        $testimonial_translation = TestimonialTranslation::firstOrNew(['lang' => $request->lang, 'testimonial_id' => $testimonial->id]);
        $testimonial_translation->name = $request->name;
        $testimonial_translation->image = $request->image;
        $testimonial_translation->designation = $request->designation;
        $testimonial_translation->description = $request->description;
        $testimonial_translation->save();

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
        //
        $testimonial = Testimonial::findOrFail($id);
        foreach ($testimonial->testimonial_translations as $key => $testimonial_translation) {
            $testimonial_translation->delete();
        }
        Testimonial::destroy($id);

        flash(translate('Testimonial has been deleted successfully'))->success();
        return back();

    }

    public function updateStatus(Request $request)
    {
        $testimonial = Testimonial::findOrFail($request->id);
        $testimonial->status = $request->status;
        if($testimonial->save()){
            return 1;
        }
        return 0;
    }
}
