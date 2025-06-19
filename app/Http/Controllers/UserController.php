<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function usersShow()
    {
        $users = User::all();
        return view('users.all-users', compact('users'));
    }

    public function allUsers(Request $request)
    {
        if ($request->ajax()) {

            $data = User::query();

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name', function($row){
                            return $row->first_name;
                    })
                    ->addColumn('email', function($row){
                            return $row->email;
                    })
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('users.all-users');
    }
}
