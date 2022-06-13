<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        
        $admin = User::where("id_role", "2","ASC")->paginate(10);
        return view("/admin/index",  ['admin' => $admin]);
    }

    public function insert(Request $request)
    {
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->id_role = 2;
        $user->save();
        return redirect('/admin')->with('message','Data Berhasil Ditambahkan');
    }

    public function tambah() {
        return view("/admin.insert");
    }

    public function delete($id)
    {
        User::where("id", $id)->delete();
        return redirect('/admin')->with('message','Data Berhasil Dihapus');
    }

    public function update(Request $request)
    {
        User::where("id", $request->id)->update([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);
        return redirect("/admin")->with('message', 'Data Berhasil Diubah');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => User::where("id", $request->id)->first()
            
        ];

        return view('admin/edit', $data);
    }
}