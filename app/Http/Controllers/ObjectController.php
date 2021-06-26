<?php

namespace App\Http\Controllers;

use App\Repositories\interfaces\ObjectRepositoryInterface;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class ObjectController extends Controller
{
    protected $objectRepository;
    public function __construct(ObjectRepositoryInterface $objectRepository){
        $this->objectRepository = $objectRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhmuc=DB::table('objects')->paginate(10);
        return view('admin.Object.list-object')->with(compact('danhmuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Object.add-object');

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
        $data['title'] = $request->object_name;
        $data['mota'] = $request->object_mota;
        $data['sochapter'] = $request->object_sochapter;
        $data['images'] = $request->object_images;
        $data['author'] = $request->object_author;
        $data['show'] = $request->anhien;
        $data['type_id'] = $request->object_type_id;
        $data['created_at']=Carbon::now();
        $data['updated_at']=Carbon::now();
        $this->objectRepository->create($data);
        $message = "Create Success";
        if($data == null){
            $message = "Create Failed";
        }
        return redirect()->route('Object.index')->with('message',$message);
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
        $edit_object = $this->objectRepository->find($id);
        return view('admin.Object.edit-object',compact('edit_object'));
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
        $data=array();
        $data['title'] = $request->object_title;
        $data['mota'] = $request->object_mota;
        $data['sochapter'] = $request->object_chapter;
        $data['images'] = $request->object_images;
        $data['author'] = $request->object_author;
        $data['show'] = $request->object_show;
        $data['type_id'] = $request->type_id;
        $data['created_at']=Carbon::now();
        $data['updated_at']=Carbon::now();
        $this->objectRepository->update($id,$data);
        $message = "Update Success";
        if($data == null){
            $message = "Update Failed";
        }
        return redirect()->route('Object.index')->with('message',$message);
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
            if(! $this->objectRepository->delete($id)){
                $message = "Delete Failed";
            }
            return redirect()->route('Object.index')->with('message',$message);
        }
    }
