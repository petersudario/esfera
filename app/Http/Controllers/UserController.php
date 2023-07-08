<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use PasswordValidationRules;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::all();

        return view('user.list', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'max:11', 'min:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => $this->passwordRules(),
        ]);

        if (! $validated) {
            return redirect('users')
                ->with('error', 'Cannot create user');
        } else {

            $user = User::create([
                'name' => $request->name,
                'tel' => $request->tel,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            event(new Registered($user));

            return redirect('users')->with('success', 'Successfully created a user!');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('users');
    }

    public function confirmDestroy($id)
    {

        $user = User::find($id);

        return view('user.confirm-delete', [
            'user' => $user,
        ]);
    }
}
