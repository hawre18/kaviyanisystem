@foreach($categories as $sub_category)
    <tr>
        <td>{{$index+1}}</td>
        <td>{{str_repeat('----',$level)}}{{$sub_category->name}}</td>
        <td class="table-img">
            <img src="storage/2021/category/photos/{{$category->image->path}}" alt="">
        </td>
        <td>
            <a href="{{route('category.edit',$sub_category->id)}}" class="btn tblActnBtn">
                <i class="material-icons">mode_edit</i>
            </a>
            <a href="{{route('category.delete',$sub_category->id)}}" class="btn tblActnBtn">
                <i class="material-icons">delete</i>
            </a>
            <a href="{{route('categories.indexSetting',$sub_category->id)}}" class="btn tblActnBtn">
                <i class="material-icons">add</i>
            </a>
        </td></tr>

    @if(count($sub_category->childrenRecursive)>0)
        @include('v1.index.admin.partials.category_list',['categories'=>$sub_category->childrenRecursive,'level'=>$level+1,'index'=>$index+1])
    @endif
@endforeach
