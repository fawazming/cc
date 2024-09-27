
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Simplify School Management with CloudCampus</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    <meta name="keywords" content="Streamline administrative tasks, enhance teaching, and foster student success">
    <meta name="description" content="">

    <!-- plugins & libraries css -->
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>lassets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>lassets/vendor/font-awesome/all.min.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>lassets/vendor/slim-select/slimselect.css">

    <!-- tailwind css -->
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>lassets/output.css">

    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>lassets/css/style.css">
</head>

<body>
    <div class="ed-overlay group">
        <div class="fixed inset-0 z-[100] group-[.active]:bg-edblue/80 duration-[400ms] pointer-events-none group-[.active]:pointer-events-auto"></div>
    </div>

    <!-- cart -->
    <div class="ed-cart-bar group">
        <div class="w-[420px] max-w-full fixed z-[999] right-0 top-0 h-full bg-white flex flex-col translate-x-[100%] duration-[400ms] group-[.active]:translate-x-0">
            <!-- heading -->
            <div class="flex items-center justify-between px-[25px] border-b border-edgray/20 pb-[23px] pt-[22px]">
                <h5 class="text-[20px]">My Cart List</h5>
                <h6>(03 Items)</h6>
            </div>

            <!-- cart items -->
            <div>
                <!-- single cart item -->
                <div class="flex items-center gap-[20px] py-[30px] px-[25px] border-b border-edgray/20">
                    <img src="<?php echo CSS_URL; ?>lassets/img/cart-item-1.jpg" alt="Cart Item Image" class="rounded-[10px] shrink-0">
                    <div class="grow">
                        <h6 class="font-medium text-[18px] text-edblue"><a href="course-details.html" class="hover:text-edpurple">Web Development</a></h6>
                        <h6 class="font-medium text-edgray">$15.00</h6>
                    </div>
                    <button class="text-[20px] text-edgray shrink-0 hover:text-edpurple">x</button>
                </div>

                <!-- single cart item -->
                <div class="flex items-center gap-[20px] py-[30px] px-[25px] border-b border-edgray/20">
                    <img src="<?php echo CSS_URL; ?>lassets/img/cart-item-2.jpg" alt="Cart Item Image" class="rounded-[10px] shrink-0">
                    <div class="grow">
                        <h6 class="font-medium text-[18px] text-edblue"><a href="course-details.html" class="hover:text-edpurple">Digital Marketing</a></h6>
                        <h6 class="font-medium text-edgray">$15.00</h6>
                    </div>
                    <button class="text-[20px] text-edgray shrink-0 hover:text-edpurple">x</button>
                </div>

                <!-- single cart item -->
                <div class="flex items-center gap-[20px] py-[30px] px-[25px] border-b border-edgray/20">
                    <img src="<?php echo CSS_URL; ?>lassets/img/cart-item-3.jpg" alt="Cart Item Image" class="rounded-[10px] shrink-0">
                    <div class="grow">
                        <h6 class="font-medium text-[18px] text-edblue"><a href="course-details.html" class="hover:text-edpurple">WordPress Development</a></h6>
                        <h6 class="font-medium text-edgray">$15.00</h6>
                    </div>
                    <button class="text-[20px] text-edgray shrink-0 hover:text-edpurple">x</button>
                </div>
            </div>

            <!-- cart bottom -->
            <div class="mt-auto px-[25px] mb-[30px]">
                <div class="flex items-center justify-between font-medium text-[18px] text-edblue mb-[33px]">
                    <span>Total</span>
                    <span>$999</span>
                </div>
                <div class="space-y-[15px]">
                    <a href="#" class="ed-btn w-full !rounded-[10px] !bg-transparent border border-edblue !text-edblue hover:!bg-edblue hover:!text-white">Proceed to checkout</a>
                    <a href="#" class="ed-btn w-full !rounded-[10px]">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- search -->
    <div class="ed-search group">
        <form action="#" class="bg-white fixed z-[100] top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] h-[100px] md:h-[70px] xxs:h-[50px] w-[1224px] max-w-[95%] flex gap-[10px] rounded-full overflow-hidden px-[40px] xxs:px-[20px] pointer-events-none opacity-0 group-[.active]:pointer-events-auto group-[.active]:opacity-100 duration-[400ms]">
            <input type="search" name="ed-search" placeholder="Search Here..." class="bg-transparent w-full focus:outline-none">
            <button class="text-[25px] md:text-[22px] xxs:text-[20px]"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>

    <!-- sidebar -->
    <div class="ed-sidebar">
        <div class="translate-x-[100%] transition-transform ease-linear duration-300 fixed right-0 w-full max-w-[25%] xl:max-w-[30%] lg:max-w-[40%] md:max-w-[50%] sm:max-w-[60%] xxs:max-w-full bg-white h-full z-[999] overflow-auto">
            <!-- heading -->
            <div class="ed-sidebar-heading p-[20px] lg:p-[20px] border-b border-edgray/20">
                <div class="logo flex justify-between items-center">
                    <a href="index.html"><img src="<?php echo CSS_URL; ?>lassets/img/logo.png" alt="logo"></a>

                    <button type="button" class="ed-sidebar-close-btn border border-edgray/20 w-[45px] aspect-square shrink-0 text-black text-[22px] rounded-full hover:text-edpurple"><i class="fa-solid fa-xmark"></i></button>
                </div>
            </div>

            <!-- mobile menu -->
            <div class="ed-header-nav-in-mobile"></div>
        </div>
    </div>


    <!-- HEADER SECTION START -->
    <header class="bg-edblue ed-header--2 relative z-[2] px-[7.9%] xxxxl:px-[6.5%] xxxl:px-[1%] lg:px-[15px] py-[25px] xxs:py-[16px] flex items-center justify-between to-be-fixed">
        <div class="logo xxs:max-w-[40%]"><a href="index.html"><img src="<?php echo CSS_URL; ?>lassets/img/logo-light.png" alt="logo" class="logo" width="173px"></a></div>

        <div class="flex lg:items-center lg:gap-[30px]">
            <div class="flex lg:flex-col items-center gap-[60px] xxl:gap-[25px] xl:gap-[30px] md:gap-y-[15px]">
                <!-- search form -->
                <form action="#" class="to-go-to-sidebar-in-mobile max-w-[455px] xxl:max-w-[395px] lg:max-w-[95%] lg:mx-auto border border-white/20 lg:border-black/20 rounded-[6px] overflow-hidden h-[60px] flex xl:hidden lg:flex lg:my-[10px]">
                    <select name="category" id="ed-2-search-category" class="bg-transparent text-white lg:text-edblue pl-[50px] pr-[19px] lg:px-[10px] focus:outline-none before:absolute lg:before:hidden before:w-[17px] before:h-[12px] before:bg-[url(../<?php echo CSS_URL; ?>lassets/img/icon/hamburger.svg)] before:bg-no-repeat before:bg-center before:bg-contain before:top-[50%] before:-translate-y-[50%] before:left-[22px]">
                        <option value="none" class="bg-edblue" data-placeholder="true">Categories</option>
                        <option value="UI/UX Desgin" class="bg-edblue">UI/UX Desgin</option>
                        <option value="Web Development" class="bg-edblue">Web Development</option>
                        <option value="Video Editing" class="bg-edblue">Video Editing</option>
                        <option value="Content Writing" class="bg-edblue">Content Writing</option>
                    </select>
                    <input type="text" name="search" id="ed-2-header-search" class="w-full bg-transparent px-[20px] text-white lg:text-black focus:outline-0 focus-visible:outline-none">
                    <button type="submit" class="text-white lg:text-black pr-[20px]"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <!-- nav -->
                <ul class="to-go-to-sidebar-in-mobile ed-header-nav flex lg:flex-col gap-x-[43px] xxl:gap-x-[33px] font-kanit text-[17px] font-normal">
                    <li class="has-sub-menu relative">
                        <a role="button">Home</a>

                        <ul class="ed-header-submenu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="index-2.html">Home 02</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About us</a></li>
                    <li class="has-sub-menu relative">
                        <a role="button">Courses</a>

                        <ul class="ed-header-submenu">
                            <li><a href="course-grid.html">Courses Grid</a></li>
                            <li><a href="course-filter.html">Courses Filter</a></li>
                            <li><a href="course-details.html">Course Details</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu relative">
                        <a role="button">Pages</a>

                        <ul class="ed-header-submenu">
                            <li><a href="teachers.html">Teachers</a></li>
                            <li><a href="teacher-details.html">Teacher Details</a></li>
                            <li><a href="events.html">Events</a></li>
                            <li><a href="events-2.html">Events V.2</a></li>
                            <li><a href="event-details.html">Event Details</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="coming-soon.html">Coming Soon Page</a></li>
                            <li><a href="404.html">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu relative">
                        <a role="button">News</a>

                        <ul class="ed-header-submenu">
                            <li><a href="news-grid.html">News Grid</a></li>
                            <li><a href="news-list.html">News List</a></li>
                            <li><a href="news-details.html">News Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>

                <!-- right actions -->
                <div class="flex items-center gap-x-[60px] xxl:gap-x-[25px] lg:gap-x-[20px]">
                    <button class="ed-cart-opener-btn group">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M12.9894 13.6354H6.93871C6.06616 13.6354 5.2925 13.0682 5.05637 12.2557L3.01122 5.38995C2.93856 5.14134 2.69705 4.97072 2.42122 4.97072H0.818742C0.446713 4.97072 0.145996 4.67212 0.145996 4.30421C0.145996 3.93629 0.446713 3.6377 0.818742 3.6377H2.42122C3.29377 3.6377 4.06676 4.2049 4.30289 5.01737L4.68568 6.30374H14.9753C15.3951 6.30374 15.7934 6.50169 16.0403 6.83361C16.2852 7.16287 16.3558 7.57477 16.234 7.96402L14.8462 12.3283C14.5744 13.1161 13.8296 13.6354 12.9894 13.6354Z" class="fill-white group-hover:fill-edyellow" />
                                <path d="M7.54617 16.9687C6.80414 16.9687 6.20068 16.3707 6.20068 15.6353C6.20068 14.9 6.80414 14.302 7.54617 14.302C8.28821 14.302 8.89167 14.9 8.89167 15.6353C8.89167 16.3707 8.28821 16.9687 7.54617 16.9687Z" class="fill-white group-hover:fill-edyellow" />
                                <path d="M12.2556 16.9687C11.5136 16.9687 10.9102 16.3707 10.9102 15.6353C10.9102 14.9 11.5136 14.302 12.2556 14.302C12.9977 14.302 13.6011 14.9 13.6011 15.6353C13.6011 16.3707 12.9977 16.9687 12.2556 16.9687Z" class="fill-white group-hover:fill-edyellow" />
                            </g>
                        </svg>
                    </button>
                    <a href="contact.html" class="ed-btn to-go-to-sidebar-in-mobile lg:m-[20px]">apply now</a>
                </div>
            </div>

            <!-- mobile menu button -->
            <button type="button" class="ed-mobile-menu-open-btn hidden lg:inline-block text-white text-[18px] hover:text-edyellow"><i class="fa-solid fa-bars"></i></button>
        </div>
    </header>
    <!-- HEADER SECTION END -->


    <main>
        <!-- BANNER SECTION START -->
        <section class="ed-2-banner bg-edoffwhite pt-[120px] pb-[190px] relative z-[1] overflow-hidden">
            <div class="container max-w-[71.6%] xxxl:max-w-[86.5%] xxl:max-w-[90.6%] mx-auto">
                <div class="flex md:flex-col gap-x-[112px] gap-y-[40px] items-center">
                    <!-- banner text -->
                    <div class="max-w-[49%] xxxl:max-w-[45.5%] md:max-w-full shrink-0">
                        <h6 class="ed-section-sub-title !text-black before:!content-none">School <span class="text-edpurple">Management</span> System</h6>
                        <h1 class="font-medium text-[clamp(35px,5.4vw,80px)] text-edblue tracking-tight leading-[1.12] mb-[25px]">Efficient School Management at Your Fingertips with <span class="font-bold"><span class="inline-block text-edpurple relative before:absolute before:left-0 before:top-[calc(100%-6px)] before:w-[240px] before:h-[21px] before:bg-[url('../<?php echo CSS_URL; ?>lassets/img/banner-2-title-vector.svg')]">Cloud </span> Campus</span></h1>
                        <p class="text-edgray font-medium mb-[41px]">Manage your institution effortlessly with CloudCampus & Streamline administrative tasks, enhance teaching, and foster student success</p>
                        <div class="flex flex-wrap gap-[10px]">
                            <a href="course-filter.html" class="ed-btn !bg-transparent border border-edpurple !text-edpurple hover:!bg-edpurple hover:!text-white">Sign Up for Free Trial</a>
                            <a href="#about" class="ed-btn !bg-transparent border border-black !text-black hover:!bg-black hover:!text-white">about us</a>
                        </div>
                    </div>

                    <!-- banner image -->
                    <div class="max-w-[51%] md:max-w-full">
                        <div class="w-max relative z-[1] flex gap-[30px] items-center">
                            <img src="<?php echo CSS_URL; ?>lassets/img/banner-2-img-1.jpg" alt="banner image" class="border-[10px] border-white rounded-[20px] max-w-[241px] aspect-[261/366]">
                            <img src="<?php echo CSS_URL; ?>lassets/img/banner-2-img-2.jpg" alt="banner image" class="rounded-[20px]">

                            <!-- vectors -->
                            <div>
                                <div class="w-[242px] aspect-square rounded-full bg-edpurple opacity-80 blur-[110px] absolute -z-[1] bottom-0 left-[163px]"></div>
                                <img src="<?php echo CSS_URL; ?>lassets/img/banner-2-img-vector-1.svg" alt="vector" class="pointer-events-none absolute -z[1] top-[30px] -left-[35px]">
                                <img src="<?php echo CSS_URL; ?>lassets/img/banner-2-img-vector-2.svg" alt="vector" class="pointer-events-none absolute -z[1] -top-[50px] -right-[40px]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- vector -->
            <div>
                <img src="<?php echo CSS_URL; ?>lassets/img/banner-2-vector-1.svg" alt="vector" class="pointer-events-none absolute -z-[1] top-[135px] left-[38px] xxxl:hidden">
                <img src="<?php echo CSS_URL; ?>lassets/img/banner-2-vector-2.svg" alt="vector" class="pointer-events-none absolute -z-[1] bottom-0 left-0">
                <img src="<?php echo CSS_URL; ?>lassets/img/banner-2-vector-3.svg" alt="vector" class="pointer-events-none absolute -z-[1] -bottom-[8px] right-0">
            </div>
        </section>
        <!-- BANNER SECTION END -->

        <!-- ABOUT SECTION START -->
        <section class="ed-2-about bg-edoffwhite py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] before:absolute before:inset-0 before:-z-[1] before:bg-[url('../<?php echo CSS_URL; ?>lassets/img/about-us-bg.png')] before:opacity-[5%] before:bg-no-repeat before:bg-cover before:bg-center before:mix-blend-multiply">
            <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
                <div class="flex md:flex-col gap-x-[75px] gap-y-[30px]">
                    <!-- left -->
                    <div class="max-w-[46%] md:max-w-full grow shrink-0">
                        <div class="relative flex items-end">
                            <img src="<?php echo CSS_URL; ?>lassets/img/about-2-image-1.png" alt="About Image" class="border-[12px] border-white rounded-full">

                            <!-- video btn -->
                            <div class="relative shrink-0 -ml-[202px] lg:-ml-[262px] md:-ml-[202px] xs:-ml-[242px] -mb-[24px]">
                                <img src="<?php echo CSS_URL; ?>lassets/img/about-2-image-2.png" alt="About Image" class="border-[8px] border-white rounded-full w-[292px] xs:w-[252px] aspect-square">
                                <a href="https://youtu.be/5ppDzM8m9lI?si=zml3HbV176DBsZlg" data-fslightbox="gallery" class="flex items-center justify-center w-[60px] aspect-square bg-white rounded-full text-edyellow absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] before:border before:absolute before:top-[50%] before:-translate-y-[50%] before:left-[50%] before:-translate-x-[50%] before:w-[calc(100%+15px)] before:h-[calc(100%+15px)] before:rounded-full before:transition before:duration-[400ms] hover:bg-edpurple hover:text-white hover:before:border-edpurple"><i class="fa-solid fa-play"></i></a>
                            </div>

                            <!-- vectors -->
                            <div>
                                <img src="<?php echo CSS_URL; ?>lassets/img/about-2-img-vector.svg" alt="vector" class="absolute pointer-events-none top-[60px] right-[65px] -z-[1]">
                                <img src="<?php echo CSS_URL; ?>lassets/img/about-2-img-vector-2.svg" alt="vector" class="absolute pointer-events-none -bottom-[30px] right-0 -z-[1] md:hidden">
                            </div>
                        </div>
                    </div>

                    <!-- right -->
                    <div class="max-w-[54%] md:max-w-full">
                        <h6 class="ed-section-sub-title">About us</h6>
                        <h2 class="ed-section-title mb-[6px]">Learn New <span class="inline-block font-bold relative before:absolute before:left-0 before:top-[calc(100%-6px)] before:w-[137px] before:h-[14px] before:bg-[url('../<?php echo CSS_URL; ?>lassets/img/banner-2-title-vector.svg')] before:bg-[length:100%_100%]">Skills</span> To Go Ahead For Your Career</h2>
                        <p class="text-edgray mb-[34px]">Aonsectetur adipiscing elit Aenean scelerisque augue vitae consequat Juisque eget congue velit in cursus leo sodales the turpis euismod quis sapien euismod quis sapien the.</p>
                        <ul class="ed-about-list font-medium text-[18px] text-edblue grid grid-cols-2 xxs:grid-cols-1 gap-[20px] xxs:gap-[15px] mb-[52px] *:pl-[40px] *:relative *:before:absolute *:before:left-0 *:before:-top-[3px] *:before:w-[30px] *:before:aspect-square *:before:border *:before:border-edpurple *:before:rounded-full *:before:bg-[url(../<?php echo CSS_URL; ?>lassets/img/icon/checkmark.svg)] *:before:bg-no-repeat *:before:bg-[length:15px_13px] *:before:bg-center">
                            <li>Flexible Course Plan</li>
                            <li>Educator Support</li>
                            <li>Expert mentors</li>
                            <li>Lifetime Access</li>
                        </ul>
                        <a href="#" class="ed-btn">know more</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ABOUT SECTION END -->


        <!-- EVENTS SECTION START -->
        <section class="ed-2-events py-[120px] xl:py-[80px] md:py-[60px]">
            <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
                <!-- heading -->
                <div class="flex flex-wrap items-end justify-between gap-x-[30px] gap-y-[15px] border-b border-[#002147]/15 pb-[32px] xxs:pb-[22px] mb-[40px] xxs:mb-[30px]">
                    <div class="left">
                        <h6 class="ed-section-sub-title">upcoming events</h6>
                        <h2 class="ed-section-title">upcoming event</h2>
                    </div>
                    <!-- nav -->
                    <div class="ed-2-events-slider-nav flex gap-[15px] *:w-[40px] *:h-[40px] *:rounded-full *:border *:border-[#808080]/20 *:text-black *:text-[18px]">
                        <button class="prev hover:bg-edpurple hover:border-edpubg-edpurple hover:text-white"><i class="fa-solid fa-angle-left"></i></button>
                        <button class="next hover:bg-edpurple hover:border-edpubg-edpurple hover:text-white"><i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>

                <!-- events slider -->
                <div class="ed-2-events-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide w-[50%]">
                            <div class="space-y-[30px]">
                                <!-- single event -->
                                <div class="bg-edoffwhite rounded-[20px] p-[30px] sm:p-[20px] flex lg:flex-col sm:flex-row xs:flex-col items-center lg:items-start sm:items-center xs:items-start gap-[30px] sm:gap-[20px]">
                                    <!-- img -->
                                    <div class="relative">
                                        <img src="<?php echo CSS_URL; ?>lassets/img/event-4.jpg" alt="event cover" class="max-w-[215px] aspect-[215/203] object-cover rounded-[10px]">
                                        <!-- category -->
                                        <span class="absolute bottom-0 left-[50%] -translate-x-[50%] inline-flex items-center gap-[8px] bg-edyellow px-[12px] h-[35px] text-edblue font-medium text-[14px] rounded-tr-[8px] rounded-tl-[8px]">
                                            <span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/icon/convoc-cap.svg" alt="icon"></span>
                                            <span>Skills</span>
                                        </span>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <div class="flex items-center gap-[10px] font-medium text-[#808080] mb-[6px]">
                                            <span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/icon/clock-fill-yellow.svg" alt="icon"></span>
                                            <span>11:00 - 13:30</span>
                                        </div>
                                        <h5 class="font-semibold text-[20px] text-edblue mb-[4px]"><a href="event-details.html" class="hover:text-edpurple">Learning Communicate To Global</a></h5>
                                        <p class="text-edgray mb-[15px]">There are many variations of passages of Lorem Ipsum</p>
                                        <a href="#" class="font-medium text-edpurple flex items-center gap-[10px] hover:text-black">Read More <span class="icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                    </div>
                                </div>

                                <!-- single event -->
                                <div class="bg-edoffwhite rounded-[20px] p-[30px] sm:p-[20px] flex lg:flex-col sm:flex-row xs:flex-col items-center lg:items-start sm:items-center xs:items-start gap-[30px] sm:gap-[20px]">
                                    <!-- img -->
                                    <div class="relative">
                                        <img src="<?php echo CSS_URL; ?>lassets/img/event-2.jpg" alt="event cover" class="max-w-[215px] aspect-[215/203] object-cover rounded-[10px]">
                                        <!-- category -->
                                        <span class="absolute w-max max-w-full bottom-0 left-[50%] -translate-x-[50%] inline-flex items-center gap-[8px] bg-edyellow px-[12px] h-[35px] text-edblue font-medium text-[14px] rounded-tr-[8px] rounded-tl-[8px]">
                                            <span class="icon shrink-0"><img src="<?php echo CSS_URL; ?>lassets/img/icon/convoc-cap.svg" alt="icon"></span>
                                            <span>Programming</span>
                                        </span>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <div class="flex items-center gap-[10px] font-medium text-[#808080] mb-[6px]">
                                            <span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/icon/clock-fill-yellow.svg" alt="icon"></span>
                                            <span>11:00 - 13:30</span>
                                        </div>
                                        <h5 class="font-semibold text-[20px] text-edblue mb-[4px]"><a href="event-details.html" class="hover:text-edpurple">Learning Communicate To Global</a></h5>
                                        <p class="text-edgray mb-[15px]">There are many variations of passages of Lorem Ipsum</p>
                                        <a href="#" class="font-medium text-edpurple flex items-center gap-[10px] hover:text-black">Read More <span class="icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide w-[50%]">
                            <div class="space-y-[30px]">
                                <!-- single event -->
                                <div class="bg-edoffwhite rounded-[20px] p-[30px] sm:p-[20px] flex lg:flex-col sm:flex-row xs:flex-col items-center lg:items-start sm:items-center xs:items-start gap-[30px] sm:gap-[20px]">
                                    <!-- img -->
                                    <div class="relative">
                                        <img src="<?php echo CSS_URL; ?>lassets/img/event-3.jpg" alt="event cover" class="max-w-[215px] aspect-[215/203] object-cover rounded-[10px]">
                                        <!-- category -->
                                        <span class="absolute bottom-0 left-[50%] -translate-x-[50%] inline-flex items-center gap-[8px] bg-edyellow px-[12px] h-[35px] text-edblue font-medium text-[14px] rounded-tr-[8px] rounded-tl-[8px]">
                                            <span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/icon/convoc-cap.svg" alt="icon"></span>
                                            <span>Skills</span>
                                        </span>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <div class="flex items-center gap-[10px] font-medium text-[#808080] mb-[6px]">
                                            <span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/icon/clock-fill-yellow.svg" alt="icon"></span>
                                            <span>11:00 - 13:30</span>
                                        </div>
                                        <h5 class="font-semibold text-[20px] text-edblue mb-[4px]"><a href="event-details.html" class="hover:text-edpurple">Learning Communicate To Global</a></h5>
                                        <p class="text-edgray mb-[15px]">There are many variations of passages of Lorem Ipsum</p>
                                        <a href="#" class="font-medium text-edpurple flex items-center gap-[10px] hover:text-black">Read More <span class="icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                    </div>
                                </div>

                                <!-- single event -->
                                <div class="bg-edoffwhite rounded-[20px] p-[30px] sm:p-[20px] flex lg:flex-col sm:flex-row xs:flex-col items-center lg:items-start sm:items-center xs:items-start gap-[30px] sm:gap-[20px]">
                                    <!-- img -->
                                    <div class="relative">
                                        <img src="<?php echo CSS_URL; ?>lassets/img/event-1.jpg" alt="event cover" class="max-w-[215px] aspect-[215/203] object-cover rounded-[10px]">
                                        <!-- category -->
                                        <span class="absolute w-max max-w-full bottom-0 left-[50%] -translate-x-[50%] inline-flex items-center gap-[8px] bg-edyellow px-[12px] h-[35px] text-edblue font-medium text-[14px] rounded-tr-[8px] rounded-tl-[8px]">
                                            <span class="icon shrink-0"><img src="<?php echo CSS_URL; ?>lassets/img/icon/convoc-cap.svg" alt="icon"></span>
                                            <span>Programming</span>
                                        </span>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <div class="flex items-center gap-[10px] font-medium text-[#808080] mb-[6px]">
                                            <span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/icon/clock-fill-yellow.svg" alt="icon"></span>
                                            <span>11:00 - 13:30</span>
                                        </div>
                                        <h5 class="font-semibold text-[20px] text-edblue mb-[4px]"><a href="event-details.html" class="hover:text-edpurple">Learning Communicate To Global</a></h5>
                                        <p class="text-edgray mb-[15px]">There are many variations of passages of Lorem Ipsum</p>
                                        <a href="#" class="font-medium text-edpurple flex items-center gap-[10px] hover:text-black">Read More <span class="icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide w-[50%]">
                            <div class="space-y-[30px]">
                                <!-- single event -->
                                <div class="bg-edoffwhite rounded-[20px] p-[30px] sm:p-[20px] flex lg:flex-col sm:flex-row xs:flex-col items-center lg:items-start sm:items-center xs:items-start gap-[30px] sm:gap-[20px]">
                                    <!-- img -->
                                    <div class="relative">
                                        <img src="<?php echo CSS_URL; ?>lassets/img/event-4.jpg" alt="event cover" class="max-w-[215px] aspect-[215/203] object-cover rounded-[10px]">
                                        <!-- category -->
                                        <span class="absolute bottom-0 left-[50%] -translate-x-[50%] inline-flex items-center gap-[8px] bg-edyellow px-[12px] h-[35px] text-edblue font-medium text-[14px] rounded-tr-[8px] rounded-tl-[8px]">
                                            <span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/icon/convoc-cap.svg" alt="icon"></span>
                                            <span>Skills</span>
                                        </span>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <div class="flex items-center gap-[10px] font-medium text-[#808080] mb-[6px]">
                                            <span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/icon/clock-fill-yellow.svg" alt="icon"></span>
                                            <span>11:00 - 13:30</span>
                                        </div>
                                        <h5 class="font-semibold text-[20px] text-edblue mb-[4px]"><a href="event-details.html" class="hover:text-edpurple">Learning Communicate To Global</a></h5>
                                        <p class="text-edgray mb-[15px]">There are many variations of passages of Lorem Ipsum</p>
                                        <a href="#" class="font-medium text-edpurple flex items-center gap-[10px] hover:text-black">Read More <span class="icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                    </div>
                                </div>

                                <!-- single event -->
                                <div class="bg-edoffwhite rounded-[20px] p-[30px] sm:p-[20px] flex lg:flex-col sm:flex-row xs:flex-col items-center lg:items-start sm:items-center xs:items-start gap-[30px] sm:gap-[20px]">
                                    <!-- img -->
                                    <div class="relative">
                                        <img src="<?php echo CSS_URL; ?>lassets/img/event-2.jpg" alt="event cover" class="max-w-[215px] aspect-[215/203] object-cover rounded-[10px]">
                                        <!-- category -->
                                        <span class="absolute w-max max-w-full bottom-0 left-[50%] -translate-x-[50%] inline-flex items-center gap-[8px] bg-edyellow px-[12px] h-[35px] text-edblue font-medium text-[14px] rounded-tr-[8px] rounded-tl-[8px]">
                                            <span class="icon shrink-0"><img src="<?php echo CSS_URL; ?>lassets/img/icon/convoc-cap.svg" alt="icon"></span>
                                            <span>Programming</span>
                                        </span>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <div class="flex items-center gap-[10px] font-medium text-[#808080] mb-[6px]">
                                            <span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/icon/clock-fill-yellow.svg" alt="icon"></span>
                                            <span>11:00 - 13:30</span>
                                        </div>
                                        <h5 class="font-semibold text-[20px] text-edblue mb-[4px]"><a href="event-details.html" class="hover:text-edpurple">Learning Communicate To Global</a></h5>
                                        <p class="text-edgray mb-[15px]">There are many variations of passages of Lorem Ipsum</p>
                                        <a href="#" class="font-medium text-edpurple flex items-center gap-[10px] hover:text-black">Read More <span class="icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- EVENTS SECTION END -->


        <!-- CTA SECTION START -->
        <section class="ed-2-cta overflow-hidden bg-edpurple pt-[15px] md:pt-[40px] relative z-[1] before:absolute before:inset-0 before:bg-[url(../<?php echo CSS_URL; ?>lassets/img/cta-2-vector.png)] before:bg-center before:bg-no-repeat before:bg-cover before:-z-[1]">
            <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
                <div class="flex md:flex-col gap-y-[15px] items-center justify-between">
                    <!-- text -->
                    <div class="max-w-[600px] md:max-w-full shrink-0 relative">
                        <h3 class="font-semibold text-[36px] sm:text-[32px] xxs:text-[28px] text-white leading-[1.4] mb-[41px] xxs:mb-[31px]">15% Offer For All Categories Courses</h3>
                        <a href="course-grid.html" class="ed-btn !h-[56px] !bg-white !text-black gap-[10px] hover:!bg-edyellow hover:!text-edblue">Join Courses <span class="icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>

                        <!-- vector -->
                        <img src="<?php echo CSS_URL; ?>lassets/img/cta-2-txt-vector.svg" alt="vector" class="absolute bottom-[10px] left-[37%] xs:left-[75%]">
                    </div>

                    <!-- image -->
                    <div class="mr-[40px] lg:mr-0 relative z-[1] shrink-0">
                        <img src="<?php echo CSS_URL; ?>lassets/img/cta-2-img.png" alt="image">
                        <!-- vector -->
                        <div class="aspect-square w-[386px] border-[57px] border-edyellow rounded-full absolute bottom-0 right-[25%] translate-y-[50%] -z-[1]"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA SECTION END -->


        <!-- FAQ SECTION START -->
        <section class="py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden">
            <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
                <div class="grid grid-cols-2 md:grid-cols-1 gap-x-[60px] gap-y-[25px] items-center">
                    <!-- left -->
                    <div class="grow shrink-0">
                        <div class="relative flex items-end md:justify-center mb-[140px]">
                            <img src="<?php echo CSS_URL; ?>lassets/img/faq-2-img-1.jpg" alt="About Image" class="border-[8px] border-white rounded-[8px] shrink-0">
                            <img src="<?php echo CSS_URL; ?>lassets/img/faq-2-img-2.jpg" alt="About Image" class="border-[8px] border-white rounded-[8px] shrink-0 -ml-[202px] lg:-ml-[272px] -mb-[140px]">

                            <!-- vectors -->
                            <div>
                                <img src="<?php echo CSS_URL; ?>lassets/img/about-2-img-vector.svg" alt="vector" class="absolute pointer-events-none rounded-full top-[60px] right-[110px] -z-[1]">
                                <img src="<?php echo CSS_URL; ?>lassets/img/about-2-img-vector.svg" alt="vector" class="absolute pointer-events-none rounded-full top-[100%] left-[30px] -z-[1]">
                                <img src="<?php echo CSS_URL; ?>lassets/img/faq-img-vector.svg" alt="vector" class="absolute pointer-events-none top-[52%] left-[20px] -z-[1]">
                                <img src="<?php echo CSS_URL; ?>lassets/img/banner-2-img-vector-2.svg" alt="vector" class="absolute pointer-events-none top-[30px] right-[50px]">
                            </div>
                        </div>
                    </div>

                    <!-- text -->
                    <div>
                        <h6 class="ed-section-sub-title">FAQ</h6>
                        <h2 class="ed-section-title mb-[26px]">We Are Always Ensure Best Course For Your Learning</h2>

                        <div class="ed-accordion space-y-[20px]">
                            <!-- single question -->
                            <div class="ed-single-accordion-item bg-white rounded-[6px] py-[24px] xs:py-[15px] px-[30px] xs:px-[20px] shadow-[0_4px_25px_rgba(0,0,0,0.06)] open">
                                <div class="ed-single-accordion-item__header flex items-center justify-between cursor-pointer">
                                    <h3 class="ed-single-accordion-item__title font-semibold text-[20px] text-etBlack">Organizes eLearning content in one location?</h3>
                                    <span class="text-[15px]"><i class="fa-solid fa-angles-right"></i></span>
                                </div>

                                <div class="ed-single-accordion-item__body">
                                    <p class="font-light text-[16px] text-etGray">Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio. Mauris et mollis quam. Nullam fringilla erat id ante commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.</p>
                                </div>
                            </div>

                            <!-- single question -->
                            <div class="ed-single-accordion-item bg-white rounded-[6px] py-[24px] xs:py-[15px] px-[30px] xs:px-[20px] shadow-[0_4px_25px_rgba(0,0,0,0.06)]">
                                <div class="ed-single-accordion-item__header flex items-center justify-between cursor-pointer">
                                    <h3 class="ed-single-accordion-item__title font-semibold text-[20px] text-etBlack">How to buy an event ticket?</h3>
                                    <span class="text-[15px]"><i class="fa-solid fa-angles-right"></i></span>
                                </div>

                                <div class="ed-single-accordion-item__body">
                                    <p class="font-light text-[16px] text-etGray">Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio. Mauris et mollis quam. Nullam fringilla erat id ante commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.</p>
                                </div>
                            </div>

                            <!-- single question -->
                            <div class="ed-single-accordion-item bg-white rounded-[6px] py-[24px] xs:py-[15px] px-[30px] xs:px-[20px] shadow-[0_4px_25px_rgba(0,0,0,0.06)]">
                                <div class="ed-single-accordion-item__header flex items-center justify-between cursor-pointer">
                                    <h3 class="ed-single-accordion-item__title font-semibold text-[20px] text-etBlack">What type of company is measured?</h3>
                                    <span class="text-[15px]"><i class="fa-solid fa-angles-right"></i></span>
                                </div>

                                <div class="ed-single-accordion-item__body">
                                    <p class="font-light text-[16px] text-etGray">Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio. Mauris et mollis quam. Nullam fringilla erat id ante commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- vector -->
            <img src="<?php echo CSS_URL; ?>lassets/img/faq-2-vector.svg" alt="vector" class="absolute -z-[1] pointer-events-none right-0 bottom-[255px]">
        </section>
        <!-- FAQ SECTION END -->


        <!-- INSTRUCTORS SECTION START -->
        <section class="bg-edoffwhite py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden">
            <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
                <!-- heading -->
                <div class="text-center mb-[46px] lg:mb-[36px] md:mb-[26px]">
                    <h2 class="ed-section-sub-title">our INSTRUCTORS</h2>
                    <h6 class="ed-section-title">our expert instructors</h6>
                </div>

                <!-- instructor cards -->
                <div class="grid grid-cols-4 sm:grid-cols-3 xs:grid-cols-2 xxs:grid-cols-1 gap-[30px] md:gap-[15px]">
                    <!-- single instructor -->
                    <div class="text-center group">
                        <!-- img -->
                        <div class="relative mb-[18px] overflow-hidden rounded-[12px]">
                            <img src="<?php echo CSS_URL; ?>lassets/img/instructor-1.jpg" alt="instructor image" class="w-full aspect-[270/320] object-cover group-hover:scale-110">
                            <!-- socials -->
                            <div class="et-member-socials absolute right-[20px] md:right-[15px] top-[20px] md:top-[15px] z-[1]">
                                <div class="et-member-socials__icon w-[40px] md:w-[35px] aspect-square rounded-full border border-white flex items-center justify-center group-hover:bg-white">
                                    <svg width="17" height="20" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.89361 9.41703C9.22284 9.41703 8.61849 9.70668 8.19906 10.1675L4.42637 7.83088C4.52995 7.56611 4.58305 7.28429 4.58294 6.99999C4.58307 6.71568 4.52997 6.43386 4.42637 6.16909L8.19906 3.83238C8.61851 4.29318 9.22284 4.58297 9.89361 4.58297C11.1572 4.58297 12.1851 3.55501 12.1851 2.29143C12.1851 1.02785 11.1572 0 9.89361 0C8.63005 0 7.60209 1.02796 7.60209 2.29154C7.60204 2.57583 7.65514 2.85763 7.75866 3.1224L3.98608 5.45903C3.56663 4.99824 2.96231 4.70845 2.29154 4.70845C1.02796 4.70845 0 5.73652 0 6.99999C0 8.26354 1.02796 9.29152 2.29154 9.29152C2.96228 9.29152 3.56666 9.00185 3.98608 8.54094L7.75869 10.8776C7.65515 11.1424 7.60204 11.4242 7.60209 11.7085C7.60209 12.972 8.63003 14 9.89361 14C11.1572 14 12.1851 12.972 12.1851 11.7086C12.1851 10.445 11.1572 9.41703 9.89361 9.41703ZM8.43766 2.29154C8.43766 1.48873 9.09082 0.835596 9.89361 0.835596C10.6964 0.835596 11.3495 1.48873 11.3495 2.29154C11.3495 3.09435 10.6964 3.74748 9.89361 3.74748C9.09079 3.74748 8.43766 3.09432 8.43766 2.29154ZM2.29154 8.45593C1.48862 8.45593 0.835487 7.80277 0.835487 6.99999C0.835487 6.1972 1.48862 5.54404 2.29154 5.54404C3.09435 5.54404 3.74737 6.1972 3.74737 6.99999C3.74737 7.80277 3.09432 8.45593 2.29154 8.45593ZM8.43766 11.7085C8.43766 10.9057 9.09082 10.2525 9.89361 10.2525C10.6964 10.2525 11.3495 10.9057 11.3495 11.7084C11.3495 12.5112 10.6964 13.1644 9.89361 13.1644C9.09079 13.1644 8.43766 12.5112 8.43766 11.7084V11.7085Z" class="fill-white group-hover:fill-edpurple duration-[400ms]" />
                                    </svg>
                                </div>
                                <div class="et-speaker__socials flex flex-col gap-[8px] absolute -z-[2] text-[14px] opacity-0 transition duration-[400ms] top-[calc(100%+8px)] -translate-y-[50px] group-hover:translate-y-0 group-hover:opacity-100">
                                    <a href="#" class="border bg-white text-[18px] text-edpurple w-[40px] md:w-[35px] aspect-square flex items-center justify-center rounded-full hover:border-edpurple hover:bg-transparent"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#" class="border bg-white text-[18px] text-edpurple w-[40px] md:w-[35px] aspect-square flex items-center justify-center rounded-full hover:border-edpurple hover:bg-transparent"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#" class="border bg-white text-[18px] text-edpurple w-[40px] md:w-[35px] aspect-square flex items-center justify-center rounded-full hover:border-edpurple hover:bg-transparent"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- txt -->
                        <div>
                            <h6 class="font-semibold text-[18px] text-edblue mb-[12px]"><a href="teacher-details.html" class="hover:text-edyellow">Brooklyn Simmons</a></h6>
                            <span class="text-edgray">Digital Expert</span>
                        </div>
                    </div>

                    <!-- single instructor -->
                    <div class="text-center group">
                        <!-- img -->
                        <div class="relative mb-[18px] overflow-hidden rounded-[12px]">
                            <img src="<?php echo CSS_URL; ?>lassets/img/instructor-2.jpg" alt="instructor image" class="w-full aspect-[270/320] object-cover group-hover:scale-110">
                            <!-- socials -->
                            <div class="et-member-socials absolute right-[20px] md:right-[15px] top-[20px] md:top-[15px] z-[1]">
                                <div class="et-member-socials__icon w-[40px] md:w-[35px] aspect-square rounded-full border border-white flex items-center justify-center group-hover:bg-white">
                                    <svg width="17" height="20" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.89361 9.41703C9.22284 9.41703 8.61849 9.70668 8.19906 10.1675L4.42637 7.83088C4.52995 7.56611 4.58305 7.28429 4.58294 6.99999C4.58307 6.71568 4.52997 6.43386 4.42637 6.16909L8.19906 3.83238C8.61851 4.29318 9.22284 4.58297 9.89361 4.58297C11.1572 4.58297 12.1851 3.55501 12.1851 2.29143C12.1851 1.02785 11.1572 0 9.89361 0C8.63005 0 7.60209 1.02796 7.60209 2.29154C7.60204 2.57583 7.65514 2.85763 7.75866 3.1224L3.98608 5.45903C3.56663 4.99824 2.96231 4.70845 2.29154 4.70845C1.02796 4.70845 0 5.73652 0 6.99999C0 8.26354 1.02796 9.29152 2.29154 9.29152C2.96228 9.29152 3.56666 9.00185 3.98608 8.54094L7.75869 10.8776C7.65515 11.1424 7.60204 11.4242 7.60209 11.7085C7.60209 12.972 8.63003 14 9.89361 14C11.1572 14 12.1851 12.972 12.1851 11.7086C12.1851 10.445 11.1572 9.41703 9.89361 9.41703ZM8.43766 2.29154C8.43766 1.48873 9.09082 0.835596 9.89361 0.835596C10.6964 0.835596 11.3495 1.48873 11.3495 2.29154C11.3495 3.09435 10.6964 3.74748 9.89361 3.74748C9.09079 3.74748 8.43766 3.09432 8.43766 2.29154ZM2.29154 8.45593C1.48862 8.45593 0.835487 7.80277 0.835487 6.99999C0.835487 6.1972 1.48862 5.54404 2.29154 5.54404C3.09435 5.54404 3.74737 6.1972 3.74737 6.99999C3.74737 7.80277 3.09432 8.45593 2.29154 8.45593ZM8.43766 11.7085C8.43766 10.9057 9.09082 10.2525 9.89361 10.2525C10.6964 10.2525 11.3495 10.9057 11.3495 11.7084C11.3495 12.5112 10.6964 13.1644 9.89361 13.1644C9.09079 13.1644 8.43766 12.5112 8.43766 11.7084V11.7085Z" class="fill-white group-hover:fill-edpurple duration-[400ms]" />
                                    </svg>
                                </div>
                                <div class="et-speaker__socials flex flex-col gap-[8px] absolute -z-[2] text-[14px] opacity-0 transition duration-[400ms] top-[calc(100%+8px)] -translate-y-[50px] group-hover:translate-y-0 group-hover:opacity-100">
                                    <a href="#" class="border bg-white text-[18px] text-edpurple w-[40px] md:w-[35px] aspect-square flex items-center justify-center rounded-full hover:border-edpurple hover:bg-transparent"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#" class="border bg-white text-[18px] text-edpurple w-[40px] md:w-[35px] aspect-square flex items-center justify-center rounded-full hover:border-edpurple hover:bg-transparent"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#" class="border bg-white text-[18px] text-edpurple w-[40px] md:w-[35px] aspect-square flex items-center justify-center rounded-full hover:border-edpurple hover:bg-transparent"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- txt -->
                        <div>
                            <h6 class="font-semibold text-[18px] text-edblue mb-[12px]"><a href="teacher-details.html" class="hover:text-edyellow">Leslie Alexander</a></h6>
                            <span class="text-edgray">UI/UX Designer</span>
                        </div>
                    </div>

                    <!-- single instructor -->
                    <div class="text-center group">
                        <!-- img -->
                        <div class="relative mb-[18px] overflow-hidden rounded-[12px]">
                            <img src="<?php echo CSS_URL; ?>lassets/img/instructor-3.jpg" alt="instructor image" class="w-full aspect-[270/320] object-cover group-hover:scale-110">
                            <!-- socials -->
                            <div class="et-member-socials absolute right-[20px] md:right-[15px] top-[20px] md:top-[15px] z-[1]">
                                <div class="et-member-socials__icon w-[40px] md:w-[35px] aspect-square rounded-full border border-white flex items-center justify-center group-hover:bg-white">
                                    <svg width="17" height="20" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.89361 9.41703C9.22284 9.41703 8.61849 9.70668 8.19906 10.1675L4.42637 7.83088C4.52995 7.56611 4.58305 7.28429 4.58294 6.99999C4.58307 6.71568 4.52997 6.43386 4.42637 6.16909L8.19906 3.83238C8.61851 4.29318 9.22284 4.58297 9.89361 4.58297C11.1572 4.58297 12.1851 3.55501 12.1851 2.29143C12.1851 1.02785 11.1572 0 9.89361 0C8.63005 0 7.60209 1.02796 7.60209 2.29154C7.60204 2.57583 7.65514 2.85763 7.75866 3.1224L3.98608 5.45903C3.56663 4.99824 2.96231 4.70845 2.29154 4.70845C1.02796 4.70845 0 5.73652 0 6.99999C0 8.26354 1.02796 9.29152 2.29154 9.29152C2.96228 9.29152 3.56666 9.00185 3.98608 8.54094L7.75869 10.8776C7.65515 11.1424 7.60204 11.4242 7.60209 11.7085C7.60209 12.972 8.63003 14 9.89361 14C11.1572 14 12.1851 12.972 12.1851 11.7086C12.1851 10.445 11.1572 9.41703 9.89361 9.41703ZM8.43766 2.29154C8.43766 1.48873 9.09082 0.835596 9.89361 0.835596C10.6964 0.835596 11.3495 1.48873 11.3495 2.29154C11.3495 3.09435 10.6964 3.74748 9.89361 3.74748C9.09079 3.74748 8.43766 3.09432 8.43766 2.29154ZM2.29154 8.45593C1.48862 8.45593 0.835487 7.80277 0.835487 6.99999C0.835487 6.1972 1.48862 5.54404 2.29154 5.54404C3.09435 5.54404 3.74737 6.1972 3.74737 6.99999C3.74737 7.80277 3.09432 8.45593 2.29154 8.45593ZM8.43766 11.7085C8.43766 10.9057 9.09082 10.2525 9.89361 10.2525C10.6964 10.2525 11.3495 10.9057 11.3495 11.7084C11.3495 12.5112 10.6964 13.1644 9.89361 13.1644C9.09079 13.1644 8.43766 12.5112 8.43766 11.7084V11.7085Z" class="fill-white group-hover:fill-edpurple duration-[400ms]" />
                                    </svg>
                                </div>
                                <div class="et-speaker__socials flex flex-col gap-[8px] absolute -z-[2] text-[14px] opacity-0 transition duration-[400ms] top-[calc(100%+8px)] -translate-y-[50px] group-hover:translate-y-0 group-hover:opacity-100">
                                    <a href="#" class="border bg-white text-[18px] text-edpurple w-[40px] md:w-[35px] aspect-square flex items-center justify-center rounded-full hover:border-edpurple hover:bg-transparent"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#" class="border bg-white text-[18px] text-edpurple w-[40px] md:w-[35px] aspect-square flex items-center justify-center rounded-full hover:border-edpurple hover:bg-transparent"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#" class="border bg-white text-[18px] text-edpurple w-[40px] md:w-[35px] aspect-square flex items-center justify-center rounded-full hover:border-edpurple hover:bg-transparent"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- txt -->
                        <div>
                            <h6 class="font-semibold text-[18px] text-edblue mb-[12px]"><a href="teacher-details.html" class="hover:text-edyellow">Ronald Richards</a></h6>
                            <span class="text-edgray">WordPress Expert</span>
                        </div>
                    </div>

                    <!-- single instructor -->
                    <div class="text-center group">
                        <!-- img -->
                        <div class="relative mb-[18px] overflow-hidden rounded-[12px]">
                            <img src="<?php echo CSS_URL; ?>lassets/img/instructor-4.jpg" alt="instructor image" class="w-full aspect-[270/320] object-cover group-hover:scale-110">
                            <!-- socials -->
                            <div class="et-member-socials absolute right-[20px] md:right-[15px] top-[20px] md:top-[15px] z-[1]">
                                <div class="et-member-socials__icon w-[40px] md:w-[35px] aspect-square rounded-full border border-white flex items-center justify-center group-hover:bg-white">
                                    <svg width="17" height="20" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.89361 9.41703C9.22284 9.41703 8.61849 9.70668 8.19906 10.1675L4.42637 7.83088C4.52995 7.56611 4.58305 7.28429 4.58294 6.99999C4.58307 6.71568 4.52997 6.43386 4.42637 6.16909L8.19906 3.83238C8.61851 4.29318 9.22284 4.58297 9.89361 4.58297C11.1572 4.58297 12.1851 3.55501 12.1851 2.29143C12.1851 1.02785 11.1572 0 9.89361 0C8.63005 0 7.60209 1.02796 7.60209 2.29154C7.60204 2.57583 7.65514 2.85763 7.75866 3.1224L3.98608 5.45903C3.56663 4.99824 2.96231 4.70845 2.29154 4.70845C1.02796 4.70845 0 5.73652 0 6.99999C0 8.26354 1.02796 9.29152 2.29154 9.29152C2.96228 9.29152 3.56666 9.00185 3.98608 8.54094L7.75869 10.8776C7.65515 11.1424 7.60204 11.4242 7.60209 11.7085C7.60209 12.972 8.63003 14 9.89361 14C11.1572 14 12.1851 12.972 12.1851 11.7086C12.1851 10.445 11.1572 9.41703 9.89361 9.41703ZM8.43766 2.29154C8.43766 1.48873 9.09082 0.835596 9.89361 0.835596C10.6964 0.835596 11.3495 1.48873 11.3495 2.29154C11.3495 3.09435 10.6964 3.74748 9.89361 3.74748C9.09079 3.74748 8.43766 3.09432 8.43766 2.29154ZM2.29154 8.45593C1.48862 8.45593 0.835487 7.80277 0.835487 6.99999C0.835487 6.1972 1.48862 5.54404 2.29154 5.54404C3.09435 5.54404 3.74737 6.1972 3.74737 6.99999C3.74737 7.80277 3.09432 8.45593 2.29154 8.45593ZM8.43766 11.7085C8.43766 10.9057 9.09082 10.2525 9.89361 10.2525C10.6964 10.2525 11.3495 10.9057 11.3495 11.7084C11.3495 12.5112 10.6964 13.1644 9.89361 13.1644C9.09079 13.1644 8.43766 12.5112 8.43766 11.7084V11.7085Z" class="fill-white group-hover:fill-edpurple duration-[400ms]" />
                                    </svg>
                                </div>
                                <div class="et-speaker__socials flex flex-col gap-[8px] absolute -z-[2] text-[14px] opacity-0 transition duration-[400ms] top-[calc(100%+8px)] -translate-y-[50px] group-hover:translate-y-0 group-hover:opacity-100">
                                    <a href="#" class="border bg-white text-[18px] text-edpurple w-[40px] md:w-[35px] aspect-square flex items-center justify-center rounded-full hover:border-edpurple hover:bg-transparent"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#" class="border bg-white text-[18px] text-edpurple w-[40px] md:w-[35px] aspect-square flex items-center justify-center rounded-full hover:border-edpurple hover:bg-transparent"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#" class="border bg-white text-[18px] text-edpurple w-[40px] md:w-[35px] aspect-square flex items-center justify-center rounded-full hover:border-edpurple hover:bg-transparent"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- txt -->
                        <div>
                            <h6 class="font-semibold text-[18px] text-edblue mb-[12px]"><a href="teacher-details.html" class="hover:text-edyellow">Kristin Watson</a></h6>
                            <span class="text-edgray">UI Designer</span>
                        </div>
                    </div>
                </div>

                <!-- vectors -->
                <div class="lg:hidden">
                    <div class="pointer-events-none w-[434px] aspect-square rounded-full bg-edpurple/15 absolute -z-[1] top-0 left-[56px] -translate-y-[50%]"></div>
                    <div class="pointer-events-none w-[694px] aspect-square rounded-full bg-edpurple/10 absolute -z-[1] bottom-0 right-[21px] translate-y-[50%]"></div>
                    <img src="<?php echo CSS_URL; ?>lassets/img/admission-vector-2.svg" alt="vector" class="absolute -z-[1] bottom-[154px] right-[58px]">
                    <img src="<?php echo CSS_URL; ?>lassets/img/instructor-vector.svg" alt="vector" class="absolute -z-[1] top-[120px] left-0">
                </div>
            </div>
        </section>
        <!-- INSTRUCTORS SECTION END -->


        <!-- TESTIMONIAL SECTION START -->
        <section class="py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden">
            <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
                <div class="flex md:flex-col gap-[30px]">
                    <!-- heading -->
                    <div class="max-w-[370px] md:max-w-full shrink-0">
                        <h6 class="ed-section-sub-title">Testimonials</h6>
                        <h2 class="ed-section-title mb-[36px] md:mb-[26px]">What Students Say About Us</h2>
                        <!-- slider nav -->
                        <div class="ed-2-testimonial-slider-nav flex gap-[15px] *:w-[40px] *:h-[40px] *:rounded-full *:border *:border-[#808080]/20 *:text-edpurple *:text-[18px]">
                            <button class="prev hover:bg-edpurple hover:border-edpubg-edpurple hover:text-white"><i class="fa-solid fa-angle-left"></i></button>
                            <button class="next hover:bg-edpurple hover:border-edpubg-edpurple hover:text-white"><i class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </div>

                    <!-- slider container -->
                    <div>
                        <div class="ed-2-testimonial-slider swiper max-w-[1200px]">
                            <div class="swiper-wrapper">
                                <!-- single testimony -->
                                <div class="swiper-slide w-[570px] lg:w-[540px] xs:w-full">
                                    <div class="et-testimony bg-white p-[30px] xxs:p-[20px] border border-[#d9d9d9] rounded-[20px]">
                                        <!-- single testimony heading -->
                                        <div class="et-testimony__heading flex xxs:flex-col items-center gap-[22px] mb-[42px] xxs:mb-[22px]">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/user-2.png" alt="reviewer image" class="w-[70px] aspect-square rounded-full shrink-0">

                                            <div class="flex items-center justify-between grow xxs:w-full">
                                                <div class="left">
                                                    <h5 class="text-edblue font-semibold text-[20px] mb-[1px]">Esther Howard</h5>
                                                    <h6 class="text-[16px] text-edpurple font-normal">Nursing Assistant</h6>
                                                </div>

                                                <div class="right">
                                                    <img src="<?php echo CSS_URL; ?>lassets/img/icon/quotation.svg" alt="quotation mark">
                                                </div>
                                            </div>
                                        </div>

                                        <p class="text-[#445375] font-normal mb-[21px]">Donec ac lacus placerata dolor duis consequat placerat sit amet a elit. In volutpat, lacus in egestas finibus nisi orci tincidunt risus, a dapibus </p>

                                        <!-- rating stars -->
                                        <div class="inline-flex items-center gap-[6px] border border-edyellow rounded-full px-[10px] h-[40px]">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                        </div>
                                    </div>
                                </div>

                                <!-- single testimony -->
                                <div class="swiper-slide w-[570px] lg:w-[540px] xs:w-full">
                                    <div class="et-testimony bg-white p-[30px] xxs:p-[20px] border border-[#d9d9d9] rounded-[20px]">
                                        <!-- single testimony heading -->
                                        <div class="et-testimony__heading flex xxs:flex-col items-center gap-[22px] mb-[42px] xxs:mb-[22px]">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/user-2.png" alt="reviewer image" class="w-[70px] aspect-square rounded-full shrink-0">

                                            <div class="flex items-center justify-between grow xxs:w-full">
                                                <div class="left">
                                                    <h5 class="text-edblue font-semibold text-[20px] mb-[1px]">Esther Howard</h5>
                                                    <h6 class="text-[16px] text-edpurple font-normal">Nursing Assistant</h6>
                                                </div>

                                                <div class="right">
                                                    <img src="<?php echo CSS_URL; ?>lassets/img/icon/quotation.svg" alt="quotation mark">
                                                </div>
                                            </div>
                                        </div>

                                        <p class="text-[#445375] font-normal mb-[21px]">Donec ac lacus placerata dolor duis consequat placerat sit amet a elit. In volutpat, lacus in egestas finibus nisi orci tincidunt risus, a dapibus </p>

                                        <!-- rating stars -->
                                        <div class="inline-flex items-center gap-[6px] border border-edyellow rounded-full px-[10px] h-[40px]">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                        </div>
                                    </div>
                                </div>

                                <!-- single testimony -->
                                <div class="swiper-slide w-[570px] lg:w-[540px] xs:w-full">
                                    <div class="et-testimony bg-white p-[30px] xxs:p-[20px] border border-[#d9d9d9] rounded-[20px]">
                                        <!-- single testimony heading -->
                                        <div class="et-testimony__heading flex xxs:flex-col items-center gap-[22px] mb-[42px] xxs:mb-[22px]">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/user-2.png" alt="reviewer image" class="w-[70px] aspect-square rounded-full shrink-0">

                                            <div class="flex items-center justify-between grow xxs:w-full">
                                                <div class="left">
                                                    <h5 class="text-edblue font-semibold text-[20px] mb-[1px]">Esther Howard</h5>
                                                    <h6 class="text-[16px] text-edpurple font-normal">Nursing Assistant</h6>
                                                </div>

                                                <div class="right">
                                                    <img src="<?php echo CSS_URL; ?>lassets/img/icon/quotation.svg" alt="quotation mark">
                                                </div>
                                            </div>
                                        </div>

                                        <p class="text-[#445375] font-normal mb-[21px]">Donec ac lacus placerata dolor duis consequat placerat sit amet a elit. In volutpat, lacus in egestas finibus nisi orci tincidunt risus, a dapibus </p>

                                        <!-- rating stars -->
                                        <div class="inline-flex items-center gap-[6px] border border-edyellow rounded-full px-[10px] h-[40px]">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                            <img src="<?php echo CSS_URL; ?>lassets/img/icon/star.svg" alt="star">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- vector -->
            <img src="<?php echo CSS_URL; ?>lassets/img/testimonial-2-vector.svg" alt="vector" class="absolute -z-[1] pointer-events-none left-[44px] bottom-[60px]">
        </section>
        <!-- TESTIMONIAL SECTION END -->


        <!-- STATS SECTION START -->
        <section class="py-[80px] bg-edblue">
            <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
                <div class="flex md:flex-wrap gap-[70px] lg:gap-[50px] *:flex-auto">
                    <!-- single stat -->
                    <div class="text-white text-center md:w-[45%] shrink-0 pr-[80px] lg:pr-[60px] last:pr-0 border-r border-white/20 last:border-0 md:even:pr-0 md:even:border-r-0 xs:pr-0 xs:border-r-0">
                        <img src="<?php echo CSS_URL; ?>lassets/img/stat-1.png" alt="icon" class="w-max max-w-full mx-auto mb-[7px]">
                        <h3 class="font-bold text-[36px]">25+</h3>
                        <h6 class="font-medium">Year of experience</h6>
                    </div>

                    <!-- single stat -->
                    <div class="text-white text-center md:w-[45%] shrink-0 pr-[80px] lg:pr-[60px] last:pr-0 border-r border-white/20 last:border-0 md:even:pr-0 md:even:border-r-0 xs:pr-0 xs:border-r-0">
                        <img src="<?php echo CSS_URL; ?>lassets/img/stat-2.png" alt="icon" class="w-max max-w-full mx-auto mb-[7px]">
                        <h3 class="font-bold text-[36px]">6,500+</h3>
                        <h6 class="font-medium">Class Completed</h6>
                    </div>

                    <!-- single stat -->
                    <div class="text-white text-center md:w-[45%] shrink-0 pr-[80px] lg:pr-[60px] last:pr-0 border-r border-white/20 last:border-0 md:even:pr-0 md:even:border-r-0 xs:pr-0 xs:border-r-0">
                        <img src="<?php echo CSS_URL; ?>lassets/img/stat-3.png" alt="icon" class="w-max max-w-full mx-auto mb-[7px]">
                        <h3 class="font-bold text-[36px]">100+</h3>
                        <h6 class="font-medium">Experts Instructors</h6>
                    </div>

                    <!-- single stat -->
                    <div class="text-white text-center md:w-[45%] shrink-0 pr-[80px] lg:pr-[60px] last:pr-0 border-r border-white/20 last:border-0 md:even:pr-0 md:even:border-r-0 xs:pr-0 xs:border-r-0">
                        <img src="<?php echo CSS_URL; ?>lassets/img/stat-4.png" alt="icon" class="w-max max-w-full mx-auto mb-[7px]">
                        <h3 class="font-bold text-[36px]">6,561+</h3>
                        <h6 class="font-medium">Students Enrolled</h6>
                    </div>
                </div>
            </div>
        </section>
        <!-- STATS SECTION END -->


        <!-- CTA 2 SECTION START -->
        <section class="mt-[120px] xl:mt-[80px] md:mt-[60px]">
            <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px] bg-[url('../<?php echo CSS_URL; ?>lassets/img/cta-3-bg.jpg')] bg-no-repeat bg-cover bg-center rounded-[20px] overflow-hidden text-center py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] before:absolute before:inset-0 before:bg-edpurple/80 before:-z-[1]">
                <div class="max-w-[570px] mx-auto">
                    <h6 class="ed-section-sub-title ed-section-sub-title--white mr-[48px]">Online Class</h6>
                    <h2 class="ed-section-title !text-white mb-[18px]">Expert Instructor Live Classes Here!</h2>
                    <a href="course-grid.html" class="ed-btn !h-[56px] !bg-white !text-black gap-[10px] hover:!bg-edyellow hover:!text-edblue">Join Courses <span class="icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                </div>
            </div>
        </section>
        <!-- CTA 2 SECTION END -->


        <!-- NEWS SECTION START -->
        <section class="pt-[120px] xl:pt-[80px] md:pt-[60px]">
            <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
                <!-- heading -->
                <div class="flex flex-wrap items-end justify-between mb-[60px] lg:mb-[40px] gap-[15px]">
                    <!-- left -->
                    <div class="max-w-[35%] md:max-w-[40%] sm:max-w-none">
                        <h6 class="ed-section-sub-title">latest news</h6>
                        <h2 class="ed-section-title">our latest news & blog </h2>
                    </div>

                    <!-- right -->
                    <a href="news-grid.html" class="ed-btn !h-[56px] gap-[10px] border border-[#E5E5E5] !bg-transparent !text-edpurple hover:!bg-edpurple hover:!border-edpurple hover:!text-white">View all blog <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                </div>

                <!-- news cards -->
                <div class="grid grid-cols-2 md:grid-cols-1 gap-[30px]">
                    <!-- news big card -->
                    <div class="rounded-[20px] bg-edoffwhite overflow-hidden">
                        <!-- img -->
                        <div class="relative">
                            <img src="<?php echo CSS_URL; ?>lassets/img/blog-big.jpg" alt="blog cover" class="w-full aspect-[570/290]">
                            <!-- date -->
                            <div class="absolute top-[30px] left-[30px] bg-[#ECF0F5] rounded-[10px] font-medium text-[14px] text-black inline-block uppercase overflow-hidden text-center">
                                <span class="bg-edpurple text-white block py-[3px] rounded-[10px]">10</span>
                                <span class="px-[11px] py-[2px] block">June</span>
                            </div>
                        </div>

                        <!-- txt -->
                        <div class="px-[30px] xxs:px-[20px] py-[22px] pt-[27px]">
                            <!-- infos -->
                            <div class="flex items-center gap-[16px] mb-[9px]">
                                <!-- single info -->
                                <div class="flex items-center gap-[10px] font-medium text-[12px] text-edgray">
                                    <span><img src="<?php echo CSS_URL; ?>lassets/img/icon/user-filled-purple.svg" alt="icon"></span>
                                    <span>By Admin</span>
                                </div>

                                <!-- single info -->
                                <div class="flex items-center gap-[10px] font-medium text-[12px] text-edgray">
                                    <span><img src="<?php echo CSS_URL; ?>lassets/img/icon/comment.svg" alt="icon"></span>
                                    <span>2 Comments</span>
                                </div>
                            </div>
                            <h5 class="font-medium text-[20px]"><a href="news-details.html" class="hover:text-edpurple">Collaboratively pontificate bleeding edge resources with inexpensive methodologies</a></h5>
                        </div>
                    </div>

                    <!-- right / news small cards -->
                    <div class="bg-edoffwhite rounded-[20px] p-[30px] xxs:p-[20px] space-y-[26px]">
                        <!-- single news -->
                        <div class="flex xxs:flex-col gap-x-[25px] gap-y-[15px] items-center xxs:items-start border-b last:border-0 pb-[26px] last:pb-0">
                            <!-- img -->
                            <div class="shrink-0 rounded-[10px] overflow-hidden">
                                <img src="<?php echo CSS_URL; ?>lassets/img/news-2-img-2.jpg" alt="blog cover" class="w-[142px] aspect-[142/153] object-cover">
                            </div>

                            <!-- txt -->
                            <div>
                                <!-- infos -->
                                <div class="flex items-center gap-[16px] mb-[9px]">
                                    <!-- single info -->
                                    <div class="flex items-center gap-[10px] font-medium text-[12px] text-edgray">
                                        <span><img src="<?php echo CSS_URL; ?>lassets/img/icon/user-filled-purple.svg" alt="icon"></span>
                                        <span>By Admin</span>
                                    </div>

                                    <!-- single info -->
                                    <div class="flex items-center gap-[10px] font-medium text-[12px] text-edgray">
                                        <span><img src="<?php echo CSS_URL; ?>lassets/img/icon/comment.svg" alt="icon"></span>
                                        <span>2 Comments</span>
                                    </div>
                                </div>
                                <h5 class="font-medium text-[20px] mb-[17px]"><a href="news-details.html" class="hover:text-edpurple">Collaboratively pontificate bleedi edge resources</a></h5>

                                <!-- date -->
                                <div class="bg-[#ECF0F5] rounded-[10px] font-medium text-[14px] text-black inline-block uppercase overflow-hidden text-center">
                                    <span class="bg-edpurple text-white block py-[3px] rounded-[10px]">10</span>
                                    <span class="px-[11px] py-[2px] block">June</span>
                                </div>
                            </div>
                        </div>

                        <!-- single news -->
                        <div class="flex xxs:flex-col gap-x-[25px] gap-y-[15px] items-center xxs:items-start border-b last:border-0 pb-[26px] last:pb-0">
                            <!-- img -->
                            <div class="shrink-0 rounded-[10px] overflow-hidden">
                                <img src="<?php echo CSS_URL; ?>lassets/img/news-2-img-3.jpg" alt="blog cover" class="w-[142px] aspect-[142/153] object-cover">
                            </div>

                            <!-- txt -->
                            <div>
                                <!-- infos -->
                                <div class="flex items-center gap-[16px] mb-[9px]">
                                    <!-- single info -->
                                    <div class="flex items-center gap-[10px] font-medium text-[12px] text-edgray">
                                        <span><img src="<?php echo CSS_URL; ?>lassets/img/icon/user-filled-purple.svg" alt="icon"></span>
                                        <span>By Admin</span>
                                    </div>

                                    <!-- single info -->
                                    <div class="flex items-center gap-[10px] font-medium text-[12px] text-edgray">
                                        <span><img src="<?php echo CSS_URL; ?>lassets/img/icon/comment.svg" alt="icon"></span>
                                        <span>2 Comments</span>
                                    </div>
                                </div>
                                <h5 class="font-medium text-[20px] mb-[17px]"><a href="news-details.html" class="hover:text-edpurple">Collaboratively pontificate bleedi edge resources</a></h5>

                                <!-- date -->
                                <div class="bg-[#ECF0F5] rounded-[10px] font-medium text-[14px] text-black inline-block uppercase overflow-hidden text-center">
                                    <span class="bg-edpurple text-white block py-[3px] rounded-[10px]">10</span>
                                    <span class="px-[11px] py-[2px] block">June</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- NEWS SECTION END -->

        <!-- partners -->
        <div class="mx-[19.7%] xxxl:mx-[14.7%] xxl:mx-[9.7%] xl:mx-[3.2%] md:mx-[15px]">
            <div class="ed-partners-slider swiper my-[100px] xl:my-[70px] md:my-[50px]">
                <div class="swiper-wrapper">
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="<?php echo CSS_URL; ?>lassets/img/partner-1.png" alt="Partner Logo"></div>
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="<?php echo CSS_URL; ?>lassets/img/partner-2.png" alt="Partner Logo"></div>
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="<?php echo CSS_URL; ?>lassets/img/partner-3.png" alt="Partner Logo"></div>
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="<?php echo CSS_URL; ?>lassets/img/partner-4.png" alt="Partner Logo"></div>
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="<?php echo CSS_URL; ?>lassets/img/partner-5.png" alt="Partner Logo"></div>
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="<?php echo CSS_URL; ?>lassets/img/partner-6.png" alt="Partner Logo"></div>
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="<?php echo CSS_URL; ?>lassets/img/partner-1.png" alt="Partner Logo"></div>
                    <!-- single partner -->
                    <div class="swiper-slide"><img src="<?php echo CSS_URL; ?>lassets/img/partner-2.png" alt="Partner Logo"></div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER SECTION START -->
    <footer class="bg-edblue relative z-[1] before:absolute before:inset-0 before:-z-[1] before:bg-[url('../<?php echo CSS_URL; ?>lassets/img/footer-bg.jpg')] before:opacity-[7%] before:bg-no-repeat before:bg-cover before:bg-center text-white">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <!-- footer top -->
            <div class="flex flex-wrap justify-between gap-[35px] pt-[100px] pb-[58px] border-b border-white/20">
                <!-- footer about -->
                <div class="max-w-[370px] xxs:max-w-full">
                    <a href="index.html" class="inline-block mb-[23px]"><img src="<?php echo CSS_URL; ?>lassets/img/logo-light.png" alt="logo"></a>
                    <p class="text-[#D9D9D9] mb-[19px]">Nullam interdum libero vitae pretium aliquam donec nibh purus laoreet in ullamcorper vel malesuada sit amet enim.</p>

                    <ul class="space-y-[17px]">
                        <li class="flex items-center gap-[8px]">
                            <span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/call-icon-yellow.svg" alt="icon"></span>
                            <a href="tel:+6108-666-0112" class="hover:text-edyellow">+6108-666-0112</a>
                        </li>

                        <li class="flex items-center gap-[8px]">
                            <span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/message-yellow.svg" alt="icon"></span>
                            <a href="mailto:info@gmail.com" class="hover:text-edyellow">info@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <!-- footer widget -->
                <div>
                    <h6 class="font-semibold text-[18px] pb-[15px] mb-[30px] relative before:absolute before:bottom-0 before:left-0 before:h-[1.5px] before:w-[20px] before:bg-edyellow after:absolute after:bottom-0 after:left-[30px] after:h-[1.5px] after:w-[63px] after:bg-white">Quick Links</h6>

                    <div class="space-y-[18px]">
                        <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/double-arrow.svg" alt="icon"></span> Edutics About</a>
                        <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/double-arrow.svg" alt="icon"></span> Contact Us</a>
                        <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/double-arrow.svg" alt="icon"></span> Blog & News</a>
                        <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/double-arrow.svg" alt="icon"></span> FAQ’S</a>
                        <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/double-arrow.svg" alt="icon"></span> Login / Register</a>
                    </div>
                </div>

                <!-- footer widget -->
                <div>
                    <h6 class="font-semibold text-[18px] pb-[15px] mb-[30px] relative before:absolute before:bottom-0 before:left-0 before:h-[1.5px] before:w-[20px] before:bg-edyellow after:absolute after:bottom-0 after:left-[30px] after:h-[1.5px] after:w-[63px] after:bg-white">Main Navigation</h6>

                    <div class="space-y-[18px]">
                        <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/double-arrow.svg" alt="icon"></span> Admission</a>
                        <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/double-arrow.svg" alt="icon"></span> Research</a>
                        <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/double-arrow.svg" alt="icon"></span> Academics</a>
                        <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/double-arrow.svg" alt="icon"></span> Student Life</a>
                        <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="<?php echo CSS_URL; ?>lassets/img/double-arrow.svg" alt="icon"></span> Conferences</a>
                    </div>
                </div>

                <!-- footer widget -->
                <div class="max-w-[300px]">
                    <h6 class="font-semibold text-[18px] pb-[15px] mb-[30px] relative before:absolute before:bottom-0 before:left-0 before:h-[1.5px] before:w-[20px] before:bg-edyellow after:absolute after:bottom-0 after:left-[30px] after:h-[1.5px] after:w-[63px] after:bg-white">Newsletter</h6>

                    <div>
                        <p class="text-[#d9d9d9]/80 mb-[21px]">Sign up to seargin weekly newsletter to get the latest updates.</p>

                        <!-- newsltr form -->
                        <form class="border border-white/20 rounded-full flex h-[56px] p-[4px]">
                            <input type="email" name="email" placeholder="Enter Email Address" class="text-[14px] bg-transparent w-full rounded-full focus:outline-none px-[20px]">
                            <button class="bg-edyellow rounded-full aspect-square flex items-center justify-center hover:bg-edpurple"><img src="<?php echo CSS_URL; ?>lassets/img/icon/submit-icon.svg" alt="icon"></button>
                        </form>

                        <!-- social links -->
                        <div class="flex gap-[20px] mt-[30px]">
                            <span class="pl-[30px] font-medium text-[#d9d9d9] relative before:absolute before:left-0 before:top-[50%] before:-translate-y-[50%] before:h-[1px] before:w-[20px] before:bg-[#d9d9d9]">Follow on</span>
                            <span class="inline-flex gap-[16px] text-[#d9d9d9]">
                                <a href="#" class="hover:text-edyellow"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="hover:text-edyellow"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#" class="hover:text-edyellow"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#" class="hover:text-edyellow"><i class="fa-brands fa-youtube"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer bottom -->
            <div class="flex flex-wrap items-center justify-between gap-[15px] pt-[20px] pb-[50px] text-[#d9d9d9]">
                <p>&copy; All Copyright 2024 by Edutics</p>

                <div class="flex flex-wrap gap-[40px] xxs:gap-[15px]">
                    <a href="#" class="hover:text-edyellow">Terms & Conditions</a>
                    <a href="#" class="hover:text-edyellow">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END -->

    <!-- js -->
    <script src="<?php echo CSS_URL; ?>lassets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo CSS_URL; ?>lassets/vendor/fslightbox/fslightbox.js"></script>
    <script src="<?php echo CSS_URL; ?>lassets/vendor/mixitup/mixitup.min.js"></script>
    <script src="<?php echo CSS_URL; ?>lassets/vendor/slim-select/slimselect.min.js"></script>

    <script src="<?php echo CSS_URL; ?>lassets/js/main.js"></script>
    <!-- <script src="<?php echo CSS_URL; ?>lassets/js/header-2.js"></script> -->
    <script src="<?php echo CSS_URL; ?>lassets/js/accordion.js"></script>
</body>

</html>