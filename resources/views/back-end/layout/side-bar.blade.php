<section id="left-navigation">
    <!--Left navigation user details start-->
    <div class="user-image">
        <img src="{{asset('panel/assets/images/demo/avatar-80.png')}}" alt="" />
        <div class="user-online-status"><span class="user-status is-online  "></span> </div>
    </div>
    <ul class="social-icon">
        {{-- <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-bitbucket"></i></a></li> --}}
    </ul>
    <!--Left navigation user details end-->

    <!--Phone Navigation Menu icon start-->
    <div class="phone-nav-box visible-xs">
        <a class="phone-logo" href="index.html" title="">
            <h1>baseProject</h1>
        </a>
        <a class="phone-nav-control" href="javascript:void(0)">
            <span class="fa fa-bars"></span>
        </a>
        <div class="clearfix"></div>
    </div>

    <!--Phone Navigation Menu icon start-->

    <!--Left navigation start-->
    <!--Left navigation start-->
    <ul class="mainNav">
        @if( Auth::user()->role == 1 )
        <li>
            <a href="{{route('prefs')}}" class="{{is_active('prefs')}}">
                <i class="fas fa-edit"></i><span>تعديل بيانات الموقع</span>
            </a>
        </li>
        @endif
        @if( Auth::user()->role == 1 )
        <li>
            <a href="{{route('users.index')}}" class="{{is_active('users')}}">
                <i class="fa fa-group"></i><span>المستخدمين</span>
            </a>
        </li>
        @endif
        <li>
            <a href="{{route('users.edit' , ['id' => Auth::user()->id])}}" class="{{edit_profle_is_active('users')}}">
                <i class="fas fa-edit"></i><span>تعديل بيانات الحساب</span>
            </a>
        </li>
        {{-- <li class="{{is_active('users')}}">
        <a href="#" class="{{is_active('users')}}">
            <i class="fa fa-group"></i><span>المستخدمين</span>
        </a>
        <ul>


        </ul>
        </li> --}}
        <li class="{{is_active('articles')}}">
            <a href="{{route('articles.index')}}" class="{{is_active('articles')}}">
                <i class="fa fa-image"></i><span>المقالات</span>
            </a>

        </li>
        <li class="{{is_active('news')}}">
            <a href="{{route('news.index')}}" class="{{is_active('news')}}">
                <i class="far fa-newspaper"></i><span>الأخبار</span>
            </a>

        </li>
        <li class="{{is_active('clinics')}}">
            <a href="{{route('clinics.index')}}" class="{{is_active('clinics')}}">
                <i class="fas fa-capsules"></i><span>العيادات</span>
            </a>

        </li>
        <li class="{{is_active('services')}}">
            <a href="{{route('services.index')}}" class="{{is_active('services')}}">
                <i class="fas fa-stream"></i><span>خدمات</span>
            </a>

        </li>
        <li class="{{is_active('questions')}}">
            <a href="{{route('questions.index')}}" class="{{is_active('questions')}}">
                <i class="fa fa-question"></i><span>الأسئله الشائعه</span>
            </a>

        </li>
        <li class="{{is_active('drugs')}}">
            <a href="{{route('drugs.index')}}" class="{{is_active('drugs')}}">
                <i class="fas fa-capsules"></i><span>أمراض الذكورة</span>
            </a>

        </li>
        <li class="{{is_active('operations')}}">
            <a href="{{route('operations.index')}}" class="{{is_active('operations')}}">
                <i class="fas fa-dna"></i><span>العمليات</span>
            </a>

        </li>
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">


                <i class="fa fa-power-off"></i><span>تسجيل الخروج</span>
            </a>

        </li>
    </ul>

    <!--Left navigation end-->
</section>