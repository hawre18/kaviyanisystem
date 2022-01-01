@if(isset($categoryData))
    @foreach($categories as $sub_category)
        <option value="{{$sub_category->id}}" @if($categoryData->parent_id==$sub_category->id) selected @endif>{{str_repeat('----',$level)}}{{$sub_category->name}}</option>
        @if(count($sub_category->childrenRecursive)>0)
            @include('v1.index.admin.partials.category',['categories'=>$sub_category->childrenRecursive,'level'=>$level+1])
        @endif
    @endforeach
@else
    @foreach($categories as $sub_category)
        <option value="{{$sub_category->id}}">{{str_repeat('----',$level)}}{{$sub_category->name}}</option>
        @if(count($sub_category->childrenRecursive)>0)
            @include('v1.index.admin.partials.category',['categories'=>$sub_category->childrenRecursive,'level'=>$level+1])
        @endif
    @endforeach
@endif

