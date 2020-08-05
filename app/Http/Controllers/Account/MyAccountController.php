<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class MyAccountController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function show(User $user, $id)
    {
        $user = User::find($id);
        return view('pages.profile', compact('user'));
    }


    public function store(Request $request)
    {
        //
    }


    public function edit(User $user)
    {
        //
    }


    public function update(Request $request, User $user, $id)
    {
//        dd($request->all());
        $user = User::findOrFail($id);
       // Storage::



if($request->has('Tcv1')) {

    $request_data = $request->file('Tcv1')->store('/public');
    $nn = Storage::url($request_data);
    $request_data = asset($nn);
    $request['cv1'] = $request_data;

}if($request->has('Tcv2')) {

    $request_data = $request->file('Tcv2')->store('/public');
    $nn = Storage::url($request_data);
    $request_data = asset($nn);
    $request['cv2'] = $request_data;

}if($request->has('Tcv3')) {

    $request_data = $request->file('Tcv3')->store('/public');
    $nn = Storage::url($request_data);
    $request_data = asset($nn);
    $request['cv3'] = $request_data;

}if($request->has('Tcv4')) {

    $request_data = $request->file('Tcv4')->store('/public');
    $nn = Storage::url($request_data);
    $request_data = asset($nn);
    $request['cv4'] = $request_data;

}

        $request_data = $request->except(['permissions', 'image']);

        if ($request->image) {

            if ($user->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/user_images/' . $user->image);

            }//end of inner if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/user_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of external if

        $user->update($request_data);

        $user->save();

        return redirect()->back();
    }


    public function destroy(User $user)
    {

    }
}
