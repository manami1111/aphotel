<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>予約明細</title>

    <style>
        .reservation-details {
            font-family: Arial, sans-serif;
            color: #333;
            padding: 20px;
        }
        .reservation-details h3 {
            color: #333;
        }
        .reservation-details p {
            margin: 10px 0;
        }
        .reservation-details .detail-container {
            background-color: #ffffff; /* 背景を白に */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .reservation-details a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #a0d6e8; /* パステルブルー */
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .reservation-details a:hover {
            background-color: #87c8e3; /* ホバー時の色 */
        }
    </style>
</head>

@extends('layouts.hotel')

@section('body')
    <div class="reservation-details">
        <div class="detail-container">
            @if ($detail)
                <h3>予約明細</h3>
                <p>ID: {{ $detail->reseveid }}</p>
                <p>部屋ID: {{ $detail->roomid }}</p>
                <p>宿泊日: {{ $detail->date }}</p>
                <p>宿泊料: {{ $detail->price }}</p>
            @else
                <p>詳細が見つかりませんでした</p>
            @endif

            <a href="/detail">←</a>戻る
        </div>
    </div>
@endsection
</html>
