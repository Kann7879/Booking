<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\DataTables\UserDataTable;

class UserController extends Controller
{
    // use UsersAuthorizable;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['action'] = '/user';
        return view('user.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads/users'), $fileName);
            $data['foto'] = $fileName;
        } else {
            $data['foto'] = 'no_image.jpg';
        }

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);
        $user->assignRole('user');

        return redirect('/user')->with('success', 'New user has been created!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->data['user_data'] = $user;
        $this->data['action'] = "/user/".$user->id;
        return view('user.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
public function update(UpdateUserRequest $request, User $user)
{
    // Ambil data hasil validasi
    $validatedData = $request->validated();

    // Handle foto baru
    if ($request->hasFile('foto')) {
        // Hapus foto lama kalau ada
        if ($user->foto && Storage::disk('public')->exists($user->foto)) {
            Storage::disk('public')->delete($user->foto);
        }

        // Simpan foto baru
        $validatedData['foto'] = $request->file('foto')->store('user_photos', 'public');
    }

    // Handle password (jangan overwrite kalau kosong)
    if ($request->filled('password')) {
        $validatedData['password'] = bcrypt($request->password);
    } else {
        unset($validatedData['password']);
    }

    // Update user dengan data valid
    $user->update($validatedData);

    return redirect('/user')->with('success', 'User has been updated!');
}


    public function role(User $user)
    {
        $this->data['roles'] = Role::all();
        $this->data['permissions'] = $user->getAllPermissions();
        $this->data['user'] = $user;
        //return $this->data['permissions'];
        $this->data['action'] = "/user/roleaction/" . $user->id;
        return view('user.role', $this->data);
    }

    public function roleaction(Request $request, User $user)
    {
        $user->syncRoles($request['roles']);

        return redirect('/user')->with('success', 'Roles ' . $user->name . ' has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('User Banned'), 403);
    }
}
