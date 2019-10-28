<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Drug;

use Auth;
class DrugController extends BackEndController
{
    public function __construct(Drug $model)
    {
        parent::__construct($model);
    }
    public function store(DrugRequest $request){
      
        // return $request->all();
        $requestArray = $request->all();
        $requestArray['user_id'] = Auth::user()->id;
        $this->model->create($requestArray);

        session()->flash('action', 'تم الاضافه بنجاح');
        
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update($id , DrugRequest $request){
        $row = $this->model->FindOrFail($id);
        $requestArray = $request->all();
        $requestArray['user_id'] = Auth::user()->id;
        $row->update($requestArray);
        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }
    
}
