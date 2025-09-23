<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateAcountRequest;
use App\Http\Requests\UpdatePasswordRequest;

class AcountController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('acount.index', compact('user'));
    }

    public function store(UpdateAcountRequest $request)
    {
        $user = Auth::user();
        $validatedData = $request->validated();

        // update data umum selain foto
        $user->fill(Arr::except($validatedData, ['foto']));

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time().'_'.$file->getClientOriginalName();

            // simpan file ke storage/app/public/uploads/avatars
            $file->storeAs('uploads/avatars', $filename, 'public');

            // hapus foto lama kalau ada & bukan default
            if ($user->foto && $user->foto !== 'no_image.jpg' && \Storage::disk('public')->exists('uploads/avatars/'.$user->foto)) {
                \Storage::disk('public')->delete('uploads/avatars/'.$user->foto);
            }

            // simpan hanya nama file ke database
            $user->foto = $filename;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile berhasil diperbarui!');
    }

    public function security(){
        $user = Auth::user();
        return view('acount.security', compact('user'));
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $user = Auth::user();
        $user->password = bcrypt($request->newPassword);
        $user->save();

        return redirect()->route('acount.security')
                        ->with('success', 'Password changed successfully.');
    }

}
