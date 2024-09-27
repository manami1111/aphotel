<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>予約フォーム</title>
    <style>
        body {
            color: #333333;
            font-size: 100%;
            line-height: 1.7;
            margin: 10px auto;
            width: 90%;
            -webkit-text-size-adjust: 100%;
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
            /* 背景色を白に */
        }

        p {
            margin: 10px 0 5px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #d1e7dd;
            border-radius: 5px;
        }

        input:focus,
        select:focus {
            border-color: #a0d6e8;
            /* フォーカス時のボーダー色 */
            outline: none;
        }

        button {
            background-color: #a0d6e8;
            /* パステルブルー */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #007bff;
            /* ホバー時の色 */
        }
    </style>
</head>

<body>
    <form method="post" action="{{ route('post.store') }}">
        @csrf

        <h1>予約フォーム</h1>
        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif

        <p>予約者氏名</p>
        <input type="text" name="name" required>

        <p>住所</p>
        <input type="text" name="address" required>

        <p>電話番号</p>
        <input type="tel" name="tel" required>

        <p>予約部屋種別</p>
        <select name="roomkind" required>
            <option value="1">スイートルーム</option>
            <option value="2">ファミリールーム</option>
            <option value="3">デラックスルーム</option>
        </select>

        <button type="submit">予約する</button>
    </form>
</body>

</html>
