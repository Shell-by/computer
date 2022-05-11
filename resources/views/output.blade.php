<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <div class="header">
        <h2 class="name_tag" style="color: #FFF">-</h2>
        <h3 class="title">관리자용 DB 출력 페이지</h3>

        <hr />

    </div>


    <div class="section">

        <table class="type06">
            <tr>
              <th scope="row">idx</th>
              <th>이름  </th>
              <th>전형</th>
              <th>과</th>
              <th>점수</th>
              <th>출신 중학교</th>
              <th>날짜</th>
            </tr>

            @php
                $count = 0;
            @endphp

            @foreach($data as $da)

                <tr>
                    <td class="even">{{++$count}}</td>
                    <td class="even">{{$da->stu_name}}</td>
                    <td class="even">{{$da->way}}</td>
                    <td class="even">{{$da->class}}</td>
                    <td class="even">{{$da->record}}</td>
                    <th scope="row" class="even">{{$da->sch_name}}</th>
                    <td class="even">{{$da->created_at}}</td>
                </tr>

            @endforeach

          </table>
    </div>
</body>

<style>
table.type06 {
  border-collapse: collapse;
  text-align: left;
  line-height: 1.5;
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  margin: 20px 10px;
  margin: auto;
}
table.type06 th {
  width: 150px;
  padding: 10px;
  font-weight: bold;
  vertical-align: top;
}
table.type06 td {
  width: 350px;
  padding: 10px;
  vertical-align: top;
}
table.type06 .even {
  background: #efefef;
}
body{
    text-align: center;
}

.btn_box{

    float: left;
    margin-left: 40px;
}
.button{
    width: 130px;
    height: 50px;
    border-radius: 17px;
    border: none;
    border: 0.4px solid #888;
}
.button:hover{
    background-color: #888;
}
</style>
</html>
