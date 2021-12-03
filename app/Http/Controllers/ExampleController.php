<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Thread;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showYourCase($id) {
        $a = User::firstOrCreate(['name' => 'lilin1'], ['age' => 28]);
        $temp = User::query()->where('id',2)->take(1)->get();
        //echo $temp;

        print User::all();
        print User::query()->get();
        return User::findOrFail($id);
    }

    public function store($name) {
        $user = new User;
        $user -> name = $name;
        $user -> age = 100;
        $user->save();

        echo User::query() -> count();
        echo PHP_EOL;

        echo User::query() -> where('id', 10) -> firstOrFail();
        echo PHP_EOL;

        echo User::query() -> where('name', 'hehe1') -> max('id');
        echo PHP_EOL;

        //批量更新user
        echo User::query() -> create(['name' => 'a', 'age' => 1]);
        echo PHP_EOL;
        return User::query() -> select(['name']) -> get();
    }


}
