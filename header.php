<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Heropy Coffee">
  <meta property="og:title" content="Heropy Coffee Landing">
  <meta property="og:description" content="헤로피커피는 세계에서 가장 큰 다국적 커피 전문점으로, 64개국에서 총 23,187개의 매점을 운영하고 있습니다.">
  <meta property="og:image" content="./images/for_seo.jpg">
  <meta property="og:url" content="https://epic-darwin-271c77.netlify.app">
  <!-- Twitter Cards -->
  <meta property="twitter:card" content="summary">
  <meta property="twitter:site" content="Heropy Coffee">
  <meta property="twitter:title" content="Heropy Coffee Landing">
  <meta property="twitter:description" content="헤로피커피는 세계에서 가장 큰 다국적 커피 전문점으로, 64개국에서 총 23,187개의 매점을 운영하고 있습니다.">
  <meta property="twitter:image" content="./images/for_seo.jpg">
  <meta property="twitter:url" content="https://epic-darwin-271c77.netlify.app">
  <title>Heropy Coffee</title>
  <!-- 파비콘 -->
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <!-- 구글아이콘 -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

  <!-- 초기화 -->
  <link href="./css/reset.css" rel="stylesheet" type="text/css">
  <!-- 레이아웃(헤더, 푸터) -->
  <link href="./css/layout.css" rel="stylesheet" type="text/css">
  <!-- 공통서식 -->
  <link href="./css/base.css" rel="stylesheet" type="text/css">
  <!-- 메인콘텐츠 -->
  <link href="./css/main.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">


  <!-- 프리픽스 -->
  <script src="./script/prefixfree.min.js"></script>
  <!-- 부드러운 애니메이션 스크립트 소스 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollToPlugin.min.js"></script>
  <!-- 스크롤 동작에 따른 애니메이션 스크립트 소스 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
  <!-- 메인 스크립트 -->
  <script src="./script/main.js" defer></script>
</head>
<body>
  <!-- 헤더영역 -->
  <header>
    <div class="inner">
      <h1>
        <a href="index.html" title="메인페이지로 바로가기">
          <img src="./images/logo.png" alt="상단로고">
        </a>
      </h1>

      <nav class="sub_mnu">
        <ul>
          <li><a href="#" title="회원가입">Sign In</a></li>
          <li><a href="#" title="커피">My Coffee</a></li>
          <li><a href="#" title="고객서비스">Customer Service &amp; Ideas</a></li>
          <li><a href="#" title="매장찾기">Find a Store</a></li>
        </ul>

        <!-- 검색폼양식 -->
        <div class="search">
          <input type="search" placeholder="검색어 입력" id="search">
          <label for="search"><span class="material-icons">search</span></label>
        </div>

      </nav>

      <nav class="gnb">
        <ul>
          <li><a href="#" title="커피">coffee</a>
            <div class="item_content">
              <div class="sub_wrap">
                <dl class="sub">
                  <dt>커피</dt>
                  <dd><a href="#" title="헤로피커피 원드">헤로피커피 원드</a></dd>
                  <dd><a href="#" title="헤로피커피 비아">헤로피커피 비아</a></dd>
                  <dd><a href="#" title="헤로피커피 오리가미">헤로피커피 오리가미</a></dd>
                </dl>

                <dl class="sub">
                  <dt>에소프레소 음료</dt>
                  <dd><a href="#" title="">도피오</a></dd>
                  <dd><a href="#" title="">에스프레소 마키아또</a></dd>
                  <dd><a href="#" title="">아메리카노</a></dd>
                  <dd><a href="#" title="">마키아또</a></dd>
                  <dd><a href="#" title="">카푸치노</a></dd>
                  <dd><a href="#" title="">라떼</a></dd>
                  <dd><a href="#" title="">모카</a></dd>
                  <dd><a href="#" title="">리스트레또 비안코</a></dd>
                </dl>

                <dl class="sub">
                  <dt>커피 이야기</dt>
                  <dd><a href="#" title="">로스트 스팩트럼</a></dd>
                  <dd><a href="#" title="">최상의 아라비카 원두</a></dd>
                  <dd><a href="#" title="">한 잔의 커피가 완성되기까지</a></dd>
                  <dd><a href="#" title="">클로버 커피 추출 시스템</a></dd>
                </dl>

                <dl class="sub">
                  <dt>최상의 커피를 즐기는 법</dt>
                  <dd><a href="#" title="">커피 프레스</a></dd>
                  <dd><a href="#" title="">푸어 오버</a></dd>
                  <dd><a href="#" title="">아이스 푸어 오버</a></dd>
                  <dd><a href="#" title="">커피 메이커</a></dd>
                  <dd><a href="#" title="">리저브를 매장에서 다양하게 즐기는 법</a></dd>
                </dl>
              </div>

              <div class="content_tex">
                <div class="inner">
                  <h4>나와 어울리는 커피 찾기</h4>
                  <p>여러분에게 어울리는 커피를 찾아드립니다.</p>
                  <h4>최상의 커피를 즐기는 법</h4>
                  <p>여러가지 방법을 통해 다양한 풍미의 커피를 즐겨보세요.</p>
                </div>
              </div>
            </div>
          </li>

          <li><a href="#" title="메뉴">menu</a>
            <div class="item_content">
              <div class="sub_wrap">
                <dl class="sub">
                  <dt>음료</dt>
                  <dd><a href="#" title="콜드 브루">콜드 브루</a></dd>
                  <dd><a href="#" title="브루드 커피">브루드 커피</a></dd>
                  <dd><a href="#" title="에스프레소">에스프레소</a></dd>
                  <dd><a href="#" title="프라푸치노">프라푸치노</a></dd>
                  <dd><a href="#" title="블렌디드 음료">블렌디드 음료</a></dd>
                  <dd><a href="#" title="헤로피커피 피지오">헤로피커피 피지오</a></dd>
                  <dd><a href="#" title="티(티바나)">티(티바나)</a></dd>
                  <dd><a href="#" title="기타 제조 음료">기타 제조 음료</a></dd>
                  <dd><a href="#" title="주스(병음료)">주스(병음료)</a></dd>
                </dl>

                <dl class="sub">
                  <dt>푸드</dt>
                  <dd><a href="#" title="베이커리">베이커리</a></dd>
                  <dd><a href="#" title="케익">케익</a></dd>
                  <dd><a href="#" title="샌드위치 & 샐러드">샌드위치 & 샐러드</a></dd>
                  <dd><a href="#" title="따뜻한 푸드">따뜻한 푸드</a></dd>
                  <dd><a href="#" title="과일 & 요거트">과일 & 요거트</a></dd>
                  <dd><a href="#" title="스낵 & 미니 디저트">스낵 & 미니 디저트</a></dd>
                  <dd><a href="#" title="아이스크림">아이스크림</a></dd>
                </dl>

                <dl class="sub">
                  <dt>상품</dt>
                  <dd><a href="#" title="머그">머그</a></dd>
                  <dd><a href="#" title="글라스">글라스</a></dd>
                  <dd><a href="#" title="플라스틱 텀블러">플라스틱 텀블러</a></dd>
                  <dd><a href="#" title="스테인리스 텀블러">스테인리스 텀블러</a></dd>
                  <dd><a href="#" title="보온병">보온병</a></dd>
                  <dd><a href="#" title="액세서리">액세서리</a></dd>
                  <dd><a href="#" title="커피 용품">커피 용품</a></dd>
                  <dd><a href="#" title="패키지 티(티바나)">패키지 티(티바나)</a></dd>
                </dl>

                <dl class="sub">
                  <dt>카드</dt>
                  <dd><a href="#" title="실물카드">실물카드</a></dd>
                  <dd><a href="#" title="e-Gift 카드">e-Gift 카드</a></dd>
                </dl>

                <dl class="sub">
                  <dt>메뉴 이야기</dt>
                  <dd><a href="#" title="콜드 브루">콜드 브루</a></dd>
                  <dd><a href="#" title="티바나">티바나</a></dd>
                </dl>
              </div>

              <div class="content_tex">
                <div class="inner">
                  <h4>티바나</h4>
                  <p>다양한 찻잎과 향신료 등 개성있는 재료로 새로운 맛과 향의 티를 선보입니다.</p>
                </div>
              </div>
            </div>
          </li>

          <li><a href="#" title="스토어">store</a>
            <div class="item_content">
              <div class="sub_wrap">
                <dl class="sub">
                  <dt>매장 찾기</dt>
                  <dd><a href="#" title="퀵 검색">퀵 검색</a></dd>
                  <dd><a href="#" title="지역 검색">지역 검색</a></dd>
                  <dd><a href="#" title="My 매장">My 매장</a></dd>
                </dl>

                <dl class="sub">
                  <dt>매장 이야기</dt>
                  <dd><a href="#" title="청담스타">청담스타</a></dd>
                  <dd><a href="#" title="티바나 인스파이어드 매장">티바나 인스파이어드 매장</a></dd>
                  <dd><a href="#" title="파미에파크">파미에파크</a></dd>
                </dl>
              </div>

              <div class="content_tex">
                <div class="inner">
                  <h4>매장 찾기</h4>
                  <p>보다 빠르게 매장을 찾아보세요.</p>
                  <h4>청담스타</h4>
                  <p>헤로피커피 1,000호점인 청담스타점을 만나보세요.</p>
                </div>
              </div>
            </div>
          </li>

          <li><a href="#" title="사회참여활동">responsibility</a>
            <div class="item_content">
              <div class="sub_wrap">
                <dl class="sub">
                  <dt>지역 사회 참여 활동</dt>
                  <dd><a href="#" title="회망배달 캠페인">회망배달 캠페인</a></dd>
                  <dd><a href="#" title="재능기부 카페 소식">재능기부 카페 소식</a></dd>
                  <dd><a href="#" title="커뮤니티 스토어">커뮤니티 스토어</a></dd>
                  <dd><a href="#" title="청년인재 양성">청년인재 양성</a></dd>
                  <dd><a href="#" title="우리 농산물 사랑 캠페인">우리 농산물 사랑 캠페인</a></dd>
                  <dd><a href="#" title="우리 문화 지키기">우리 문화 지키기</a></dd>
                </dl>

                <dl class="sub">
                  <dt>환경보호 활동</dt>
                  <dd><a href="#" title="환경 발자국 줄이기">환경 발자국 줄이기</a></dd>
                  <dd><a href="#" title="일회용 컵 없는 매장">일회용 컵 없는 매장</a></dd>
                  <dd><a href="#" title="커피 원두 재활용">커피 원두 재활용</a></dd>
                </dl>

                <dl class="sub">
                  <dt>윤리 구매</dt>
                  <dd><a href="#" title="윤리적 원두 구매">윤리적 원두 구매</a></dd>
                  <dd><a href="#" title="공정무역 인증">공정무역 인증</a></dd>
                  <dd><a href="#" title="커피 농가 지원 활동">커피 농가 지원 활동</a></dd>
                </dl>

                <dl class="sub">
                  <dt>글로벌 사회 공헌</dt>
                  <dd><a href="#" title="윤리경영 보고서">윤리경영 보고서</a></dd>
                  <dd><a href="#" title="헤로피커피 재단">헤로피커피 재단</a></dd>
                  <dd><a href="#" title="지구촌 봉사의 달">지구촌 봉사의 달</a></dd>
                </dl>
              </div>

              <div class="content_tex">
                <div class="inner">
                  <h4>커피원두 재활용</h4>
                  <p>헤로피커피 커피 원두를 재활용 해보세요.</p>
                </div>
              </div>
            </div>
          </li>

          <li><a href="#" title="커피 리워즈">my coffee rewards</a>
            <div class="item_content">
              <div class="sub_wrap">
                <dl class="sub">
                  <dt>마이 헤로피커피 리워즈</dt>
                  <dd><a href="#" title="마이 리워즈 소개">마이 리워즈 소개</a></dd>
                  <dd><a href="#" title="등급 및 혜택">등급 및 혜택</a></dd>
                  <dd><a href="#" title="헤로피커피 별">헤로피커피 별</a></dd>
                  <dd><a href="#" title="자주하는 질문">자주하는 질문</a></dd>
                </dl>

                <dl class="sub">
                  <dt>헤로피커피 카드</dt>
                  <dd><a href="#" title="카드 소개">카드 소개</a></dd>
                  <dd><a href="#" title="카드 갤러리">카드 갤러리</a></dd>
                  <dd><a href="#" title="등록 및 조회">등록 및 조회</a></dd>
                  <dd><a href="#" title="충전 및 이용안내">충전 및 이용안내</a></dd>
                  <dd><a href="#" title="분실신고/환불신청">분실신고/환불신청</a></dd>
                  <dd><a href="#" title="자주하는 질문">자주하는 질문</a></dd>
                </dl>

                <dl class="sub">
                  <dt>카드 e-Gift</dt>
                  <dd><a href="#" title="카드 e-Gift 소개">카드 e-Gift 소개</a></dd>
                  <dd><a href="#" title="이용안내">이용안내</a></dd>
                  <dd><a href="#" title="선물하기">선물하기</a></dd>
                  <dd><a href="#" title="자주하는 질문">자주하는 질문</a></dd>
                </dl>
              </div>

              <div class="content_tex">
                <div class="inner">
                  <h4>카드 등록하기</h4>
                  <p>카드 등록 후 리워즈 서비스를 누리고 사용내역도 조회해보세요.</p>
                </div>
              </div>
            </div>
          </li>

          <li><a href="#" title="새소식">what's new</a>
            <div class="item_content">
              <div class="sub_wrap">
                <dl class="sub">
                  <dt>프로모션 &#x0026; 이벤트</dt>
                  <dd><a href="#" title="전체">전체</a></dd>
                  <dd><a href="#" title="카드">카드</a></dd>
                  <dd><a href="#" title="마이 리워즈">마이 리워즈</a></dd>
                  <dd><a href="#" title="온라인">온라인</a></dd>
                  <dd><a href="#" title="2017 플래너">2017 플래너</a></dd>
                </dl>

                <dl class="sub">
                  <dt>새소식</dt>
                  <dd><a href="#" title="전체">전체</a></dd>
                  <dd><a href="#" title="상품 출시">상품 출시</a></dd>
                  <dd><a href="#" title="문화">문화</a></dd>
                  <dd><a href="#" title="사회공헌">사회공헌</a></dd>
                  <dd><a href="#" title="카드출시">카드출시</a></dd>
                </dl>

                <dl class="sub">
                  <dt>매장별 이벤트</dt>
                  <dd><a href="#" title="일반 매장">일반 매장</a></dd>
                  <dd><a href="#" title="신규 매장">신규 매장</a></dd>
                </dl>
              </div>

              <div class="content_tex">
                <div class="inner">
                  <h4>매장별 이벤트</h4>
                  <p>매장 이벤트 정보를 확인 하실 수 있습니다.</p>
                  <h4>소셜</h4>
                  <p>다양한 SNS 채널을 통해 커피를 만나보세요!</p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>

    </div>
  </header>
  
</body>
</html>