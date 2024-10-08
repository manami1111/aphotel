<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>予約明細検索</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f9ff; /* 明るい青 */
            color: #333;
        }
        form {
            margin: 20px 0;
            padding: 20px;
            background-color: #ffffff; /* 背景を白に */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="number"] {
            padding: 10px;
            border: 1px solid #d1e7dd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box; /* パディングを含めた幅調整 */
        }
        button {
            padding: 10px 15px;
            background-color: #a0d6e8; /* パステルブルー */
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #87c8e3; /* ホバー時の色 */
        }
    </style>
</head>

@extends('layouts.hotel')

@section('body')


    <form action="{{ route('detail.search') }}" method="POST">
    @csrf
    <label for="id">ID</label>
    <input type="number" id="id" name="id" required>
    <button type="submit">検索</button>
</form>
@endsection
</html>