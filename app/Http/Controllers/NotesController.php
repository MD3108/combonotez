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
        //$notations = json_decode($notes->pluck('notation'));
        //$notes = Note::all();
        abort_if($notes->isEmpty(), 204);
        
        return view('note.index', [
            'notes' => $notes,
            //'notations' => $notations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fighters = Fighter::all();
        $categories = Category::all();
        return view('note.create',[
            'fighters' => $fighters,
            'categories' => $categories,
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
    
        //dd([
        //    (int)$request-> get(('assist-1')),
        //    (int)$request-> get(('assist-2')),
        //    (int)$request-> get(('difficulty')),
        //]);
       $request->validate([
           'name' => 'required|max:45',
           'notation' => 'required',
           'assist-1' => 'required_if:fighters[2], filled|integer|between:1,3',
           'assist-2' => 'required_if:fighters[3], filled|integer|between:1,3',
           'damage' => 'required|between:0,999999',
           'ki-start' => 'required',
           'ki-end' => 'required',
           'difficulty' => 'required',
           'youtube' =>  'nullable||url',
           'fighters' => 'required|max:3',
           'categories' => 'min:1',
       ]);


       $note = Note::create([
           // DB Col  => input name
           'name' => $request->input(('name')),
           'notations' => $request->input(('notation')),
           'assistOne' => (int)$request-> get(('assist-1')),
           'assistOne' => (int)$request-> get(('assist-1')),
           'assistTwo' => (int)$request-> get(('assist-2')),
           'damage' => (int)$request->input(('damage')),
           'ki_start' => (float)$request->input(('ki-start')),
           'ki_end' => (float)$request->input(('ki-end')),
           'difficulty' => (int)$request-> get(('difficulty')),
           'youtube_url' => $request->input(('youtube')),
           'user_id' => auth()->user()->id,
       ]);
       
       foreach( $request->fighters as $fighter){
           $note->fighters()->attach((int)$fighter);
       }
       
       foreach( $request->categories as $category){
           $note->categories()->attach((int)$category);
       }
       

       return redirect('/note')
            ->with('message', 'Your Note has been created');

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
