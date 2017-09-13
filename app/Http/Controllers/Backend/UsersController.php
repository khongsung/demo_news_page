<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use DateTime, Auth;

class UsersController extends Controller
{
    public function getCreate() {
    	return view('backend.users.create');
    }

    public function store(CreateUserRequest $request)
    {
        $user = new User;
        $user->username = $request->name;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->created_at = new DateTime;
        $user->save();
        
        return redirect()->route('getUserList');
    }

    public function getEdit($id)
    {
        $users = User::Where('id', $id)->get();
        $data = User::findOrFail($id)->toArray();
        $id_current_login = Auth::user()->id;

        if(($id_current_login != 1) && ($id == 1 || ($id_current_login != $id  && $data['level'] == 1))) {
            echo 'không được sửa thành viên này';
        } else {
            return view('backend.users.edit')->with(compact('users'));
        }
    	
    }

    public function postEdit(Request $request, $id)
    {
        $user = User::find($id);

        if($request->password) {
            $this->validate($request,
                [
                    'password_confirmation' => 'same:password'
                ],
                [
                    'password_confirmation.same' => 'mật khẩu không chùng nhau'
                ]
            );
            $user->password = bcrypt($request->password);
        }

        $user->username = $request->name;
        $user->level = $request->level;
        $user->updated_at = new DateTime;
        $user->save();

        return redirect()->route('getUserList');
    }

    public function getDelete($id)
    {
        $id_current_login = Auth::user()->id;
        $user_delete = User::find($id);

        if(($id == 1) || ($id_current_login != 1 && $user_delete['level'] == 1)) {
            /*$a = '
                <script type="text/javascript">
                    alert("không được xóa thành viên này")
                </script>
            ';
            return redirect()->route('getUserList')->with(compact('a'));*/

            echo 'không được xóa thành viên này';
        } else {
            $user_delete->delete();
            return redirect()->route('getUserList');
        }
    }

    public function getList()
    {
        $data = User::all();
    	return view('backend.users.list')->with(compact('data'));
    }
}
