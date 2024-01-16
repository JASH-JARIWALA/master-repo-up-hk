<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        /* height: 100vh; */
        /* display: grid;
        place-items: center; */
    }

    .slider {
        width: 100%;
        max-width: 800px;
        height: 240px;
        position: relative;
        overflow: hidden;
        /* <===  */
        border-radius: 15px;
    }

    .slide {
        width: 100%;
        max-width: 800px;
        height: 100%;
        position: absolute;
        transition: all 0.5s;
    }

    .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .c-btn {
        position: absolute;
        width: 40px;
        height: 40px;
        padding: 10px;
        border: none;
        border-radius: 50%;
        z-index: 10px;
        cursor: pointer;
        box-shadow: none !important;
        background-color: white !important;
        color: black !important;
        font-size: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .c-btn:hover {
        color: gray !important;
    }

    .c-btn:active {
        transform: scale(1.1);
    }

    .btn-prev {
        top: 45%;
        left: 2%;
        width: 50px !important;
    }

    .btn-next {
        top: 45%;
        right: 2%;
        width: 50px !important;
    }
</style>
<!-- Slider container -->
<div class="slider">
    <!-- slide 1 -->
    <div class="slide">
        <img src="https://www.dpd.com/wp-content/uploads/sites/226/2023/09/DPD_B2C_mobile_header_cms_600x325_v2.png" alt="" />
    </div>

    <!-- slide 2 -->
    <div class="slide">
        <img src="https://source.unsplash.com/random?landscape,cars" alt="" />
    </div>

    <!-- slide 3 -->
    <div class="slide">
        <img src="https://source.unsplash.com/random?landscape,night" alt="" />
    </div>

    <!-- slide 4 -->
    <div class="slide">
        <img src="https://source.unsplash.com/random?landscape,city" alt="" />
    </div>

    <!-- Control buttons -->
    <button class="c-btn btn-next"> > </button>
    <button class="c-btn btn-prev">
        < </button>
</div>

<script>
    "use strict";
    // Select all slides
    const slides = document.querySelectorAll(".slide");

    // loop through slides and set each slides translateX
    slides.forEach((slide, indx) => {
        slide.style.transform = `translateX(${indx * 100}%)`;
    });

    // select next slide button
    const nextSlide = document.querySelector(".btn-next");

    // current slide counter
    let curSlide = 0;
    // maximum number of slides
    let maxSlide = slides.length - 1;

    // add event listener and navigation functionality
    nextSlide.addEventListener("click", function() {
        // check if current slide is the last and reset current slide
        if (curSlide === maxSlide) {
            curSlide = 0;
        } else {
            curSlide++;
        }

        //   move slide by -100%
        slides.forEach((slide, indx) => {
            slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
        });
    });

    // select next slide button
    const prevSlide = document.querySelector(".btn-prev");

    // add event listener and navigation functionality
    prevSlide.addEventListener("click", function() {
        // check if current slide is the first and reset current slide to last
        if (curSlide === 0) {
            curSlide = maxSlide;
        } else {
            curSlide--;
        }

        //   move slide by 100%
        slides.forEach((slide, indx) => {
            slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
        });
    });
</script>