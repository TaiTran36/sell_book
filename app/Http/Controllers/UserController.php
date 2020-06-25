<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Providers\AppServiceProvider;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        if($this->authorize('admin')){
            return view('admin.dashboard');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $accounts = User::with('roles')->get();
        return view('admin.account.index',compact('accounts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public  function getPermission(){
        $list_permission = Role::select('id','description')->get();
        return view('admin.account.update',compact('list_permission'));
    }
    public function update(Request $request)
    {
        $result = $this->userRepository->update_permission($request['id'],$request['acc_permission']);

        if($result){
            return redirect()->intended('admin.permission')
                ->with('message','Bạn thay đổi quyền thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request)
    {

        $result = $this->userRepository->delete_account($request['id']);

        if($result){
            $success = @json_encode('Xoá thành công', JSON_UNESCAPED_UNICODE);
            return response()->json(['success'=>$success]);
        }
    }
}
