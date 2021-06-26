<?php
namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\ObjectRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\Objects;

class ObjectEloquentRepository extends EloquentRepository implements ObjectRepositoryInterface
{
/**
* get model
* @return string
*/
public function getModel()
	{
		return \App\Models\Objects::class;
	}
	public function search(Request $request){
		$keyword = $request->timkiem;
		$search =DB::table('objects')->where('title','LIKE','%'.$keyword.'%')->get();
		return $search;
   }
}
