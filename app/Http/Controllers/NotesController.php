<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryNote;
use App\Models\Fighter;
use App\Models\FighterNote;
use App\Models\Like;
use Illuminate\Http\Request;
use App\Models\Note;
use Database\Seeders\FighterNoteSeeder;

class NotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ["except" => ['index', ]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::orderBy('updated_at', 'DESC')->paginate(12);
        //dd($notes); 
        abort_if($notes->isEmpty(), 204);
        
        return view('note.index', [
            'notes' => $notes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$lastNoteId =  Note::orderBy('updated_at', 'DESC')->first()->id;
        $fighters = Fighter::all();
        $categories = Category::all();
        //$difficulties = Note::compact('difficulty');
        //dd($difficulties);
        return view('note.create',[
            'fighters' => $fighters,
            'categories' => $categories,
            //'lastNoteId' => $lastNoteId,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fighters' => 'required',
            'chosen' => '',
            'chosen-1' => '',
            'assist-1' => '',
            'chosen-2' => '',
            'assist-2' => '',
            'name' => 'required',
            'notation' => '',
            'damage' => 'required',
            'ki-start' => 'required',
            'ki-end' => 'required' ,
            'categories' => 'required',
            'difficulty' => 'required',
            'youtube' => '',
        ]);

        //Note::create([
            //'fighter' => $request->input('fighter'),
            //'chosen' => $request->input('chosen'),
            //'chosen-1' => $request->input('chosen-1'),
            //'chosen-2' => $request->input('chosen-2'),
            //'assist-1' => $request->input('assist-1'),
            //'assist-2' => $request->input('assist-2'),
            //'name' => $request->input('name'),
            //'notation' => $request->input('notation'),
            //'damage' => $request->input('damage'),
            //'ki_start' => $request->input('ki-start'),
            //'ki_end' => $request->input('ki-end'),
            //'category' => $request->input('category'),
            //'difficulty' => $request->input('difficulty'),
            //'user_id' => auth()->user()->id
        //]);
        $note = new Note([
            'name' => $request->input('name'),
            'assistOne' => $request->input('assist-1'),
            'assistTwo' => $request->input('assist-2'),
            'notation' => $request->input('notation'),
            'damage' => $request->input('damage'),
            'ki_start' => $request->input('ki-start'),
            'ki_end' => $request->input('ki-end'),
            'category' => $request->input('category'),
            'difficulty' => $request->input('difficulty'),
            'user_id' => auth()->user()->id,
        ]); 

        // ! remove nullable from Note.php once notation json solution found
        $note->save();
        $noteId = $note->id;

        foreach( $request->fighters as $fighter){
            $note->fighters()->attach($fighter);
            //FighterNote::create([
            //    'fighter_id' => $fighter,
            //    'note_id' => $noteId,
            //]);
        }

        foreach( $request->categories as $category){
            $note->categories()->attach($category);
            //CategoryNote::create([
            //    'category_id' => $category,
            //    'note_id' => $noteId,
            //]);
        }
        
        return redirect('/note')
            ->with('message', 'Your Note has been created');

        //$request->validate([
        //    'fighter' => 'required',
        //    'name' => 'required|max:255',
        //    'notation' => 'required',
        //    'damage' => 'required',
        //    'ki-start' => 'required',
        //    'ki-end' => 'required',
        //]); 
        //
        //Note::create([
        //    'fighter' => $request->input('fighter'),
        //    'name' => $request->input('name'),
        //    'notation' => $request->input('notation'),
        //    'damage' => $request->input('damage'),
        //    'ki_start' => $request->input('ki-start'),
        //    'ki_end' => $request->input('ki-end'),
        //    'user_id' => auth()->user()->id
        //]);

        //return redirect('/note')
        //    ->with('message', 'Your Note has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('show')
        //    ->with('note', Note::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('note.edit')
            ->with('note', Note::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fighter' => 'required',
            'name' => 'required|max:255',
            'notation' => 'required',
            'damage' => 'required',
            'ki-start' => 'required',
            'ki-end' => 'required',
        ]);

        Note::where('id', $id)
            ->update([
                'fighter' => $request->input('fighter'),
                'name' => $request->input('name'),
                'notation' => $request->input('notation'),
                'damage' => $request->input('damage'),
                'ki_start' => $request->input('ki-start'),
                'ki_end' => $request->input('ki-end'),
                'user_id' => auth()->user()->id
            ]);

        return redirect('/note')
            ->with('message', 'Your Note has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::where('id', $id);
        $note->delete();

        return redirect('/note')
        ->with('message', 'Your Note has been deleted');
    }
}
