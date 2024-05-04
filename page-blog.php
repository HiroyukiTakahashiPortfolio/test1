<?php get_header(); ?>
    <main>
        
            <section id="hero">
                <div class="wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>\img\retoro_cafe_hero.jpeg" alt="オフィス内装">
                </div>
            </section>

            <section id="blog">
                <div class="wrapper">

                    <div class="title">
                        <h2>BLOG</h2>
                        <hr>
                    </div>

                    <div class="content">

                        
                    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="item">
            <?php if ( has_post_thumbnail() ): ?>
                <figure>
                    <?php the_post_thumbnail( 'post-thumbnails' ); ?>
                </figure>
            <?php else : ?>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/HAWKSHAW19206006_TP_V4.jpg" alt="ブログ写真">
                </figure>
            <?php endif; ?>
            <p><?php the_date(); ?></p>
            <h3><?php the_title(); ?></h3>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <a href="<?php the_permalink(); ?>">詳細はこちら</a>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p>投稿がありません</p>
<?php endif; ?>

                                        <!-- <div class="item">
                                                
                                                        <figure>
                                                            <img src="<?php echo get_template_directory_uri(); ?>\img\AdobeStock_211605085.jpeg" alt ="test">
                                                        </figure>
                                                    <p><?php the_date(); ?></p>
                                                    <h3><?php the_title(); ?></h3>
                                                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                                    <a href="<?php the_permalink(); ?>">詳細はこちら</a>
                                        </div> -->




                    </div>
                </div>
            </section>


            <section id="about">
                <div class="wrapper">
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>\img\AdobeStock_211605085.jpeg" alt="会社概要の写真が入る。">
                    </div>
                    <div class="item">
                        <div class="title">
                            <h2>About</h2>
                            <hr>

                        </div>
                        <div class="content">
                            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>

                </div>
                
            </section>
            <section id="service">
                <div class="wrapper">
                    <div class="title">
                        <h2>Service</h2>
                        <hr>
                    </div>
                    <div class="content">
                        <div class="item">
                            <div class="item_1 item_child">
                                <h3>サービスメニュー</h3>
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>\img\ogasuta458A7901_TP_V4.jpg" alt="">
                                </div>
                            </div>
                            
                            <div class="item_2 item_child">
                                <h3>サービスメニュー</h3>
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>\img\ogasuta458A7901_TP_V4.jpg" alt="">
                                </div>
                            </div>
                            
                        </div>

                        <div class="item">
                            <div class="item_3 item_child">
                                <h3>サービスメニュー</h3>
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>\img\ogasuta458A7901_TP_V4.jpg" alt="">
                                </div>
                            </div>
                        
                            <div class="item_4 item_child">
                                <h3>サービスメニュー</h3>
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>\img\ogasuta458A7901_TP_V4.jpg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                
            </section>
            <section id="others">
                <div class="wrapper">
                    <div class="content">
                        
                            <div class="title">
                                <h2>others</h2>
                                <hr>
                            </div>

                        
                    
                            <div class="item">
                                <table>
                                    <tr>
                                        <th>THTH</th>
                                        <td>TDTDTDTD</td>
                                    </tr>
                                    <tr>
                                        <th>THTH</th>
                                        <td>TDTDTDTD</td>
                                    </tr>
                                    <tr>
                                        <th>THTH</th>
                                        <td>TDTDTDTD</td>
                                    </tr>
                                    <tr>
                                        <th>THTH</th>
                                        <td>TDTDTDTD</td>
                                    </tr>
                                    <tr>
                                        <th>THTH</th>
                                        <td>TDTDTDTD</td>
                                    </tr>

                                </table>

                            </div>
                    </div>
                        <div class="bg_img">
                            <img src="<?php echo get_template_directory_uri(); ?>\img\ogasuta458A7901_TP_V4.jpg" alt="">
                        </div>
                    

                </div>
                
            </section>
        
    </main>

<?php get_footer(); ?>