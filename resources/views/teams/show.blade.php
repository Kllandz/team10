@extends('app')

@section('title', '英雄聯盟全球總决賽網站 - 列出所有隊員')

@section('worlds_contents')
<h1>列出選擇隊伍</h1>
<table>
<td>編號:{{$team['id']}}</tr>
<td>隊伍:{{$team['team'] }}</tr>
<td>年份:{{$team['year'] }}</tr>
<td>賽區:{{$team['divison'] }}</tr>
<td>賽區排名:{{$team['rank'] }}</tr>
<td>今年勝率:{{$team['rate'] }}</tr>
<td>歷年勝率:{{$team['pastrate'] }}</tr>
<td>總場數:{{$team['games'] }}</tr>
<td>成立日期:{{$team['founded'] }}</tr>
<table>
@endsection