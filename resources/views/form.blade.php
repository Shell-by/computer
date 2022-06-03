<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>입시용 교과성적 산출</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">
<div class="container">
    <div class="content">
        <div class="title">입시용 교과성적 산출</div>
        <form onsubmit="return checkForm();" action="{{url('/')}}/record" method="post">
        @csrf
        <div class="sub"><span>▪</span>지원자 정보</div>
        <div class="form-box">
            <div class="field-box">
            <div class="field">
                <div class="txt">▪졸업 여부</div>
                <div class="input-area">
                <input type="radio" name="user_session" value="0" class="radio1" id="hidden" checked>
                <input type="radio" name="user_session" value="졸업예정" class="radio1" id="session1">
                <label for="session1">졸업예정(3학년)</label>
                </div>
            </div>
            <div class="field">
                <div class="txt no"></div>
                <div class="input-area">
                <input type="radio" name="user_session" value="졸업" class="radio1" id="session2">
                <label for="session2">졸업</label>  
                </div>
            </div>
            <div class="field no">
                <div class="txt"></div>
                <div class="input-area">
                </div>
            </div>
            <div class="field no">
                <div class="txt"></div>
                <div class="input-area">
                </div>
            </div>
            </div>
            <div class="field-box box">
            <div class="field">
                <div class="txt">▪출신 중학교</div>
                <div class="input-area select">
                <select name='city' class="input">
                    <option value='지역' disabled>지역</option>
                    <option value='서울'>서울특별시</option>
                    <option value='부산'>부산광역시</option>
                    <option value='대구'>대구광역시</option>
                    <option value='인천'>인천광역시</option>
                    <option value='광주'>광주광역시</option>
                    <option value='대전'>대전광역시</option>
                    <option value='울산'>울산광역시</option>
                    <option value='경기'>경기도</option>
                    <option value='강원'>강원도</option>
                    <option value='충북'>충청북도</option>
                    <option value='충남'>충청남도</option>
                    <option value='전북'>전라북도</option>
                    <option value='전남'>전라남도</option>
                    <option value='경북'>경상북도</option>
                    <option value='경남'>경상남도</option>
                    <option value='제주'>제주도</option>
                </select>
                </div>
            </div>
            <div class="field">
                <div class="txt no"></div>
                <div class="input-area">
                <input name='country' type='text' placeholder='시/군/구를 입력하세요' autocomplete='off'>
                </div>
            </div>
            <div class="field">
                <div class="txt no"></div>
                <div class="input-area">
                <input type="text" name="sch_name" autocomplete="off" placeholder="중학교 이름을 입력하세요." class="school_name">
                </div>
            </div>
            </div>
            <div class="field-box">
            <div class="field">
                <div class="txt">▪성별</div>
                <div class="input-area">
                <input type="radio" name="gender" value="0" id="hidden" class="gender_radio" checked>
                <input type="radio" name="gender" value="남자" class="gender_radio" id="gender1">
                <label for="gender1">남자</label>
                </div>
            </div>
            <div class="field">
                <div class="txt no"></div>
                <div class="input-area">
                <input type="radio" name="gender" value="여자" class="gender_radio" id="gender2">
                <label for="gender2">여자</label>
                </div>
            </div>
            <div class="field">
                <div class="txt">▪관심전형</div>
                <div class="input-area">
                <input type="radio" name="way" value="0" id="hidden" class="way" checked>
                <input type="radio" name="way" value="특별전형" class="way" id="way2">
                <label for="way2">특별전형</label>
                </div>
            </div>
            <div class="field">
                <div class="txt no"></div>
                <div class="input-area">
                <input type="radio" name="way" value="일반전형" class="way" id="way1">
                <label for="way1">일반전형</label>
                </div>
            </div>
            </div>
            <div class="field-box">
            <div class="field">
                <div class="txt">▪지원희망 학과</div>
                <div class="input-area">
                <input type="radio" name="class" value="0" id="hidden" class="class" checked>
                <input type="radio" name="class" value="소프트웨어개발과" class="class" id="class1">
                <label for="class1">소프트웨어개발과</label>
                </div>
            </div>
            <div class="field"> 
                <div class="txt no"></div>
                <div class="input-area">
                <input type="radio" name="class" value="인공지능소프트웨어과" class="class" id="class2">
                <label for="class2">인공지능소프트웨어과</label>
                </div>
            </div>
            <div class="field">
                <div class="txt no"></div>
                <div class="input-area">
                <input type="radio" name="class" value="게임개발과" class="class" id="class3">
                <label for="class3">게임개발과</label>
                </div>
            </div>
            <div class="field">
                <div class="txt no"></div>
                <div class="input-area">
                <input type="radio" name="class" value="미정"  class="class" id="class4">
                <label for="class4">미정</label>
                </div>
            </div>
            </div>
            <div class="field-box box">
            <div class="field">
                <div class="txt">▪학생성명</div>
                <div class="input-area">
                <input type="text" name="stu_name" autocomplete="off" placeholder="이름을 입력하세요." class="name">
                </div>
            </div>
            <div class="field">
                <div class="txt">▪전화번호</div>
                <div class="input-area">
                <input type="text" maxlength="11" name = "ph_num" autocomplete="off" placeholder="숫자만 입력하세요." class="num" pattern="[0-9]+">
                </div>
            </div>
            <div class="field">
                <div class="txt no"></div>
                <div class="input-area">
                <input type="radio" name="onner" value="학생" class="onner" id="onner1"><label for="onner1">학부모</label>
                </div>
            </div>
            <div class="field">
                <div class="txt no"></div>
                <div class="input-area">
                <input type="radio" name="onner" value="보호자" class="onner" id="onner2"><label for="onner2">학생</label>
                <input type="radio" name="onner" value="0" id="hidden" checked>
                </div>
            </div>
            </div>
        </div>
        <div class="sub">▪개인정보 수집·이용 동의서(선택)</div> 
        <div class="text-area">
            <div class="text">
            ▪수집·이용목적: 입학 안내 홍보, 안내 문자 발송 및 학교 정보 제공</br>
            ▪수집 항목: 학생성명(국문), 학생 또는 학부모 연락처</br>
            ▪보유기간: 당 해 입시 전형(특별, 일반) 종료일(11월)까지</br>
            ▪개인정보 수집을 거부할 수 있으며, 미동의 시 학교 안내 정보고 제공되지 않습니다.
            </div>
        </div>
        <div class="input-area">
            <input type="radio" name="accept" id="accept1" value="0" class="accept"><label style="margin-right: 5px;" for="accept1">동의</label>
            <input type="radio" name="accept" id="accept2" value="1" class="accept"><label for="accept2">동의하지않음</label>
        </div>
        <div class="btn">
            <input type="submit" name="submit" value="성적 입력" class="submit_btn">
        </div>
        </form>
    </div>
    </div>
</body>

<script language='javascript'>
    function checkForm(){
        var session = document.querySelector("input[name = 'user_session']:checked");
        var city = document.querySelector("select[name = 'city']");
        var country = document.querySelector("[name = 'country']");
        var school_name = document.querySelector("input[name='sch_name']");
        var gender_radio = document.querySelector("input[name = 'gender']:checked");
        var way = document.querySelector("input[name = 'way']:checked");
        var cls = document.querySelector("input[name = 'class']:checked");
        var name = document.querySelector("input[name = 'stu_name']");
        var phone_num = document.querySelector("input[name = 'ph_num']");
        var onner = document.querySelector("input[name='onner']:checked");
        var accept = document.querySelector("input[name = 'accept']:checked");

        if(accept.value == "아님") {
            alert("개인정보 수집·이용 동의서를 선택해주세요.");
            return false;
        }

        if(accept.value == 1) {
            if(session.value == "0"){
                alert("졸업여부를 선택해주세요.");
                return false;
            }
            if(way.value == "0"){
                alert("관심 전형을 선택해주세요.");
                return false;
            }
            return true;
        }

        if(session.value == "0"){
            alert("졸업여부를 선택해주세요.");
            return false;
        }
        if(city.value == "전체"){
            alert("지역을 선택해주세요.");
            return false;
        }
        if(country.value.length == 0){
            alert("시/군/구를 입력해주세요.");
            return false;
        }
        if(school_name.value.length == 0){
            alert("학교 이름을 입력해주세요.");
            return false;
        }
        if(gender_radio.value == "0"){
            alert("성별을 선택해주세요.");
            return false;
        }
        if(way.value == "0"){
            alert("관심 전형을 선택해주세요.");
            return false;
        }
        if(cls.value == "0"){
            alert("희망 학과를 선택해주세요.");
            return false;
        }
        if(name.value.length == 0){
            alert("성명을 입력해주세요.");
            return false;
        }
        if(phone_num.value.length == 0){
            alert("전화번호를 입력해주세요.");
            return false;
        }
        if(onner.value == "0"){
            alert("연락처 주인을 선택해주세요.");
            return false;
        }
    }


</script>

</html>
