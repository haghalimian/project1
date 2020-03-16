<?php

namespace App\Http\Controllers;

use App\Coin;
use App\User;
use Illuminate\Http\Request;

class walletController extends Controller
{
    public function bank()
    {
        $name = auth()->user()->name;
        $email = auth()->user()->email;
        $users = auth()->user()->wallets()->get();
        foreach ($users as $user){
            $money = $user->money;
        }
        return view('wallet' , compact('money' , 'name' , 'email'));
    }


    public function buy(Coin $coin)
    {
        return view('buy' , compact('coin'));
    }

    public function buyConfirm(Request $request )
    {
        $loggedInUser = auth()->user();
        $users = auth()->user()->wallets()->get();
        foreach ($users as $user){
            $money = $user->money;
        }
        $quantity = $request['quantity'];
        $coin_id = $request['id'];

        $coins = Coin::with('price')->findOrFail($coin_id);

        foreach ($coins -> price as $prices){
            $price = $prices ->price;
        }

        $sum = $price * $quantity;

        if ($sum > $money){
            flash('Sorry! Not enough money' , "danger");
            return redirect('/home');
        }
        else{
            $newMoney = $money - $sum;
            flash('Coin has been bought',"info");
            $loggedInUser->wallets()->update([
                "money"=>$newMoney
            ]);
            return redirect('/home');
        }
    }
}
