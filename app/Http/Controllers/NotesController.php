<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;


class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);
        // $note = new Note;
        // $note->body = $request->body;
        // $card->notes()->save($note);
        
        //$card->notes()->save(new Note(['body' => $request->body]));
        //$card->notes()->create(['body' => $request->body]);
        //$card->notes()->create($request->all());
        
        $note = new Note($request->all());
        $note->user_id = 1; //Auth::id()
        $card->addNote($note);
        
        // $card->addNote(
        //     new Note($request->all())
        // );
        
        return back();
    }
    
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
    
    public function update(Request $request, Note $note)
    {
        $note->update($request->all());
        return back();
    }
}
