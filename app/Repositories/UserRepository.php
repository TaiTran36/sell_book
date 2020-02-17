<?php
namespace App\Repositories;

use App\User;

class UserRepository extends CommonRepository{
    public function  __construct(User $user)
    {
        $this->model = $user;
    }

    public function delete_account($id){
        $account = $this->model->where('id',$id)->delete();
        return $account;
    }

    public function update_permission($id,$data){
        $per = $this->model::find($id);
        $per->roles()->sync($data);
        return $per;
    }
}
