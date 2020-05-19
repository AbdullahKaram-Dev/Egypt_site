<?php

require_once "libs/post.php";
require_once "libs/user.php";
require_once "libs/comment.php";

require_once "libs/general.php";

//echo time_ago(1568141138 );die;
if($_GET['postid']){
    $post_id = $_GET['postid'];
    $extra = "WHERE `id` = $post_id";
    $post = ShowAllPost($extra);

    $comments = ShowCommentByPost($post_id);




}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>TheSaaS - Blog post</title>

    <!-- Styles -->
    <link href="design/front/assets/css/core.min.css" rel="stylesheet">
    <link href="design/front/assets/css/thesaas.min.css" rel="stylesheet">
    <link href="design/front/assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">
</head>

<body>


<!-- Topbar -->
<nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
    <div class="container">

        <div class="topbar-left">
            <button class="topbar-toggler">&#9776;</button>
            <a class="topbar-brand" href="index.html">
                <img class="logo-default" src="assets/img/logo.png" alt="logo">
                <img class="logo-inverse" src="assets/img/logo-light.png" alt="logo">
            </a>
        </div>


        <div class="topbar-right">
            <ul class="topbar-nav nav">
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Samples <i class="fa fa-caret-down"></i></a>
                    <div class="nav-submenu">
                        <a class="nav-link" href="demo-helpato.html">Helpato</a>
                        <a class="nav-link" href="demo-trello.html">Trello</a>
                        <a class="nav-link" href="demo-gmail.html">Gmail</a>
                        <a class="nav-link" href="demo-skype.html">Skype</a>
                        <a class="nav-link" href="demo-github.html">GitHub</a>
                        <a class="nav-link" href="demo-app.html">Mobile App</a>
                        <a class="nav-link" href="demo-bootstrap.html">Bootstrap</a>
                        <a class="nav-link" href="demo-slack.html">Slack</a>
                        <a class="nav-link" href="demo-zendesk.html">Zendesk</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Headers <i class="fa fa-caret-down"></i></a>
                    <div class="nav-submenu">
                        <a class="nav-link" href="header-color.html">Solid Color</a>
                        <a class="nav-link" href="header-gradient.html">Gradient</a>
                        <a class="nav-link" href="header-particle.html">Particle</a>
                        <a class="nav-link" href="header-typing.html">Typing Text</a>
                        <a class="nav-link" href="header-image.html">Background Image</a>
                        <a class="nav-link" href="header-video.html">Background Video</a>
                        <a class="nav-link" href="header-parallax.html">Parallax</a>
                        <a class="nav-link" href="header-slider.html">Slider</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Blocks <i class="fa fa-caret-down"></i></a>
                    <div class="nav-submenu cols-2">
                        <a class="nav-link" href="block-feature.html">Feature</a>
                        <a class="nav-link" href="block-feature-textual.html">Textual feature</a>
                        <a class="nav-link" href="block-content.html">Content</a>
                        <a class="nav-link" href="block-portfolio.html">Portfolio</a>
                        <a class="nav-link" href="block-pricing.html">Pricing</a>
                        <a class="nav-link" href="block-cta.html">Call to action</a>
                        <a class="nav-link" href="block-testimonial.html">Testimonial</a>
                        <a class="nav-link" href="block-team.html">Team</a>
                        <a class="nav-link" href="block-contact.html">Contact</a>
                        <a class="nav-link" href="block-signup.html">Signup</a>
                        <a class="nav-link" href="block-subscribe.html">Subscribe</a>
                        <a class="nav-link" href="block-partner.html">Partner</a>
                        <a class="nav-link" href="block-topbar.html">Topbar</a>
                        <a class="nav-link" href="block-footer.html">Footer</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#">Blog <i class="fa fa-caret-down"></i></a>
                    <div class="nav-submenu">
                        <a class="nav-link" href="blog-grid.html">Blog grid</a>
                        <a class="nav-link" href="blog-list.html">Blog list</a>
                        <a class="nav-link active" href="blog-single.html">Post</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Shop <i class="fa fa-caret-down"></i></a>
                    <div class="nav-submenu">
                        <a class="nav-link" href="shop-list.html">Product list</a>
                        <a class="nav-link" href="shop-single.html">Single product</a>
                        <a class="nav-link" href="shop-cart.html">Cart overview</a>
                        <a class="nav-link" href="shop-checkout.html">Checkout</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Pages <i class="fa fa-caret-down"></i></a>
                    <div class="nav-submenu">
                        <a class="nav-link" href="page-how-it-works.html">How it works</a>
                        <a class="nav-link" href="page-pricing.html">Pricing</a>
                        <a class="nav-link" href="page-portfolio.html">Portfolio</a>
                        <a class="nav-link" href="page-project.html">Project</a>
                        <a class="nav-link" href="page-job.html">Jobs</a>
                        <a class="nav-link" href="page-job-single.html">Job Info</a>
                        <a class="nav-link" href="page-demo.html">Request Demo</a>
                        <a class="nav-link" href="page-press.html">Press</a>
                        <a class="nav-link" href="page-about.html">About</a>
                        <a class="nav-link" href="page-contact.html">Contact</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Extra <i class="fa fa-caret-down"></i></a>
                    <div class="nav-submenu">
                        <a class="nav-link" href="page-login.html">Login</a>
                        <a class="nav-link" href="page-register.html">Register</a>
                        <a class="nav-link" href="page-faq.html">FAQ</a>
                        <a class="nav-link" href="page-coming-soon.html">Coming soon</a>
                        <a class="nav-link" href="page-privacy.html">Privacy Policy</a>
                        <a class="nav-link" href="page-404.html">Error 404</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Doc <i class="fa fa-caret-down"></i></a>
                    <div class="nav-submenu align-right">
                        <a class="nav-link" href="doc-element.html">Elements</a>
                        <a class="nav-link" href="doc-component.html">Components</a>
                        <a class="nav-link" href="doc-section.html">Sections</a>
                        <a class="nav-link" href="doc-card.html">Cards</a>
                        <a class="nav-link" href="doc-typography.html">Typography</a>
                        <a class="nav-link" href="doc-utility.html">Utility Classes</a>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</nav>
<!-- END Topbar -->



<!-- Header -->
<header class="header header-inverse h-fullscreen pb-80" style="background-image: url(img/<?= $post[0]['img']; ?>);" data-overlay="5">
    <div class="container text-center">

        <div class="row h-full">
            <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

                <p class="opacity-70">News</p>
                <br>
                <h1 class="display-4 hidden-sm-down"><?= $post[0]['title']; ?></h1>
                <h1 class="hidden-md-up"><?= $post[0]['title']; ?></h1>
                <br><br>
                <p><span class="opacity-70 mr-8">By</span> <a class="text-white" href="#"><?= ShowUserName($post[0]['user_id']);?></a></p>
                <p><img class="rounded-circle w-40" src="img/<?= $post[0]['img']; ?>" alt="img/<?= $post[0]['img']; ?>"></p>

            </div>

            <div class="col-12 align-self-end text-center">
                <a class="scroll-down-1 scroll-down-inverse" href="#" data-scrollto="section-content"><span></span></a>
            </div>

        </div>

    </div>
</header>
<!-- END Header -->




<!-- Main container -->
<main class="main-content">



    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Blog content
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <div class="section" id="section-content">
        <div class="container">

            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">

                    <p class="lead"><?= $post[0]['artical']; ?></p>

                </div>
            </div>



            <br>
            <p><img src="img/<?= $post[0]['img']; ?>" alt="..."></p>
            <br>





        </div>
    </div>





    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Comments
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <div class="section bt-1 bg-grey">
        <div class="container">

            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">

                    <div class="media-list">

                        <?php foreach ($comments as $comment): ?>
                        <div class="media">
                            <img class="rounded-circle w-40" src="assets/img/avatar/1.jpg" alt="...">

                            <div class="media-body">
                                <p class="fs-14">
                                    <strong><?=$comment['name']; ?></strong>
                                    <time class="ml-16 opacity-70 fs-12" datetime="<?php time_ago($comment['created_at']); ?>"><?= time_ago($comment['created_at']);?></time>
                                </p>
                                <p class="fs-13"><?=$comment['comment'];?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                        <div id="commentadd" class="media"></div>

                    </div>


                    <hr>

                        <input type="hidden" name="post_id" id="postid" value="<?=$_GET['postid']?>">
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <input class="form-control" id="name" type="text" name="name" placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="comment" name="comment" placeholder="Comment" rows="4"></textarea>
                        </div>

                        <button class="btn btn-primary btn-block" onclick="addcomment()"  name="send">Submit your comment</button>
                </div>
            </div>

        </div>
    </div>





</main>
<!-- END Main container -->






<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row gap-y align-items-center">
            <div class="col-12 col-lg-3">
                <p class="text-center text-lg-left">
                    <a href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
                </p>
            </div>

            <div class="col-12 col-lg-6">
                <ul class="nav nav-primary nav-hero">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="block-feature.html">Features</a>
                    </li>
                    <li class="nav-item hidden-sm-down">
                        <a class="nav-link" href="page-pricing.html">Pricing</a>
                    </li>
                    <li class="nav-item hidden-sm-down">
                        <a class="nav-link" href="page-contact.html">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-lg-3">
                <div class="social text-center text-lg-right">
                    <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
                    <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
                    <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
                    <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END Footer -->

<script src="design/back/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    function addcomment() {

       var postid = $('#postid').val();
       var name = $('#name').val();
       var comment = $('#comment').val();

        $.ajax({
            type: 'POST',
            url: 'comment.php',
            data: 'name=' +  name + '&comment=' + comment + '&postid=' + postid,
            dataType: 'json',
            success: function (resp) {

            $('#commentadd').append(resp);

            },
            error: function () {
                alert('Error');
            }
        });
    }

</script>

<!-- Scripts -->
<script src="design/front/assets/js/core.min.js"></script>
<script src="design/front/assets/js/thesaas.min.js"></script>
<script src="design/front/assets/js/script.js"></script>

</body>
</html>
