<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        

*{
    font-family: LeferiPoint-WhiteObliqueA;
    text-decoration : none;
}

body{
    text-align: center;
    
}

h3{
    font-family: EliceDigitalBaeum-Bd;
}

h2
    {
        font-family: EliceDigitalBaeum-Bd;
    }

p{
        font-family: Cafe24Ohsquareair;
        font-size: 1.1rem;
        color: #888;
        
}

input[type="text"]{
    border: none;
    border-bottom: 1px solid #888;
    width: 300px;
}

input[type="password"]{
    border: none;
    border-bottom: 1px solid #888;
    width: 300px;
}

input[type="int"]{
    border: none;
    border-bottom: 1px solid #888;
    width: 300px;
}
.container{
    width: fit-content;
    height: fit-content;
    margin: auto;
    border-radius: 18px;
}

.submit_btn{
    width: 150px;
    height: 40px;
    border-radius: 12px;
    border: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
}

.gobutton1{
    width: 130px;
    height: 50px;
    margin: auto;
    line-height: 50px;
    text-decoration: none;
    color: #666;
    margin-bottom: 30px;
    transition: all 0.5s ease-in-out; 
}


.gobutton2{
    width: 400px;
    height: 120px;
    margin: auto;
    line-height: 120px;
    text-decoration : none;
    margin-top: 150px;
    font-size: 2.7rem;
    border: none;
    border-bottom: 1px solid #888;
    color : #666;
    transition: all 0.5s ease-in-out;
}

.gobutton1:hover{
    transform: scale(1.1);
    color: black;
}


.gobutton2:hover{
    transform: scale(1.1);
    color: black;
    border-bottom: 1px solid black;
}
#hidden{
    display: none;
}
table{
    margin: auto;
}

td{
    border: 1px solid black;
    
}
tr{
    border:1px solid black;
}

input:focus{
    outline: none;
}


    </style>
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
