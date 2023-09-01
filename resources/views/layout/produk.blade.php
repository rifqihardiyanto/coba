@extends('partials.index')
@section('container')

<bodysingleproduk>
    <section class="single-produk">

        <div class="card-wrapper">
            <div class="card">
                <!-- card left -->
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                            <img class="singleproduk-img" src="img/profile5.jpg" alt="shoe image">
                            <img class="singleproduk-img" src="img/profile6.jpg" alt="shoe image">
                            <img class="singleproduk-img" src="img/profile5.jpg" alt="shoe image">
                            <img class="singleproduk-img" src="img/profile6.jpg" alt="shoe image">
                        </div>
                    </div>
                    <div class="img-select">
                        <div class="img-item">
                            <a href="#" data-id="1">
                                <img src="img/profile5.jpg" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="2">
                                <img src="img/profile6.jpg" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="3">
                                <img src="img/profile5.jpg" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="4">
                                <img src="img/profile6.jpg" alt="shoe image">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- card right -->
                <div class="single-product-content">
                    <h2 class="product-title">Nama Produk</h2>
                    <!-- <a href="#" class="product-link">visit nike store</a> -->
                    <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>4.7(21)</span>
                    </div>

                    <div class="product-price">
                        <p class="last-price">Old Price: <span>Rp 200.000</span></p>
                        <p class="new-price">New Price: <span>Rp 150.000</span></p>
                    </div>

                    <div class="product-detail">
                        <h2>Tentang Produk: </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga
                            tenetur
                            placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius.
                            Dignissimos, labore suscipit. Unde.</p>
                        <ul>
                            <li>Bahan: <span>Black, Black, Black</span></li>
                            <li>Available: <span>in stock</span></li>
                            <li>Category: <span>Shoes</span></li>
                            <li>Shipping Area: <span>All over the world</span></li>
                            <li>Shipping Fee: <span>Free</span></li>
                        </ul>
                    </div>

                    <div class="purchase-info">
                        <!-- <input type="number" min="0" value="1">
                        <button type="button" class="btn">
                            Add to Cart <i class="fas fa-shopping-cart"></i>
                        </button> -->
                        <button type="button" class="btn">Tanya Produk</button>
                    </div>

                    <!-- <div class="social-links">
                        <p>Share At: </p>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>

    </section>

    <script text="js/script">
    const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
        imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            imgId = imgItem.dataset.id;
            slideImage();
        });
    });

    function slideImage() {
        const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

        document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);
    </script>


    <!-- <script src="script.js"></script> -->
</bodysingleproduk>

@include('partials.footer')

@endsection