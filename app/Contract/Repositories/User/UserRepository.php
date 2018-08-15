<?php
namespace App\Contract\Repositories\User;

interface UserRepository
{
    /**
     * get all users
     *
     * @return void
     */
    public function all();


    /**
     * get a user with id of @param $id
     *
     * @param mixed $id
     * @return void
     */
    public function show($id);

    
    /**
     * Get store a new user
     *
     * @param mixed $request
     * @return void
     */
    public function store($request);
}
