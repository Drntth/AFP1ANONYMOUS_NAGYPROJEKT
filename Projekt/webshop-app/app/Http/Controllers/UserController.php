<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function edit(User $user) {
        return view('users.edit', compact('user'));
    }

    public function destroy($id) {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

    public function updateRole(Request $request, $id) {
    // Validate the incoming request
    $validated = $request->validate([
        'role' => 'required|in:user,admin',
    ]);

    $user = User::findOrFail($id);
    $user->role = $validated['role'];
    $user->save();

    return redirect()->route('users.index')->with('success', 'User role updated successfully!');
    }
}
