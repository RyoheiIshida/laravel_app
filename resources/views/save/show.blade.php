@extends('layouts.base')
@section('title','書籍情報フォーム（詳細）')
@section('main')
<form method="POST" action="/save/{{$b->id}}">
    @csrf
    @method('DELETE')
    <div class="pl-2">
        <span id="isbn">ISBN：</span><br />
        {{$b->isbn}}
    </div>
    <div class="pl-2">
        <span id="title">書名：</span><br />
        {{$b->title}}
    </div>
    <div class="pl-2">
        <span id="price">価格：</span><br />
        {{$b->price}}
    </div>
    <div class="pl-2">
        <span id="publisher">出版社：</span><br />
        {{$b->publisher}}
    </div>
    <div class="pl-2">
        <span id="publisher">刊行日：</span><br />
        {{$b->publisher}}
    </div>
    <div class="pl-2">
        <input type="submit" value="削除" />
    </div>
</form>
@endsection