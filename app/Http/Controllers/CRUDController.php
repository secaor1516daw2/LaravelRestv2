<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use Carbon\Carbon;

class CRUDController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('principal');
	}

    public function crear(Request $request)
    {
            $nom = $request->input("nom");
            $descripcio = $request->input("descripcio");
            $tipus = $request->input("tipus");
            $preu = $request->input("preu");
            DB::table('plats')->insert([
                'nom' => $nom,
                'descripcio' => $descripcio,
                'tipus' => $tipus,
                'preu' => $preu]);
            return view('crearPlato',compact('nom','descripcio','tipus','preu'));
    }

    public function borrar(Request $request)
    {
        $nom = $request->input("nom");
        $noms = DB::table('plats')->where('nom', '=', $nom)->value('nom');
        $desc = DB::table('plats')->where('nom', '=', $nom)->value('descripcio');
        $tip = DB::table('plats')->where('nom', '=', $nom)->value('tipus');
        $preu = DB::table('plats')->where('nom', '=', $nom)->value('preu');
        DB::table('plats')->where('nom', '=', $nom)->delete();
        return view('deletePlato',compact('nom','noms','desc','tip','preu'));
    }

    public function leer()
    {
        $noms = DB::table('plats')->lists('nom');
        $descripcions = DB::table('plats')->lists('descripcio');
        $tipuss = DB::table('plats')->lists('tipus');
        $preus = DB::table('plats')->lists('preu');
        return view('showPlats',compact('noms','descripcions','tipuss','preus'));
    }

    public function amanides()
    {
        $plats = DB::table('plats')->distinct()->lists('tipus');
        $ids = DB::table('plats')->where('tipus', '=', 'AMANIDES')->lists('id');
        $noms = DB::table('plats')->where('tipus', '=', 'AMANIDES')->lists('nom');
        $descripcions = DB::table('plats')->where('tipus', '=', 'AMANIDES')->lists('descripcio');
        $tipuss = DB::table('plats')->where('tipus', '=', 'AMANIDES')->lists('tipus');
        $preus = DB::table('plats')->where('tipus', '=', 'AMANIDES')->lists('preu');
        return view('Amanides',compact('plats','ids','noms','descripcions','tipuss','preus'));
    }

    public function butifarres()
    {
        $plats = DB::table('plats')->distinct()->lists('tipus');
        $ids = DB::table('plats')->where('tipus', '=', 'BUTIFARRES')->lists('id');
        $noms = DB::table('plats')->where('tipus', '=', 'BUTIFARRES')->lists('nom');
        $tipuss = DB::table('plats')->where('tipus', '=', 'BUTIFARRES')->lists('tipus');
        $preus = DB::table('plats')->where('tipus', '=', 'BUTIFARRES')->lists('preu');
        return view('Butifarres',compact('plats','ids','noms','tipuss','preus'));
    }

    public function compartir()
    {
        $plats = DB::table('plats')->distinct()->lists('tipus');
        $ids = DB::table('plats')->where('tipus', '=', 'COMPARTIR')->lists('id');
        $noms = DB::table('plats')->where('tipus', '=', 'COMPARTIR')->lists('nom');
        $tipuss = DB::table('plats')->where('tipus', '=', 'COMPARTIR')->lists('tipus');
        $preus = DB::table('plats')->where('tipus', '=', 'COMPARTIR')->lists('preu');
        return view('Compartir',compact('plats','ids','noms','tipuss','preus'));
    }

    public function hamburgueses()
    {
        $plats = DB::table('plats')->distinct()->lists('tipus');
        $ids = DB::table('plats')->where('tipus', '=', 'HAMBURGUESES')->lists('id');
        $noms = DB::table('plats')->where('tipus', '=', 'HAMBURGUESES')->lists('nom');
        $descripcions = DB::table('plats')->where('tipus', '=', 'HAMBURGUESES')->lists('descripcio');
        $tipuss = DB::table('plats')->where('tipus', '=', 'HAMBURGUESES')->lists('tipus');
        $preus = DB::table('plats')->where('tipus', '=', 'HAMBURGUESES')->lists('preu');
        return view('Hamburgueses',compact('plats','ids','noms','descripcions','tipuss','preus'));
    }

    public function sugerencies()
    {
        $plats = DB::table('plats')->distinct()->lists('tipus');
        $ids = DB::table('plats')->where('tipus', '=', 'SUGERENCIES')->lists('id');
        $noms = DB::table('plats')->where('tipus', '=', 'SUGERENCIES')->lists('nom');
        $tipuss = DB::table('plats')->where('tipus', '=', 'SUGERENCIES')->lists('tipus');
        $preus = DB::table('plats')->where('tipus', '=', 'SUGERENCIES')->lists('preu');
        return view('Sugerencies',compact('plats','ids','noms','tipuss','preus'));
    }

    public function taula($i)
    {
        $nTaula = $i;

        $quantitat = DB::table('comanda')->where('taula', '=', $nTaula )->lists('quantitat');
        $nPlat = DB::table('comanda')->where('taula', '=', $nTaula )->lists('nPlat');
        $noms = DB::table('comanda')->where('taula', '=', $nTaula)->lists('nom');
        return view('showPlatTaula',compact('noms','quantitat','nPlat','nTaula'));
    }

    public function cuenta($i)
    {
        $date = Carbon::now();
        $data = $date->format('d-m-Y');
        $hora = $date->toTimeString();
        $nTaula = $i;
        $total=0;

        $quantitat = DB::table('comanda')->where('taula', '=', $nTaula )->lists('quantitat');
        $nPlat = DB::table('comanda')->where('taula', '=', $nTaula )->lists('nPlat');
        $noms = DB::table('comanda')->where('taula', '=', $nTaula)->lists('nom');

        for($i = 0;$i < count($nPlat);$i++){
        $import[$i]=(DB::table('plats')->where('id', '=', $nPlat[$i])->value('preu'))*($quantitat[$i]);
        $preus[$i]=DB::table('plats')->where('id', '=', $nPlat[$i])->value('preu');
        $total= $total + $import[$i];
        }

        return view('cuenta',compact('nPlat','quantitat','noms','nTaula','import','preus','total','data','hora'));
    }

     public function pedir(Request $request)
    {
        $nPlat = Session::get('p');
        $quantitat = Session::get('q');
         $data = Session::all();

        return view('pedido',compact('data','nPlat','quantitat'));
    }

     public function borrarPedido($id)
    {
        $nPlat = Session::get('p');
        $quantitat = Session::get('q');

        //$id=0;

        foreach ($nPlat as $index => $product) {
            if ($index == $id) {
                array_splice($nPlat, $index , 1);
            }
        }

        foreach ($quantitat as $index => $product) {
            if ($index == $id) {
                array_splice($quantitat, $index , 1);
            }
        }
         Session::put('p', $nPlat);
         Session::put('q', $quantitat);

        return view('pedido',compact('nPlat','quantitat'));
    }

        public function prueba(Request $request)
    {
        $nPlat[]=null;
        $quantitat[]=null;

        if($request->isMethod('post')){
            if($request->session()->has('nPlat')){
                Session::put('p', array(Input::get('nPlat')));
                Session::put('q', array(Input::get('quantitat')));
                $nPlat[] = Input::get('nPlat');
                $quantitat[] = Input::get('quantitat');
            }else{
                $nPlat = Session::pull('p');
                $quantitat = Session::pull('q');
                $nPlat[] = Input::get('nPlat');
                $quantitat[] = Input::get('quantitat');
                Session::set('p', $nPlat);
                Session::set('q', $quantitat);
            }
        }else if(Session::has('p')){
        $nPlat = Session::get('p');
        $quantitat = Session::get('q');


        }else if(count($nPlat)==0){
        $nPlat[]=0;
        $quantitat[]=0;
        }
        //$request->session()->flush();
        $plats = DB::table('plats')->distinct()->orderBy('tipus', 'asc')->lists('tipus');

        $id1 = DB::table('plats')->where('tipus', '=', 'AMANIDES')->lists('id');
        $nom1 = DB::table('plats')->where('tipus', '=', 'AMANIDES')->lists('nom');
        $descripcio1 = DB::table('plats')->where('tipus', '=', 'AMANIDES')->lists('descripcio');
        $tipus1 = DB::table('plats')->where('tipus', '=', 'AMANIDES')->lists('tipus');
        $preu1 = DB::table('plats')->where('tipus', '=', 'AMANIDES')->lists('preu');

        $id2 = DB::table('plats')->where('tipus', '=', 'BUTIFARRES')->lists('id');
        $nom2 = DB::table('plats')->where('tipus', '=', 'BUTIFARRES')->lists('nom');
        $tipus2 = DB::table('plats')->where('tipus', '=', 'BUTIFARRES')->lists('tipus');
        $preu2 = DB::table('plats')->where('tipus', '=', 'BUTIFARRES')->lists('preu');

        $id3 = DB::table('plats')->where('tipus', '=', 'COMPARTIR')->lists('id');
        $nom3 = DB::table('plats')->where('tipus', '=', 'COMPARTIR')->lists('nom');
        $tipus3 = DB::table('plats')->where('tipus', '=', 'COMPARTIR')->lists('tipus');
        $preu3 = DB::table('plats')->where('tipus', '=', 'COMPARTIR')->lists('preu');

        $id4 = DB::table('plats')->where('tipus', '=', 'HAMBURGUESES')->lists('id');
        $nom4 = DB::table('plats')->where('tipus', '=', 'HAMBURGUESES')->lists('nom');
        $descripcio4 = DB::table('plats')->where('tipus', '=', 'HAMBURGUESES')->lists('descripcio');
        $tipus4 = DB::table('plats')->where('tipus', '=', 'HAMBURGUESES')->lists('tipus');
        $preu4 = DB::table('plats')->where('tipus', '=', 'HAMBURGUESES')->lists('preu');

        $id5 = DB::table('plats')->where('tipus', '=', 'SUGERENCIES')->lists('id');
        $nom5 = DB::table('plats')->where('tipus', '=', 'SUGERENCIES')->lists('nom');
        $tipus5 = DB::table('plats')->where('tipus', '=', 'SUGERENCIES')->lists('tipus');
        $preu5 = DB::table('plats')->where('tipus', '=', 'SUGERENCIES')->lists('preu');
        return view('prueba',compact('nPlat','quantitat','plats','id1','nom1','descripcio1','tipus1','preu1','id2','nom2','tipus2','preu2','id3','nom3','tipus3','preu3','id4','nom4','descripcio4','tipus4','preu4','id5','nom5','tipus5','preu5'));
    }

        public function confirmar()
    {
//            $i=0;
            $taula = 2;
            $quantitat = Session::get('p');
            $nPlat = Session::get('q');
//            $nom = DB::table('plats')->where('id', '=', $nPlat[$i])->value('nom');

            for($i = 0;$i < count($nPlat);$i++){
                DB::table('comanda')->insert([
                    'taula' => $taula,
                    'quantitat' => $quantitat[$i],
                    'nPlat' => $nPlat[$i],
                    'nom' => DB::table('plats')->where('id', '=', $nPlat[$i])->value('nom')
                ]);
            }
            Session::flush();
            return view('confirm');
    }
}
