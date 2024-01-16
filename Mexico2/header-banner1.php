<style>
    .banner {
        width: 100%;
        overflow: hidden;
        position: relative;
    }

    .image-container {
        display: flex;
        animation: slide 20s linear infinite;
    }

    .image-container img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    @keyframes slide {
        0% {
            transform: translateX(0);
        }

        14.2857% {
            transform: translateX(0);
        }

        28.5714% {
            transform: translateX(-100%);
        }

        42.8571% {
            transform: translateX(-100%);
        }

        57.1428% {
            transform: translateX(-200%);
        }

        71.4285% {
            transform: translateX(-200%);
        }

        85.7142% {
            transform: translateX(-300%);
        }

        100% {
            transform: translateX(-300%);
        }
    }


    @media (max-width: 480px) {
        .main-slider-container {
            height: 0;
            padding-bottom: 45.65%;
            position: relative;
            width: 100%;
        }

        .main-slider-item>div,
        .main-slider-holder,
        .main-slider-item .main-slider-img {
            width: 100%;
        }

        .main-slider-item .main-slider-img {
            height: auto;
        }
    }
</style>

<div class="banner">
    <div class="image-container">
        <img src="https://http2.mlstatic.com/D_NQ_808008-MLA71398940027_082023-F.webp" alt="Image 1">
        <img src="https://http2.mlstatic.com/D_NQ_768763-MLA71592412180_092023-F.webp" alt="Image 2">
        <img src="https://http2.mlstatic.com/D_NQ_839755-MLA71479547620_092023-F.webp" alt="Image 3">
        <img src="https://http2.mlstatic.com/D_NQ_840951-MLA70741257655_072023-F.webp" alt="Image 4">
        <img src="https://http2.mlstatic.com/D_NQ_884038-MLA71588965625_092023-F.webp" alt="Image 5">
        <img src="https://http2.mlstatic.com/D_NQ_768727-MLA71572432287_092023-F.webp" alt="Image 6">
        <img src="https://http2.mlstatic.com/D_NQ_944490-MLA71544701282_092023-F.webp" alt="Image 7">
    </div>
</div>