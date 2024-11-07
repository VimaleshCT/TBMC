<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambaram</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/vendors.min.css" />
    <link rel="stylesheet" href="assets/css/icon.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="assets/css/tambaram.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body>
    <header class="header-with-topbar">
        <div class="header-top-bar top-bar-dark bg-white border disable-fixed">
            <div class="container-fluid">
                <div class="row h-42px align-items-center">
                    <div class="col-12 text-end justify-content-center">
                        <button class="zoom-control p-5px" id="zoom-in"
                            style="background: var(--Gray-6, #F2F2F2) !important;">A+</button>
                        <button class="zoom-control p-5px" id="default-size"
                            style="background: var(--Gray-6, #F2F2F2) !important;">A</button>
                        <button class="zoom-control p-5px" id="zoom-out"
                            style="background: var(--Gray-6, #F2F2F2) !important;">A-</button>


                        <button class="zoom-control p-5px ms-20px" id="zoom-out"
                            style="background: var(--Gray-6, #F2F2F2) !important;margin-left: 40px !important;"><img
                                src="https://s3-alpha-sig.figma.com/img/d234/5e59/1a60bfe94e31fd44e8500613257a6d8b?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Vvvn59RrQUNfQnuu4iAWY-QaS5Pju1VEWxBD9RU~K7Wr3yMi1QKzo-AWd~o~alA8cWH5swSzHED2Lu5kDGd7SGylKyWsgmB~aT6J1aQkSlu47tvOTVGZGlFaayQZikeOQ~4jATslpbjA0s~46SPdZhJngN1wa8aZgX4Z4eGhnK2qmgZdI5QD7mYE3GVd7p-HROYIXtt49IzgCSM9Ryy6hiEqobR7RmWSHj~vNgo5ohENoDZb3JHpmRc2fZO28pu~cIvni0I4796WwPP4bBmRo6~EvrJpL0HTqRAZrrmgC8HecUqojD5mqkUeOoVxZXiC3yo7mkj8MRKEHZKmiJGWtA__"
                                style="width: 26px; height: 26px;" /></button>

                        <div class="language-toggle">
                            <span>தமிழ்</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                            <span>English</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <div class="main-header position-relative"
        style="z-index: 1;background-image:url('assets/images/nav-bg.png');background-size:cover; height: 172px">
        <div class="header-top">
            <div class="top-left">
                <img src="assets/images/cm.png" alt="Chief Minister" class="cm-img" />
            </div>
            <div class="top-center">
                <img src="assets/images/full-logo.png" alt="Tambaram Logo" class="logo" />
            </div>
            <div class="top-right">
                <img src="assets/images/tn-logo.png" alt="Chief Minister" class="cm-img" style="width: 100px;" />
            </div>
        </div>
        <nav class="container position-relative navbar navbar-expand-lg header-light border-radius-20px pt-5px pb-10px p-20px"
            style="background: #832D50; z-index: 1">
            <div class="col-auto menu-order center-nav">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav alt-font">
                        <li class="nav-item"><a href="welcome_message" class="nav-link"><i
                                    class="fa-solid fa-house"></i>&nbsp;Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0);" class="nav-link">About us&nbsp;<i
                                    class="fa-solid fa-angle-down"></i></a></a>
                            <ul class="dropdown-menu border-radius-10px border border-color-transparent-base-color">
                                <li><a href="#" class="text-black p-10px">E-Governance</a></li>
                                <li><a href="#" class="text-black p-10px">Officer Details</a></li>
                                <li><a href="#" class="text-black p-10px">Contact us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0);" class="nav-link">About Tambaram&nbsp;<i
                                    class="fa-solid fa-angle-down"></i></a></a>
                            <ul class="dropdown-menu border-radius-10px border border-color-transparent-base-color">
                                <li><a href="#" class="text-black p-10px">How to reach</a></li>
                                <li><a href="#" class="text-black p-10px">Place of interest</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="whos_who" class="nav-link">Who's Who&nbsp;<i
                                    class="fa-solid fa-angle-down"></i></a></a>
                            <ul class="dropdown-menu border-radius-10px border border-color-transparent-base-color">
                                <li><a href="#" class="text-black p-10px">Commissioner</a></li>
                                <li><a href="#" class="text-black p-10px">Mayor</a></li>
                                <li><a href="#" class="text-black p-10px">Deputy Mayor I</a></li>
                                <li><a href="#" class="text-black p-10px">Councillor I</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0);" class="nav-link">Departments&nbsp;<i
                                    class="fa-solid fa-angle-down"></i></a></a>
                            <ul class="dropdown-menu border-radius-10px border border-color-transparent-base-color">
                                <li><a href="#" class="text-black p-10px">General Section</a></li>
                                <li><a href="#" class="text-black p-10px">Revenue Section</a></li>
                                <li><a href="#" class="text-black p-10px">Town Planning Section</a></li>
                                <li><a href="#" class="text-black p-10px">Engineering Section</a></li>
                                <li><a href="#" class="text-black p-10px">Public health section</a></li>
                                <li><a href="#" class="text-black p-10px">Information Technology
                                        Section</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0);" class="nav-link">Salient Features&nbsp;<i
                                    class="fa-solid fa-angle-down"></i></a></a>
                            <ul class="dropdown-menu border-radius-10px border border-color-transparent-base-color">
                                <li><a href="#" class="text-black p-10px">Administrative Reports</a></li>
                                <li><a href="#" class="text-black p-10px">General Info</a></li>
                                <li><a href="#" class="text-black p-10px">Below Povertyline Families</a></li>
                                <li><a href="#" class="text-black p-10px">Citizen Character</a></li>
                                <li><a href="#" class="text-black p-10px">Audited Financial Statement</a></li>
                                <li><a href="#" class="text-black p-10px">Budget Details</a></li>
                                <li><a href="#" class="text-black p-10px">Council Resolution</a></li>
                                <li><a href="#" class="text-black p-10px">Solid Waste Management</a></li>
                                <li><a href="#" class="text-black p-10px">Water Supply</a></li>
                                <li><a href="#" class="text-black p-10px">Street lights</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0);" class="nav-link">Services&nbsp;<i
                                    class="fa-solid fa-angle-down"></i></a></a>
                            <ul class="dropdown-menu border-radius-10px border border-color-transparent-base-color">
                                <li><a href="#" class="text-black p-10px">Helpline</a></li>
                                <li><a href="#" class="text-black p-10px">Important Contacts</a></li>
                                <li><a href="#" class="text-black p-10px">Hospitals</a></li>
                                <li><a href="#" class="text-black p-10px">Hotels</a></li>
                                <li><a href="#" class="text-black p-10px">Educational Institutions</a></li>
                                <li><a href="#" class="text-black p-10px">Shopping Center</a></li>
                                <li><a href="#" class="text-black p-10px">Police Station, Fire Service, Rescue</a></li>
                                <li><a href="#" class="text-black p-10px">Train Schedule and Buses</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0);" class="nav-link">Schemes&nbsp;<i
                                    class="fa-solid fa-angle-down"></i></a></a>
                            <ul class="dropdown-menu border-radius-10px border border-color-transparent-base-color">
                                <li><a href="#" class="text-black p-10px">TNSUDP - Roads and SWD - EA report</a></li>
                                <li><a href="#" class="text-black p-10px">Amrut Reforms</a></li>
                                <li><a href="#" class="text-black p-10px">All other Schemes</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="d-flex m-0 bg-white w-100" style="border-radius: 14px">
                    <div class="fs-14 d-flex text-black p-5px"
                        style="border-radius: 14px 0% 0% 14px;align-items: center;background: #E2E1E1;">
                        Announcement:
                    </div>
                    <div class="fs-14 d-flex text-black p-5px" style="align-items: center;">
                        <marquee>
                            <img
                                src="https://www.tnurbantree.tn.gov.in/tambaram/wp-content/uploads/sites/19/2024/10/new-1.gif" />&nbsp;<a
                                href="https://www.whatsapp.com/channel/0029VaqlOACBadmejYWP7b3T"
                                target="_blank">Tambaram
                                Corporation - WhatsApp Channel</a> |
                            <img
                                src="https://www.tnurbantree.tn.gov.in/tambaram/wp-content/uploads/sites/19/2024/10/new-1.gif" />&nbsp;<a
                                href="https://www.tnurbantree.tn.gov.in/tambaram/wp-content/uploads/sites/19/2024/10/TCMC_vulnerable-area.pdf"
                                target="_blank">Tambaram
                                Corporation Flood Vulnerable Areas</a> |
                            <img
                                src="https://www.tnurbantree.tn.gov.in/tambaram/wp-content/uploads/sites/19/2024/10/new-1.gif" />&nbsp;<a
                                href="https://www.tnurbantree.tn.gov.in/tambaram/wp-content/uploads/sites/19/2024/10/TCMC_relief-shelters1.pdf"
                                target="_blank">Tambaram
                                Corporation Flood Relief Shelters</a>
                        </marquee>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <section class="pt-100px pb-100px h-500px"
        style="background-image: url(assets/images/banner.jpg);background-size: cover">
        <div class="container h-100">
            <div class="row align-items-end h-100 md-mt-50px">
                <div class="col-xl-6 col-lg-6 position-relative z-index-1"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="alt-font fs-70 text-white fw-500 ls-minus-2px">WHO's
                        <br>
                        WHO
                        </span>
                    </h1>
                </div>
            </div>
        </div>

    </section>

    <section class="councillor-section pt-100px pb-100px">
        <div class="container">
            <div class="row text-center mb-5">
            </div>
            <div class="row">
                <!-- Councillor Card -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="profile-image">
                        <img src="assets/images/who.svg" alt="Councillor Image">
                        <div class="flag-overlay"></div>
                    </div>
                    <div class="councillor-card">
                        <div class="councillor-info">
                            <h3>Thiru. Jeganathan V</h3>
                            <p>Plot No.A, Door No.1, Gandhi Main Road, Sankar Nagar, Pammal.</p>
                            <p>9841275549</p>
                            <p>A.I.A.D.M.K</p>
                            <p>Ward 5</p>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="profile-image">
                        <img src="assets/images/who.svg" alt="Councillor Image">
                        <div class="flag-overlay"></div>
                    </div>
                    <div class="councillor-card">
                        <div class="councillor-info">
                            <h3>Thiru. Jeganathan V</h3>
                            <p>Plot No.A, Door No.1, Gandhi Main Road, Sankar Nagar, Pammal.</p>
                            <p>9841275549</p>
                            <p>A.I.A.D.M.K</p>
                            <p>Ward 5</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="profile-image">
                        <img src="assets/images/who.svg" alt="Councillor Image">
                        <div class="flag-overlay"></div>
                    </div>
                    <div class="councillor-card">
                        <div class="councillor-info">
                            <h3>Thiru. Jeganathan V</h3>
                            <p>Plot No.A, Door No.1, Gandhi Main Road, Sankar Nagar, Pammal.</p>
                            <p>9841275549</p>
                            <p>A.I.A.D.M.K</p>
                            <p>Ward 5</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="profile-image">
                        <img src="assets/images/who.svg" alt="Councillor Image">
                        <div class="flag-overlay"></div>
                    </div>
                    <div class="councillor-card">
                        <div class="councillor-info">
                            <h3>Thiru. Jeganathan V</h3>
                            <p>Plot No.A, Door No.1, Gandhi Main Road, Sankar Nagar, Pammal.</p>
                            <p>9841275549</p>
                            <p>A.I.A.D.M.K</p>
                            <p>Ward 5</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="profile-image">
                        <img src="assets/images/who.svg" alt="Councillor Image">
                        <div class="flag-overlay"></div>
                    </div>
                    <div class="councillor-card">
                        <div class="councillor-info">
                            <h3>Thiru. Jeganathan V</h3>
                            <p>Plot No.A, Door No.1, Gandhi Main Road, Sankar Nagar, Pammal.</p>
                            <p>9841275549</p>
                            <p>A.I.A.D.M.K</p>
                            <p>Ward 5</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="profile-image">
                        <img src="assets/images/who.svg" alt="Councillor Image">
                        <div class="flag-overlay"></div>
                    </div>
                    <div class="councillor-card">
                        <div class="councillor-info">
                            <h3>Thiru. Jeganathan V</h3>
                            <p>Plot No.A, Door No.1, Gandhi Main Road, Sankar Nagar, Pammal.</p>
                            <p>9841275549</p>
                            <p>A.I.A.D.M.K</p>
                            <p>Ward 5</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="profile-image">
                        <img src="assets/images/who.svg" alt="Councillor Image">
                        <div class="flag-overlay"></div>
                    </div>
                    <div class="councillor-card">
                        <div class="councillor-info">
                            <h3>Thiru. Jeganathan V</h3>
                            <p>Plot No.A, Door No.1, Gandhi Main Road, Sankar Nagar, Pammal.</p>
                            <p>9841275549</p>
                            <p>A.I.A.D.M.K</p>
                            <p>Ward 5</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="profile-image">
                        <img src="assets/images/who.svg" alt="Councillor Image">
                        <div class="flag-overlay"></div>
                    </div>
                    <div class="councillor-card">
                        <div class="councillor-info">
                            <h3>Thiru. Jeganathan V</h3>
                            <p>Plot No.A, Door No.1, Gandhi Main Road, Sankar Nagar, Pammal.</p>
                            <p>9841275549</p>
                            <p>A.I.A.D.M.K</p>
                            <p>Ward 5</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="image-section-before-footer">
        <div class="container" style="max-width:1300px;">
            <img src="assets/images/group.png" alt="WHP Image" class="whp-image">
        </div>
    </section>



    <footer class="footer"
        style="background: #EFEFEF url('assets/images/vector-bg-2.png') no-repeat right bottom;background-size: 300px">
        <div class="container">
            <div class="row d-flex footer-content" style="height: 100%;">
                <div
                    class="col-md-4 col-lg-4 footer-section logo-description pb-20px border-color-transparent-base-color border-bottom">
                    <img src="assets/images/footer-logo.png" alt="" class="mb-10px footer-logo" style="width: 340px" />
                    <p class="fs-12 fw-400 footer-description w-80"
                        style="color: var(--Gray-2, #4F4F4F);line-height: normal;">
                        To make all Urban Local Body Services accessible to the common man from anywhere,
                        anytime
                        through various service delivery outlets and ensure efficiency, accuracy,
                        transparency, speedy &
                        reliability of such services, at affordable costs to the basic needs of the common
                        man in the
                        State of Tamil Nadu.
                    </p>
                    <div class="footer-social-icons">
                        <a href="#" target="_blank" class="pe-10px"><svg xmlns="http://www.w3.org/2000/svg" width="32"
                                height="32" viewBox="0 0 32 32" fill="none">
                                <path
                                    d="M28.9999 16C28.9959 19.1772 27.8301 22.2433 25.7223 24.6208C23.6145 26.9982 20.7101 28.5228 17.5562 28.9075C17.486 28.9154 17.4149 28.9084 17.3475 28.8869C17.2802 28.8653 17.2182 28.8297 17.1657 28.7825C17.1131 28.7353 17.0712 28.6774 17.0426 28.6128C17.014 28.5481 16.9995 28.4781 16.9999 28.4075V19H19.9999C20.137 19.0003 20.2727 18.9724 20.3986 18.918C20.5244 18.8637 20.6378 18.784 20.7315 18.6841C20.8253 18.5841 20.8975 18.4659 20.9437 18.3368C20.9899 18.2077 21.009 18.0705 20.9999 17.9337C20.9779 17.6766 20.8592 17.4373 20.6679 17.2641C20.4766 17.0909 20.2268 16.9965 19.9687 17H16.9999V14C16.9999 13.4695 17.2107 12.9608 17.5857 12.5858C17.9608 12.2107 18.4695 12 18.9999 12H20.9999C21.137 12.0003 21.2727 11.9724 21.3986 11.918C21.5244 11.8637 21.6378 11.784 21.7315 11.6841C21.8253 11.5841 21.8975 11.4659 21.9437 11.3368C21.9899 11.2077 22.009 11.0705 21.9999 10.9337C21.9778 10.6761 21.8588 10.4365 21.667 10.2632C21.4751 10.0899 21.2247 9.99586 20.9662 9.99997H18.9999C17.9391 9.99997 16.9217 10.4214 16.1715 11.1715C15.4214 11.9217 14.9999 12.9391 14.9999 14V17H11.9999C11.8629 16.9997 11.7272 17.0276 11.6013 17.0819C11.4755 17.1362 11.3621 17.2159 11.2683 17.3159C11.1746 17.4159 11.1023 17.5341 11.0562 17.6632C11.01 17.7922 10.9909 17.9294 10.9999 18.0662C11.0221 18.3238 11.141 18.5634 11.3329 18.7367C11.5248 18.91 11.7752 19.0041 12.0337 19H14.9999V28.41C15.0004 28.4805 14.9859 28.5504 14.9574 28.6149C14.9289 28.6795 14.887 28.7373 14.8346 28.7845C14.7822 28.8317 14.7204 28.8673 14.6532 28.8889C14.5861 28.9106 14.5151 28.9177 14.4449 28.91C11.2066 28.5156 8.2344 26.9198 6.11654 24.4386C3.99867 21.9573 2.88955 18.7713 3.00869 15.5112C3.25869 8.76122 8.72619 3.27372 15.4812 3.01122C17.2301 2.94348 18.9746 3.22916 20.6105 3.85117C22.2464 4.47319 23.7401 5.41877 25.0021 6.63134C26.2642 7.84391 27.2687 9.29857 27.9556 10.9083C28.6425 12.5181 28.9977 14.2498 28.9999 16Z"
                                    fill="#4F4F4F" />
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="pe-10px"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                height="28" viewBox="0 0 28 28" fill="none">
                                <path
                                    d="M23.5157 24.0461C23.4403 24.1833 23.3296 24.2978 23.1949 24.3777C23.0602 24.4575 22.9066 24.4998 22.7501 24.5H17.5001C17.3528 24.5 17.2079 24.4627 17.0789 24.3918C16.9498 24.3209 16.8407 24.2185 16.7618 24.0942L12.3332 17.1347L5.89756 24.2134C5.74067 24.382 5.52369 24.4819 5.29364 24.4915C5.06359 24.5011 4.83903 24.4196 4.66864 24.2648C4.49824 24.1099 4.39575 23.8942 4.38338 23.6642C4.37101 23.4343 4.44976 23.2088 4.60256 23.0366L11.3587 15.5991L4.51178 4.84531C4.42745 4.71302 4.38025 4.56048 4.3751 4.40368C4.36996 4.24688 4.40707 4.09158 4.48255 3.95404C4.55803 3.8165 4.6691 3.70179 4.80412 3.62191C4.93915 3.54203 5.09317 3.49992 5.25006 3.5H10.5001C10.6473 3.50005 10.7922 3.53726 10.9212 3.60819C11.0503 3.67912 11.1594 3.78148 11.2383 3.90578L15.6669 10.8653L22.1026 3.78656C22.2594 3.61804 22.4764 3.51814 22.7065 3.50853C22.9365 3.49892 23.1611 3.58037 23.3315 3.73522C23.5019 3.89007 23.6044 4.10584 23.6167 4.33576C23.6291 4.56567 23.5504 4.7912 23.3976 4.96344L16.6415 12.3955L23.4883 23.1558C23.5722 23.2881 23.619 23.4406 23.6238 23.5972C23.6286 23.7538 23.5913 23.9088 23.5157 24.0461Z"
                                    fill="#4F4F4F" />
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="pe-10px"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                height="30" viewBox="0 0 30 30" fill="none">
                                <path
                                    d="M20.625 2.8125H9.375C7.63509 2.81436 5.96697 3.50636 4.73667 4.73667C3.50636 5.96697 2.81436 7.63509 2.8125 9.375V20.625C2.81436 22.3649 3.50636 24.033 4.73667 25.2633C5.96697 26.4936 7.63509 27.1856 9.375 27.1875H20.625C22.3649 27.1856 24.033 26.4936 25.2633 25.2633C26.4936 24.033 27.1856 22.3649 27.1875 20.625V9.375C27.1856 7.63509 26.4936 5.96697 25.2633 4.73667C24.033 3.50636 22.3649 2.81436 20.625 2.8125ZM15 20.625C13.8875 20.625 12.7999 20.2951 11.8749 19.677C10.9499 19.0589 10.2289 18.1804 9.80318 17.1526C9.37744 16.1248 9.26604 14.9938 9.48308 13.9026C9.70013 12.8115 10.2359 11.8092 11.0225 11.0225C11.8092 10.2359 12.8115 9.70013 13.9026 9.48308C14.9938 9.26604 16.1248 9.37744 17.1526 9.80318C18.1804 10.2289 19.0589 10.9499 19.677 11.8749C20.2951 12.7999 20.625 13.8875 20.625 15C20.6234 16.4914 20.0303 17.9212 18.9758 18.9758C17.9212 20.0303 16.4914 20.6234 15 20.625ZM22.0312 9.375C21.7531 9.375 21.4812 9.29253 21.25 9.138C21.0187 8.98348 20.8385 8.76386 20.732 8.5069C20.6256 8.24994 20.5978 7.96719 20.652 7.6944C20.7063 7.42162 20.8402 7.17105 21.0369 6.97438C21.2335 6.77771 21.4841 6.64378 21.7569 6.58952C22.0297 6.53526 22.3124 6.56311 22.5694 6.66954C22.8264 6.77598 23.046 6.95622 23.2005 7.18748C23.355 7.41874 23.4375 7.69062 23.4375 7.96875C23.4375 8.34171 23.2893 8.6994 23.0256 8.96312C22.7619 9.22684 22.4042 9.375 22.0312 9.375ZM18.75 15C18.75 15.7417 18.5301 16.4667 18.118 17.0834C17.706 17.7001 17.1203 18.1807 16.4351 18.4645C15.7498 18.7484 14.9958 18.8226 14.2684 18.6779C13.541 18.5333 12.8728 18.1761 12.3483 17.6516C11.8239 17.1272 11.4667 16.459 11.3221 15.7316C11.1774 15.0042 11.2516 14.2502 11.5355 13.5649C11.8193 12.8797 12.2999 12.294 12.9166 11.882C13.5333 11.4699 14.2583 11.25 15 11.25C15.9946 11.25 16.9484 11.6451 17.6516 12.3483C18.3549 13.0516 18.75 14.0054 18.75 15Z"
                                    fill="#4F4F4F" />
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="pe-10px"><svg xmlns="http://www.w3.org/2000/svg" width="32"
                                height="32" viewBox="0 0 32 32" fill="none">
                                <path
                                    d="M29.2913 8.69C29.1735 8.22919 28.9478 7.80298 28.6329 7.44654C28.318 7.09011 27.9228 6.81366 27.48 6.64C23.195 4.985 16.375 5 16 5C15.625 5 8.805 4.985 4.52 6.64C4.0772 6.81366 3.68204 7.09011 3.36712 7.44654C3.05219 7.80298 2.82653 8.22919 2.70875 8.69C2.385 9.9375 2 12.2175 2 16C2 19.7825 2.385 22.0625 2.70875 23.31C2.82636 23.771 3.05194 24.1975 3.36687 24.5542C3.68181 24.9108 4.07706 25.1875 4.52 25.3613C8.625 26.945 15.05 27 15.9175 27H16.0825C16.95 27 23.3787 26.945 27.48 25.3613C27.9229 25.1875 28.3182 24.9108 28.6331 24.5542C28.9481 24.1975 29.1736 23.771 29.2913 23.31C29.615 22.06 30 19.7825 30 16C30 12.2175 29.615 9.9375 29.2913 8.69ZM20.0737 16.815L15.0737 20.315C14.9242 20.4198 14.7488 20.4816 14.5666 20.4938C14.3844 20.5059 14.2023 20.4679 14.0401 20.384C13.878 20.3 13.7419 20.1732 13.6467 20.0174C13.5515 19.8615 13.5007 19.6826 13.5 19.5V12.5C13.5001 12.3171 13.5503 12.1377 13.6452 11.9813C13.7402 11.8249 13.8762 11.6976 14.0385 11.6132C14.2008 11.5287 14.3831 11.4904 14.5656 11.5024C14.7482 11.5144 14.9239 11.5763 15.0737 11.6813L20.0737 15.1813C20.2053 15.2735 20.3126 15.396 20.3868 15.5386C20.4609 15.6811 20.4996 15.8394 20.4996 16C20.4996 16.1606 20.4609 16.3189 20.3868 16.4614C20.3126 16.604 20.2053 16.7265 20.0737 16.8188V16.815Z"
                                    fill="#4F4F4F" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="col-md-8 col-lg-8 d-flex align-items-stretch border-color-transparent-base-color border-bottom">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 footer-section information">
                            <h5 style="color: var(--Gray-2, #4F4F4F);" class="fs-20 fw-600 mb-5px">Information</h5>
                            <hr class="footer-separator" />
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="info-columns">
                                        <ul class="fs-14 fw-400" style="color: var(--Gray-2, #4F4F4F);">
                                            <li><a href="#">Public Disclosure</a></li>
                                            <li><a href="#">Master Plan and Land Use</a></li>
                                            <li><a href="#">SWM Rule 2016</a></li>
                                            <li><a href="#">By Law</a></li>
                                            <li><a href="#">News Letter</a></li>
                                            <li><a href="#">Important G.Os and Notifications</a></li>
                                            <li><a href="#">Combined Development & Building Rules, 2019</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="info-columns">
                                        <ul class="fs-14 fw-400" style="color: var(--Gray-2, #4F4F4F);">
                                            <li><a href="#">Service Level Bench Mark</a></li>
                                            <li><a href="#">Amrut Reforms</a></li>
                                            <li><a href="#">Municipal Directory</a></li>
                                            <li><a href="#">1 to 24 Schedule</a></li>
                                            <li><a href="#">Bribery is against the law</a></li>
                                            <li><a href="#">14th CFC Performance grant 2019-20</a></li>
                                            <li><a href="#">TNSUDP – Roads and SWD – EA report</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 footer-section downloads">
                            <h5 style="color: var(--Gray-2, #4F4F4F);" class="fs-20 fw-600 mb-5px">Information</h5>
                            <hr class="footer-separator" />
                            <ul class="fs-14 fw-400" style="color: var(--Gray-2, #4F4F4F);">
                                <li><a href="#">Tenders</a></li>
                                <li><a href="#">Miscellaneous Applications</a></li>
                                <li><a href="#">Building Plan Applications</a></li>
                                <li><a href="#">Tax Applications</a></li>
                                <li><a href="#">Gallery – Corona Activities</a></li>
                                <li><a href="#">COVID 19 Prevention</a></li>
                                <li><a href="#">Containment Zone</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4  pt-20px">
                    <div class="footer-app-download">
                        <p class="text-black fw-500 fs-14 m-0">Download our app</p>
                        <h5 class="text-black mb-5px fs-20 fw-700">TN Urban Esevai</h5>
                        <a href="#"><img src="assets/images/andriod.png" alt="Google Play" /></a>
                        <a href="#"><img src="assets/images/ios.png" alt="App Store" /></a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 pt-20px">
                    <div class="footer-section visitor-count">
                        <h5 class="mb-5px fs-20 fw-700 text-black">Visitors Count</h5>
                        <div id="visitorCounter" class="count-display">
                            <span>0</span>
                            <span>0</span>
                            <span>0</span>
                            <span>0</span>
                            <span>0</span>
                            <span>0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/vendors.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>


    <script>
        document.getElementById('zoneSelect').addEventListener('change', function () {
            const zone = this.value.replace(' ', '');
            document.getElementById('link1').setAttribute('href',
                `assets/pdf/wardmap/${zone}WardMap.pdf`);
            document.getElementById('link2').setAttribute('href',
                `assets/pdf/watersupplydistribution/${zone}WaterSupplyDistribution.pdf`);
            document.getElementById('link3').setAttribute('href',
                `assets/pdf/bulkwastemanagement/${zone}BulkWastesManagement.pdf`);
        });
        function checkZoneSelection(event, linkId) {
            const zone = document.getElementById('zoneSelect').value;
            if (!zone) {
                event.preventDefault();
                alert("Please select a zone before downloading.");
            }
        }
    </script>


    <script>
        function updateCounterDisplay(count) {
            const countStr = count.toString().padStart(6, '0');
            const counterSpans = document.querySelectorAll('#visitorCounter span');

            // Update each span with the corresponding digit
            for (let i = 0; i < countStr.length; i++) {
                counterSpans[i].innerText = countStr[i];
            }
        }

        // Initialize or increment the visitor count
        function incrementVisitorCount() {
            // Get the current count from localStorage, or start at 1 if it doesn’t exist
            let count = localStorage.getItem('visitorCount');
            count = count ? parseInt(count) + 1 : 1;

            // Save the updated count back to localStorage
            localStorage.setItem('visitorCount', count);

            // Update the counter display on the page
            updateCounterDisplay(count);
        }

        // Call incrementVisitorCount when the page loads
        document.addEventListener('DOMContentLoaded', incrementVisitorCount);
    </script>

    <script>
        // Default, max, and min font sizes in pixels
        let defaultFontSize = 16; // Default font size (in px)
        let currentFontSize = defaultFontSize;
        const maxFontSize = 18; // Max font size (in px)
        const minFontSize = 14; // Min font size (in px)

        // Function to apply font size
        function applyFontSize(size) {
            document.body.style.fontSize = size + "px";
        }

        // Event listener for zoom-in
        document.getElementById("zoom-in").addEventListener("click", function () {
            if (currentFontSize < maxFontSize) {
                currentFontSize += 1; // Increase by 1px
                applyFontSize(currentFontSize);
            }
        });

        // Event listener for default-size
        document.getElementById("default-size").addEventListener("click", function () {
            currentFontSize = defaultFontSize; // Reset to default
            applyFontSize(currentFontSize);
        });

        // Event listener for zoom-out
        document.getElementById("zoom-out").addEventListener("click", function () {
            if (currentFontSize > minFontSize) {
                currentFontSize -= 1; // Decrease by 1px
                applyFontSize(currentFontSize);
            }
        });
    </script>


</body>

</html>