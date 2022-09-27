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
                    @php
                        $selector = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];
                        $subject = ['역사', '국어', '사회', '도덕', '수학', '과학', '영어', '정보', '기술가정'];
                    @endphp
                    @for ($i = 0; $i < 9; $i++)
                    <div class="field-box">
                        <div class="field list">{{ $subject[$i] }}</div>
                        @for ($j = 1; $j <= 4; $j++)
                            <div class="field">
                                <select name="{{ $selector[$i] . $j }}" id="{{ $selector[$i] . $j }}" @if($request->user_session != "졸업") disabled @endif>
                                    <option value="0" selected>-</option>
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                </select>
                            </div>
                        @endfor
                        </div>
                    @endfor

                    <div class="btn"><input type="submit" value="계산하기"></div>
                </table>
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
