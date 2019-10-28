<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Requests\BackEnd\ClienicRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Clinic;

use Auth;
class ClinicController extends BackEndController
{
    public function __construct(Clinic $model)
    {
        parent::__construct($model);
    }
    public function store(ClienicRequest $request){
      
        // return $request->all();
        $requestArray = $request->all();
        $requestArray['user_id'] = Auth::user()->id;
        $this->model->create($requestArray);

        session()->flash('action', 'تم الاضافه بنجاح');
        
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update($id , ClienicRequest $request){
        $row = $this->model->FindOrFail($id);
        $requestArray = $request->all();
        $requestArray['user_id'] = Auth::user()->id;
        $row->update($requestArray);
        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }
    
}
