<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('admin.user.index', compact('users'));
    }

    public function destroy(Request $request, User $user)
    {
        $id = $request->id;
        $user = User::find($id);
        $user->delete();
        return response()->json('User successfully deleted.');
    }
}
