<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Question;
use App\Models\Service;
use App\Models\Drug;
use App\Models\Operation;
use Mail;
class HomeController extends Controller
{
    public function index()
    {
        $pageTitle  = "Home";
        if(  request()->segment(1) == "en" ){
            $news = News::all()->sortByDesc("id")->where('en_title','!=',null)->take(3);
            $questions = Question::all()->sortByDesc("id")->where('en_question','!=',null)->take(2);
            $drugs = Drug::all()->sortByDesc("id")->where('en_title','!=',null)->take(10);
            $firstOperation = Operation::all()->sortByDesc("id")->where('en_title','!=',null)->first();
            $operations = Operation::all()->sortByDesc("id")->where('en_title','!=',null)->except('id' ,'!=', $firstOperation->id)->take(6);
           
            $indexOperation = 1 ; 
            $indexDrugs = 1 ;
            foreach($operations as $operation){
                if ($indexOperation % 2 == 0) {

                    $operation1[] = $operation ;
                } else {
                    $operation2[] = $operation ;
                }
                $indexOperation++;               
            }

            foreach($drugs as $drug){
                if ($indexDrugs % 2 == 0) {

                    $drugs1[] = $drug ;
                } else {
                    $drugs2[] = $drug ;
                }
                $indexDrugs++;               
            }
        //    return drugs2
        }
        else
        {

        }
       
        $gallery =  Gallery::all()->sortByDesc("id")->first();
        $galleries = Gallery::where('id' , '!=' ,$gallery->id )->orderBy('id', 'DESC')->get();
        
        return view('front-end.en.index' , compact('pageTitle' , 'news' , 'gallery' , 
        'galleries' , 'questions' , 'firstOperation' , 'drugs1' ,'drugs2', 'operation1' ,'operation2'));
    }

    public function news()
    {
       
        if(  request()->segment(1) == "en" ){
            $pageTitle  = "news";
            $news = News::all()->sortByDesc("id")->where('en_title','!=',null)->take(3);
            $questions = Question::all()->sortByDesc("id")->where('en_question','!=',null)->take(2);
            // return $news;
            return view('front-end.en.news', compact('pageTitle' , 'news'));
        }
       
    }

    public function services()
    {
        $pageTitle  = "services";
        if(  request()->segment(1) == "en" ){
            $services = Service::all()->sortByDesc("id")->where('en_title','!=',null);
        }
        return view('front-end.en.services' , compact('pageTitle' , 'services'));
    }

    public function questions()
    {
        $pageTitle  = "questions";
        if(  request()->segment(1) == "en" ){
            $questions = Question::all()->sortByDesc("id")->where('en_question','!=',null);
        }
        return view('front-end.en.questions' , compact('pageTitle' , 'questions') );
    }

    public function booking(Request $request)
    {
        if(  request()->segment(1) == "en" ){
            $pageTitle  = "booking";

            if ($request->isMethod('post')) {
               
                $rules = $this->bookFormValidation();
                $this->validate($request, $rules);
                $data=[
                    'name' =>  $request->name,
                    'phone' => $request->phone,
                    'note'=>$request->note,
                ];
                Mail::send('front-end.en.booking_mail',$data,function($message) use ($data){

                    // $message->from( $data['email'] , $data['name']);
                    $message->to("hossamameen948@gmail.com");
                    // $message->subject($data['subject']);
                });
                $request->session()->flash('status', 'تم الارسال بنجاح!');
                return redirect()->back();
            }

            return view('front-end.en.booking', compact('pageTitle'));
        }
        else{

            $pageTitle  = "حجز";

            if ($request->isMethod('post')) {
                // return $request->all();
                $rules = $this->bookFormValidation();
                $message = $this->bookMessageValidation();
                $this->validate($request, $rules, $message);
                $data=[
                    'name' =>  $request->name,
                    'phone' => $request->phone,
                    'note'=>$request->note,
                ];
                Mail::send('web.contact_mail',$data,function($message) use ($data){

                    $message->from( $data['email'] , $data['name']);
                    $message->to("info@tibaroyal.com");
                    $message->subject($data['subject']);
                });
                $request->session()->flash('status', 'sent successfully');
                return redirect()->back();
            }
            return view('front-end.ar.booking', compact('pageTitle'));
        }

     
       
    }

    public function help(Request $request)
    {
        if(  request()->segment(1) == "en" ){
            $pageTitle  = "helping";
            
            if ($request->isMethod('post')) {
               
                $rules = $this->helpFormValidation();
                $this->validate($request, $rules);
                $data=[
                    'note'=>$request->note,
                ];
                Mail::send('front-end.en.helping_mail',$data,function($message) use ($data){

                    // $message->from( $data['email'] , $data['name']);
                    $message->to("hossamameen948@gmail.com");
                    // $message->subject($data['subject']);
                });
                $request->session()->flash('status', 'sent successfully');
                return redirect()->back();
            }
            return view('front-end.en.helping', compact('pageTitle' , 'news'));
        }
       
    }
    public function aboutUs()
    {
        if(  request()->segment(1) == "en" ){
            $pageTitle  = "about";
           
            return view('front-end.en.about', compact('pageTitle' , 'news'));
        }
        return view('front-end.en.about_us');
    }

    function bookFormValidation()
    {


        return array(
            'name' => 'regex:/^[\pL\s\d\-]+$/u|required|max:99',
            'phone' => 'regex:/^[\d]+$/u|required|digits:11',
            'note' => 'regex:/^[\pL\s\-]+$/u||required',

        );
    }
    public function helpFormValidation()
    {
        return array(
            'note' => 'regex:/^[\pL\s\-]+$/u||required',

        );
    }

    function bookMessageValidation()
    {
        return array(
            'name.required' => 'هذا الحقل (الاسم) مطلوب ',
            'name.*' => 'هذا الحقل (الاسم) يجب يحتوي ع حروف وارقام فقط',
            'phone.required' => 'هذا الحقل (التلفون) مطلوب ',
            'phone.digits' => 'هذا الحقل (التلفون) يجب الا يقل عن 11 رقم ',
            'phone.*' => 'هذا الحقل (التلفون) يجب يحتوي ع ارقام فقط',

            'note.required' => 'هذا الحقل (الرساله) مطلوب ',
            'note.*' => 'هذا الحقل (الرساله) يجب يحتوي ع حروف وارقام فقط',

        );
    }
  
}
