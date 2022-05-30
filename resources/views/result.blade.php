<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBSW - 입시용 교과성적 산출</title>
    <link rel="stylesheet" href="{{ asset('css/result.css') }}">
</head>
<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">
    <div class="container">
        <div class="content">
            <img src="{{ asset('img/favicon.png') }}" alt="logo">
            <h1 class="result">{{$way}} 교과성적: 점수 : {{$result}}</h1>
            <p>입학성적에 대한 자세한 안내는 학교로 연락주세요<br>(054-832-2903)</p>
        </div>
    </div>
</body>
</html>
