<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomFacility;
use App\Models\RoomFacilityTranslation;
use Illuminate\Http\Request;

class RoomFacilitiyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        //
        $room = Room::find($id);
        $roomfacilities =  RoomFacility::where('room_id',$id)->paginate(12);
        return view('rooms.roomfacilities.index',compact('roomfacilities','room'));
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
        $roomfacility =  new RoomFacility;
        $roomfacility->name = $request->name;
        $roomfacility->decription = $request->decription;
        $roomfacility->room_id = $request->room_id;
        $roomfacility->image = $request->image;
        $roomfacility->icon = $request->icon;
        $roomfacility->save();

        $roomfacility_translation  = RoomFacilityTranslation::firstOrNew(['lang' => env('DEFAULT_LANGUAGE'), 'room_facility_id' => $roomfacility->id]);
        $roomfacility_translation->name = $request->name;
        $roomfacility_translation->decription = $request->decription;
        $roomfacility_translation->save();

        return redirect()->route('roomfacility.index',['id'=> $roomfacility->room_id,'lang' => env('DEFAULT_LANGUAGE')]);
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
        $lang = $request->lang;
        $roomfacility =  RoomFacility::find($id);
        return view('rooms.roomfacilities.edit',compact('roomfacility','lang'));
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
        $roomfacility =  RoomFacility::find($id);
        if ($request->lang == env('DEFAULT_LANGUAGE')) {
            $roomfacility->name = $request->name;
            $roomfacility->decription = $request->decription;
        }
        $roomfacility->room_id = $request->room_id;
        $roomfacility->image = $request->image;
        $roomfacility->icon = $request->icon;
        $roomfacility->save();

        $roomfacility_translation  = RoomFacilityTranslation::firstOrNew(['lang' => $request->lang, 'room_facility_id' => $roomfacility->id]);
        $roomfacility_translation->name = $request->name;
        $roomfacility_translation->decription = $request->decription;
        $roomfacility_translation->save();

        flash(translate('RoomFacility has been Updated successfully'))->success();
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
        $roomfacility = RoomFacility::findOrFail($id);
        if (count($roomfacility->roomfacility_translations) > 0) {
            foreach ($roomfacility->roomfacility_translations as $key => $roomfacility_translation) {
                $roomfacility_translation->delete();
            }
        }
        RoomFacility::destroy($id);

        flash(translate('RoomFacility has been deleted successfully'))->success();
        return back();
    }
}
