<?php get_header(); ?>

<!-- lightboxのjquery -->
<!--.drawer ハンバーガー -->
<!--.drawer モバイルハンバーガーメニュー -->

<body <?php body_class(); ?>>
    <main role="main">
        <!--        トップ写真スライド-->
        <div id="main">
            <div id="mainPhoto">
                <ul class="bxslider">
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/maintop1.jpg" /></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/maintop2.jpg" /></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/maintop3.jpg" /></li>
                </ul>
            </div>
            <!-- mainPhoto end-->

            <div id="toptext">
                <h1>旅の出会いはあなたの旅を100倍楽しくする。</h1>
                <p>旅行をすると出会う素敵な景色、美味しいご飯に可愛い雑貨。 <br>どれもgoodな経験なんだけど、なんだかちょっと物足りなくなってきた。</p>
                <p>そんなあなたに、新しい旅のご提案。</p>
                <p>ちょっとの勇気が必要ですが、そこに住む人達の生活をのぞいてみませんか。</p>
                <p>そこにはあなたの知らないおもしろい人が待っているかもしれません。</p>
            </div>
            <!-- mainText end-->

            <div>
                <h2>People<i class="fas fa-user"></i>
                    <span class="title-sub">人を見る</span></h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/line.png" id="line" width="350px">
            </div>
            <!--記事風に写真表示-->

            <?php
            $args = array(
                'category_name' => 'blog', /* 投稿タイプを指定 */
                'paged' => $paged,
                'posts_per_page' => 5
            ); ?>
                <?php query_posts( $args ); ?>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); 
            /* ループ開始 */ ?>
                <div class="post">
                    <p><span class="ft-blue"><?php the_title(); ?></span>
                        <?php the_author_nickname(); ?>
                        <?php the_time("Y年m月j日"); ?><br />
                        <?php echo mb_strimwidth(strip_tags($post-> post_content), 0, 80, "...", "UTF-8"); ?><span class="ft-blue"><a href=”<?php echo get_permalink(); ?>”>続きを読む</a></span>
                    </p>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <p>記事がありません</p>
                <?php endif; ?>

                <div id="container">

                    <div id="content" class="clearfix">


                        <article class="item">
                            <a class="item-image" href="/single-colombia/single-colombia.php">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/slidep7.jpg">
                        </a>
                            <div class="item-detail">
                                <div class="item-heading clearfix">
                                    <h2 class="item-title">Title0</h2>
                                    <span class="item-label">city</span>
                                </div>
                                <div class="item-description">
                                    Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing.
                                </div>
                            </div>
                        </article>


                        <article class="item">
                            <a class="item-image" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/slidep2.jpg">
                        </a>
                            <div class="item-detail">
                                <div class="item-heading clearfix">
                                    <h2 class="item-title">Title1</h2>
                                    <span class="item-label">nature</span>
                                </div>
                                <div class="item-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus.
                                </div>
                            </div>
                        </article>


                        <article class="item">
                            <a class="item-image" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/slidep9.jpg">
                        </a>
                            <div class="item-detail">
                                <div class="item-heading clearfix">
                                    <h2 class="item-title">Title2</h2>
                                    <span class="item-label">animals</span>
                                </div>
                                <div class="item-description">
                                    Lorem ipsum dolor sit amet, consectetur.
                                </div>
                            </div>
                        </article>


                        <article class="item">
                            <a class="item-image" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/slidep4.jpg">
                        </a>
                            <div class="item-detail">
                                <div class="item-heading clearfix">
                                    <h2 class="item-title">Title3</h2>
                                    <span class="item-label">nature</span>
                                </div>
                                <div class="item-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus.
                                </div>
                            </div>
                        </article>


                        <article class="item">
                            <a class="item-image" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/slidep5.jpg">
                        </a>
                            <div class="item-detail">
                                <div class="item-heading clearfix">
                                    <h2 class="item-title">Title4</h2>
                                    <span class="item-label">city</span>
                                </div>
                                <div class="item-description">
                                    Lorem ipsum dolor sit amet.
                                </div>
                            </div>
                        </article>


                        <article class="item">
                            <a class="item-image" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/slidep13.jpg">
                        </a>
                            <div class="item-detail">
                                <div class="item-heading clearfix">
                                    <h2 class="item-title">Title5</h2>
                                    <span class="item-label">nature</span>
                                </div>
                                <div class="item-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus.
                                </div>
                            </div>
                        </article>


                        <article class="item">
                            <a class="item-image" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/slidep7.jpg">
                        </a>
                            <div class="item-detail">
                                <div class="item-heading clearfix">
                                    <h2 class="item-title">Title6</h2>
                                    <span class="item-label">animals</span>
                                </div>
                                <div class="item-description">
                                    Lorem ipsum dolor sit amet, consectetur.
                                </div>
                            </div>
                        </article>


                        <article class="item">
                            <a class="item-image" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/slidep8.jpg">
                        </a>
                            <div class="item-detail">
                                <div class="item-heading clearfix">
                                    <h2 class="item-title">Title7</h2>
                                    <span class="item-label">food</span>
                                </div>
                                <div class="item-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing.
                                </div>
                            </div>
                        </article>


                        <article class="item">
                            <a class="item-image" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/slidep9.jpg">
                        </a>
                            <div class="item-detail">
                                <div class="item-heading clearfix">
                                    <h2 class="item-title">Title8</h2>
                                    <span class="item-label">city</span>
                                </div>
                                <div class="item-description">
                                    Lorem ipsum dolor sit amet.
                                </div>
                            </div>
                        </article>


                        <article class="item">
                            <a class="item-image" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/slidep11.jpg">
                        </a>
                            <div class="item-detail">
                                <div class="item-heading clearfix">
                                    <h2 class="item-title">Title9</h2>
                                    <span class="item-label">animals</span>
                                </div>
                                <div class="item-description">
                                    Lorem ipsum dolor sit amet, consectetur.
                                </div>
                            </div>
                        </article>

                        <article class="item">
                            <a class="item-image" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/slidep12.jpg">
                        </a>
                            <div class="item-detail">
                                <div class="item-heading clearfix">
                                    <h2 class="item-title">Title10</h2>
                                    <span class="item-label">animals</span>
                                </div>
                                <div class="item-description">
                                    Lorem ipsum dolor sit amet, consectetur.
                                </div>
                            </div>
                        </article>
                        <article class="item">
                            <a class="item-image" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/slidep2.jpg">
                        </a>
                            <div class="item-detail">
                                <div class="item-heading clearfix">
                                    <h2 class="item-title">Title10</h2>
                                    <span class="item-label">animals</span>
                                </div>
                                <div class="item-description">
                                    Lorem ipsum dolor sit amet, consectetur.
                                </div>
                            </div>
                        </article>

                    </div>

                </div>



                <!--地図エリア-->
                <section>
                    <div>
                        <h2>Area<i class="far fa-map"></i>
                            <span class="title-sub">エリアで人を見つける</span></h2>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/line.png" id="line" width="350px">
                    </div>
                    <p class="bigmap"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/map1.jpg" alt="大きい地図" usemap="#Map">
                        <map name="Map">
                        <area shape="circle" coords="300,416,76" href="/category-southAmerica/category-southAmerica.php">
                <area shape="circle" coords="444,174,82" href="euro.html">
                <area shape="circle" coords="320,250,71" href="africa.html">
                <area shape="circle" coords="650,261,93" href="asia.html">
                <area shape="circle" coords="852,446,111" href="oceania.html">
                </map></p>
                </section>
                <!--        記事のエリア-->
                <div>
                    <h2>Article<i class="fas fa-pencil-alt"></i>
                        <span class="title-sub">旅のお役立ち情報</span></h2>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/line.png" id="line" width="350px">
                </div>

                <div id="contents" class="media">
                    <div class="inner">
                        <ul class="media-container clearfix">
                            <li class="media-list media-hover-04">
                                <a href="/single-ArticleEnglish/single-ArticleEnglish.php" class="media-link">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/article3.jpg" width="300px" height="auto" alt="">
                                <div class="lower-box">
                                    <span class="tag tag-media">勉強</span>
                                    <date class="date">2015 5-15</date>
                                    <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                                </div>
                            </a>
                            </li>

                            <li class="media-list media-hover-04">
                                <a href="#" class="media-link">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/article1.jpg" width="300px" height="auto" alt="">
                            <div class="lower-box">
                                <span class="tag tag-media">持ち物</span>
                                <date class="date">2015 5-15</date>
                                <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </a>
                            </li>
                            <li class="media-list media-hover-04">
                                <a href="#" class="media-link">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/article2.jpg" width="300px" height="auto" alt="">
                            <div class="lower-box">
                                <span class="tag tag-media">お金</span>
                                <date class="date">2015 5-15</date>
                                <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </a>
                            </li>

                            <li class="media-list media-hover-04">
                                <a href="#" class="media-link">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/article4.jpg" width="300px" height="auto" alt="">
                            <div class="lower-box">
                                <span class="tag tag-media">メディア</span>
                                <date class="date">2015 5-15</date>
                                <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </a>
                            </li>
                            <li class="media-list media-hover-04">
                                <a href="#" class="media-link">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/article5.jpg" width="300px" height="auto" alt="">
                            <div class="lower-box">
                                <span class="tag tag-media">メディア</span>
                                <date class="date">2015 5-15</date>
                                <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </a>
                            </li>
                            <li class="media-list media-hover-04">
                                <a href="#" class="media-link">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/article6.jpg" width="300px" height="auto" alt="">
                            <div class="lower-box">
                                <span class="tag tag-media">メディア</span>
                                <date class="date">2015 5-15</date>
                                <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </a>
                            </li>
                        </ul>
                        <div class="more"><a href="#">read more</a></div>
                    </div>
                </div>
        </div>

        <!--先頭に戻るボタン-->
        <p class="pagetop"><a href="#main"><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/pagetop.png" width="60px" alt="PAGE TOP" /></a></p>

        <?php get_footer(); ?>
