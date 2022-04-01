@extends('layouts.admin')

@section('title', $pageTitle)

@section('content')

@if (session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th width="20%">Module</th>
            <th>Phân quyền</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1</td>
        </tr>
    </tbody>
</table>
@endsection