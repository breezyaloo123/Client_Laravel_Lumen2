<?php 

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{

    public function showAllEtudiants()
    {
        return response()->json(Etudiant::all());
    }

    public function showOneEtudiant($id)
    {
        return response()->json(Etudiant::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'nom' => 'required',
            'prenom' => 'required'
        ]);
        $etudiant = Etudiant::create($request->all());

        return response()->json($etudiant, 201);
    }

    public function update($id, Request $request)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->update($request->all());

        return response()->json($etudiant, 200);
    }

    public function delete($id)
    {
        Etudiant::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}




?>