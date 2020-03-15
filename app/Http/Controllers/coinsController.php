<?php

namespace App\Http\Controllers;

use App\Coin;
use App\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class coinsController extends Controller
{

    public function index(Coin $coin , Price $price)
    {

        //$coins = DB::table('coins')->get();

       $coins = Coin::with('price')->get();

        return view('main' , compact('coin' , "coins" , 'price'));
    }

    public function home(Coin $coin , Price $price)
    {

        //$coins = DB::table('coins')->get();

        $coins = Coin::with('price')->get();

        return view('home' , compact('coin' , "coins" , 'price'));
    }

    public function edit(Coin $coin , Price $price)
    {
        return view('admins.edit' , compact('coin' , 'price'));
    }

    public function update(Request $request , Coin $coin)
    {
        $coin->update($request->all());
        $coin->price()->update([
            "price"=>$request["price"]
        ]);

        flash("Coin has been updated");

        return back();
    }

    public function add(Coin $coin)
    {
        return view('admins.add' , compact('coin'));
    }

    public function create(Request $request )
    {

        $coin = new Coin;
        $coin -> name = $request->name ;
        $coin ->save();
        $price = new Price;
        $price -> price = $request -> price ;

        $coin -> price() ->save($price);

        flash('Coin has been added' , 'primary');

        return redirect('/home');
    }

    public function delete(Request $request , Coin $coin)
    {
        $coin ->delete($request->all());
        flash("Coin has been deleted" , 'danger');

        return redirect('/home');
    }

}
