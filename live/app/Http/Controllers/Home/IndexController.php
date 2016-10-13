<?php


namespace App\Http\Controllers\Home;

use App\Http\Model\Persons;
use Illuminate\Support\Facades\DB;

class IndexController extends CommonController
{
    public function index()
    {
        $data = Persons::orderBy('persons_views','desc')->get();

        $data2 = Persons::orderBy('persons_views')->take(5)->get();

        $data3 = Persons::orderBy('persons_views','desc')->take(2)->get();


		$users = DB::table('persons')->leftJoin('and', 'persons.persons_name', '=', 'and.and_name')->get();

        return view('home.index',compact('data','data2','data3'));
    }

    public function room($persons_id)
    {
        $data = Persons::orderBy('persons_views','desc')->get();

        $data2 = Persons::orderBy('persons_views','desc')->take(3)->get();

        $data3 = Persons::orderBy('persons_views','desc')->take(2)->get();

		$users = DB::table('persons')->leftJoin('and', 'persons.persons_name', '=', 'and.and_name')->where('persons_id',$persons_id)->first();
		


        return view('home.single',compact('data','data2','data3','users'));
    }

    public function cate()
    {
        $data = Persons::orderBy('persons_views','desc')->get();

        $data2 = Persons::orderBy('persons_views','desc')->take(3)->get();

        $data3 = Persons::orderBy('persons_views','desc')->take(2)->get();

        return view('home.gallery',compact('data','data2','data3'));
    }


}
