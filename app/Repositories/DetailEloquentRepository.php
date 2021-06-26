<?php
namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\DetailRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\Detail;

class DetailEloquentRepository extends EloquentRepository implements DetailRepositoryInterface
{
/**
* get model
* @return string
*/
public function getModel()
	{
		return \App\Models\Detail::class;
	}
}
