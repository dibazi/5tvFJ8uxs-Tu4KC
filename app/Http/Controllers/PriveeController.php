<?php

namespace App\Http\Controllers;
use App\Models\Privee;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Inertia\Inertia;

class PriveeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        return Inertia::render('Kaji/privee',
        ['items'=>Privee::when($request->term, function($query, $term){
            $query->where('country', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('province', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('city', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('domaine', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('salary', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('position', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('dateFinal', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('cvemail', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
        }
        )->orderBy('created_at', 'DESC')->get()]);

        /*
        return Privee::when($request->search, function($query, $term){
            $query->where('domaine', 'LIKE', '%'.$term.'%');
        }
        )->orderBy('created_at', 'DESC')->get();*/
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $newJob = request()->validate([
            'prive.country' => ['required','min:3','string', 'max:255'],
            'prive.province' => ['required', 'string', 'max:255'],
            'prive.city' => ['required', 'string', 'max:255'],
            'prive.domaine' => ['required', 'string', 'max:255'],
            'prive.position' => ['required', 'string', 'max:255'],
            'prive.currency' => ['required', 'string', 'max:255'],
            'prive.salary' => ['required', 'integer'],
            'prive.description' => ['required', 'string', 'max:255'],
            'prive.dateFinal' => ['required', 'string', 'max:255'],
            'prive.cvemail' => ['required', 'string', 'max:255'],
            ]);
   /*     
            Privee::create([

                'country' => $request->prive['country'],
                'city' => $request->prive['city'],
                'domaine' => $request->prive['domaine'],
                'position' => $request->prive['position'],
                'currency' => $request->prive['currency'],
                'salary' => $request->prive['salary'],
                'description' => $request->prive['description'],
                'dateFinal' => $request->prive['dateFinal'],
                'cvemail' => $request->prive['cvemail'],
            ]);

*/            
        $newPrive = new Privee;
        $newPrive->user_id = $request->prive["user_id"];
        $newPrive->country = $request->prive["country"];
        $newPrive->province = $request->prive["province"];
        $newPrive->city = $request->prive["city"];
        $newPrive->domaine = $request->prive["domaine"];
        $newPrive->position = $request->prive["position"];
        $newPrive->currency = $request->prive["currency"];
        $newPrive->salary = $request->prive["salary"];
        $newPrive->description = $request->prive["description"];
        $newPrive->dateFinal = $request->prive["dateFinal"];
        $newPrive->cvemail = $request->prive["cvemail"];
        
        $newPrive->save();

        return $newPrive;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Inertia::render('Kaji/modifiePrivee', ['prive'=>Privee::findOrfail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Privee $prive, $id)
    {
        //
        $updatePost = Privee::find($id);

        if($updatePost){
            
            $updatePost->country = $request->prive["country"];
            $updatePost->province = $request->prive["province"];
            $updatePost->city = $request->prive["city"];
            $updatePost->domaine = $request->prive["domaine"];
            $updatePost->position = $request->prive["position"];
            $updatePost->currency = $request->prive["currency"];
            $updatePost->salary = $request->prive["salary"];
            $updatePost->description = $request->prive["description"];
            $updatePost->dateFinal = $request->prive["dateFinal"];
            $updatePost->cvemail = $request->prive["cvemail"];
            
            $updatePost->update();
    
            return $updatePost;
        }

        return "Post not found";

    }

    public function search(Request $request ){
  
        return Inertia::render('Kaji/privee',
        ['searchItems'=>Privee::when($request->term, function($query, $term){
            $query->where('country', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('province', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('city', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('salary', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('position', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('dateFinal', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
        }
        )->orderBy('created_at', 'DESC')->get()]);
        
      /*
        return Inertia::render('Kaji/test',
        ['searchItems'=>Privee::when($request->term, function($query, $term){
            $query->where('domaine', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
        }
        )->orderBy('created_at', 'DESC')->get()]);

        return Inertia::render('Kaji/search',
        ['Item' => Privee::orderBy('created_at', 'DESC')->get()]);
        $queries = ['search'];
        return Inertia::render('Kaji/search', [
            'posts' => Privee::filter($request->only($queries)),
            'filters'=> $request->all($queries),
        ]);
        */
    }

    public function searchAll(Request $request ){
        $queries = ['search'];
        return Inertia::render('Kaji/search',
        ['searchAll'=> Privee::filter($request->only($queries))->get(),
        'filters'=> $request->all($queries)->orderBy('created_at', 'DESC')->get()]);
        
      /*
        return Inertia::render('Kaji/test',
        ['searchItems'=>Privee::when($request->term, function($query, $term){
            $query->where('domaine', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
        }
        )->orderBy('created_at', 'DESC')->get()]);

        return Inertia::render('Kaji/search',
        ['Item' => Privee::orderBy('created_at', 'DESC')->get()]);
        $queries = ['search'];
        return Inertia::render('Kaji/search', [
            'posts' => Privee::filter($request->only($queries)),
            'filters'=> $request->all($queries),
        ]);
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
