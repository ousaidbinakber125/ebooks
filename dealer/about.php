<?php
include 'navbar.php';
?>
<title>About Us</title>

<head>
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}

        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }

        a,
        a:active,
        a:focus {
            color: #6f6f6f;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        /* img {
    max-width: 100%;
    height: auto;
} */
        section {
            padding: 0px 0;
            /* min-height: 100vh;*/
        }

        .sec-title {
            position: relative;
            z-index: 1;
            margin-bottom: 60px;
        }

        .sec-title .title {
            position: relative;
            display: block;
            font-size: 18px;
            line-height: 24px;
            color: #00aeef;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .sec-title h2 {
            position: relative;
            display: block;
            font-size: 40px;
            line-height: 1.28em;
            color: #222222;
            font-weight: 600;
            padding-bottom: 18px;
        }

        .sec-title h2:before {
            position: absolute;
            content: '';
            left: 0px;
            bottom: 0px;
            width: 50px;
            height: 3px;
            background-color: #d1d2d6;
        }

        .sec-title .text {
            position: relative;
            font-size: 16px;
            line-height: 26px;
            color: #848484;
            font-weight: 400;
            margin-top: 35px;
        }

        .sec-title.light h2 {
            color: #ffffff;
        }

        .sec-title.text-center h2:before {
            left: 50%;
            margin-left: -25px;
        }

        .list-style-one {
            position: relative;
        }

        .list-style-one li {
            position: relative;
            font-size: 16px;
            line-height: 26px;
            color: #222222;
            font-weight: 400;
            padding-left: 35px;
            margin-bottom: 12px;
        }

        .list-style-one li:before {
            content: "\f058";
            position: absolute;
            left: 0;
            top: 0px;
            display: block;
            font-size: 18px;
            padding: 0px;
            color: #ff2222;
            font-weight: 600;
            -moz-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1.6;
            font-family: "Font Awesome 5 Free";
        }

        .list-style-one li a:hover {
            color: #44bce2;
        }

        .btn-style-one {
            position: relative;
            display: inline-block;
            font-size: 17px;
            line-height: 30px;
            color: #ffffff;
            padding: 10px 30px;
            font-weight: 600;
            overflow: hidden;
            letter-spacing: 0.02em;
            background-color: #00aeef;
        }

        .btn-style-one:hover {
            background-color: #0794c9;
            color: #ffffff;
        }

        .about-section {
            position: relative;
            padding: 120px 0 70px;
        }

        .about-section .sec-title {
            margin-bottom: 45px;
        }

        .about-section .content-column {
            position: relative;
            margin-bottom: 50px;
        }

        .about-section .content-column .inner-column {
            position: relative;
            padding-left: 30px;
        }

        .about-section .text {
            margin-bottom: 20px;
            font-size: 16px;
            line-height: 26px;
            color: #848484;
            font-weight: 400;
        }

        .about-section .list-style-one {
            margin-bottom: 45px;
        }

        .about-section .btn-box {
            position: relative;
        }

        .about-section .btn-box a {
            padding: 15px 50px;
        }

        .about-section .image-column {
            position: relative;
        }

        .about-section .image-column .text-layer {
            position: absolute;
            right: -110px;
            top: 50%;
            font-size: 325px;
            line-height: 1em;
            color: #ffffff;
            margin-top: -175px;
            font-weight: 500;
        }

        .about-section .image-column .inner-column {
            position: relative;
            /* padding-left: 80px; */
            padding-bottom: 0px;
        }

        .about-section .image-column .inner-column .author-desc {
            position: absolute;
            bottom: 16px;
            z-index: 1;
            background: orange;
            padding: 10px 15px;
            left: 96px;
            width: calc(100% - 152px);
            border-radius: 50px;
        }

        .about-section .image-column .inner-column .author-desc h2 {
            font-size: 21px;
            letter-spacing: 1px;
            text-align: center;
            color: #fff;
            margin: 0;
        }

        .about-section .image-column .inner-column .author-desc span {
            font-size: 16px;
            letter-spacing: 6px;
            text-align: center;
            color: #fff;
            display: block;
            font-weight: 400;
        }


/* 
        .about-section .image-column .video-link .link {
            position: relative;
            display: block;
            font-size: 22px;
            color: #191e34;
            font-weight: 400;
            text-align: center;
            height: 100px;
            width: 100px;
            line-height: 100px;
            background-color: #ffffff;
            border-radius: 50%;
            box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
            -webkit-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .about-section .image-column .video-link .link:hover {
            background-color: #191e34;
            color: #fff;
        } */
    </style>
</head>


<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="title">ABOUTS EBOOK</span>
                        <h2>WHAT IS AN EBOOK?</h2>
                    </div>
                    <div class="text">A book description is a brief summary of the book's contents. This includes the plot, main characters, and themes. The description is usually found on the back cover, inside flap, or on your book's page with online retailers such as Amazon.
                    </div>
                    <div class="text">
                    An ebook, short for 'electronic book,' is a digital form of a printed book designed to be read on devices like computers, tablets, or smartphones. Ebooks are vital marketing assets with multiple digital 'pages' that deliver information to its reader.
                    </div>
                    <div class="btn-box">
                        <a href="contact.php" class="theme-btn btn-style-one">Contact Us</a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft">

                    <img src="images/abouts1.svg" style="max-width: 100%;">

                </div>
            </div>

        </div>
        <div class="sec-title">
            <!-- <span class="title">Our Future Goal</span> --><br><br>
            <h2> KEEP YOUR GOALS IN MIND</h2>
        </div>
        <div class="text">
       
The reason you’re writing an eBook is that you want to use it in your marketing. So when you’re planning and writing it, keep your end goals in mind. Are you looking just to increase your brand awareness? Are you trying to generate interest in a specific product or service?  Or do you want to simply cement yourself as a subject matter expert, so that when customers are ready to buy, the only brand they think of is yours? Provide valuable information and guidance to your readers, but make sure your eBook will actually help you achieve your marketing goals.
        </div>
        <div class="text">
        An eBook is not an easy thing to write. They tend to average around 2,000 to 3,000 words depending on the topic, and the more in-depth you can go the better. But however long your eBook is, you need to be clear. So try to avoid ‘filler fluff’ to up the word count – there is no minimum! Instead, focus on making your points clearly and concisely, and be as consistent as possible. This means mapping out the structure of your eBook before you start, so you know how each section will flow into the next. This will stop you from repeating yourself and make sure you cover every point you want to touch on. It will also make the writing process a lot easier and quicker!
        </div>
        <div class="text">
        Now you have created your ebook it’s time to start using it to start generating leads! To maximise its impact, you need to know how to effectively use your ebook for lead generation. In this section, we will explore some proven marketing strategies to promote your ebook and attract the right audience, ultimately generating more leads for your business.
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>