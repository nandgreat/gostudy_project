<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->

<head>
    <meta charset="UTF-8">
    <title>How to 3D Testimonial Carousel using Materialize CSS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>

<style>
        body {
            margin: 0;
            padding: 0;
            background: #0a69ed;
        }

        .carousel {
            height: 600px;
            perspective: 250px;

        }

        .carousel .carousel-item {
            width: 450px;
            background: #fff;
            padding: 50px;
            height: auto;
            text-align: center;
            border-radius: 15px;
        }

        .img-area {
            width: 100px;
            height: 100px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 50%;
            border: inset 8px deepskyblue;
        }

        .img-area img {
            width: 100%;
        }

        .testi p {
            color: #262626;
            font-size: 18px;
            line-height: 1.9;
        }

        .testi h4 {
            font-size: 20px;
            margin: 0;
            color: #000;
        }

        .testi h5 {
            font-size: 14px;
            letter-spacing: 5px;
            margin: 7px 0;
        }
    </style>

    <div class="carousel">
        <a class="carousel-item" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="1.jpg">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                <h4>Jessica Jones</h4>
                <h5>Web Designer</h5>
            </div>
        </a>
        <a class="carousel-item" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="1.jpg">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                <h4>Jessica Jones</h4>
                <h5>Web Designer</h5>
            </div>
        </a>
        <a class="carousel-item" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="1.jpg">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                <h4>Jessica Jones</h4>
                <h5>Web Designer</h5>
            </div>
        </a>
        <a class="carousel-item" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="1.jpg">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                <h4>Jessica Jones</h4>
                <h5>Web Designer</h5>
            </div>
        </a>
        <a class="carousel-item" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="1.jpg">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                <h4>Jessica Jones</h4>
                <h5>Web Designer</h5>
            </div>
        </a>

    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.carousel').carousel({
                padding: 200
            });
            autoplay();

            function autoplay() {
                $('.carousel').carousel('next');
                setTimeout(autoplay, 4500);
            }
        });
    </script>
</body>

</html>