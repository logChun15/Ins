@extends('layouts.default')
{{-- 当 @section 传递了第二个参数时，便不需要再通过 @stop 标识来告诉 Laravel 填充区块会在具体哪个位置结束。 --}}
@section('title','home')
@section('content')
<h1>主页</h1>
@stop
