<?php

namespace App\Http\Controllers;
use App\Models\Privee;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PriveeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Privee::orderBy('created_at', 'DESC')->get();
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
            'prive.country' => ['required', 'string', 'max:255'],
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
        $newPrive->country = $request->prive["country"];
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
    public function update(Request $request, $id)
    {
        //
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
