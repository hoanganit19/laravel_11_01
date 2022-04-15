<form action="" method="get">
    <div class="row">

        <div class="col-9">
            <input type="search" class="form-control" name="keyword" placeholder="Từ khoá..." value="{{request()->keyword}}">
        </div>

        <div class="col-3">
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </div>


    </div>
</form>
<hr>
<table class="table table-bordered">
    <thead>
    <tr>
        <th width="5%">STT</th>
        <th>Giá trị</th>
        <th width="20%">Thời gian</th>
        @can('attribute.edit')
        <th width="5%">Sửa</th>
        @endcan
        @can('attribute.delete')
        <th width="5%">Xoá</th>
        @endcan
    </tr>
    </thead>
    <tbody>
    @if ($attributeLists->count()>0)
    @foreach ($attributeLists as $key => $item)
    <tr>
        <td>{{$key + 1}}</td>
        <td>
            {{$item->value}}<br/>

        </td>
        <td>{{\Carbon\Carbon::parse($item['created_at'])->format('d/m/Y H:i:s')}}</td>

        @can('attribute.edit')
        <td>
            <a href="{{route('admin.attribute.values.edit', [$attribute, $item])}}" class="btn btn-warning">Sửa</a>
        </td>
        @endcan
        @can('attribute.delete')
        <td>
            <a onclick="return confirm('Bạn có chắc chắn?')" href="{{route('admin.attribute.values.delete', [$attribute, $item])}}" class="btn btn-danger">Xoá</a>
        </td>
        @endcan
    </tr>
    @endforeach
    @else
    <tr>
        <td colspan="5" class="text-center">Không có giá trị</td>
    </tr>
    @endif
    </tbody>
</table>

@if ($attributeLists->links())
<hr>
<div class="d-flex justify-content-end">
    {{$attributeLists->links()}}
</div>
@endif