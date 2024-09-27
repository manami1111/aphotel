
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>APホテル</title>
    <style>
        body {
            color: #333333;
            font-size: 100%;
            line-height: 1.7;
            margin: 10px auto;
            width: 90%;
            -webkit-text-size-adjust: 100%;
            font-family: Arial, sans-serif;
            background-color: #FFFFFF; /* 背景色を白に */
        }
        a {
            text-decoration: none;
            color: #007bff; /* リンクの色 */
        }
        .main-nav {
            display: flex;
            font-size: 1.25rem;
            text-transform: uppercase;
            list-style: none;
            margin: 10px 0;
        }
        .main-nav li {
            margin-left: 36px;
        }
        header {
            margin-bottom: 20px;
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
</head>
<body>
    <header>
        <h1>APホテル</h1>
        <nav>
            <ul class="main-nav">
                <li><a href="/guest">利用者一覧</a></li>
                <li><a href="/reserve">予約一覧</a></li>
            </ul>
            <ul class="main-nav">
                <li><a href="/detail">予約明細</a></li>
                <li><a href="/roomkind">部屋種別</a></li>
                <li><a href="/room">部屋一覧</a></li>
            </ul>
        </nav>
    </header>
    <div>
        @yield('body')
    </div>
</body>
</html>
