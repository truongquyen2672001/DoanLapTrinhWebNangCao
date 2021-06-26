<?php

namespace App\Http\Controllers;
use App\Repositories\interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class CategoryController extends Controller
{
    protected $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhmuc=DB::table('categories')->paginate(4);
        return view('admin.Category.list-category')->with(compact('danhmuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Category.add-category');
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
        $data['catname'] = $request->category_name;
        $data['created_at']=Carbon::now();
        $data['updated_at']=Carbon::now();
        $this->categoryRepository->create($data);
        $message = "Update Success";
        if($data == null){
            $message = "Update Failed";
        }
        return redirect()->route('Category.index')->with('message',$message);
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
        $edit_category = $this->categoryRepository->find($id);
        return view('admin.category.edit-category',compact('edit_category'));
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
        $data = $this->categoryRepository->find($id);
        $data=array();
        $data['catname'] = $request->category_name;
        $this->categoryRepository->update($id,$data);
        $message = "Update Success";
        if($data == null){
            $message = "Update Failed";
        }
        return redirect()->route('Category.index')->with('message',$message);
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
        if(! $this->categoryRepository->delete($id)){
            $message = "Delete Failed";
        }
        return redirect()->route('Category.index')->with('message',$message);
    }
}
