@extends('app')

@section('title', '英雄聯盟全球總决賽網站 - 列出所有選手')

@section('worlds_contents')
<h1>列出選擇選手</h1>
<table>
<td>編號:{{$player->id}}</tr>
<td>選手:{{$player->name }}</tr>
<td>隊伍:{{$player->team->team }}</tr>
<td>位置:{{$player->postition }}</tr>
<td>國籍:{{$player->nationality }}</tr>
<td>年齡:{{$player->age }}</tr>
<td>年資:{{$player->year }}</tr>
<td>性別:{{$player->gender }}</tr>
<table>
@endsection