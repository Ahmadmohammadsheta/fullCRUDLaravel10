<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repository\UserRepositoryInterface;
use App\Http\Traits\ResponseTrait;

class UserController extends Controller
{
    use ResponseTrait;
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.users.index', ['response' => ($this->sendResponse($this->userRepository->all(), "", 200))]);
        return view('users.users.index', ['data' => $this->userRepository->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->userRepository->create($request->all());
        return view('users.users.index', ['response' => ($this->sendResponse($this->userRepository->all(), "added success", 200))]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.users.show', ['response' => ($this->sendResponse($this->userRepository->find($user->id), "", 200))]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.users.edit', ['response' => ($this->sendResponse($this->userRepository->find($user->id), "", 200))]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $this->userRepository->edit($user->id, $request->all());
        return view('users.users.index', ['response' => ($this->sendResponse($this->userRepository->all(), "تم التعديل", 200))]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $search = $request->search;
            $data   = User::where("name", "LIKE", "%$search%")->get();
            return view('users.users.search', ['response' => [
                'data' => $data,
            ]]);
        }
    }
}
