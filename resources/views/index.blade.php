<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://kit.fontawesome.com/b72e2023d3.js" crossorigin="anonymous"></script>
  <title>GBSW - 성적산출 프로그램</title>
</head>
<body>
    <form method="post" action="{{url('/')}}" id="form_data">
        @csrf
  <div class="wrapper">
    <div class="header">
      <h2>교과성적산출</h2>
      <ul>
        <li class="lcon"><a href="#"><i class="fa-solid fa-house"></i></a></li>
        <li class="lcon"><a href="#">입학정보</a></li>
        <li><a href="#">교과성적산출</a></li>
      </ul>
    </div>
    <div class="inp">
      <h4>지원정보입력</h4>
        <table>
          <tbody>
            <tr class="edu">
              <th>*학력</th>
              <td colspan="3">
                <input type="radio" name="user_session" value="0" class="radio1" id="hidden" onchange="changeSession()" checked>
                <input type="radio" name="user_session" value="졸업예정" class="radio1" id="session1" onchange="changeSession()">
                <label for="session1">졸업예정(3학년)</label>
                <input type="radio" name="user_session" value="졸업" class="radio1" id="session2" onchange="changeSession()">
                <label for="session2">졸업</label>
              </td>
            </tr>
            <tr class="native">
              <th>출신중학교</th>
              <td colspan="3">
                <select name='city' class="input">
                  <option selected disabled value='전체'>전체</option>
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
                <input name='country' type='text' placeholder='시/군/구를 입력하세요' autocomplete='off'/>
                <input type="text" name="sch_name" autocomplete="off"         placeholder="중학교 이름을 입력하세요." class="school_name">
              </td>
            </tr>
            <tr class="gender">
              <th>성별(지원자)</th>
              <td>
                <input type="radio" name="gender" value="0" id="hidden" class="gender_radio" checked>
                <input type="radio" name="gender" value="남자" class="gender_radio" id="gender1">
                <label for="gender1">남자</label>
                <input type="radio" name="gender" value="여자" class="gender_radio" id="gender2">
                <label for="gender2">여자</label>
              </td>
              <th>*관심전형</th>
              <td>
                <input type="radio" name="way" value="0" id="hidden" class="way" checked>
                <input type="radio" name="way" value="특별전형" class="way" id="way2">
                <label for="way2">특별전형</label>
                <input type="radio" name="way" value="일반전형" class="way" id="way1">
                <label for="way1">일반전형</label>
              </td>
            </tr>
            <tr class="class">
              <th>관심학과</th>
              <td>
                <select name='class' class="input">
                  <option selected disabled>학과선택</option>
                  <option value='소프트웨어개발과'>소프트웨어개발과</option>
                  <option value='인공지능소프트웨어과'>인공지능소프트웨어과</option>
                  <option value="게임개발과">게임개발과</option>
                  <option value="미정">미정</option>
                </select>
              </td>
              <th>검증인</th>
              <td>
                <input type="radio" name="onner" value="보호자" class="onner" id="b">
                <label for="b">보호자</label>
                <input type="radio" name="onner" value="학생" class="onner" id="s"> 
                <label for="s">학생</label>
                <input type="radio" name="onner" value="0" id="hidden" checked>
              </td>
            </tr>
          </tbody>
        </table>
    </div>
    <div class="inp">
      <h4>개인정보수집·이용 동의서(선택)</h4>
      <div class="context">
        <ul>
          <li>
            <span>수집·이용목적</span>: 입학 안내 홍보, 안내 문자 발송 및 학교 정보 제공
          </li>
          <li>
            <span>수집 항목</span>: 학생성명(국문), 학생 또는 학부모 연락처
          </li>
          <li>
            <span>보유기간</span>: 해당 입시 전형(특별, 일반) 종료일(11월)까지
          </li>
          <li>
            개인정보 수집을 거부할 수 있으며, 미동의 시 학교 안내 정보고 제공되지 않습니다. 
          </li>
        </ul>
      </div>
      <div class="ckbox">
        <label for="ckbox">본인은 위의 동의서 내용을 충분히 숙지하였으며, 개인정보 수집·이용·제공하는 것에 동의합니다.</label><input type="checkbox" id="ckbox" name="ckbox">
      </div>
    </div>
    <div class="inp">
      <table>
        <tbody>
          <tr class="user">
            <th>성명(지원자)</th>
            <td><input type="text" name="stu_name" autocomplete="off" placeholder="이름을 입력하세요." class="name"></td>
            <th>연락쳐</th>
            <td>
              <input type="text" maxlength="11" name = "ph_num" autocomplete="off" placeholder="숫자만 입력하세요." class="num" pattern="[0-9]+">
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="inp number">
      <h4>교과성적 입력</h4>
      <table>
        <thead>
          <tr>
            <th></th>
            <th colspan="2">2학년</th>
            <th colspan="2">3학년</th>
          </tr>
          <tr>
              <th>과목</th>
              <th>1학기</th>
              <th>2학기</th>
              <th>1학기</th>
              <th>2학기</th>
          </tr>
        </thead>
        <tr>
            <th>역사</th>
            <th>
                <select name="a1" id="a1">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="a2" id="a2">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="a3" id="a3">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="a4" id="a4" disabled>
                    <option value="check" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
        </tr>
      
        <tr>
            <th>국어</th>
            <th>
                <select name="b1" id="b1">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="b2" id="b2">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="b3" id="b3">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="b4" id="b4" disabled>
                    <option value="check" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
        </tr>
      
        <tr>
            <th>사회</th>
            <th>
                <select name="c1" id="c1">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="c2" id="c2">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="c3" id="c3">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="c4" id="c4" disabled>
                    <option value="check" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
        </tr>
      
        <tr>
            <th>도덕</th>
            <th>
                <select name="d1" id="d1">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="d2" id="d2">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="d3" id="d3">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="d4" id="d4" disabled>
                    <option value="check" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
        </tr>
      
        <tr>
            <th>수학</th>
            <th>
                <select name="e1" id="e1">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="e2" id="e2">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="e3" id="e3">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="e4" id="e4" disabled>
                    <option value="check" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
        </tr>
      
        <tr>
            <th>과학</th>
            <th>
                <select name="f1" id="f1">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="f2" id="f2">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="f3" id="f3">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="f4" id="f4" disabled>
                    <option value="check" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
        </tr>
        <tr>
            <th>영어</th>
            <th>
                <select name="g1" id="g1">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="g2" id="g2">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="g3" id="g3">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="g4" id="g4" disabled>
                    <option value="check" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
        </tr>
        <tr>
            <th>정보</th>
            <th>
                <select name="h1" id="h1">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="h2" id="h2">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="h3" id="h3">
                    <option value="0" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
            <th>
                <select name="h4" id="h4" disabled>
                    <option value="check" selected>-</option>
                    <option value="5">A</option>
                    <option value="4">B</option>
                    <option value="3">C</option>
                    <option value="2">D</option>
                    <option value="1">E</option>
                </select>
            </th>
        </tr>
        <tr>
          <th>기술가정</th>
          <th>
              <select name="i1" id="i1">
                  <option value="0" selected>-</option>
                  <option value="5">A</option>
                  <option value="4">B</option>
                  <option value="3">C</option>
                  <option value="2">D</option>
                  <option value="1">E</option>
              </select>
          </th>
          <th>
              <select name="i2" id="i2">
                  <option value="0" selected>-</option>
                  <option value="5">A</option>
                  <option value="4">B</option>
                  <option value="3">C</option>
                  <option value="2">D</option>
                  <option value="1">E</option>
              </select>
          </th>
          <th>
              <select name="i3" id="i3">
                  <option value="0" selected>-</option>
                  <option value="5">A</option>
                  <option value="4">B</option>
                  <option value="3">C</option>
                  <option value="2">D</option>
                  <option value="1">E</option>
              </select>
          </th>
          <th>
              <select name="i4" id="i4" disabled>
                  <option value="check" selected>-</option>
                  <option value="5">A</option>
                  <option value="4">B</option>
                  <option value="3">C</option>
                  <option value="2">D</option>
                  <option value="1">E</option>
              </select>
          </th>
      </tr>
      </table>
    </div>
    <div class="inp">
      <table>
        <tbody>
          <tr>
            <th>교과성적</th>
            <td id="score"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="btn">
      <button type="button" value="계산하기" onclick="btnClick()">계산하기</button>
    </div>
    </form>
  </div>
  <script>
    function btnClick() {
        let value = document.querySelector('[name="user_session"]:checked').value;
        let school = 0;
        if (value == 4) {
            alert('학력을 입력해주세요');
            return 0;
        } else if (value == "졸업예정") {
            school = 3;
        }
        value = document.querySelector('[name="way"]:checked').value;
        if (value == 0) {
            alert('전형을 입력해주세요');
            return 0;
        }
        if (document.querySelector('[name="ckbox"]').checked) {
            if (document.querySelector('[name="city"] option:checked').value == "전체") {
                alert('광역자치단체를 선택해주세요');
                return 0;
            }
            if (document.querySelector('[name="country"]').value.length == 0) {
                alert('시/구/군을 입력해주세요');
                return 0;
            }
            if (document.querySelector('[name="sch_name"]').value.length == 0) {
                alert('학교 이름을 입력해주세요');
                return 0;
            }
            if (document.querySelector('[name="gender"]:checked').value == 0) {
                alert('성별을 선택해주세요');
                return 0;
            }
            if (document.querySelector('[name="class"] option:checked').value == "학과선택") {
                alert('학과를 선택해주세요');
                return 0;
            }
            if (document.querySelector('[name="onner"]:checked').value == 0) {
                alert('검증인을 선택해주세요');
                return 0;
            }
            if (document.querySelector('[name="stu_name"]').value.length == 0) {
                alert('성명을 입력해주세요');
                return 0;
            }
            if (document.querySelector('[name="ph_num"]').value.length == 0) {
                alert('연락처를 입력해주세요');
                return 0;
            }
        }
        let count = [0,0,0,0];
        let score = [0,0,0,0];
        let selector = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];
        selector.forEach(element => {
            for(let j = 0; j < 4; j++) {
                val = document.querySelector('#'+element+(parseInt(j)+1)+' option:checked').value;
                if (val != 0 && val != "check") {
                    count[j]++;
                    score[j] = parseInt(score[j]) + parseInt(val);
                }
            }
        });

        let data = { 
            count: count, 
            score: score, 
            user_session: document.querySelector('[name="user_session"]:checked').value, 
            way: document.querySelector('[name="way"]:checked').value,
            city: document.querySelector('[name="city"] option:checked').value,
            country: document.querySelector('[name="country"]').value,
            sch_name: document.querySelector('[name="sch_name"]').value,
            gender: document.querySelector('[name="gender"]:checked').value,
            class: document.querySelector('[name="class"] option:checked').value,
            onner: document.querySelector('[name="onner"]:checked').value,
            ckbox: document.querySelector('[name="ckbox"]').checked,
            stu_name: document.querySelector('[name="stu_name"]').value,
            ph_num: document.querySelector('[name="ph_num"]').value,
        }

        console.log(data);

        // document.querySelector('#form_data').submit();
        
        fetch('{{url('/')}}', {
            method: 'post',
            cache: 'no-cache',
            headers: {
                "Content-Type": "application/json",
                  "Accept": "application/json, text-plain, */*",
                  "X-Requested-With": "XMLHttpRequest",
                // 'Content-Type': 'application/x-www-form-urlencoded',
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
            },
            body: JSON.stringify(data),
        }).then((response) => response.json()).then((e) => {
            document.querySelector('#score').innerHTML = e.data;
            console.log(e);
        });
    }
//
    function changeSession() {
        let val = document.querySelector('[name="user_session"]:checked').value;
        let selector = ['a4', 'b4', 'c4', 'd4', 'e4', 'f4', 'g4', 'h4', 'i4'];
        if (val == "졸업예정") {
            selector.forEach(e => {
                document.querySelector('#'+e).disabled = true
                document.querySelector('#'+e+' option').selected = true
            })
        } else if (val == "졸업") {
            selector.forEach(e => {
                document.querySelector('#'+e).disabled = false
            })
        }
    }
  </script>
</body>
</html> 