<?php

namespace App\Http\Controllers;
use App\Repositories\interfaces\TypeRepositoryInterface;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class TypeController extends Controller
{
    protected $typeRepository;
    public function __construct(TypeRepositoryInterface $typeRepository){
        $this->typeRepository = $typeRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhmuc=DB::table('types')->paginate(15);
        return view('admin.Type.list-type')->with(compact('danhmuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Type.add-type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= array();
        $data['typename'] = $request->type_name;
        $data['category_id'] = $request->type_id_category;
        $data['created_at']=Carbon::now();
        $data['updated_at']=Carbon::now();
        $this->typeRepository->create($data);
        $message = "Update Success";
        if($data == null){
            $message = "Update Failed";
        }
        return redirect()->route('Type.index')->with('message',$message);
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
        $edit_type = $this->typeRepository->find($id);
        return view('admin.Type.edit-type',compact('edit_type'));
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
       $data = $this->typeRepository->find($id);
       $data=array();
       $data['typename'] = $request->type_name;
       $data['category_id'] = $request->category_id;
       $this->typeRepository->update($id,$data);
       $message = "Update Success";
        if($data == null){
            $message = "Update Failed";
        }
       return redirect()->route('Type.index')->with('message',$message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = "Delete Success";
            if(! $this->typeRepository->delete($id)){
                $message = "Delete Failed";
            }
            return redirect()->route('Type.index')->with('message',$message);
        }
}
