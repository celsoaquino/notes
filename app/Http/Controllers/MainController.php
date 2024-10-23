<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use App\Services\Operations;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index()
    {
        $id = session('user.id');
        $notes = User::find($id)->notes()->get();

        return view('home', compact('notes'));
    }

    public function newNote()
    {
        return view('new_note');
    }

    public function storeNote(Request $request)
    {
        $request->validate([
            'text_title' => 'required|min:3|max:200',
            'text_note' => 'required|min:3|max:3000',
        ]);

        $id = session('user.id');

        $note = new Note();
        $note->user_id = $id;
        $note->title = $request->input('text_title');
        $note->text = $request->input('text_note');
        $note->save();

        return redirect()->route('home');
    }

    public function editNote($id): View
    {
        $id = Operations::decryptId($id);

        $note = Note::find($id);
        return view('edit_note', compact('note'));
    }

    public function updateNote(Request $request)
    {
        $request->validate([
            'text_title' => 'required|min:3|max:200',
            'text_note' => 'required|min:3|max:3000',
        ]);

        if ($request->input('note_id') == null) {
            return redirect()->route('home');
        }

        $id = Operations::decryptId($request->input('note_id'));

        $note = Note::find($id);
        $note->title = $request->input('text_title');
        $note->text = $request->input('text_note');
        $note->save();

        return redirect()->route('home');
    }

    public function deleteNote($id)
    {
        $id = Operations::decryptId($id);

        $note = Note::find($id);
        return view('delete_note', compact('note'));
    }

    public function deleteNoteConfirm($id){
        $id = Operations::decryptId($id);

        $note = Note::find($id);

        $note->delete();

        return redirect()->route('home');
    }
}
