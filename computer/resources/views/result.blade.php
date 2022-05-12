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


       <p class="result">교과성적산출결과 : {{$result}}</p>
       <p>{{$cutLine}} 이상이면 안정권입니다.</p>
       <p>{{$cutLine2}} 이상이면 지원가능합니다. 학업계획서와 자기소개서 준비에 열중해주세요.</p>

    </section>
</body>
</html>
