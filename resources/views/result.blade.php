<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">
    <div class="header">
        <h2 class="name_tag">입시용 교과성적 산출</h2>
        <h3 class="title">■산출 결과</h3>

        <hr />
    </div>

    <section class="section">


       <p class="result">{{$way}} 교과성적: 점수 : {{$result}}</p>
        <p>입학성적에 대한 자세한 안내는 학교로 연락주세요(054-832-2903)</p>

    </section>
</body>
</html>
