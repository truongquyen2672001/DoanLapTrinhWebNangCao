<?php

namespace App\Http\Controllers;

use App\Repositories\interfaces\DetailRepositoryInterface;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;


class DetailController extends Controller
{
    protected $detailRepository;
    public function __construct(DetailRepositoryInterface $detailRepository){
        $this->detailRepository = $detailRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhmuc=DB::table('details')->paginate(10);
        return view('admin.Detail.list-detail')->with(compact('danhmuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Detail.add-detail');

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
        $data['chapter'] = $request->detail_chapter;
        $data['content'] = $request->detail_content;
        $data['show'] = $request->detail_show;
        $data['object_id'] = $request->object_id;
        $data['created_at']=Carbon::now();
        $data['updated_at']=Carbon::now();
        $this->detailRepository->create($data);
        $message = "Create Success";
        if($data == null){
            $message = "Create Failed";
        }
        return redirect()->route('Detail.index')->with('message',$message);
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
        $edit_detail = $this->detailRepository->find($id);
        return view('admin.Detail.edit-detail',compact('edit_detail'));
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
        $data= array();
        $data['chapter'] = $request->detail_chapter;
        $data['content'] = $request->detail_content;
        $data['show'] = $request->detail_show;
        $data['object_id'] = $request->object_id;
        $data['created_at']=Carbon::now();
        $data['updated_at']=Carbon::now();
        $this->detailRepository->update($id,$data);
        $message = "Update Success";
        if($data == null){
            $message = "Update Failed";
        }
        return redirect()->route('Detail.index')->with('message',$message);
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
        if(! $this->detailRepository->delete($id)){
            $message = "Delete Failed";
        }
        return redirect()->route('Detail.index')->with('message',$message);
    }
}
