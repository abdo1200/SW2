<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\rooms;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    //admin  view users
    public function viewusers(){
        $users=User::all();
        return view('admin.viewuser',compact('users'));
    }
    //to delete user
    public function delete($id)
    {
        $user =user::find($id);
        $user->delete();

        return redirect('/admin/viewuser.blade.php');
    }
    //admin view rooms
    public function viewrooms()
    {
        $rooms=rooms::all();
        return view('admin.viewrooms',compact('rooms'));
    }
    //admin change room status
    public function changestatus($id)
    {
        $room=rooms::find($id);
        if($room->status=='available'){
            $room->status='busy';
            $room->save();
        }else{
            $room->status='available';
            $room->save();
        }
        return redirect('/admin/viewrooms.blade.php');

    }
}
