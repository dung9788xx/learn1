<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    public function index()
    {
        return response()->json([
            'code' => 200,
            'data' => Auth::user()->rooms
        ]);
    }

    public function message(Request $request)
    {
        if($request->has('room_id')){
            $room=Room::find($request->room_id);
            return response()->json([
                'code' => 200,
                'data' => $room->messages
            ]);
        }
        return response()->json([
            'code' => 400,
            'message' => "required room id"
        ]);
    }
}
