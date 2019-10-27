<?php

namespace App\Http\Controllers\BackEnd;
use App\Models\Service;
use App\Http\Requests\BackEnd\ServiceRequest;
use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;

class ServiceController extends BackEndController
{
    public function __construct(Service $model)
    {
        parent::__construct($model);
    }
    public function store(ServiceRequest $request){
       
        $requestArray = $request->all();
        if($request->hasFile('image'))
        { 
            $fileName = $this->uploadImage(  $request , 530 , 432 );
          if(isset($requestArray['image']) )
          $requestArray['image'] =  $fileName;
        }
        $requestArray['user_id'] = Auth::user()->id;
        $this->model->create($requestArray);
        session()->flash('action', 'تم الاضافه بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update($id , ServiceRequest $request){
        $requestArray = $request->all();
        if($request->hasFile('image'))
        {
            $fileName = $this->uploadImage($request ,530 , 432 );
          if(isset($requestArray['image']) )
          $requestArray['image'] =  $fileName;
        }
       
        $row = $this->model->FindOrFail($id);
       
       
        
        $requestArray['user_id'] = Auth::user()->id;
        $row->update($requestArray);
        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }
}
