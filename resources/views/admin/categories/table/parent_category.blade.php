<tr>
    <td>{{$count}}</td>
    <td>{{$item->name}}</td>
    <td>{{\Carbon\Carbon::parse($item['created_at'])->format('d/m/Y H:i:s')}}</td>

    <td>
        <a href="{{route('admin.categories.edit', $item)}}" class="btn btn-warning">Sửa</a>
    </td>
    <td>
        <a onclick="return confirm('Bạn có chắc chắn?')" href="{{route('admin.categories.delete', $item)}}" class="btn btn-danger">Xoá</a>
    </td>
</tr>