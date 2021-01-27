<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumnos;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
class AlumnosControler extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos['alumnos'] = alumnos::simplePaginate(5);
    return view('formularios.formcalif', $alumnos);
        //$alumnos  = DB::table('alumnos')
        //->select('alumnos.*')
        //->orderBy('id','ASC')
        //->get();
    
        //return view('formularios.formcalif')->with('alumnos',$alumnos);
       
        
    }
    public function acta()
    {
        $alum  = DB::table('alumnos')
        ->select('alumnos.*')
        ->orderBy('id','ASC')
        ->get();
    
        return view('inicio.actacalif')->with('alumnos',$alum);
       
        
    }
    public function editar($id){
        $calificacion = alumnos::findOrFail($id);
        return view('editar', compact('calificacion'));
        
    }
    public function edit(Request $request){
        for($i=0;$i<count($request->ids);$i++){
            $alumno = DB::table('alumnos')->where('id','=',$request->ids[$i])->update(['calif' => $request->califs[$i]]);
        }
        //return view('inicio.actacalif');
        return 1;
        //$Calif = request()->except((['_token', '_method']));
        //alumnos::where('id', '=', $id)->update($Calif);
        //return 1;
     
    }
 
}
