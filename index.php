<?php
// index.php

// header.php 파일 포함
include 'include/header.php';
?>
      <main class="main" role="main">
        <div class="container">
          <section>
            <input type="text" />
            <div class="visual_banner">
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./assets/images/img_visual.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption banner_text">
                      <h5>우리백화점 잠실점</h5>
                      <p>입주자 대상 가전제품 20% 할인</p>
                      <span>행사기간 : 2024.02.02~05.01</span>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/images/img_visual.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption banner_text">
                      <h5>꺽이 백화점 이문동</h5>
                      <p>입주자 대상 가전제품 20% 할인</p>
                      <span>행사기간 : 2024.02.02~05.01</span>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/images/img_visual.png" class="d-block w-100" alt="...">
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
              다신사현대카드&nbsp;<strong>최대 4만원 즉시할인</strong>
            </div>
          </section>
          <!-- <section class="visual_banner">
            <img
              alt="5번째 배너 이미지"
              src="https://d2v80xjmx68n4w.cloudfront.net/assets/images/curated_contents/3644daa0-3e83-41ca-8361-27a9ad4fd504.png?w=700"
              width="100"
              height="258"
              loading="lazy"
            />
          </section> -->
          <section class="branch">
            <div class="menu">
              <ul>
                <li><a href="#" class="active ripple">PC</a></li>
                <li><a href="#" class="ripple">Mobile</a></li>
              </ul>
            </div>
            <div class="contents">
              <div class="menu">
                <ul>
                  <li><a href="#" class="active ripple">자동화</a></li>
                  <li><a href="#">크롤링</a></li>
                  <li><a href="#">매크로</a></li>
                  <li><a href="#">솔루션</a></li>
                </ul>
              </div>
              <div class="prd">
                <ul>
                  <li>
                    <a href="sub.html">
                      <img src="assets/images/dummy_01.png" alt="" />
                      <div class="texts">
                        <div>월 <span>--</span>원 / 연 <span>--</span> 원</div>
                      </div>
                    </a>
                    <div class="items">
                      <a href="#">
                        <div class="title">엑셀 자동화 프로그램 (제목)</div>
                        <div class="grade"><i></i>(100)</div>
                        <div class="price">월 구독료 : <span>--</span> 원</div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a href="#">
                      <img src="assets/images/dummy_01.png" alt="" />
                      <div class="texts">
                        <div>월 <span>--</span>원 / 연 <span>--</span> 원</div>
                      </div>
                    </a>
                    <div class="items">
                      <a href="#">
                        <div class="title">엑셀 자동화 프로그램 (제목)</div>
                        <div class="grade"><i></i>(100)</div>
                        <div class="price">월 구독료 : <span>--</span> 원</div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a href="#">
                      <img src="assets/images/dummy_01.png" alt="" />
                      <div class="texts">
                        <div>월 <span>--</span>원 / 연 <span>--</span> 원</div>
                      </div>
                    </a>
                    <div class="items">
                      <a href="#">
                        <div class="title">엑셀 자동화 프로그램 (제목)</div>
                        <div class="grade"><i></i>(100)</div>
                        <div class="price">월 구독료 : <span>--</span> 원</div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a href="#">
                      <img src="assets/images/dummy_01.png" alt="" />
                      <div class="texts">
                        <div>월 <span>--</span>원 / 연 <span>--</span> 원</div>
                      </div>
                    </a>
                    <div class="items">
                      <a href="#">
                        <div class="title">엑셀 자동화 프로그램 (제목)</div>
                        <div class="grade"><i></i>(100)</div>
                        <div class="price">월 구독료 : <span>--</span> 원</div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a href="#">
                      <img src="assets/images/dummy_01.png" alt="" />
                      <div class="texts">
                        <div>월 <span>--</span>원 / 연 <span>--</span> 원</div>
                      </div>
                    </a>
                    <div class="items">
                      <a href="#">
                        <div class="title">엑셀 자동화 프로그램 (제목)</div>
                        <div class="grade"><i></i>(100)</div>
                        <div class="price">월 구독료 : <span>--</span> 원</div>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </section>
        </div>
      </main>
      <?php
// footer.php 파일 포함
include 'include/footer.php';
?>