<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Question;
use App\Models\Clinic;
use App\Models\Service;
use App\Models\Drug;
use App\Models\Operation;
use Mail;
class HomeController extends Controller
{
    protected $lang;  
    public function __construct()
    {
        if(  request()->segment(1) === null ) {
            $this->lang = "ar";
        }
        else
        $this->lang = request()->segment(1);
       
    }
    public  function  change_language($lang){
      
        $prefUrl = url()->previous() ; 
         if($lang == "en")
 
             $rout =   str_replace("ar","en",url()->previous());
 
         else
             $rout =   str_replace("en","ar",url()->previous());
        
         if(  request()->segment(2) === null ) {
             
            if(  request()->segment(1) === "ar" ) {
                return redirect()->route('en.index');
            }
         }
        //  return $prefUrl;
         if( $rout == url()->previous()){
             $rout = $rout . $lang;
             //return $rout;
         }
        //  return strripos($prefUrl , '/') ;
        // return $rout;
        //  return strlen($rout);
        // if(strripos($rout , '/')+3 == strlen($rout)){
        //     $rout = $rout .'/index';
        // }
        //  if($rout == )
    
         return redirect($rout);
     }
     public function index()
     {
        return redirect()->route('home');
     }
     
    public function home()
    {
        
      
        if( $this->lang  == "en" ){

            $pageTitle  = "Home";
            $news = News::all()->sortByDesc("id")->where('en_title','!=',null)->take(3);
            $questions = Question::all()->sortByDesc("id")->where('en_question','!=',null)->take(2);
            $drugs = Drug::all()->sortByDesc("id")->where('en_title','!=',null)->take(10);
            $firstOperation = Operation::all()->sortByDesc("id")->where('en_title','!=',null)->first();
            $operations = Operation::all()->sortByDesc("id")->where('en_title','!=',null)->take(9);
           
            $indexOperation = 1 ; 
            $indexDrugs = 1 ;
            foreach($operations as $operation){
                if ($indexOperation % 2 == 0) {

                    $operation1[] = $operation ;
                }  elseif ($indexOperation % 2 == 1) {
                    $operation2[] = $operation ;
                }
                else{
                    $operation3[] = $operation ;
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
            $pageTitle = "الرئيسيه";

            $news = News::all()->sortByDesc("id")->take(3);
            $questions = Question::all()->sortByDesc("id")->take(2);
            $drugs = Drug::all()->sortByDesc("id")->take(10);
            
            $operations = Operation::all()->sortByDesc("id")->take(9);

            $indexOperation = 1 ; 
            $indexDrugs = 1 ;
            foreach($operations as $operation){
                if ($indexOperation % 2 == 0) {

                    $operation1[] = $operation ;
                } elseif ($indexOperation % 2 == 0) {
                    $operation2[] = $operation ;
                }
                else{
                    $operation3[] = $operation ;
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
        }
        
        $clinics =  Clinic::all()->sortByDesc("id")->take(3);
        $gallery =  Gallery::all()->sortByDesc("id")->first();
        $galleries = Gallery::where('id' , '!=' ,$gallery->id )->orderBy('id', 'DESC')->get();
        
        return view("front-end.$this->lang.index" , compact('pageTitle' , 'news' , 'gallery' , 
        'galleries' , 'questions' , 'firstOperation' , 'drugs1' ,'drugs2','operations' , 'operation1' ,'operation2' ,'operation3', 'clinics'));
    }

    public function news()
    {
        $news = News::orderBy('id', 'desc')->paginate(3);
        $pageTitle  = "الأخبار";
        if(  request()->segment(1) == "en" ){
            $pageTitle  = "news";
            $news = News::orderBy('id', 'desc')->where('en_title','!=',null)->paginate(15);
          
            // return $news;
          
        }
        return view('front-end.'.$this->lang.'.news', compact('pageTitle' , 'news'));
    }
    public function show_news($id){
        $news = News::find($id);
        $pageTitle  = "الخبر";
        if(  request()->segment(1) == "en" ){
            $pageTitle  = "news";
            $news = News::where( 'id', $id )
                        ->where('en_title','!=',null )->first();
          if(! isset($news) ) {
            return redirect()->route('home');
            // return view('front-end.'.$this->lang.'.news', compact('pageTitle' , 'news'));
          }
           
          
        }
        // return $news->en_description;
        return view('front-end.'.$this->lang.'.single-new', compact('pageTitle' , 'news'));
    }
    public function services()
    {
        $pageTitle  = "الخدمات";
        $services = Service::all()->sortByDesc("id")->take(6);
        if(  request()->segment(1) == "en" ){
            $pageTitle  = "services";
            $services = Service::all()->sortByDesc("id")->where('en_title','!=',null)->take(6);
        }
        return view('front-end.'.$this->lang.'.services' , compact('pageTitle' , 'services'));
    }

    public function questions()
    { 
        $questions = Question::all()->sortByDesc("id")->take(10);
        $pageTitle  = "سؤال وجواب";
        if(  request()->segment(1) == "en" ){
            $pageTitle  = "questions";
            $questions = Question::all()->sortByDesc("id")->where('en_question','!=',null)->take(10);
        }
        return view('front-end.'.$this->lang.'.questions' , compact('pageTitle' , 'questions') );
    }

    public function booking(Request $request)
    {
        if(  request()->segment(1) == "en" ){
            $pageTitle  = "booking";

            if ($request->isMethod('post')) {
               
                $rules = $this->bookFormValidation();
                
                $this->validate($request, $rules );
                $data=[
                    'name' =>  $request->name,
                    'phone' => $request->phone,
                    'note'=>$request->note,
                ];
                Mail::send('front-end.en.booking_mail',$data,function($message) use ($data){

                    // $message->from( $data['email'] , $data['name']);
                    $message->to("drahmed@drahmedreda.com");
                    // $message->subject($data['subject']);
                });
                $request->session()->flash('status', 'تم الارسال بنجاح!');
                return redirect()->back();
            }

            return view('front-end.'.$this->lang.'.booking', compact('pageTitle'));
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
                Mail::send('front-end.en.booking_mail',$data,function($message) use ($data){

                    $message->from( $data['email'] , $data['name']);
                    $message->to("drahmed@drahmedreda.com");
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
                Mail::send('front-end.'.$this->lang.'.helping_mail',$data,function($message) use ($data){

                    // $message->from( $data['email'] , $data['name']);
                    $message->to("drahmed@drahmedreda.com");
                    // $message->subject($data['subject']);
                });
                $request->session()->flash('status', 'sent successfully');
                return redirect()->back();
            }
           
        }
        else{
            $pageTitle  = "المساعده";
            
            if ($request->isMethod('post')) {
               
                $rules = $this->helpFormValidation();
                $messages = $this->helpMessageValidation();
                $this->validate($request, $rules , $messages);
                $data=[
                    'note'=>$request->note,
                ];
                Mail::send('front-end.en.helping_mail',$data,function($message) use ($data){

                    // $message->from( $data['email'] , $data['name']);
                    $message->to("drahmed@drahmedreda.com");
                    // $message->subject($data['subject']);
                });
                $request->session()->flash('status', 'sent successfully');
                return redirect()->back();
            }
        }
        return view('front-end.'.$this->lang.'.helping', compact('pageTitle'));
       
    }
    public function aboutUs()
    {
        $pageTitle  = "عن الطبيب";
        if(  request()->segment(1) == "en" ){
            $pageTitle  = "about";
           
            return view('front-end.'.$this->lang.'.about', compact('pageTitle'));
        }
      
        return view('front-end.'.$this->lang.'.about', compact('pageTitle'));
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

    public function helpMessageValidation()
    {
        return array(
            'note' => 'هذا الحقل (الاسم) يجب يحتوي ع حروف وارقام فقط ',
           

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
