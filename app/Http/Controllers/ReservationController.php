<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\reservation;
use App\rooms;
use Illuminate\Support\Facades\DB;
class ReservationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    // show booking form
    public function bookingview()
    {
        return view('user.booking');
    }

    //user booking
    public function booking(Request $request)
    {
        $request->validate([
            'roomtype'=>'required',
            'mealplan'=>'required',
            'checkin'=>'required',
            'checkout'=>'required'
        ]);
        $user = auth()->user();
        //if the room available
        if(DB::select("select id from rooms where type='$request->roomtype' && status  = 'available';")){
            $data=DB::select("select id from rooms where type='$request->roomtype' && status  = 'available';");
            $room_id=$data[0]->id;
            $room_id=$data[0]->id;
            $room=rooms::find($room_id);
            $room->status='busy';
            $room->save();
            $reservation = new reservation();
            $reservation->user_id=$user->id;
            $reservation->rooms_id=$room_id;
            $reservation->user_name=$user->name;
            $reservation->user_phonenumber=$user->phonenumber;
            $reservation->roomtype=$request->roomtype;
            $reservation->mealplan=$request->mealplan;
            $reservation->checkin=$request->checkin;
            $reservation->checkout=$request->checkout;
            $reservation->save();

            return redirect('/user/booking.blade.php')->with('status',"Your booking is done !!");
        }
        //if the room busy conditions
        else if(DB::select("select id from rooms where type='$request->roomtype' && status  = 'busy';")){
            $id=DB::select("select id from rooms where type='$request->roomtype' && status  = 'busy';");
            $room=rooms::findOrFail($id[0]->id);
            //if checkin between already reservation
            if(DB::select("select * from reservations where rooms_id='$room->id' && checkin<='$request->checkin' && checkout >='$request->checkin';"))
            {
                return redirect('/user/booking.blade.php')->with('error',"we haven't availabe $request->roomtype rooms");
            }
            //if checkout between already reservation
            elseif (DB::select("select * from reservations where rooms_id='$room->id' && checkin>'$request->checkin' && checkin<'$request->checkout';")) {
                return redirect('/user/booking.blade.php')->with('error',"we haven't availabe $request->roomtype rooms");
            }
            else{
                $room_id=$id[0]->id;
                $room_id=$id[0]->id;
                $room=rooms::find($room_id);
                $room->status='busy';
                $room->save();
                $reservation = new reservation();
                $reservation->user_id=$user->id;
                $reservation->rooms_id=$room_id;
                $reservation->user_name=$user->name;
                $reservation->user_phonenumber=$user->phonenumber;
                $reservation->roomtype=$request->roomtype;
                $reservation->mealplan=$request->mealplan;
                $reservation->checkin=$request->checkin;
                $reservation->checkout=$request->checkout;
                $reservation->save();

                return redirect('/user/booking.blade.php')->with('status',"Your booking is done !!");
            }
        }
    }

    //user view reservation
    public function viewreserv ()
    {
        $user = auth()->user();
        $res=DB::select("select * from reservations where user_id='$user->id';");
        return view('user.viewreserv',compact('res'));
    }
    //user delete reservation
    public function delete($id)
    {
        $reservation =reservation::find($id);
        $room=rooms::find($reservation->rooms_id);
        $room->status='available';
        $room->save();
        $reservation->delete();

        return redirect('/user/viewreserv.blade.php');
    }


    //admin view reservation
    public function adminviewreserv ()
    {
        $res=reservation::all();
        return view('admin.viewreserv',compact('res'));
    }

    //admin delete reservation
    public function admindelete($id)
    {
        $reservation =reservation::find($id);
        $room=rooms::find($reservation->rooms_id);
        $room->status='available';
        $room->save();
        $reservation->delete();

        return redirect('/admin/viewreserv.blade.php');
    }


}
