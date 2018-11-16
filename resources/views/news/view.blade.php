@extends('../index')

@section('content')
    <div id="articleViewContainer" class="topContainer">
        <!-- 반응형 left : s-->
        <div class="border_box container_left">
            {{-- <section class="advertisment">
                <div id="default_setNet1_2" class="advertisementItem">
                    <div class="networkAd"></div>
                    <div class="editAd">default_setNet1_2</div>
                </div>
            </section> --}}
            <article id="articleView">
                <!-- 기사헤더 : s -->
                <header id="articleHeader">
                    <div class="navigation">
                        <span>홈</span>
                        <i class="fa fa-angle-right">&gt;</i>
                        <span><a href="http://m.yourdomain.com/news/articleList.html?sc_section_code=S1N1">메뉴1</a></span>
                        <i class="fa fa-angle-right">&gt;</i>
                        <span><a href="http://m.yourdomain.com/news/articleList.html?sc_sub_section_code=S2N1">메뉴2</a></span>
                    </div>
                    <h1>{{ $article->title }}</h1>
                    <p class="date">기사승인 {{ $article->externOccurDate }}</p>
                </header>
                <!-- 기사헤더 : e -->

                <!-- 기사본문 : s -->
                <div id="articleBody">
                    {{--<section class="advertisment">
                        <div id="default_news_ad1" class="advertisementItem">
                            <div class="networkAd">
                                <!-- TODO: 제거 <script src="http://static.yourdomain.com/static/forExtern/ndsoft__yourdomain/1/section__mobile__top_1.js"></script> -->
                            </div>
                            <div class="editAd">default_news_ad1</div>
                        </div>
                    </section>--}}

                    <div class="body word_break">
                        {!! $article->bodyOrigin !!}
                    </div>
                    <p class="writer">
                        @if($article->writerName) {{ $article->writerName }} 기자 @endif
                        <a href="mailto:{{ $article->writerEmail }}">{{ $article->writerEmail }}</a>
                    </p>
                </div>
                <div id="articleBody">
                    <div class="copy">&lt;저작권자 &copy; YourCorp 무단전재 및 재배포금지&gt;</div>
                </div>

                <!-- 기사본문 : e -->
                {{--<section class="advertisment">
                    <div id="default_news_ad2" class="advertisementItem">
                        <div class="networkAd">
                            <!-- TODO: 제거 <script src="http://static.yourdomain.com/static/forExtern/ndsoft__yourdomain/1/section__mobile__middle_1.js"></script> -->
                        </div>
                        <div class="editAd">default_news_ad2</div>
                    </div>
                </section>--}}

                <!-- 기사푸터 -->
                <footer id="articleFooter">
                    {{--<section class="advertisment">
                        <div id="default_news_ad3" class="advertisementItem">
                            <div class="editAd">default_news_ad3</div>
                        </div>
                    </section>--}}

                    {{--<section class="advertisment">
                        <div id="default_setImage2" class="advertisementItem">
                            <div class="editAd">default_setImage2</div>
                        </div>
                    </section>--}}

                    <!-- 폰트 활성화 메시지-->
                    <div id="font-msg"></div>
                </footer>
                <!-- 기사푸터 -->

                {{--<section class="advertisment">
                    <div id="default_news_ad4" class="advertisementItem">
                        <div class="editAd">default_news_ad4</div>
                    </div>
                </section>--}}
            </article>
        </div>
        <!-- 반응형 left : e-->

        <!-- 반응형 right : s-->
        <div class="border_box container_right">
            {{--<section class="advertisment topLine">
                <div id="default_side_ad1" class="advertisementItem">
                    <div class="editAd">default_side_ad1</div>
                </div>
            </section>--}}

            {{--
            <section class="advertisment">
                <div id="default_side_ad3" class="advertisementItem">
                    <div class="editAd">default_side_ad3</div>
                </div>
            </section>

            <section class="advertisment">
                <div id="default_setNet2" class="advertisementItem">
                    <div class="networkAd">

                    </div>
                    <div class="editAd">default_setNet2</div>
                </div>
            </section> --}}
        </div>
        <!-- 반응형 right : e-->
    </div>
@endsection