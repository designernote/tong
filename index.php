<?php
// index.php

// header.php 파일 포함
include 'include/header.php';
?>
      <main class="main" role="main">
        <div class="container">
          <section>
            <div class="input_wrap search">
              <input type="text" placeholder="홍길동님, 인테리어 업체 찾으세요?"/>
            </div>
            <div class="visual_banner">
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./assets/images/img_visual.png" class="d-block w-100" alt="..." loading="lazy">
                    <div class="carousel-caption banner_text">
                      <h5>우리백화점 잠실점</h5>
                      <p>입주자 대상 가전제품 20% 할인</p>
                      <span>행사기간 : 2024.02.02~05.01</span>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/images/img_visual.png" class="d-block w-100" alt="..." loading="lazy">
                    <div class="carousel-caption banner_text">
                      <h5>꺽이 백화점 이문동</h5>
                      <p>입주자 대상 가전제품 20% 할인</p>
                      <span>행사기간 : 2024.02.02~05.01</span>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/images/img_visual.png" class="d-block w-100" alt="..." loading="lazy">
                    <div class="carousel-caption banner_text">
                      <h5>구라댕 백화점 공릉동</h5>
                      <p>입주자 대상 가전제품 20% 할인</p>
                      <span>행사기간 : 2024.02.02~05.01</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="bar_banner">
              <p>다신사현대카드&nbsp;<strong>최대 4만원 즉시할인</strong></p>
            </div>
          </section>

          <section>
            <ul class="category">
              <li>
                <button class="business_1">부동산</button>
              </li>
              <li>
                <button class="business_2">가구</button>
              </li>
              <li>
                <button class="business_3">가전</button>
              </li>
              <li>
                <button class="business_4">커튼</button>
              </li>
              <li>
                <button class="business_5">IOT</button>
              </li>
              <li>
                <button class="business_6">이사</button>
              </li>
              <li>
                <button class="business_7">줄눈</button>
              </li>
              <li>
                <button class="business_8">인테리어</button>
              </li>
              <li>
                <button class="business_9">청소</button>
              </li>
              <li>
                <button class="business_10">기타</button>
              </li>
            </ul>
          </section>
          
          <section class="item_list">
            <div class="item">
              <div class="title">
                <p>아파트 입주 꿀팁</p>
                <span>모두 보기</span>
              </div>
              <ul class="tip_list">
                <li>
                  <a href="#">이사 및 입주시 체크포인트</a>
                </li>
                <li>
                  <a href="#">신규 입주아파트 체크리스트</a>
                </li>
                <li>
                  <a href="#">층간소음 개념과 법직기준, 신고 및 해결방법</a>
                </li>
                <li>
                  <a href="#">새집증후군에 좋은 식물</a>
                </li>
                <li>
                  <a href="#">가구 구입 요령</a>
                </li>
              </ul>
            </div>
            <div class="item">
              <div class="title">
                <p>우리 아파트 프리미엄</p>
                <span>모두 보기</span>
              </div>
              <!-- Swiper -->
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <ul class="swiper_item">
                      <li>
                        <img src="./assets/images/ex_img1.png" class="thum_img1" alt="">
                        <ol class="inner_txt">
                          <li>LG전자 베스트샵</li>
                          <li>신검단 중앙역 풍경채 어바니티</li>
                          <li>공동구매 프로모션</li>
                          <li>2024.02.23~12.02</li>
                        </ol>
                      </li>
                      <li>
                        <img src="./assets/images/ex_img1.png" class="thum_img1" alt="">
                        <ol class="inner_txt">
                          <li>LG전자 베스트샵</li>
                          <li>신검단 중앙역 풍경채 어바니티</li>
                          <li>공동구매 프로모션</li>
                          <li>2024.02.23~12.02</li>
                        </ol>
                      </li>
                    </ul>
                  </div>
                  <div class="swiper-slide">
                    <ul class="swiper_item">
                      <li>
                        <img src="./assets/images/ex_img1.png" class="thum_img1" alt="">
                        <ol class="inner_txt">
                          <li>LG전자 베스트샵</li>
                          <li>신검단 중앙역 풍경채 어바니티</li>
                          <li>공동구매 프로모션</li>
                          <li>2024.02.23~12.02</li>
                        </ol>
                      </li>
                      <li>
                        <img src="./assets/images/ex_img1.png" class="thum_img1" alt="">
                        <ol class="inner_txt">
                          <li>LG전자 베스트샵</li>
                          <li>신검단 중앙역 풍경채 어바니티</li>
                          <li>공동구매 프로모션</li>
                          <li>2024.02.23~12.02</li>
                        </ol>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- <div class="swiper-pagination"></div> -->
              </div>
            </div>
            <div class="item">
              <div class="title">
                <p>AI 혜택순위</p>
                <span>모두 보기</span>
              </div>
              <ul class="ranking_list">
                <li>
                  <div>
                    <img src="./assets/images/ex_img.png" class="thum_img" alt="">
                    <div class="inner_txt">
                      <p>부동산 / 금나와라부동산</p>
                      <small>서울시 동작구 양녕로 220, 상가 103호</small>
                      <span>이사지원금 (20만원상당)외 1건</span>
                    </div>
                  </div>
                  <div class="average">
                    <span>8.2</span>
                  </div>
                </li>
                <li>
                  <div>
                    <img src="./assets/images/ex_img.png" class="thum_img" alt="">
                    <div class="inner_txt">
                      <p>부동산 / 금나와라부동산</p>
                      <small>서울시 동작구 양녕로 220, 상가 103호</small>
                      <span>이사지원금 (20만원상당)외 1건</span>
                    </div>
                  </div>
                  <div class="average">
                    <span>8.2</span>
                  </div>
                </li>
                <li>
                  <div>
                    <img src="./assets/images/ex_img.png" class="thum_img" alt="">
                    <div class="inner_txt">
                      <p>부동산 / 금나와라부동산</p>
                      <small>서울시 동작구 양녕로 220, 상가 103호</small>
                      <span>이사지원금 (20만원상당)외 1건</span>
                    </div>
                  </div>
                  <div class="average">
                    <span>8.2</span>
                  </div>
                </li>
              </ul>
            </div>
            <div class="item">
              <div class="title">
                <p>가장 많이 노출 되었어요</p>
                <span>모두 보기</span>
              </div>
              <ul class="ranking_list">
                <li>
                  <div>
                    <img src="./assets/images/ex_img.png" class="thum_img" alt="">
                    <div class="inner_txt">
                      <p>부동산 / 금나와라부동산</p>
                      <small>서울시 동작구 양녕로 220, 상가 103호</small>
                      <span>이사지원금 (20만원상당)외 1건</span>
                    </div>
                  </div>
                  <div class="average">
                    <span>8.2</span>
                  </div>
                </li>
                <li>
                  <div>
                    <img src="./assets/images/ex_img.png" class="thum_img" alt="">
                    <div class="inner_txt">
                      <p>부동산 / 금나와라부동산</p>
                      <small>서울시 동작구 양녕로 220, 상가 103호</small>
                      <span>이사지원금 (20만원상당)외 1건</span>
                    </div>
                  </div>
                  <div class="average">
                    <span>8.2</span>
                  </div>
                </li>
                <li>
                  <div>
                    <img src="./assets/images/ex_img.png" class="thum_img" alt="">
                    <div class="inner_txt">
                      <p>부동산 / 금나와라부동산</p>
                      <small>서울시 동작구 양녕로 220, 상가 103호</small>
                      <span>이사지원금 (20만원상당)외 1건</span>
                    </div>
                  </div>
                  <div class="average">
                    <span>8.2</span>
                  </div>
                </li>
              </ul>
            </div>
          </section>
        </div>
      </main>
      <?php
// footer.php 파일 포함
include 'include/footer.php';
?>