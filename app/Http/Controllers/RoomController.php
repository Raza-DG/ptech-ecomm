<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomFacility;
use App\Models\RoomTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $sort_search =null;
        $rooms = Room::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $brands = $rooms->where('name', 'like', '%'.$sort_search.'%');
        }
        $rooms = $rooms->paginate(15);
        return view('rooms.index',compact('rooms','sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roomfacilties = RoomFacility::all();
        return view('rooms.create',compact('roomfacilties'));
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
        $room = new Room;
        $room->name = $request->name;
        $room->page_category_id = $request->page_category_id;
        $room->description = json_encode($request->description);
        $room->images = json_encode($request->images);
        $room->button = json_encode($request->button);
        $room->link = json_encode($request->link);
        $room->status = 1;

        $room->top_bar = $request->top_bar ?? 0;
        $room->menu_id = $request->menu_id;
        $room->relative_ids = json_encode($request->relative_ids);
        $room->relative_limit = $request->relative_limit;
        $room->relative_text = $request->relative_text;
        $room->relative_image = $request->relative_image;

        $room->sliders = $request->sliders;
        $room->slider_btn = $request->slider_btn;
        $room->slider_link = $request->slider_btn_link;
        $room->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->name)));
        $room->save();

        $roomtranslation = new RoomTranslation;
        $roomtranslation->lang = env('DEFAULT_LANGUAGE');
        $roomtranslation->room_id = $room->id;
        $roomtranslation->name = $request->name;
        $roomtranslation->slider_btn = $request->slider_btn;
        $roomtranslation->description = json_encode($request->description);
        $roomtranslation->save();

        flash("Room Create Succefully")->success();
        return redirect()->route('rooms.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $room = Room::where('status',1)->where('slug',$slug)->first();
        $rooms = null;
        if ($room != null) {
            $rooms = Room::where('status',1)->where('page_category_id',$room->page_category_id)->whereNotIn('slug',[$room->slug])->get();
        }
        if ($room == null) {
            abort(404);
        }
        return view('frontend.pages.rooms',compact("room","rooms"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $lang   = $request->lang;
        $room = Room::find($id);
        return view('rooms.edit',compact("room","lang"));
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
        $room = Room::find($id);
        if ($request->lang == env('DEFAULT_LANGUAGE')) {
            $room->name = $request->name;
            $room->description = json_encode($request->description);
            $room->button = json_encode($request->button);
            $room->slider_btn = $room->slider_btn;
        }
        $room->images = json_encode($request->images);
        $room->link = json_encode($request->link);
        $room->page_category_id = $request->page_category_id;

        if ($request->slug != null) {
            $room->slug = str_replace(' ', '-', $request->slug);
        }
        else {
            $room->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)).'-'.Str::random(5);
        }

        $room->top_bar = $request->top_bar ?? 0;
        $room->menu_id = $request->menu_id;
        $room->relative_ids = json_encode($request->relative_ids);
        $room->relative_limit = $request->relative_limit;
        $room->relative_text = $request->relative_text;
        $room->relative_image = $request->relative_image;

        $room->sliders = $request->sliders;
        $room->slider_btn = $request->slider_btn;
        $room->slider_link = $request->slider_btn_link;
        $room->save();

        $roomtranslation = RoomTranslation::firstOrNew(['lang' => $request->lang, 'room_id' => $room->id]);
        $roomtranslation->name = $request->name;
        $roomtranslation->description = json_encode($request->description);
        $roomtranslation->button = json_encode($request->button);
        $roomtranslation->slider_btn = $request->slider_btn;
        $roomtranslation->save();

        flash("Room Update Succefully")->success();
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
        $room = Room::findOrFail($id);
        foreach ($room->room_translations as $key => $room_translation) {
            $room_translation->delete();
        }
        Room::destroy($id);

        flash(translate('Room has been deleted successfully'))->success();
        return back();
    }

    public function updatestatus(Request $request)
    {
        $room = Room::findOrFail($request->id);
        $room->status = $request->status;
        if($room->save()){
            return 1;
        }
        return 0;
    }
}
