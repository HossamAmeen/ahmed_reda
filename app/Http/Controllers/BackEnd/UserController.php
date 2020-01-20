<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Requests\BackEnd\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Image;
class UserController extends BackEndController
{
    public function __construct(User $model)
    {
        parent::__construct($model);

      
    }

    public function index()
    {
      
      if( Auth::user()->role == 1 )
      {
        $rows = $this->model;
        $rows = $this->filter($rows);
        $with = $this->with();
        if(!empty($with)){
            $rows = $rows->with($with);
        }
        $rows = $rows->all()->sortByDesc("id");
        $moduleName = $this->pluralModelName();
        $sModuleName = $this->getModelName();
        $routeName = $this->getClassNameFromModel();
        $pageTitle = "Control ".$moduleName;
        $pageDes = "Here you can add / edit / delete " .$moduleName;
        // return $rows; 
        // return Auth::user()->role;
        // return $rows;
        return view('back-end.' . $routeName . '.index', compact(
            'rows',
            'pageTitle',
            'moduleName',
            'pageDes',
            'sModuleName',
            'routeName'
        ));
      }
      
    }

    public function create()
    {
      if( Auth::user()->role == 1 )
      {
        $moduleName = $this->getModelName();
        $pageTitle = "Create ". $moduleName;
        $pageDes = "Here you can create " .$moduleName;
        $folderName = $this->getClassNameFromModel();
        $routeName = $folderName;
        $append = $this->append();

        // return  request()->segment(3);
        return view('back-end.' . $folderName . '.create' , compact(
            'pageTitle',
            'moduleName',
            'pageDes',
            'folderName',
            'routeName'
        ))->with($append);
      }
    }

    public function destroy($id)
    {
      if( Auth::user()->role == 1 )
      {
        $this->model->FindOrFail($id)->delete();

        return redirect()->route($this->getClassNameFromModel() . '.index');
      }
    }

    public function store(UserRequest $request){
      if( Auth::user()->role == 1 )
      {
      $requestArray = $request->all();
        if($request->hasFile('image'))
        {
            $fileName = $this->uploadImage($request , 1110 , 300 );
          if(isset($requestArray['image']) )
          $requestArray['image'] =  $fileName;
        }
       
        if(isset($requestArray['password']) )
        $requestArray['password'] =  Hash::make($requestArray['password']);
       
        $this->model->create($requestArray);
        session()->flash('action', 'تم الاضافه بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }
  }
    public function edit($id)
    {
      
        $row = $this->model->FindOrFail($id);
        if( Auth::user()->role >= $row->role)
      
      {
        $moduleName = $this->getModelName();
        $pageTitle = "Edit " . $moduleName;
        $pageDes = "Here you can edit " .$moduleName;
        $folderName = $this->getClassNameFromModel();
        $routeName = $folderName;
        $append = $this->append();
        // return $row; 
        return view('back-end.' . $folderName . '.edit', compact(
            'row',
            'pageTitle',
            'moduleName',
            'pageDes',
            'folderName',
            'routeName'
        ))->with($append);
      }
       
    }
    public function update($id , UserRequest $request){
      if( Auth::user()->role == 1 )
      {
        
          $requestArray = $request->all();
        if($request->hasFile('image'))
        {
            $fileName = $this->uploadImage($request , 1110 , 300 );
          if(isset($requestArray['image']) )
          $requestArray['image'] =  $fileName;
        }
       
        $row = $this->model->FindOrFail($id);
        
        if(isset($requestArray['password']) && $requestArray['password'] != ""){
            $requestArray['password'] =  Hash::make($requestArray['password']);
        }else{
            unset($requestArray['password']);
        }
        if(isset($requestArray['image']) )
        $requestArray['image'] =  $fileName;
        $row->update($requestArray);
        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.edit' , ['id' => $row->id]);
    }
  }

   
}
