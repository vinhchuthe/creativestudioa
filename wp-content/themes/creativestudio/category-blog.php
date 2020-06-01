<?php
get_header(); ?>
<!--Style HomePage-->
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/contentmarketing/dist/css/news.css">
<link rel="stylesheet" href="<?= home_url(); ?>/wp-content/themes/contentmarketing/dist/plugins/wow/animate.css">

<script src="<?= home_url(); ?>/wp-content/themes/contentmarketing/dist/plugins/wow/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!--End Style HomePage-->

<?php
$category_current        = get_queried_object();
$category_current_parent = $category_current->parent;
$category_slug           = $category_current->slug;
$big_item                = new WP_Query( array(
	'post_type'      => 'post',
	'category_name'  => $category_slug,
	'posts_per_page' => 1,
	'order'          => 'DESC',
	'orderby'        => 'DATE',
	'meta_key'       => 'featured_post',
	'meta_value'     => '1'
) );
//var_dump($big_item);
//while ( $big_item->have_posts() ): $big_item->the_post();
//$postnotin =  get_the_ID();
//endwhile;

$list_item               = new WP_Query( array(
	'post_type'      => 'post',
	'post_status' => 'publish',
	'posts_per_page' => 6,
//	'page'           => $paged,
	'order'          => 'DESC',
	'orderby'        => 'DATE',
	'category_name'  => $category_slug,

) );

$all_item = new WP_Query( array(
	'post_type'      => 'post',
	'posts_per_page' => - 1,
	'order'          => 'DESC',
	'orderby'        => 'DATE',
	'category_name'  => $category_slug,
) );

$count_all_item = $all_item->post_count;

$maxpage = floor( $count_all_item / 6 + 1 );
$feature_item = new WP_Query( array(
	'post_type'      => 'post',
	'category_name'  => $category_slug,
	'posts_per_page' => 4,
	'order'          => 'DESC',
	'orderby'        => 'meta_value_num',
	'meta_key'       => 'post_views_count',
) );
?>
<input type="hidden" name="category_slug" value="<?= $category_slug ?>">
<input type="hidden" name="count_page" value="<?= $maxpage ?>">
<!--<input type="hidden" name="offsetpost" value="--><?//= $postnotin ?><!--">-->
<div id="news-category">

    <div class="news-group-top">
        <div class="container">
            <div class="news-group-top-content">
                <nav class="news-breadcrumb">
                    <ul>
                        <li>
                            <span class="fa fa-home"></span>
                            <a href="<?= home_url(); ?>">Trang chủ</a>
                        </li>

                        <li>
                            <a href="<?= home_url(); ?>/blog">Blog</a>
                        </li>
						<?php
						if ( $category_current_parent != 0 ): ?>
                            <li>
								<?= $category_current->cat_name ?>
                            </li>
						<?php endif; ?>
                    </ul>
                </nav>

                <h1><?= $category_current->cat_name ?>
                    <span class="lnr lnr-arrow-right"></span>
                </h1>
            </div>

        </div>
    </div>
    <div id="hook-header"></div>
    <div class="news-group-bottom">
        <!-- Main Content -->
        <div class="main-content">
            <div class="container">

                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-12 content-left">
                        <div class="news-group-left">
                            <div class="news-main-content">

                                <!-- Feature -->
                                <div class="update-title">
	                                <?php if ( $big_item->have_posts() ): ?>
                                    <h4>Bài nổi bật</h4>
                                    <?php endif; ?>

                                    <div class="list-grid-toggle">
                                        <div class="icon icon-grid">
                                            <div class="icon-bar"></div>
                                            <div class="icon-bar"></div>
                                            <div class="icon-bar"></div>
                                        </div>
                                    </div>
                                </div>

								<?php if ( $big_item->have_posts() ): ?>
                                    <div class="lastet-news ">
										<?php
										while ( $big_item->have_posts() ): $big_item->the_post();
											?>
                                            <div class="item">
                                                <div class="item-left wow fadeInRight"
                                                     data-wow-duration="1s"
                                                     data-wow-delay="0.3s">
                                                    <div class="item-left-top">
                                                        <h3>
                                                            <a class="item-title" href="<?php the_permalink(); ?>"
                                                               target="_blank"
                                                               title="<?php the_title(); ?>">
																<?php the_title(); ?>
                                                            </a>
                                                        </h3>

                                                        <div class="item-excerpt">
															<?= get_excerpt( 15 ); ?>
                                                        </div>
                                                    </div>

                                                    <div class="item-left-bottom">
                                                        <div class="col-left">
                                                            <ul class="item-sub">
                                                                <li>
                                                                    <img src="<?= home_url(); ?>/wp-content/themes/contentmarketing/dist/images/icon/clap.png"
                                                                         style="height: 20px"
                                                                         alt="">
																	<?php if ( function_exists( 'wp_applaud' ) ) {
																		wp_applaud();
																	} ?>
                                                                </li>

                                                                <li>
                                                                    <img src="<?= home_url(); ?>/wp-content/themes/contentmarketing/dist/images/icon/comment.png"
                                                                         alt="">
																	<?= get_comment_count_post(); ?>
                                                                </li>
                                                                <li>
                                                                    <img src="<?= home_url(); ?>/wp-content/themes/contentmarketing/dist/images/icon/share.png"
                                                                         alt="">
																	<?= get_share_count_post(); ?>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <div class="col-right">
                                                            <span class="date">
																<?php echo get_the_date( 'd/m/Y' ); ?>
                                                            </span>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="item-right wow fadeInLeft" data-wow-duration="1s"
                                                     data-wow-delay="0.3s">
                                                    <a href="<?php the_permalink(); ?>"
                                                       title="<?php the_title(); ?>" target="_blank" class="item-pic">
														<?php
														if ( has_post_thumbnail() ):
															the_post_thumbnail();
														else:?>
                                                            <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/contentmarketing/dist/images/nothumnail.png"
                                                                 alt="<?php the_title(); ?>">
														<?php endif; ?>
                                                    </a>
                                                    <div class="item-category">

                                                        <ul>
															<?php
															$category_detail = get_the_category();//$post->ID
															foreach ( $category_detail as $cd ) : ?>
                                                                <li>
                                                                    <a href="<?= get_category_link( $cd->term_id ) ?>"
                                                                       target="_blank">
																		<?= $cd->cat_name; ?>
                                                                    </a>
                                                                </li>
															<?php endforeach;
															wp_reset_postdata(); ?>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>


										<?php endwhile;
										wp_reset_query();
										?>
                                    </div>
								<?php
								endif;
								?>


                                <!-- End Feature -->

                                <!-- List news -->
                                <div class="news-list" id="group_news_list">

                                    <div class="row">

										<?php if ( $list_item->have_posts() ): ?>
											<?php $k = 0.3;
											while ( $list_item->have_posts() ): $list_item->the_post(); ?>
                                                <div class="col-master-child">
                                                    <div class="item wow fadeInLeft" data-wow-duration="1s"
                                                         data-wow-delay="<?= $k; ?>s">
                                                        <div class="item-pic">
                                                            <a href="<?php the_permalink(); ?>"
                                                               title="<?php the_title(); ?>" target="_blank">
																<?php
																if ( has_post_thumbnail() ):
																	the_post_thumbnail();
																else:?>
                                                                    <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/contentmarketing/dist/images/nothumnail.png"
                                                                         alt="<?php the_title(); ?>">
																<?php endif; ?>
                                                            </a>
                                                        </div>
                                                        <div class="item-content">
                                                            <a href="<?php the_permalink(); ?>" target="_blank"
                                                               class="item-content-title"
                                                               title="<?php the_title(); ?>">
																<?php the_title(); ?>
                                                            </a>
                                                            <div class="item-content-bottom">
                                                                <span class="date">
																	<?php echo get_the_date( 'd/m/Y' ); ?>
                                                                </span>
                                                                <ul class="item-sub">
                                                                    <li>
                                                                        <img src="<?= home_url(); ?>/wp-content/themes/contentmarketing/dist/images/icon/clap.png"
                                                                             style="height: 20px"
                                                                             alt="">
																		<?php if ( function_exists( 'wp_applaud' ) ) {
																			wp_applaud();
																		} ?>
                                                                    </li>

                                                                    <li>
                                                                        <img src="<?= home_url(); ?>/wp-content/themes/contentmarketing/dist/images/icon/comment.png"
                                                                             alt="">
																		<?= get_comment_count_post(); ?>
                                                                    </li>
                                                                    <li>
                                                                        <img src="<?= home_url(); ?>/wp-content/themes/contentmarketing/dist/images/icon/share.png"
                                                                             alt="">
																		<?= get_share_count_post(); ?>
                                                                    </li>

                                                                </ul>
                                                            </div>

                                                        </div>
                                                        <div class="item-category">
															<?php
															$primary_cat_id = get_post_meta( $post->ID, '_yoast_wpseo_primary_category', true );
															if ( $primary_cat_id ) :
																$post_cat = get_term( $primary_cat_id, 'category' );
																if ( isset( $post_cat->name ) ):?>
                                                                    <a href="<?= get_category_link( $post_cat->term_id ) ?>"
                                                                       target="_blank">
																		<?= $post_cat->name; ?>
                                                                    </a>
																<?php endif;

															else : ?>

																<?php
																$category_detail = get_the_category();//$post->ID
																foreach ( $category_detail as $index => $cd ) :
																	if ( $index == 0 ):?>
                                                                        <a href="<?= get_category_link( $cd->term_id ) ?>"
                                                                           target="_blank">
																			<?= $cd->cat_name; ?>
                                                                        </a>
																	<?php endif;endforeach;
																wp_reset_postdata(); ?>

															<?php endif; ?>

                                                        </div>
                                                    </div>
                                                </div>


												<?php $k = $k + 0.3; endwhile;
											wp_reset_query();
										endif; ?>
                                    </div>
                                </div>
								<?php
								if ( $count_all_item > 6 ) :?>
                                    <div class="loadmore-group">
                                        <button id="btn-loadmore" type="button">
                                            <span>Xem thêm</span>
                                            <i class="lnr lnr-chevron-down"></i>
                                        </button>
                                        <img src="<?= home_url(); ?>/wp-content/themes/contentmarketing/dist/images/icon/loadmore.gif"
                                             alt="">
                                    </div>
								<?php endif; ?>

                                <!-- End List news -->
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 content-right wow fadeInRight" data-wow-duration="1s"
                         data-wow-delay="0.3s">
                        <aside class="news-group-right">

                            <div class="box box-list-category">
                                <div class="box-header">
                                    <h3>
                                        <i class="fa fa-line-chart"></i>
                                        <span>Chủ đề</span>
                                        nổi bật
                                    </h3>
                                </div>
                                <div class="box-content">
									<?php
									$args       = array( 'child_of' => 1 );
									$categories = get_categories( $args ); ?>
                                    <ul>
										<?php foreach ( $categories as $category ) : ?>

                                            <li class="<?= (($category_current->term_id) == ($category->term_id) ? "active" : "")?>" >
                                                <a href="<?= get_category_link( $category->term_id ) ?>"
                                                   title="<?= $category->name ?>"> <?= $category->name ?></a>
                                            </li>
										<?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="box box-list-post">
                                <div class="box-header">
                                    <h3>
                                        <i class="fa fa-fire"></i>
                                        <span>Bài viết</span>
                                        nổi bật
                                    </h3>
                                </div>
                                <div class="box-content">
                                    <ul>

										<?php if ( $feature_item->have_posts() ): ?>
											<?php
											while ( $feature_item->have_posts() ): $feature_item->the_post();
												?>
                                                <li>
                                                    <span> <?php echo get_the_date( 'd/m/Y' ); ?></span>
                                                    <a href="<?php the_permalink(); ?>" target="_blank"
                                                       title="<?php the_title(); ?>" class="item__title">
	                                                    <?php if( get_field('featured_post') ): ?>

		                                                  <i class="fa fa-star"></i>

	                                                    <?php endif; ?>
														<?php the_title(); ?>
                                                    </a>
                                                </li>
											<?php endwhile;
											wp_reset_query();
										endif;
										?>


                                    </ul>
                                </div>
                                <div id="hook-fixed-aside"></div>
                            </div>

                            <div class="box box-check">
                                <div class="box-header">
                                    <h3>
                                        <span>Đăng ký nhận tin tức</span>
                                    </h3>
                                </div>
                                <div class="box-content">
									<?php echo do_shortcode( '[contact-form-7 id="873" title="Form News"]' ) ?>
                                </div>
                            </div>
                                <div id="hook-fixed-end"></div>

                        </aside>

                        <!-- Side bar -->

                        <!-- End Side bar -->

                        <!-- Newsletter -->

                        <!-- End Newsletter -->

                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Content -->
    </div>
</div>

<div id="hook-footer"></div>
<div id="bttop"></div>

<?php
get_footer();
?>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0"></script>


<script>

    $('.list-grid-toggle').click(function () {
        $('.icon').toggleClass('icon-grid');
        $('#group_news_list').toggleClass('news-list news-grid')
    });
    //Ajax Load more
    $(document).ready(function () {
        var current_count = 1;
        var category = $("input[name='category_slug']").val();
        var count_page = $("input[name='count_page']").val();
        var offset = 6; // khái báo số lượng bài viết đã hiển thị
        // var postnotin = $("input[name='count_page']").val();; // khái báo số lượng bài viết đã hiển thị
        var height_footer = $('footer').height();

        if(current_count >= count_page  ){
            btn_loadmore.hide();
        }
        var btn_loadmore = $("#btn-loadmore");
        btn_loadmore.click(function () {
            $(this).hide();
            $(this).parent().find("img").addClass("show");
            $.ajax({ // Hàm ajax
                type: "post", //Phương thức truyền post hoặc get
                dataType: "html", //Dạng dữ liệu trả về xml, json, script, or html
                async: true,
                url: '<?php echo admin_url( 'admin-ajax.php' );?>', // Nơi xử lý dữ liệu
                data: {
                    action: "loadmorenews", //Tên action, dữ liệu gởi lên cho server
                    offset: offset, // gởi số lượng bài viết đã hiển thị cho server
                    category: category, // gởi taxonomy
                },
                beforeSend: function () {
                    // Có thể thực hiện công việc load hình ảnh quay quay trước khi đổ dữ liệu ra
                },
                success: function (response) {
                    $('#group_news_list').append(response);
                    offset = offset + 6; // tăng bài viết đã hiển thị
                    btn_loadmore.show();
                    btn_loadmore.parent().find("img").removeClass("show");
                    current_count = current_count + 1;
                    if(current_count >= count_page  ){
                        btn_loadmore.hide();
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    //Làm gì đó khi có lỗi xảy ra
                    console.log('The following error occured: ' + textStatus, errorThrown);
                }
            });
        });

        if (windowsize > 769) {
            $(window).scroll(function () {
                var $aside =   $('.news-group-right');
                if ($(window).scrollTop() > $("#hook-fixed-aside").offset().top) {
                    if($("#hook-top").length > 0 ) {
                        if($("#hook-header").offset().top > $("#hook-top").offset().top){
                            $aside.removeClass('sticky');
                        }
                    } else{
                        $aside.prepend('<div id="hook-top"></div>');
                    }

                    $aside.addClass('sticky');
                }else {
                    $aside.removeClass('sticky');

                }
                if($("#hook-top").length > 0 ) {
                    if($("#hook-header").offset().top > $("#hook-top").offset().top){
                        $aside.removeClass('sticky');
                    }
                }
                if(($("#hook-footer").offset().top -  $("#header").offset().top - 30 ) < $(".news-group-right").height()){
                    $aside.addClass('sticky2')
                }
                else {
                    $aside.removeClass('sticky2')
                }
                if ($(this).scrollTop() != 0) {
                    $('#bttop').fadeIn();
                } else {
                    $('#bttop').fadeOut();
                }
            });

            $('#bttop').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
            });
        }
    });
</script>



