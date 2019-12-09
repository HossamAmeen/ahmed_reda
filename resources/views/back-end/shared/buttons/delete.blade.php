<form action="{{ route($routeName.'.destroy' , ['id' => $item]) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('delete') }}
    <a href="{{ route($routeName.'.edit' , ['id' => $item]) }}" rel="tooltip" title="" class="btn btn-info" data-original-title="Edit ">تعديل
            <i class="material-icons"></i>
    </a>
    <button type="submit" rel="tooltip" title="" class="btn btn-danger"  onclick="check()" data-original-title="Remove ">
        <i class="material-icons">حذف</i>
    </button>
</form>
