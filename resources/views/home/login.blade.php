@extends('layouts.client')

@section('title', $pageTitle)

@section('sidebar')
<h3>Sidebar login</h3>
@endsection

@section('content')

<form action="" method="post">
    <div>
        Username <br/>
        <input type="text" name="username" />
    </div>

    <div>
        Password <br/>
        <input type="text" name="password" />
    </div>

    <button type="submit">Login</button>

    @csrf
</form>

@endsection