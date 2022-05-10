<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <style>
        input[class^="formtable"]{
    width: 100px;
    height: 1rem;
}
    </style>

    <style>
        td {
            padding: 5px 2px;
        }
    </style>
</head>
<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">
    <div class="header">
        <h2 class="name_tag">입시용 교과성적 산출</h2>
        <h3 class="title">교과성적 입력</h3>

        <hr />
    </div>

    <section class="section">


        <form action="{{url('/')}}/result" method="POST" onsubmit="return formCheck()">
            @csrf
            @method('put')

            <input type="hidden" name="form_id" value="{{$form_id}}">
            <input type="hidden" name="user_session" value="{{$request->user_session}}">
            <input type="hidden" name="way" value="{{$request->way}}" />
            <input type="hidden" name="class" value="{{$request->class}}" />

            @if($request->user_session = "졸업예정")
                <table  style="border-collapse: collapse;">
                    <tr>
                        <td>교과/학년/학기</td>
                        <td colspan="2">2학년</td>
                        <td colspan="2">3학년</td>

                    </tr>
                    <tr>
                        <td>과목</td>
                        <td>1학기</td>
                        <td>2학기</td>
                        <td>1학기</td>
                        <td>2학기</td>
                    </tr>
                    <tr>
                        <td>역사</td>
                        <td>
                            <select name="a1" id="a1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="a2" id="a2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="a3" id="a3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="a4" id="a4" disabled>
                                <option value="check" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>국어</td>
                        <td>
                            <select name="b1" id="b1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="b2" id="b2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="b3" id="b3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="b4" id="b4" disabled>
                                <option value="check" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>사회</td>
                        <td>
                            <select name="c1" id="c1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="c2" id="c2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="c3" id="c3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="c4" id="c4" disabled>
                                <option value="check" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>도덕</td>
                        <td>
                            <select name="d1" id="d1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="d2" id="d2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="d3" id="d3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="d4" id="d4" disabled>
                                <option value="check" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>수학</td>
                        <td>
                            <select name="e1" id="e1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="e2" id="e2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="e3" id="e3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="e4" id="e4" disabled>
                                <option value="check" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>과학</td>
                        <td>
                            <select name="f1" id="f1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="f2" id="f2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="f3" id="f3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="f4" id="f4" disabled>
                                <option value="check" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>영어</td>
                        <td>
                            <select name="g1" id="g1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="g2" id="g2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="g3" id="g3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="g4" id="g4" disabled>
                                <option value="check" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>정보</td>
                        <td>
                            <select name="h1" id="h1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="h2" id="h2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="h3" id="h3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="h4" id="h4" disabled>
                                <option value="check" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>
                </table>
            @else
                <table  style="border-collapse: collapse;">
                    <tr>
                        <td>교과/학년/학기</td>
                        <td colspan="2">2학년</td>
                        <td colspan="2">3학년</td>

                    </tr>
                    <tr>
                        <td>과목</td>
                        <td>1학기</td>
                        <td>2학기</td>
                        <td>1학기</td>
                        <td>2학기</td>
                    </tr>
                    <tr>
                        <td>역사</td>
                        <td>
                            <select name="a1" id="a1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="a2" id="a2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="a3" id="a3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="a4" id="a4">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>국어</td>
                        <td>
                            <select name="b1" id="b1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="b2" id="b2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="b3" id="b3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="b4" id="b4">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>사회</td>
                        <td>
                            <select name="c1" id="c1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="c2" id="c2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="c3" id="c3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="c4" id="c4">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>도덕</td>
                        <td>
                            <select name="d1" id="d1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="d2" id="d2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="d3" id="d3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="d4" id="d4">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>수학</td>
                        <td>
                            <select name="e1" id="e1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="e2" id="e2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="e3" id="e3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="e4" id="e4">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>과학</td>
                        <td>
                            <select name="f1" id="f1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="f2" id="f2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="f3" id="f3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="f4" id="f4">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>영어</td>
                        <td>
                            <select name="g1" id="g1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="g2" id="g2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="g3" id="g3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="g4" id="g4">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>정보</td>
                        <td>
                            <select name="h1" id="h1">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="h2" id="h2">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="h3" id="h3">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                        <td>
                            <select name="h4" id="h4">
                                <option value="0" selected>-</option>
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                            </select>
                        </td>
                    </tr>
                </table>

            @endif

            <input type="submit" value="계산하기">

        </form>

    </section>
</body>
<script>

    function formCheck(){
        let list = document.querySelectorAll('select');
        for(let i = 0; i < list.length; i++){
            if(list[i].value == "선택"){
                console.log(list[i])
                alert("성적을 모두 선택하세요");
                return false;

            }
        }
    }

</script>
</html>
