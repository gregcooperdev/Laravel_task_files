<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
  // View all users
  public function index()
  {
    return Users::all();
  }

  // Add a user
  public function store(Request $request)
  {
    // validation
    $this->validate($request, [
      'name' => 'required|max:55',
      'phone' => 'required|regex:/(44)[0-9]{9}',
      'handset' => 'required',
    ]);

    Users::create([
      'name' => $request->name,
      'phone' => $request->phone,
      'handset' => $request->handset,
    ]);
  }

  // Update a user
  public function update(Request $request, $id)
  {
    $user = Users::findOrFail($id);
    $user->update($request->all());

    return $user;
  }

  // Delete a user
  public function delete(Request $request, $id)
  {
    Users::find($id)->delete();

    return 204;
  }
}
