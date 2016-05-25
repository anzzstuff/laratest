<?php

namespace App\Http\Controllers;

// use DB;
use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        // $cards = DB::table('cards')->get();
        return view('cards.index', compact('cards'));
    }
    
    public function show(Card $card)
    {
        // $card = Card::find($id);
        // $card = Card::with('notes.user')->find(1);
        $card->load('notes.user');
        return view('cards.show', compact('card'));
    }
}
