<?php
/**
 * @resource Example
 *
 * Longer description
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
class ApiController extends Controller
{
    /**
     * This is the short description [and should be unique as anchor tags link to this in navigation menu]
     *
     * This can be an optional longer description of your API call, used within the documentation.
     *
     */
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all users

        $users = User::paginate(10);
        return response()->json(array(
            'error'=>false,
            'data'=>$users,

        ));
    }



    public function profile()
    {
        if ($user = Auth::user()) {
            $user['image'] = asset("public/images/$user->image");
            return response()->json(array(
                'error' => false,
                'message' => 'user found',
                'status_code' => $this->successStatus,
                'data' => $user,

            ));
        }else{
            return response()->json(array(
                'error' => true,
                'message' => 'user not found',
                'status_code' => '404',


            ));

        }
    }


    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',

        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $id=Auth::user()->id;

       $data= User::findOrFail($id)->update($request->all());
        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $data->image = $name;
            $file->move(public_path().'/images/', $name);
            $data->save();
        }

        return response()->json(array(
            'error' => false,
            'status_code'=>$this->successStatus,
            'message' => 'user updated',
        ));
    }

    public function deleteUser(){
        $user = User::findOrFail(Auth::user()->id);
        if(!$user){
            return response()->json(array(
                'error' => false,
                'status_code'=>'404',
                'message' => 'user not found',
            ));
        }
        if($user->delete()){
            return response()->json(array(
                'error' => false,
                'status_code'=>$this->successStatus,
                'message' => 'user deleted',
            ));

        }else{
            return response()->json(array(
                'error' => false,
                'status_code'=>'500',
                'message' => 'Internal server error',
            ));

        }


    }
    public function getSearchResults(Request $request) {


    }

}
