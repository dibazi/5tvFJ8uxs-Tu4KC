<?php

namespace App\Http\Controllers;
use App\Models\Companie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class CompanieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response    
     */
    public function index(Request $request)
    {
        //

        return Inertia::render('Kaji/companies',
        ['companies'=>Companie::when($request->term, function($query, $term){
            $query->where('companyName', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
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
        return Companie::orderBy('created_at', 'DESC')->get();
        */
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
    public function store( Request $request)
    {
        
        //



        $newJob = request()->validate([
            'job.companyName' =>  ['required', 'string', 'max:255'],
            'job.country' => ['required', 'string', 'max:255'],
            'job.province' => ['required', 'string', 'max:255'],
            'job.city' => ['required', 'string', 'max:255'],
            'job.adress' => ['required', 'string', 'max:255'],
            'job.companyTel' => ['required', 'string', 'max:255'],
            'job.domaine' => ['required', 'string', 'max:255'],
            'job.position' => ['required', 'string', 'max:255'],
            'job.currency' => ['required', 'string', 'max:255'],
            'job.salary' => ['required', 'integer'],
            'job.description' => ['required', 'string', 'max:255'],
            'job.dateFinal' => ['required', 'string', 'max:255'],
            'job.cvemail' => ['required', 'string', 'max:255'],
            ]);

/*
             Companie::create([
                'companyName' => $newJob['companyName'],
                'country' => $newJob['country'],
                'city' => $newJob['city'],
                'adress' => $newJob['adress'],
                'companyTel' => $newJob['companyTel'],
                'domaine' => $newJob['domaine'],
                'position' => $newJob['position'],
                'currency' => $newJob['currency'],
                'salary' => $newJob['salary'],
                'description' => $newJob['description'],
                'dateFinal' => $newJob['dateFinal'],
                'cvemail' => $newJob['cvemail'],

            ]);
*/
        $newJob = new Companie;
        $newJob->user_id = $request->job["user_id"];
        $newJob->companyName = $request->job["companyName"];
        $newJob->country = $request->job["country"];
        $newJob->province = $request->job["province"];
        $newJob->city = $request->job["city"];
        $newJob->adress = $request->job["adress"];
        $newJob->companyTel = $request->job["companyTel"];
        $newJob->domaine = $request->job["domaine"];
        $newJob->position = $request->job["position"];
        $newJob->currency = $request->job["currency"];
        $newJob->salary = $request->job["salary"];
        $newJob->description = $request->job["description"];
        $newJob->dateFinal = $request->job["dateFinal"];
        $newJob->cvemail = $request->job["cvemail"];
        
        $newJob->save();

        return $newJob;
    
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
        return Inertia::render('Kaji/modifierCompanie', ['job'=>Companie::findOrfail($id)]);

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
    public function update(Request $request, Companie $job, $id)
    {
        //
        $updatePost = Companie::find($id);

        if($updatePost){
            
            $updatePost->companyName = $request->job["companyName"];
            $updatePost->country = $request->job["country"];
            $updatePost->province = $request->job["province"];
            $updatePost->city = $request->job["city"];
            $updatePost->adress = $request->job["adress"];
            $updatePost->companyTel = $request->job["companyTel"];
            $updatePost->domaine = $request->job["domaine"];
            $updatePost->position = $request->job["position"];
            $updatePost->currency = $request->job["currency"];
            $updatePost->salary = $request->job["salary"];
            $updatePost->description = $request->job["description"];
            $updatePost->dateFinal = $request->job["dateFinal"];
            $updatePost->cvemail = $request->job["cvemail"];
            
            $updatePost->update();
        }

        return "Post not found";

    }
    public function search(Request $request ){
        return Inertia::render('Kaji/companies',
        ['searchItems'=>Privee::when($request->term, function($query, $term){
            $query->where('country', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('province', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('city', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('salary', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('position', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
            $query->where('dateFinal', 'LIKE', '%'.$term.'%', 'OR', 'country', 'LIKE', '%'.$term.'%');
        }
        )->orderBy('created_at', 'DESC')->get()]);
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
