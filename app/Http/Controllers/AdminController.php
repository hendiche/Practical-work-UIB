<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramStudy;
use App\Models\Accreditation;
use App\Models\User;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index()
    {
    	// $akreditasi = Accreditation::get()->groupBy(function($date) {
    	// 	return Carbon::parse($date->accreditation_date)->format('Y');
    	// });
    	$akreditasi = Accreditation::orderBy('accreditation_date', 'desc')->get();
        return view('admin.index')->with('akreditasi', $akreditasi);
    }

    public function destroyAccreditation(Request $request)
    {
    	Accreditation::destroy($request->id);
    	return redirect()->route('admin.index');
    }

    public function user()
    {
    	$users = User::get();
    	return view('admin.user.index')->with('users', $users);
    }
    public function createUser()
    {
    	return view('admin.user.form')->with('roles', Role::get());
    }
    public function storeUser(Request $request)
    {
    	$user = new User();
    	$user->name = ucfirst($request->name);
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->save();

    	$role = Role::find($request->role);
    	$user->assignRole($role->name);

    	return redirect()->route('admin.user');
    }
    public function destroyUser(Request $request)
    {
    	User::destroy($request->id);
    	return redirect()->route('admin.user');
    }

    public function role()
    {
    	return view('admin.role.index')->with('roles', Role::get());
    }
    public function createRole()
    {
    	return view('admin.role.form');
    }
    public function storeRole(Request $request)
    {
    	$role = Role::create(['name' => ucfirst($request->name)]);
    	return redirect()->route('admin.role');
    }
    public function destroyRole(Request $request)
    {
    	Role::destroy($request->id);
    	return redirect()->route('admin.role');
    }

    public function prodi()
    {
    	return view('admin.prodi.index')->with('prodi', ProgramStudy::get());
    }
    public function createProdi()
    {
    	return view('admin.prodi.form');
    }
    public function storeProdi(Request $request)
    {
    	$prodi = new ProgramStudy();
    	$prodi->name = ucwords($request->name);
    	$prodi->save();

    	return redirect()->route('admin.prodi');
    }
    public function destroyProdi(Request $request)
    {
    	ProgramStudy::destroy($request->id);
    	return redirect()->route('admin.prodi');
    }
}
