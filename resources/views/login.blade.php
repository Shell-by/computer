<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">
    <div class="header">
        <h2 class="name_tag">관리자 로그인하기</h2>
        <hr />
    </div>

    <section class="loginform">
        <form method="post" action="../php/login_action.php">

            <br />
        <br />
        <input name="id" type="text" autocomplete="off" placeholder="아이디를 입력하세요">
        <br />
        <br />

        <input name="pw" type="password" autocomplete="off" placeholder="비밀번호를 입력하세요">
        <br />
        <br />
        <input type="submit" value="로그인">

        </form>


    </section>
</body>
</html>
