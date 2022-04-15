<tr>
    <td>{{$item->name}}</td>
    <td>{{\Carbon\Carbon::parse($item['created_at'])->format('d/m/Y H:i:s')}}</td>

    @can('categories.edit')
    <td>
        <a href="{{route('admin.categories.edit', $item)}}" class="btn btn-warning">Sửa</a>
    </td>
    @endcan
    @can('categories.delete')
    <td>
        <a onclick="return confirm('Bạn có chắc chắn?')" href="{{route('admin.categories.delete', $item)}}" class="btn btn-danger">Xoá</a>
    </td>
    @endcan
</tr>