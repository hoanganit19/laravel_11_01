@extends('layouts.admin')

@section('title', $pageTitle)

@section('content')

@if (session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif

<form action="" method="post">
<table class="table table-bordered">
    <thead>
        <tr>
            <th width="20%">Module</th>
            <th>Phân quyền</th>
        </tr>
    </thead>
    <tbody>
        @if ($modules->count()>0)
            @foreach ($modules as $module)
        <tr>
            <td>
                {{$module->title}}
            </td>
            <td>
                @php
                    $actionsArr = [];

                    if (!empty($module->actions)){
                        $actionsJson = $module->actions;
                        $actionsArr = json_decode($actionsJson, true);

                    }

                @endphp
                @if (!empty($actionsArr))
                <div class="row">
                    @foreach ($actionsArr as $key => $action)
                    <div class="col-2">
                        <label for="role_{{$module->name}}_{{$key}}">
                            <input type="checkbox" id="role_{{$module->name}}_{{$key}}" name="role[{{$module->name}}][]" value="{{$key}}" {{hasPermission($group->id, $module->name, $key) ? 'checked':false}}/> {{$action}}
                        </label>
                    </div>
                    @endforeach
                </div>
                @endif
            </td>
        </tr>
            @endforeach
        @endif
    </tbody>
</table>
    @csrf
    <button type="submit" class="btn btn-primary">Phân quyền</button>
</form>
@endsection