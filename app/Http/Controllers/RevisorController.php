<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;




class RevisorController extends Controller
{
    public function index(){
        $product_to_check = Product::where('is_accepted', null)->first();
        $product_checked=Product::orderBy('created_at','desc')->whereNotNull('is_accepted')->first();
        return view ('revisor.index', compact('product_to_check','product_checked'));
    }

    public function resumeProduct(Product $product){
        $product=Product::orderBy('created_at','desc')->whereNotNull('is_accepted')->first();
        $product->setAccepted(null);
        return redirect()->back()->with('message','Operazione annullata');
    }

    public function acceptProduct(Product $product){
        $product->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai accettato l\'annuncio');
    }

    public function rejectProduct(Product $product){
        $product->setAccepted(false);
        return redirect()->back()->with('message', 'Bravo, hai rifiutato l\'annuncio');
    }

    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message', 'Complimenti! Hai richiesto di diventare revisore correttamente'); 
    }

    public function makeRevisor(User $user){
        Artisan::call('app:make-user-revisor', ["email"=>$user->email]);
        return redirect('/')->with('message', 'Complimenti! L\'utente è diventato revisore');
}

}