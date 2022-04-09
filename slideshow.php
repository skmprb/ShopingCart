<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <style>
            * {box-sizing: border-box;}
            body {font-family: Verdana, sans-serif;}
            .mySlides {display: none;}
            img {vertical-align: middle;}

            
            .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
                box-shadow: 10px 0px  10px 0px #717171;
            }

            .dot {
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }

    
            .fade {
                animation-name: fade;
                animation-duration: 5s;
            }

            @keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
            }

            @media only screen and (max-width: 300px) {
                .text {font-size: 11px}
            }
        </style>
    </head>
<body>

    <div class="slideshow-container">

    <div class="mySlides fade">
    <img src="./images/slide1.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
    <img src="./images/slide2.jpg" style="width:100%">
    </div>

    </div>
    <br>

    <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    </div>

    <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000);
    }
    </script>

</body>
</html> 