<?php
namespace App\Http\Controllers;
use App\Repositories\interfaces\CategoryRepositoryInterface;
use App\Repositories\interfaces\TypeRepositoryInterface;
use App\Repositories\interfaces\ObjectRepositoryInterface;
use App\Repositories\interfaces\DetailRepositoryInterface;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class HomeController extends Controller
{
    protected $categoryRepository;
    protected $typeRepository;
    protected $objectRepository;
    protected $detailRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository,TypeRepositoryInterface $typeRepository,ObjectRepositoryInterface $objectRepository,DetailRepositoryInterface $detailRepository){
        $this->categoryRepository = $categoryRepository;
        $this->typeRepository = $typeRepository;
        $this->objectRepository = $objectRepository;
        $this->detailRepository = $detailRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('layout.index');
    }
    public function postSearch(Request $request){
        $cate=$this->categoryRepository->getAll();
        $type=DB::table('types')->limit(1)->get();
        $type1=$this->typeRepository->getAll();
        $search =$this->objectRepository->search($request);
        return view('layout.search',compact('cate','type','type1','search'));
    }
    public function menu(){
        $cate=$this->categoryRepository->getAll();
        $type=DB::table('types')->limit(1)->get();
        $type1=$this->typeRepository->getAll();
        $object=DB::table('objects')->orderBy('id','DESC')->limit(24)->get();
        return view('layout.index',compact('cate','type','object','type1'));
    }
    public function types($id){
        $cate=$this->categoryRepository->getAll();
        $type1=$this->typeRepository->getAll();
        $object1=$this->objectRepository->getAll();
        $type_id=$this->typeRepository->find($id);
        return view('layout.type',compact('cate','object1','type_id','type1'));
    }
    public function objects($id){
        $cate=$this->categoryRepository->getAll();
        $type1=$this->typeRepository->getAll();
        $object1=$this->objectRepository->getAll();
        $object_id=$this->objectRepository->find($id);
        $detail=$this->detailRepository->getAll();
        $detail1=DB::table('details')->orderBy('id','ASC')->where('object_id',$id)->first();
        return view('layout.object',compact('cate','type1','object1','object_id','detail','detail1'));
    }
    public function details($id){
        $cate=$this->categoryRepository->getAll();
        $type1=$this->typeRepository->getAll();
        $object1=$this->objectRepository->getAll();
        $object_id=$this->objectRepository->find($id);
        $detail=$this->detailRepository->getAll();
        $detail_id=$this->detailRepository->find($id);
        $all_chapter=$this->detailRepository->find($id);
        return view('layout.detail',compact('cate','type1','detail','detail_id','object_id','object1','all_chapter'));
    }
}
