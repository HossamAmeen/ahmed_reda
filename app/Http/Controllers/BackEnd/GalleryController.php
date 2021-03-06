<?php

namespace App\Http\Controllers\BackEnd;
use Auth;
use App\Http\Requests\BackEnd\GalleryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
class GalleryController extends BackEndController
{
    public function __construct(Gallery $model)
    {
        parent::__construct($model);
    }
    public function store(GalleryRequest $request){
            $requestArray = $request->all();
            
           
            if($request->hasFile('image'))
          {
            $fileName = $this->uploadImage( $request , 1349 , 515 );
            // return $fileName;
            if($fileName != false)

            $requestArray['image'] =  $fileName;
          }
           
            $requestArray['user_id'] = Auth::user()->id;
            $this->model->create($requestArray);
            session()->flash('action', 'تم الاضافه بنجاح');
            return redirect()->route($this->getClassNameFromModel().'.index');
        }
    
        public function update($id , Request $request){
            $requestArray = $request->all();
            if($request->hasFile('image'))
            {
              $fileName = $this->uploadImage( $request , 1349 , 515 );
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
