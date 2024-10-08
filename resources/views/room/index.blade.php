@extends('layouts.hotel')



@section('body')
    <table>
        <thead>
            <tr>
                <th>部屋ID</th>
                <th>部屋種別ID</th>
                <th>部屋番号</th>
                <th>画像</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
                <tr>
                    <td>{{ $room->roomid }}</th>
                    <td>{{ $room->roomkindid }}</td>
                    <td>{{ $room->roomnumber }}</th>
                    <td><img src="{{ asset($room->image_path) }}" alt="Room Image" style="width: 300px; height: auto;"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f9ff;
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #d1e7dd;
    }

    th {
        background-color: #a0d6e8;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #e2f0f9;
    }

    tr:hover {
        background-color: #cce5ff;
    }
</style>
