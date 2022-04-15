<tr>
    <td>{{$char.$childCategory->name}}</td>
    <td>{{\Carbon\Carbon::parse($childCategory->created_at)->format('d/m/Y H:i:s')}}</td>

    @can('categories.edit')
    <td>
        <a href="{{route('admin.categories.edit', $childCategory)}}" class="btn btn-warning">Sửa</a>
    </td>
    @endcan
    @can('categories.delete')
    <td>
        <a onclick="return confirm('Bạn có chắc chắn?')" href="{{route('admin.categories.delete', $childCategory)}}" class="btn btn-danger">Xoá</a>
    </td>
    @endcan
</tr>

@if ($childCategory->categories->count()>0)
    @foreach ($childCategory->categories as $childCategory)
        @php
            $count++;
        @endphp
        @include('admin.categories.table.children_category', ['childCategory' => $childCategory, 'char'=>' -- '.$char, 'count'=>$count])
    @endforeach

@endif