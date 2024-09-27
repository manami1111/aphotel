@extends('layouts.hotel')

@section('body')
    <table>
    <th>予約明細ID</th><th>予約ID</th><th>部屋ID</th><th>宿泊日</th><th>宿泊料</th>
    @foreach($details as $detail)
    <tr>
        <td>{{$detail->detailid}}</th>
        <td>{{$detail->reserveid}}</td>
        <td>{{$detail->roomid}}</th>
        <td>{{$detail->date}}</td>
        <td>{{$detail->price}}</td>
    </tr>
    @endforeach
    </table>
@endsection


<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f9ff; /* 明るい青 */
        color: #333;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #d1e7dd;
    }
    th {
        background-color: #a0d6e8; /* パステルブルー */
        color: #fff;
    }
    tr:nth-child(even) {
        background-color: #e2f0f9; /* パステルライトブルー */
    }
    tr:hover {
        background-color: #cce5ff; /* ホバー時の色 */
    }
</style>