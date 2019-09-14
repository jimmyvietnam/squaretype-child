<?php
get_header('new');
?>

<div class="view--no-pad public-home">

    <section class="public-home-banner">
        <div class="container-sm">
            <h1 class="display-sm pad-18 pad-top-0">Trở thành doanh nghiệp hiệu suất cao với chuyển đổi số</h1>
            <P class="paragraph-long pad-24 pad-top-0">Tham gia cộng đồng chuyển đổi số để nâng cao năng lực cạnh tranh bằng việc vận hành & ứng dụng hiệu quả các giải pháp công nghệ.</P>
            <a href="/tools" class="lp-button lp-button--tertiary-1">Khám phá các giải pháp CÔNG NGHỆ</a>
        </div>
    </section>

    <div class="public-home-main">
        <section class="public-home-courses">
            <div class="container-md layout-gt-sm-row layout-align-gt-sm-center-center">
                <div class="public-home-courses-content flex-gt-sm-40">
                    <h2 id="public-home-courses-heading" class="heading-1 pad-12 pad-top-0">Học cùng chuyên gia</h2>
                    <p class="pad-36 pad-top-0">Bắt đầu, khởi động và tăng trưởng cùng với các chuyên gia hàng đầu trong ứng dụng công nghệ, mang lại cho bạn các giá trị thực thụ.</p>
                    <a href="/courses/" class="lp-button lp-button--primary hide-xs hide-sm">Xem các khóa học</a>
                </div>
                <div class="public-home-courses-graphic flex-gt-sm-60">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/courses@2x.webp" alt="Khóa học">
                </div>
                <a href="/courses/" class="lp-button lp-button--primary hide-gt-sm">Xem các khóa học</a>
            </div>
        </section>

        <section id="public-home-resources" class="public-home-resources">
            <div class="container-md layout-gt-sm-row layout-align-gt-sm-center-center">
                <div class="public-home-resources-content flex-gt-sm-40 flex-order-gt-sm-2">
                    <h2 id="public-home-courses-heading" class="heading-1 pad-12 pad-top-0">Thư viện tài liệu</h2>
                    <p class="pad-36 pad-top-0">Bạn đã sẵng sàng thực thi? Bạn cần các tài liệu chỉ dẫn, biểu mẫu được chuẩn hóa? Tài nguyên công nghệ mang lại cho bạn đầy đủ những nội dung bạn cần.</p>
                    <a href="/digital-resources/" class="lp-button lp-button--primary hide-xs hide-sm">Xem thư viện tài liệu</a>
                </div>
                <div class="public-home-resources-graphic flex-gt-sm-60">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/marketing_resources@2x.webp" alt="Thư viện tài liệu">
                </div>
                <a href="/digital-resources/" class="lp-button lp-button--primary hide-gt-sm">Xem thư viện tài liệu</a>
            </div>
        </section>

        <section id="public-home-webinars" class="public-home-webinars">
            <div class="container-md">
                <div class="public-home-card layout-gt-sm-row layout-align-gt-sm-center-center">
                    <div class="public-home-webinars-content flex-gt-sm-40">
                        <h2 id="public-home-webinars-heading" class="heading-1 pad-12 pad-top-0">Webinars</h2>
                        <p class="pad-36 pad-top-0">Xem các chia sẻ đầy giá trị từ các chuyên gia qua các video webinar được thu sẵn - mang lại cho bạn trải nghiệm như rằng bạn đang tham dự event thực thụ. Gởi cho chuyên gia các câu hỏi & tham gia cộng đồng hỏi đáp để khám phá nhiều thông tin hữu ích.</p>
                        <a href="/webinars/" class="lp-button lp-button--primary hide-xs hide-sm">Xem lịch Webinar</a>
                    </div>
                    <div class="public-home-webinars-graphic flex-gt-sm-60">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/webinars@2x.webp" alt="Webinars">
                    </div>
                    <a href="/webinars/" class="lp-button lp-button--primary hide-gt-sm">Xem lịch Webinar</a>
                </div>
            </div>
        </section>

        <section class="public-home-directory">
            <div class="container-md">
                <div class="container">
                    <h2 class="heading-1 pad-12 pad-top-0">Mạng lưới chuyên gia công nghệ</h2>
                    <p class="paragraph-long pad-36 pad-top-0">Bạn có cơ hội kết nối và gặp gỡi các chuyên gia công nghệ thực thụ trong các lĩnh vực, giải pháp. Kết nối chuyên gia để giúp bạn đi nhanh hơn, hiệu quả hơn trong ứng dụng công nghệ.</p>
                </div>
                <div class="public-home-directory-list layout-row layout-wrap">
    			<?php
    			global $post;
     
    			$posts = get_posts( array(
    				'posts_per_page' => 5,
    				'offset'         => 0,
    				'post_type'   => 'experts'
    			) );
     
    			if ($posts) {
    				foreach ($posts as $post) : 
        				setup_postdata($post);

    				if (has_post_thumbnail()) {
    					$has_cover = "has-cover";
    					$bgStyle = "style=\"background-image: url(". get_the_post_thumbnail_url(get_the_ID(),'full') .")\"";
    				} else {
    					$bgStyle = "";
    					$has_cover = "";
    				}
    				
    				?>
                        <div class="flex-100 flex-gt-xs-50 flex-gt-sm-33 flex-gt-md-25 layout-row">
                            <a href="<?php echo get_permalink( $prevID ); ?>" class="cu-directory-card flex">
                                <div class="cu-directory-card-cover <?php echo $has_cover?>" <?php echo $bgStyle ?>>
                                    <div class="cu-directory-card-cover-shim">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </div>
                                </div>
                                <div class="cu-directory-card-content">
                                    <h2><?php the_title(); ?></h2>
                                    <h3>@(string.Join(", ", ctnms))</h3>
                                    <hr>
                                    <p><?php get_post_meta($post->ID, 'heading_line', true); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php
    					endforeach; 
    					wp_reset_postdata();
    					}
    				?>
                </div>
                <div class="public-home-directory-cta pad-36 pad-bottom-0">
                    <a href="/experts" class="lp-button lp-button--primary">Xem tất cả <span class="hide-xs show-gt-xs"> Chuyên gia</span></a>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer('new'); ?>
