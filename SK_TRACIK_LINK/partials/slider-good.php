<div class="index-intro" id="sectionIntro">
    <h2 class="blind">INTRO</h2>
    <div class="index-intro-swiper">
        <!-- 슬라이드 샘플// -->
        <div class="slide">
            <a href="/view/introduce/vision.do" target="_self" class="slide-link">
                <!-- <div style="background-image: url('/assets/images/header-good/main/2021/main_visual_230419_2.jpg');" class="bg-img"></div> -->
                <div style="background-image: url('<?php echo $folder_path;?>/assets/images/header-good/main/2021/index-visual-img01_sm.jpg');" class="bg-img show-only-mobile"></div>
                <div style="background-image: url('<?php echo $folder_path;?>/assets/images/header-good/main/2021/index-visual-img01_lg.jpg?v2');" class="bg-img show-only-desktop"></div>
                <div class="blur">
                    <div class="txt-box">
                        <h3 class="title">기술과 서비스로 <br class="show-only-desktop">고객을 이롭게 하는 <br class="show-only-desktop">AI Company</h3>
                        <p class="text show-only-desktop">SK텔레콤은 안정적인 통신 기술을 기반으로 연결 기술에 <br>AI를 더하는 차별화된 ‘AI 컴퍼니’로 도약하고 있습니다.</p>
                        <p class="more-icon">VIEW MORE</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- //슬라이드 샘플 -->
        <div class="slide">
            <a href="/view/esg/overview.do" target="_self" class="slide-link">
                <div style="background-image: url('<?php echo $folder_path;?>/assets/images/header-good/main/2021/index-visual-img02_lg.jpg');" class="bg-img"></div>
                <div class="blur">
                    <div class="txt-box">
                        <h3 class="title">통신과 ESG를 연결하는 <br class="show-only-desktop">ESG 2.0 시대의 시작</h3>
                        <p class="text show-only-desktop">SK텔레콤은 AI 서비스와 기술을 활용하여, 그린 네트워크를 통한 친환경 성장, <br>AI 안전 사회 조성 등 진정성 있는 사회적 가치 창출을 위해 노력하고 있습니다.</p>
                        <p class="more-icon">VIEW MORE</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- //슬라이드 샘플 -->
        <div class="slide">
            <a href="https://careers.sktelecom.com/" target="_blank" title="새창 열림" class="slide-link" data-galabel="AI-SK Telecom">
                <div style="background-image: url('<?php echo $folder_path;?>/assets/images/header-good/main/2021/index-visual-img03-ko_sm.jpg');" class="bg-img show-only-mobile"></div>
                <div style="background-image: url('<?php echo $folder_path;?>/assets/images/header-good/main/2021/index-visual-img03-ko_lg.jpg?v2');" class="bg-img show-only-desktop"></div>
                <div class="blur">
                    <div class="txt-box">
                        <h3 class="title">함께 성장하고 행복해지는 <br class="show-only-desktop">SK텔레콤만의 기업문화</h3>
                        <p class="text show-only-desktop">SK텔레콤은 구성원의 역량 강화와 핵심 인재 육성을 위해 <br>'더 많은 소통과 더 많은 협업’으로 SKT 2.0 기업문화를 견고히 다지고 있습니다.</p>
                        <p class="more-icon">VIEW MORE</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- 링크가 없는 경우 none-link 클래스 추가 -->
        <div class="slide none-link">
            <div style="background-image: url('<?php echo $folder_path;?>/assets/images/header-good/main/2021/index-visual-img04_lg.jpg');background-position: calc(50% - 60px) center;" class="bg-img show-only-mobile"></div>
            <div style="background-image: url('<?php echo $folder_path;?>/assets/images/header-good/main/2021/index-visual-img04_lg.jpg');" class="bg-img show-only-desktop"></div>
            <div class="blur">
                <div class="txt-box">
                    <h3 class="title">SK텔레콤-SK스퀘어가 <br class="show-only-desktop">만드는 ICT 시너지 </h3>
                    <p class="text show-only-desktop">SK텔레콤과 SK스퀘어가 함께 <br>ICT 서비스·기술 혁신을 이어 나갑니다.</p>
                </div>
            </div>
        </div>
        <!-- 부산 박람회 추가 // -->
        <!-- 링크가 없는 경우 none-link 클래스 추가 -->
        <div class="slide none-link busan">
            <div style="background-image: url('<?php echo $folder_path;?>/assets/images/header-good/main/2021/index-visual-img05_sm.jpg');background-position: calc(50% + 20px) bottom;" class="bg-img show-only-mobile"></div>
            <div style="background-image: url('<?php echo $folder_path;?>/assets/images/header-good/main/2021/index-visual-img05_lg.jpg');" class="bg-img show-only-desktop"></div>
            <div class="blur">
                <div class="txt-box">
                    <h3 class="title">2030<br>부산세계박람회 유치</h3>
                    <p class="text">SK도 함께 노력하겠습니다.</p>
                </div>
            </div>
        </div>
        <!-- // 부산 박람회 추가 -->
    </div>
    <!-- 슬라이더 버튼 영역 -->
    <div class="dot-list">
        <!-- 숫자 -->
        <p class="num"><span class="point">1</span> / <span class="all-num">4</span></p>
        <!-- dots -->
        <div class="dots"></div>
        <!-- 플레이 & 스탑 -->
        <button class="slide-stop show-only-desktop"><span class="blind">슬라이더 멈춤</span></button>
    </div>

    <script>
        $(function() {
            var $slideWarp = $(".index-intro-swiper");

            var slideNum = $slideWarp.find(".slide").length; //슬라이드 개수

            // 슬라이드 개수 삽입 
            $(".dot-list .num .all-num").text(slideNum);

            //인트로 캐로셀
            $slideWarp.slick({
                fade: true,
                speed: 0,
                arrows: false,
                dots: true,
                appendDots: $('.dot-list .dots'),
                autoplay: true,
                autoplaySpeed: 7000,
                pauseOnFocus: false,
                pauseOnHover: false,
            });

            //인트로 캐로셀 애니메이션
            function introAnimation() {
                var indexTl = gsap.timeline();
                var $moreBtn = null;

                // 버튼 또는 아이콘이 있는지 확인하여 변수에 지정
                if ($(".index-intro-swiper .slick-active .more-icon").length) {
                    $moreBtn = ".index-intro-swiper .slick-active .more-icon";
                } else if ($(".index-intro-swiper .slick-active .expo-icon").length) {
                    $moreBtn = ".index-intro-swiper .slick-active .expo-icon";
                }

                gsap.fromTo(".index-intro-swiper .slick-active .bg-img", 7, { //배경이미지 확대
                    scale: 1.01
                }, {
                    scale: 1.05,
                    delay: 0
                })
                indexTl.fromTo(".index-intro-swiper .slick-active .blur", .3, { //blur영역 나타남
                    opacity: 0,
                    x: -100
                }, {
                    opacity: 1,
                    x: 0,
                    delay: .3
                })
                    .fromTo(".index-intro-swiper .slick-active .title", .3, {
                        opacity: 0,
                        x: 40
                    }, {
                        opacity: 1,
                        x: 0
                    })
                    .fromTo(".index-intro-swiper .slick-active .text", .3, {
                        opacity: 0,
                        x: 40
                    }, {
                        opacity: 1,
                        x: 0
                    });

                // 버튼 또는 아이콘이 있으면 버튼 애니메이션 실행
                if ($(".index-intro-swiper .slick-active .more-icon").length || $(".index-intro-swiper .slick-active .expo-icon").length) {
                    gsap.fromTo($moreBtn, .3, { //부산배너 로고추가
                        opacity: 0,
                        x: 40,
                    }, {
                        opacity: 1,
                        x: 0,
                        delay: 1.2,
                    });
                }
            }

            introAnimation();//최초실행

            $slideWarp.on("afterChange", function() {
                var index = $slideWarp.slick('slickCurrentSlide');
                $(".index-intro .dot-list .num .point").text(index + 1); //숫자 카운터
                //슬라이드 액션

                var slideNum = $(".index-intro .slide").length; //총 슬라이드 갯수
                for(var i = 0; i < slideNum; i++){ //클래스 삭제
                    $(".index-intro .dot-list .dots").removeClass("active-0"+ (i + 1) +"");
                }

                $(".index-intro .dot-list .dots").addClass("active-0"+ (index + 1) +""); // 슬라이드 액티브에 따른 애니메이션(클래스 추가)

                introAnimation();
            });


            // 캐로셀 플레이/스탑
            $(".slide-stop").on("click", function() {
                if( $(this).hasClass("play") ) { //재생
                    $(this).removeClass("play");
                    $(this).html('<span class="blind">슬라이더 멈춤</span>');
                    $slideWarp.slick("slickPlay")
                } else { //멈춤
                    $(this).addClass("play")
                    $(this).html('<span class="blind">슬라이더 재생</span>');
                    $slideWarp.slick("slickPause")
                }
            });
        });
    </script>
    
</div>