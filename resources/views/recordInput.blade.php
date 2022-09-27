<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/recordInput.css') }}">
</head>

<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">
    <div class="container">
        <div class="content">
            <div class="title">GBSW - 입시용 교과성적 산출</div>
            <form action="{{ url('/') }}/result" method="POST" onsubmit="return formCheck()">
                @csrf
                @method('put')
                <input type="hidden" name="form_id" value="{{ $form_id }}">
                <input type="hidden" name="accept" value="{{ $request->accept }}">
                <input type="hidden" name="user_session" value="{{ $request->user_session }}">
                <input type="hidden" name="way" value="{{ $request->way }}" />
                <input type="hidden" name="class" value="{{ $request->class }}" />

                @if ($request->user_session == '졸업예정')
                    <table>
                        <div class="sub"><span>▪</span>교과성적 입력</div>
                        <div class="field-box top">
                            <div class="field">
                                교과/학년/학기
                            </div>
                            <div class="field">
                                2학년
                            </div>
                            <div class="field">
                                3학년
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">과목</div>
                            <div class="field">1학기</div>
                            <div class="field">2학기</div>
                            <div class="field">1학기</div>
                            <div class="field">2학기</div>
                        </div>
                        <div class="field-box">
                            <div class="field list">역사</div>
                            <div class="field">
                                <select name="a1" id="a1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="a2" id="a2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="a3" id="a3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="a4" id="a4" disabled>
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">국어</div>
                            <div class="field">
                                <select name="b1" id="b1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="b2" id="b2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="b3" id="b3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="b4" id="b4" disabled>
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">사회</div>
                            <div class="field">
                                <select name="c1" id="c1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="c2" id="c2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="c3" id="c3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="c4" id="c4" disabled>
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">도덕</div>
                            <div class="field">
                                <select name="d1" id="d1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="d2" id="d2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="d3" id="d3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="d4" id="d4" disabled>
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">수학</div>
                            <div class="field">
                                <select name="e1" id="e1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="e2" id="e2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="e3" id="e3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="e4" id="e4" disabled>
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">과학</div>
                            <div class="field">
                                <select name="f1" id="f1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="f2" id="f2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="f3" id="f3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="f4" id="f4" disabled>
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">영어</div>
                            <div class="field">
                                <select name="g1" id="g1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="g2" id="g2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="g3" id="g3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="g4" id="g4" disabled>
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">정보</div>
                            <div class="field">
                                <select name="h1" id="h1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="h2" id="h2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="h3" id="h3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="h4" id="h4" disabled>
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">기술가정</div>
                            <div class="field">
                                <select name="i1" id="i1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="i2" id="i2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="i3" id="i3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="i4" id="i4" disabled>
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="btn"><input type="submit" value="계산하기"></div>
                    </table>
                @else
                    <table>
                        <div class="sub"><span>▪</span>교과성적 입력</div>
                        <div class="field-box top">
                            <div class="field">
                                교과/학년/학기
                            </div>
                            <div class="field">
                                2학년
                            </div>
                            <div class="field">
                                3학년
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">과목</div>
                            <div class="field">1학기</div>
                            <div class="field">2학기</div>
                            <div class="field">1학기</div>
                            <div class="field">2학기</div>
                        </div>
                        <div class="field-box">
                            <div class="field list">역사</div>
                            <div class="field">
                                <select name="a1" id="a1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="a2" id="a2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="a3" id="a3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="a4" id="a4">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">국어</div>
                            <div class="field">
                                <select name="b1" id="b1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="b2" id="b2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="b3" id="b3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="b4" id="b4">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">사회</div>
                            <div class="field">
                                <select name="c1" id="c1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="c2" id="c2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="c3" id="c3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="c4" id="c4">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">도덕</div>
                            <div class="field">
                                <select name="d1" id="d1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="d2" id="d2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="d3" id="d3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="d4" id="d4">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">수학</div>
                            <div class="field">
                                <select name="e1" id="e1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="e2" id="e2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="e3" id="e3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="e4" id="e4">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">과학</div>
                            <div class="field">
                                <select name="f1" id="f1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="f2" id="f2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="f3" id="f3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="f4" id="f4">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">영어</div>
                            <div class="field">
                                <select name="g1" id="g1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="g2" id="g2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="g3" id="g3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="g4" id="g4">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">정보</div>
                            <div class="field">
                                <select name="h1" id="h1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="h2" id="h2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="h3" id="h3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="h4" id="h4">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-box">
                            <div class="field list">기술가정</div>
                            <div class="field">
                                <select name="i1" id="i1">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="i2" id="i2">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="i3" id="i3">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                            <div class="field">
                                <select name="i4" id="i4">
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="btn"><input type="submit" value="계산하기"></div>
                    </table>
                @endif
            </form>
        </div>
    </div>
</body>
<script>
    function formCheck() {
        let list = document.querySelectorAll('select');
        for (let i = 0; i < list.length; i++) {
            if (list[i].value == "선택") {
                console.log(list[i])
                alert("성적을 모두 선택하세요");
                return false;

            }
        }
    }
</script>

</html>
