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
                                <li><a href="e_governance" class="text-black p-10px">E-Governance</a></li>
                                <li><a href="#" class="text-black p-10px">Officer Details</a></li>
                                <li><a href="contact" class="text-black p-10px">Contact us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="about" class="nav-link">About Tambaram&nbsp;<i
                                    class="fa-solid fa-angle-down"></i></a></a>
                            <ul class="dropdown-menu border-radius-10px border border-color-transparent-base-color">
                                <li><a href="#" class="text-black p-10px">How to reach</a></li>
                                <li><a href="#" class="text-black p-10px">Place of interest</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="whos_who" class="nav-link">Who's Who&nbsp;<i
                                    class="fa-solid fa-angle-down"></i></a>
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

    <section class="pt-100px pb-100px h-800px"
        style="background-image: url(assets/images/banner.jpg);background-size: cover">
        <div class="container h-100">
            <div class="row align-items-end h-100 md-mt-50px">
                <div class="col-xl-6 col-lg-6 position-relative z-index-1"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="alt-font fs-100 text-white fw-700 ls-minus-2px">I
                        <span class="text-highlight"><img src="assets/images/heart.png" width="100" /><br>
                            Tambaram
                        </span>
                    </h1>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="cover-background border-radius-20px"
                        style="background: linear-gradient(180deg, #FFF 0%, #D5C5B8 100%);">
                        <div class="container">
                            <div class="row mb-6 xs-mb-8">
                                <div class="col tab-style-02 fs-600">
                                    <ul class="nav nav-tabs fs-18 fw-500 justify-content-left text-center border-bottom"
                                        data-anime='{ "el": "childs", "rotateX": [30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_first1">What’s
                                                New</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab_first2">Recent
                                                Uploads</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active show" id="tab_first1">
                                            <div class="row justify-content-left">
                                                <div class="col-lg-12 sm-mb-20px">
                                                    <ul class="ps-10px">
                                                        <li class="pt-10px pb-10px"><img
                                                                src="assets/images/icons/arrow-right.png" /><a
                                                                href="https://tntenders.gov.in/nicgep/app"
                                                                target="_blank">&nbsp;&nbsp;TURIP 23-24-28 packages dt
                                                                23/06/2023</a></li>
                                                        <li class="pt-10px pb-10px"><img
                                                                src="assets/images/icons/arrow-right.png" /><a
                                                                href="assets/pdf/Corporation-Permitted-Sewage-Vehicles.pdf"
                                                                target="_blank">&nbsp;&nbsp;Tambaram city municipal
                                                                corporation
                                                                sewage lorry operator permitted vehicles list</a></li>
                                                        <li class="pt-10px pb-10px"><img
                                                                src="assets/images/icons/arrow-right.png" /><a
                                                                href="assets/pdf/water-test-report.pdf"
                                                                target="_blank">&nbsp;&nbsp;Tambaram Corporation Water
                                                                Test
                                                                Report</a></li>
                                                        <li class="pt-10px pb-10px"><img
                                                                src="assets/images/icons/arrow-right.png" /><a
                                                                href="assets/pdf/wd01.pdf"
                                                                target="_blank">&nbsp;&nbsp;SWM Vehicle
                                                                Deployment Details (Garbage Collection WARD WISE)</a>
                                                        </li>
                                                        <li class="pt-10px pb-10px"><img
                                                                src="assets/images/icons/arrow-right.png" /><a
                                                                href="assets/pdf/Property-tax-G.O.52_0001-1.pdf"
                                                                target="_blank">&nbsp;&nbsp;Property Tax revision
                                                                (Government
                                                                Order)</a></li>
                                                        <li class="pt-10px pb-10px"><img
                                                                src="assets/images/icons/arrow-right.png" /><a
                                                                href="assets/pdf/water-supply_0001.pdf"
                                                                target="_blank">&nbsp;&nbsp;Tambaram Corporation Bulk
                                                                Waster
                                                                Management</a></li>
                                                        <li class="pt-10px pb-10px"><img
                                                                src="assets/images/icons/arrow-right.png" /><a
                                                                href="assets/pdf/Property-tax-G.O.52_0001-1.pdf"
                                                                target="_blank">&nbsp;&nbsp;Property Tax revision
                                                                (Government
                                                                Order)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in" id="tab_first2">
                                            <div class="row justify-content-left">
                                                <div class="col-lg-12 sm-mb-20px">
                                                    <ul class="ps-10px">
                                                        <li class="pt-10px pb-10px"><img
                                                                src="assets/images/icons/arrow-right.png" /><a
                                                                href="assets/pdf/TCMC_relief-shelters1.pdf"
                                                                target="_blank">&nbsp;&nbsp;Tambaram Corporation Flood
                                                                Relief Shelters</a></li>

                                                        <li class="pt-10px pb-10px"><img
                                                                src="assets/images/icons/arrow-right.png" /><a
                                                                href="assets/pdf/TCMC_vulnerable-area.pdf"
                                                                target="_blank">&nbsp;&nbsp;Tambaram Corporation Flood
                                                                Vulnerable Areas</a></li>


                                                        <li class="pt-10px pb-10px"><img
                                                                src="assets/images/icons/arrow-right.png" /><a
                                                                href="assets/pdf/SOP_Pet_Animal.pdf"
                                                                target="_blank">&nbsp;&nbsp;SOP for PET Registration
                                                            </a></li>


                                                        <li class="pt-10px pb-10px"><img
                                                                src="assets/images/icons/arrow-right.png" /><a
                                                                href="assets/pdf/Tender-notice-zone-11.pdf"
                                                                target="_blank">&nbsp;&nbsp;Tender notice Zone 11</a>
                                                        </li>


                                                        <li class="pt-10px pb-10px"><img
                                                                src="assets/images/icons/arrow-right.png" /><a
                                                                href="assets/pdf/ZoneI-nov.pdf"
                                                                target="_blank">&nbsp;&nbsp;Tambaram City Municipal
                                                                Corporation Water Supply Distribution Time Table </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="p-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex">
                    <div class="card flex-fill border-radius-30px">
                        <img src="assets/images/grievance-bg.png" class="card-img-top border-radius-top-left" />
                        <div class="card-body">
                            <h5 class="card-title fs-24 fw-700 text-black">Grievance Redressal</h5>
                            <div class="row">
                                <div class="col-lg-5">
                                    <p class="mb-5px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 22 22" fill="none">
                                            <path
                                                d="M11 2.0625C9.23233 2.0625 7.50436 2.58668 6.0346 3.56874C4.56483 4.55081 3.41929 5.94665 2.74283 7.57977C2.06637 9.21288 1.88938 11.0099 2.23424 12.7436C2.57909 14.4773 3.43031 16.0698 4.68024 17.3198C5.93017 18.5697 7.52268 19.4209 9.25638 19.7658C10.9901 20.1106 12.7871 19.9336 14.4202 19.2572C16.0534 18.5807 17.4492 17.4352 18.4313 15.9654C19.4133 14.4956 19.9375 12.7677 19.9375 11C19.9348 8.63047 18.9923 6.35876 17.3168 4.68325C15.6412 3.00773 13.3695 2.06523 11 2.0625ZM18.5625 11C18.5631 11.6974 18.4668 12.3916 18.2763 13.0625H14.9669C15.1777 11.6956 15.1777 10.3044 14.9669 8.9375H18.2763C18.4668 9.60843 18.5631 10.3026 18.5625 11ZM8.76563 14.4375H13.2344C12.7941 15.88 12.0299 17.2028 11 18.3047C9.97054 17.2025 9.20632 15.8798 8.76563 14.4375ZM8.43047 13.0625C8.19444 11.6976 8.19444 10.3024 8.43047 8.9375H13.5764C13.8124 10.3024 13.8124 11.6976 13.5764 13.0625H8.43047ZM3.4375 11C3.43691 10.3026 3.53322 9.60843 3.72368 8.9375H7.03313C6.82229 10.3044 6.82229 11.6956 7.03313 13.0625H3.72368C3.53322 12.3916 3.43691 11.6974 3.4375 11ZM13.2344 7.5625H8.76563C9.20588 6.11996 9.97015 4.79719 11 3.69531C12.0295 4.79748 12.7937 6.12016 13.2344 7.5625ZM17.7315 7.5625H14.6704C14.2846 6.14703 13.6343 4.81738 12.754 3.64375C13.8176 3.89927 14.8135 4.38176 15.6732 5.05816C16.5329 5.73455 17.2363 6.58886 17.7349 7.5625H17.7315ZM9.24602 3.64375C8.36567 4.81738 7.71543 6.14703 7.32961 7.5625H4.26508C4.76375 6.58886 5.46706 5.73455 6.3268 5.05816C7.18653 4.38176 8.18236 3.89927 9.24602 3.64375ZM4.26508 14.4375H7.32961C7.71543 15.853 8.36567 17.1826 9.24602 18.3563C8.18236 18.1007 7.18653 17.6182 6.3268 16.9418C5.46706 16.2654 4.76375 15.4111 4.26508 14.4375ZM12.754 18.3563C13.6343 17.1826 14.2846 15.853 14.6704 14.4375H17.7349C17.2363 15.4111 16.5329 16.2654 15.6732 16.9418C14.8135 17.6182 13.8176 18.1007 12.754 18.3563Z"
                                                fill="#7A2D4F" />
                                        </svg>
                                        <a href="https://voiceoftambaram.tcmcpublichealth.in/" target="_blank"
                                            class="card-text fs-16 fw-400"
                                            style="text-decoration-line: underline;color: var(--Blue-1, #2F80ED);">
                                            Register Complaints Via Internet</a>
                                    </p>
                                    <p class="mb-5px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 22 22" fill="none">
                                            <path
                                                d="M19.1099 13.6265L15.0614 11.8124L15.0502 11.8072C14.8401 11.7173 14.6108 11.6812 14.3832 11.7023C14.1555 11.7233 13.9367 11.8007 13.7466 11.9275C13.7242 11.9423 13.7027 11.9584 13.6821 11.9757L11.5904 13.7589C10.2652 13.1152 8.89712 11.7574 8.25345 10.4494L10.0392 8.32589C10.0564 8.30441 10.0727 8.28292 10.0882 8.25972C10.2123 8.07006 10.2876 7.85265 10.3074 7.62685C10.3272 7.40105 10.2909 7.17386 10.2016 6.9655V6.95519L8.38235 2.8998C8.26439 2.6276 8.06157 2.40086 7.80415 2.25341C7.54674 2.10596 7.24854 2.04572 6.95407 2.08167C5.78959 2.2349 4.72071 2.80679 3.94706 3.6905C3.17341 4.57422 2.7479 5.70934 2.75001 6.88386C2.75001 13.7073 8.30157 19.2589 15.125 19.2589C16.2995 19.261 17.4346 18.8355 18.3184 18.0618C19.2021 17.2882 19.774 16.2193 19.9272 15.0548C19.9632 14.7604 19.9031 14.4623 19.7558 14.2049C19.6085 13.9475 19.382 13.7446 19.1099 13.6265ZM15.125 17.8839C12.2086 17.8807 9.41256 16.7207 7.35035 14.6585C5.28814 12.5963 4.12819 9.80026 4.12501 6.88386C4.12177 6.04467 4.42411 5.233 4.97556 4.60042C5.52701 3.96784 6.28986 3.55762 7.12165 3.44636C7.12131 3.44979 7.12131 3.45324 7.12165 3.45667L8.92634 7.49573L7.15001 9.62183C7.13198 9.64257 7.1156 9.6647 7.10102 9.688C6.9717 9.88644 6.89583 10.1149 6.88078 10.3513C6.86572 10.5877 6.91199 10.824 7.01509 11.0372C7.79368 12.6296 9.39813 14.2221 11.0077 14.9998C11.2226 15.1019 11.4602 15.1466 11.6974 15.1294C11.9347 15.1123 12.1634 15.0338 12.3613 14.9018C12.3833 14.887 12.4046 14.8709 12.4249 14.8537L14.514 13.0714L18.5531 14.8803C18.5531 14.8803 18.5599 14.8803 18.5625 14.8803C18.4526 15.7133 18.043 16.4777 17.4103 17.0305C16.7776 17.5833 15.9652 17.8867 15.125 17.8839Z"
                                                fill="#7A2D4F" />
                                        </svg>
                                        <a href="https://www.whatsapp.com/channel/0029VaqlOACBadmejYWP7b3T"
                                            target="_blank" class="card-text fs-16 fw-400"
                                            style="text-decoration-line: underline;color: var(--Blue-1, #2F80ED);">
                                            Register Complaint via Phone </a>
                                    </p>
                                </div>
                                <div class="col-lg-7">
                                    <p class="card-text fs-16 fw-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                            viewBox="0 0 23 23" fill="none">
                                            <path
                                                d="M9.1499 8.95508C9.1499 8.77274 9.22234 8.59787 9.35127 8.46894C9.4802 8.34001 9.65507 8.26758 9.8374 8.26758H15.3374C15.5197 8.26758 15.6946 8.34001 15.8235 8.46894C15.9525 8.59787 16.0249 8.77274 16.0249 8.95508C16.0249 9.13741 15.9525 9.31228 15.8235 9.44121C15.6946 9.57015 15.5197 9.64258 15.3374 9.64258H9.8374C9.65507 9.64258 9.4802 9.57015 9.35127 9.44121C9.22234 9.31228 9.1499 9.13741 9.1499 8.95508ZM9.8374 12.3926H15.3374C15.5197 12.3926 15.6946 12.3201 15.8235 12.1912C15.9525 12.0623 16.0249 11.8874 16.0249 11.7051C16.0249 11.5227 15.9525 11.3479 15.8235 11.2189C15.6946 11.09 15.5197 11.0176 15.3374 11.0176H9.8374C9.65507 11.0176 9.4802 11.09 9.35127 11.2189C9.22234 11.3479 9.1499 11.5227 9.1499 11.7051C9.1499 11.8874 9.22234 12.0623 9.35127 12.1912C9.4802 12.3201 9.65507 12.3926 9.8374 12.3926ZM20.8374 16.5176C20.8374 17.2469 20.5477 17.9464 20.0319 18.4621C19.5162 18.9778 18.8167 19.2676 18.0874 19.2676H8.4624C7.73306 19.2676 7.03358 18.9778 6.51786 18.4621C6.00213 17.9464 5.7124 17.2469 5.7124 16.5176V5.51758C5.7124 5.15291 5.56754 4.80317 5.30967 4.54531C5.05181 4.28744 4.70208 4.14258 4.3374 4.14258C3.97273 4.14258 3.62299 4.28744 3.36513 4.54531C3.10727 4.80317 2.9624 5.15291 2.9624 5.51758C2.9624 6.01086 3.37748 6.3443 3.38178 6.34773C3.49556 6.4353 3.57907 6.55628 3.6206 6.69372C3.66213 6.83116 3.65959 6.97815 3.61334 7.11407C3.56708 7.24998 3.47944 7.36801 3.36269 7.45159C3.24595 7.53517 3.10598 7.5801 2.9624 7.58008C2.81373 7.58033 2.6691 7.53172 2.55076 7.44172C2.45107 7.36867 1.5874 6.68719 1.5874 5.51758C1.5874 4.78823 1.87713 4.08876 2.39286 3.57303C2.90858 3.05731 3.60806 2.76758 4.3374 2.76758H16.0249C16.7542 2.76758 17.4537 3.05731 17.9694 3.57303C18.4852 4.08876 18.7749 4.78823 18.7749 5.51758V14.4551H19.4624C19.6112 14.4551 19.7559 14.5033 19.8749 14.5926C19.978 14.6665 20.8374 15.348 20.8374 16.5176ZM9.17225 14.926C9.21922 14.7874 9.30887 14.6671 9.42835 14.5825C9.54783 14.4979 9.69102 14.4533 9.8374 14.4551H17.3999V5.51758C17.3999 5.15291 17.255 4.80317 16.9972 4.54531C16.7393 4.28744 16.3896 4.14258 16.0249 4.14258H6.71701C6.96016 4.55998 7.08799 5.03452 7.0874 5.51758V16.5176C7.0874 16.8823 7.23227 17.232 7.49013 17.4899C7.74799 17.7477 8.09773 17.8926 8.4624 17.8926C8.82708 17.8926 9.17681 17.7477 9.43467 17.4899C9.69254 17.232 9.8374 16.8823 9.8374 16.5176C9.8374 16.0243 9.42232 15.6909 9.41803 15.6874C9.30086 15.6036 9.21373 15.4844 9.16948 15.3473C9.12523 15.2102 9.1262 15.0625 9.17225 14.926ZM19.4624 16.5176C19.4538 16.2629 19.3555 16.0194 19.1848 15.8301H11.1067C11.1758 16.0527 11.2109 16.2845 11.2107 16.5176C11.2113 17.0004 11.0841 17.4748 10.842 17.8926H18.0874C18.4521 17.8926 18.8018 17.7477 19.0597 17.4899C19.3175 17.232 19.4624 16.8823 19.4624 16.5176Z"
                                                fill="#7A2D4F" />
                                        </svg>
                                        Complaint via Paper Form, Write to<br>The Corporation Commissioner 28,
                                        Muthurenga
                                        Mudali Street, West Tambaram , Chennai – 600 045
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ">
                    <div class="card flex-fill align-items-center border-radius-40px"
                        style="background-image: url(assets/images/commissioner-bg.png)">
                        <div class="p-50px"
                            style="background: url(assets/images/bg-1.png); background-repeat: no-repeat; background-position: center;">
                            <img src="assets/images/balachander.png"
                                class="card-img-top border-radius-40px w-200px h-200px"
                                style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-titlec fs-24 fw-700 text-black">Thiru.S.Balachander,  I.A.S Corporation
                                Commissioner</h5>
                            <p class="card-text mb-5px fs-16 fw-400">28, Muthurenga Mudali Street, West Tambaram ,
                                Chennai –
                                600 045</p>
                            <p class="mb-5px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path opacity="0.2"
                                        d="M20.9944 16.3201C20.8487 17.4086 20.3127 18.4071 19.486 19.13C18.6593 19.8529 17.5982 20.2509 16.5 20.2501C13.1185 20.2501 9.87548 18.9068 7.48439 16.5157C5.0933 14.1246 3.75 10.8816 3.75 7.5001C3.74916 6.40192 4.1472 5.3408 4.87009 4.5141C5.59298 3.6874 6.59152 3.15138 7.68 3.00573C7.84091 2.98661 8.00368 3.02012 8.14395 3.10124C8.28422 3.18236 8.39444 3.30673 8.45813 3.45573L10.4391 7.88073C10.4877 7.99438 10.5076 8.1183 10.4968 8.24146C10.486 8.36463 10.4449 8.48321 10.3772 8.58666L8.37375 10.9689C8.30268 11.0761 8.26066 11.1999 8.25179 11.3283C8.24291 11.4566 8.26749 11.585 8.32313 11.701C9.09844 13.2882 10.7391 14.9092 12.3309 15.677C12.4475 15.7324 12.5766 15.7564 12.7053 15.7467C12.834 15.737 12.958 15.6939 13.065 15.6217L15.4088 13.6248C15.5126 13.5557 15.6321 13.5136 15.7563 13.5023C15.8806 13.491 16.0057 13.5108 16.1203 13.5601L20.5416 15.541C20.6913 15.6043 20.8163 15.7145 20.898 15.855C20.9797 15.9955 21.0135 16.1587 20.9944 16.3201Z"
                                        fill="#FFA961" />
                                    <path
                                        d="M20.8472 14.8557L16.4306 12.8766L16.4184 12.871C16.1891 12.7729 15.939 12.7336 15.6907 12.7565C15.4424 12.7794 15.2037 12.8639 14.9962 13.0022C14.9718 13.0184 14.9483 13.0359 14.9259 13.0547L12.6441 15.0001C11.1984 14.2979 9.70593 12.8166 9.00374 11.3897L10.9519 9.07318C10.9706 9.04974 10.9884 9.0263 11.0053 9.00099C11.1407 8.79409 11.2229 8.55692 11.2444 8.31059C11.266 8.06427 11.2264 7.81642 11.1291 7.58912V7.57787L9.14437 3.1538C9.01569 2.85687 8.79442 2.60951 8.51361 2.44865C8.23279 2.2878 7.90748 2.22208 7.58624 2.2613C6.3159 2.42847 5.14985 3.05234 4.30587 4.01639C3.46189 4.98045 2.9977 6.21876 2.99999 7.50005C2.99999 14.9438 9.05624 21.0001 16.5 21.0001C17.7813 21.0023 19.0196 20.5382 19.9837 19.6942C20.9477 18.8502 21.5716 17.6841 21.7387 16.4138C21.778 16.0927 21.7125 15.7674 21.5518 15.4866C21.3911 15.2058 21.1439 14.9845 20.8472 14.8557ZM16.5 19.5001C13.3185 19.4966 10.2682 18.2312 8.01855 15.9815C5.76886 13.7318 4.50347 10.6816 4.49999 7.50005C4.49647 6.58458 4.82629 5.69911 5.42787 5.00903C6.02945 4.31895 6.86165 3.87143 7.76906 3.75005C7.76869 3.7538 7.76869 3.75756 7.76906 3.7613L9.73781 8.16755L7.79999 10.4869C7.78032 10.5096 7.76246 10.5337 7.74656 10.5591C7.60548 10.7756 7.52271 11.0249 7.50629 11.2827C7.48986 11.5406 7.54033 11.7984 7.65281 12.031C8.50218 13.7682 10.2525 15.5054 12.0084 16.3538C12.2428 16.4652 12.502 16.5139 12.7608 16.4952C13.0196 16.4765 13.2691 16.3909 13.485 16.2469C13.5091 16.2307 13.5322 16.2132 13.5544 16.1944L15.8334 14.2501L20.2397 16.2235C20.2397 16.2235 20.2472 16.2235 20.25 16.2235C20.1301 17.1322 19.6833 17.9661 18.993 18.5691C18.3028 19.1722 17.4165 19.5031 16.5 19.5001Z"
                                        fill="#783050" />
                                </svg>

                                <a href="tel: 044-22261700" class="card-text text-black fs-16 fw-400"> 044-22261700</a>
                            </p>
                            <p class="mb-5px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path opacity="0.2"
                                        d="M19.9772 16.17C19.25 17.561 18.1717 18.7376 16.8493 19.583C15.5269 20.4285 14.0064 20.9134 12.4387 20.9897L12.7359 19.4484C12.758 19.3327 12.7526 19.2135 12.72 19.1003C12.6874 18.9871 12.6287 18.8831 12.5484 18.7969L10.6978 16.8909C10.598 16.7833 10.5321 16.6487 10.5081 16.5039C10.4841 16.359 10.5031 16.2104 10.5628 16.0763L11.8472 13.1944C11.9132 13.0463 12.0255 12.9236 12.1671 12.8447C12.3087 12.7657 12.4721 12.7348 12.6328 12.7566L14.7722 13.0453C14.8758 13.0595 14.9754 13.0949 15.0647 13.1494L19.9772 16.17ZM10.9416 8.90626L12.0937 8.27251C12.1446 8.24501 12.1918 8.21132 12.2344 8.1722L14.7572 5.89126C14.8828 5.77705 14.9659 5.62363 14.9929 5.45606C15.02 5.2885 14.9895 5.1167 14.9062 4.96876L13.9219 3.20532C13.2904 3.06854 12.6461 2.99971 12 3.00001C9.94564 2.99688 7.95256 3.69952 6.35437 4.99032L5.25 7.60126C5.1754 7.77801 5.17137 7.97663 5.23875 8.15626L6.31687 11.0316C6.36117 11.1491 6.43425 11.2535 6.52942 11.3354C6.62458 11.4173 6.73879 11.474 6.86156 11.5003L7.11375 11.5547L8.3625 9.37501C8.42842 9.26083 8.52327 9.16605 8.63749 9.10021C8.75172 9.03438 8.88128 8.99982 9.01312 9.00001H10.5797C10.7063 9.00022 10.8309 8.96794 10.9416 8.90626Z"
                                        fill="#FFA961" />
                                    <path
                                        d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM20.25 12C20.2508 13.0584 20.0471 14.107 19.65 15.0881L15.4594 12.5109C15.2812 12.401 15.0819 12.3298 14.8744 12.3019L12.735 12.0131C12.4402 11.9747 12.1406 12.0241 11.8738 12.1552C11.607 12.2863 11.3848 12.4932 11.235 12.75H10.4175L10.0613 12.0131C9.96277 11.8079 9.81863 11.628 9.63988 11.4871C9.46114 11.3462 9.25252 11.2481 9.03 11.2003L8.28 11.0381L9.01313 9.75H10.5797C10.8332 9.7495 11.0825 9.68501 11.3044 9.5625L12.4528 8.92875C12.5537 8.87251 12.648 8.80522 12.7341 8.72812L15.2569 6.44625C15.5098 6.21957 15.6779 5.91345 15.7335 5.57838C15.7891 5.24331 15.7287 4.89931 15.5625 4.60312L15.5288 4.54219C16.9404 5.21156 18.1333 6.26756 18.969 7.58761C19.8047 8.90767 20.2489 10.4377 20.25 12ZM13.4353 3.87563L14.25 5.33438L11.7272 7.61625L10.5797 8.25H9.01313C8.74945 8.24961 8.49033 8.31874 8.26188 8.45041C8.03342 8.58208 7.84372 8.77165 7.71188 9L6.89344 10.4278L5.94188 7.89281L6.9675 5.4675C7.87532 4.76606 8.91965 4.26197 10.0336 3.98752C11.1475 3.71307 12.3065 3.67432 13.4363 3.87375L13.4353 3.87563ZM3.75 12C3.74875 10.7738 4.02233 9.56284 4.55063 8.45625L5.61375 11.2941C5.70235 11.529 5.84852 11.738 6.03885 11.9018C6.22918 12.0656 6.45759 12.179 6.70313 12.2316L8.71219 12.6637L9.06938 13.4062C9.19334 13.6588 9.38545 13.8716 9.62401 14.0207C9.86256 14.1698 10.1381 14.2492 10.4194 14.25H10.5581L9.88032 15.7716C9.76089 16.0395 9.72264 16.3365 9.77029 16.626C9.81795 16.9154 9.94942 17.1845 10.1484 17.4L10.1616 17.4131L12 19.3069L11.8181 20.2444C9.66359 20.1942 7.61396 19.3041 6.10662 17.7638C4.59927 16.2235 3.75358 14.1551 3.75 12ZM13.3669 20.1356L13.4728 19.5909C13.5164 19.3595 13.5051 19.1211 13.44 18.8949C13.3749 18.6686 13.2577 18.4607 13.0978 18.2878C13.0932 18.2837 13.0888 18.2793 13.0847 18.2747L11.25 16.3819L12.5344 13.5L14.6738 13.7887L18.96 16.425C18.339 17.4002 17.5204 18.2343 16.557 18.8735C15.5936 19.5127 14.5068 19.9426 13.3669 20.1356Z"
                                        fill="#783050" />
                                </svg>
                                <a href="mailto:commr.tambaram@tn.gov.in" class="card-text text-black fs-16 fw-400">
                                    commr.tambaram@tn.gov.in</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="p-70px">
        <div class="container">
            <div class="card mb-3 zone-card border-none border-radius-30px">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="assets/images/zone-bg.png" class="img-fluid rounded-start h-100">
                    </div>
                    <div class="col-md-6 p-30px d-flex align-items-center"
                        style="background-image:url('assets/images/zone-bg-2.png'); background-size: cover;border-radius: 0 30px 30px 0px;">
                        <div class="card-body p-0">
                            <h5 class="card-title fs-32px fw-700 mb-30px">Zone Updates</h5>
                            <div class="zone-select d-flex align-center-item" style="center;width: 70%">
                                <label for="zoneSelect"
                                    class="align-content-center fs-16 fw-500 form-label w-100">Select your Zone</label>
                                <select id="zoneSelect" class="form-select border-radius-15px">
                                    <option value="" disabled selected>Select Zone</option>
                                    <option value="Zone 1">Zone 1</option>
                                    <option value="Zone 2">Zone 2</option>
                                    <option value="Zone 3">Zone 3</option>
                                    <option value="Zone 4">Zone 4</option>
                                    <option value="Zone 5">Zone 5</option>
                                </select>
                            </div>
                            <div class="row pt-30px pb-30px row-cols-1 row-cols-lg-3 row-cols-sm-2">
                                <div class="col icon-with-text-style-03">
                                    <a href="#" id="link1" onclick="checkZoneSelection(event, 'link1')" target="_blank">
                                        <div class="feature-box">
                                            <div class="feature-box-icon">
                                                <img src="assets/images/icons/3.png" style="width: 64px" />
                                            </div>
                                            <div class="feature-box-content text-center last-paragraph-no-margin">
                                                <span
                                                    class="d-inline-block fw-500 text-dark-gray mb-5px fs-16">Corporation
                                                    Ward Map</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col icon-with-text-style-03">
                                    <a href="#" id="link2" onclick="checkZoneSelection(event, 'link2')" target="_blank">
                                        <div class="feature-box">
                                            <div class="feature-box-icon">
                                                <img src="assets/images/icons/1.png" style="width: 64px" />
                                            </div>
                                            <div class="feature-box-content text-center last-paragraph-no-margin">
                                                <span class="d-inline-block fw-500 text-dark-gray mb-5px fs-16">Water
                                                    Supply Distribution</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col icon-with-text-style-03">
                                    <a href="#" id="link3" onclick="checkZoneSelection(event, 'link3')" target="_blank">
                                        <div class="feature-box">
                                            <div class="feature-box-icon">
                                                <img src="assets/images/icons/2.png" style="width: 64px" />
                                            </div>
                                            <div class="feature-box-content text-center last-paragraph-no-margin">
                                                <span class="d-inline-block fw-500 text-dark-gray mb-5px fs-16">Bulk
                                                    Wastes Management</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col btn-dual">
                                <button href="#"
                                    class="btn btn-base-color btn-large btn-rounded d-table d-lg-inline-block lg-mb-15px md-mx-auto"
                                    disabled>Know Your Zone</button>
                                <a href="javascript:void()" class="">Click here to know your zone</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="p-70px;"
        style="background-image: url(assets/images/glance-bg.png); background-repeat: no-repeat; background-size: cover;background-position: top right;">
        <div class="container p-0">
            <div class="card border-none" style="background: none">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <div class="logo mb-20px">
                            <img src="assets/images/logo.png" alt="" style="width: 80px;">
                        </div>
                        <h3 class="mb-10px fs-40px fw-700">TAMBARAM CORPORATION</h3>
                        <h3 class="mb-10px fs-40px fw-300">at a glance</h3>
                    </div>
                    <div class="col-md-8">
                        <div
                            class="row row-cols-1 row-cols-xl-3 row-cols-xl-3 row-cols-md-3 row-cols-sm-2 icon-with-style-2 g-0">
                            <div class="col transition-inner-all">
                                <div class="feature-box text-align-left hover-box dark-hover">
                                    <div class="d-flex align-items-center  w-100 content-slide-up content-scale p-15px">
                                        <div class="feature-box-icon">
                                            <img src="assets/images/icons/4.png" style="width: 70px; height: 70px" />
                                        </div>
                                        <div class="feature-box-content ms-10px">
                                            <span
                                                class="d-inline-block alt-font text-dark-gray fs-16 fw-500 mb-5px">Area</span>
                                            <p class="mx-auto fs-24 fw-700">87.64 Sqkms</p>
                                        </div>
                                        <div class="feature-box-overlay bg-jade"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col  transition-inner-all">
                                <div class="feature-box text-align-left hover-box dark-hover">
                                    <div class="d-flex align-items-center  w-100 content-slide-up content-scale p-15px">
                                        <div class="feature-box-icon">
                                            <img src="assets/images/icons/5.png" style="width: 70px; height: 70px" />
                                        </div>
                                        <div class="feature-box-content ms-10px">
                                            <span class="d-inline-block alt-font text-dark-gray fs-16 fw-500 mb-5px">
                                                Roads length </span>
                                            <p class="mx-auto fs-24 fw-700">981 Kms</p>
                                        </div>
                                        <div class="feature-box-overlay bg-jade"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col  transition-inner-all">
                                <div class="feature-box text-align-left hover-box dark-hover">
                                    <div class="d-flex align-items-center  w-100 content-slide-up content-scale p-15px">
                                        <div class="feature-box-icon">
                                            <img src="assets/images/icons/6.png" style="width: 70px; height: 70px" />
                                        </div>
                                        <div class="feature-box-content ms-10px">
                                            <span class="d-inline-block alt-font text-dark-gray fs-16 fw-500 mb-5px">
                                                Population (2011) </span>
                                            <p class="mx-auto fs-24 fw-700">7,23,017</p>
                                        </div>
                                        <div class="feature-box-overlay bg-jade"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col  transition-inner-all">
                                <div class="feature-box text-align-left hover-box dark-hover">
                                    <div class="d-flex align-items-center w-100 content-slide-up content-scale p-15px">
                                        <div class="feature-box-icon">
                                            <img src="assets/images/icons/7.png" style="width: 70px; height: 70px" />
                                        </div>
                                        <div class="feature-box-content ms-10px">
                                            <span class="d-inline-block alt-font text-dark-gray fs-16 fw-500 mb-5px">
                                                Street lights </span>
                                            <p class="mx-auto fs-24 fw-700">42,902</p>
                                        </div>
                                        <div class="feature-box-overlay bg-jade"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col  transition-inner-all">
                                <div class="feature-box text-align-left hover-box dark-hover">
                                    <div class="d-flex align-items-center w-100 content-slide-up content-scale p-15px">
                                        <div class="feature-box-icon">
                                            <img src="assets/images/icons/8.png" style="width: 70px; height: 70px" />
                                        </div>
                                        <div class="feature-box-content ms-10px">
                                            <span class="d-inline-block alt-font text-dark-gray fs-16 fw-500 mb-5px">
                                                Bore wells </span>
                                            <p class="mx-auto fs-24 fw-700">981 Kms</p>
                                        </div>
                                        <div class="feature-box-overlay bg-jade"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col  transition-inner-all">
                                <div class="feature-box text-align-left hover-box dark-hover">
                                    <div class="d-flex align-items-center  w-100 content-slide-up content-scale p-15px">
                                        <div class="feature-box-icon">
                                            <img src="assets/images/icons/9.png" style="width: 70px; height: 70px" />
                                        </div>
                                        <div class="feature-box-content ms-10px">
                                            <span class="d-inline-block alt-font text-dark-gray fs-16 fw-500 mb-5px">
                                                Assessments </span>
                                            <p class="mx-auto fs-24 fw-700">2,11,616</p>
                                        </div>
                                        <div class="feature-box-overlay bg-jade"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col  transition-inner-all">
                                <div class="feature-box text-align-left hover-box dark-hover">
                                    <div class="d-flex align-items-center  w-100 content-slide-up content-scale p-15px">
                                        <div class="feature-box-icon">
                                            <img src="assets/images/icons/10.png" style="width: 70px; height: 70px" />
                                        </div>
                                        <div class="feature-box-content ms-10px">
                                            <span class="d-inline-block alt-font text-dark-gray fs-16 fw-500 mb-5px">
                                                Wards </span>
                                            <p class="mx-auto fs-24 fw-700">70 wards</p>
                                        </div>
                                        <div class="feature-box-overlay bg-jade"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col  transition-inner-all">
                                <div class="feature-box text-align-left hover-box dark-hover">
                                    <div class="d-flex align-items-center  w-100 content-slide-up content-scale p-15px">
                                        <div class="feature-box-icon">
                                            <img src="assets/images/icons/11.png" style="width: 70px; height: 70px" />
                                        </div>
                                        <div class="feature-box-content ms-10px">
                                            <span class="d-inline-block alt-font text-dark-gray fs-16 fw-500 mb-5px">
                                                Total people </span>
                                            <p class="mx-auto fs-24 fw-700">7,23,017</p>
                                        </div>
                                        <div class="feature-box-overlay bg-jade"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col btn-dual mt-30px">
                            <a href="#"
                                class="btn btn-extra-large btn-rounded btn-transparent-dark-gray d-table d-lg-inline-block lg-mb-15px md-mx-auto">Know
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-70px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 p-0">
                    <a href="https://tnurbanepay.tn.gov.in/PT_CPPaymentDetails.aspx#" target="_blank">
                        <div class="box m-10px border">
                            <div class="imgBx">
                                <img src="assets/images/services/tax.png">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-6 p-0">
                    <a href="https://tnurbanepay.tn.gov.in/WS_PaymentDetails.aspx#" target="_blank">
                        <div class="box m-10px border">
                            <div class="imgBx">
                                <img src="assets/images/services/water.png">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-6 p-0">
                    <a href="https://tnurbanepay.tn.gov.in/UGD_PaymentDetails.aspx#" target="_blank">
                        <div class="box m-10px border">
                            <div class="imgBx">
                                <img src="assets/images/services/under.png">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-6 p-0">
                    <a href="https://tnurbanepay.tn.gov.in/CP_ProfTaxPaymentDetails.aspx#" target="_blank">
                        <div class="box m-10px border">
                            <div class="imgBx">
                                <img src="assets/images/services/profession.png">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-6 p-0">
                    <a href="https://tnurbanepay.tn.gov.in/NonTax_RentalCollection1.aspx#" target="_blank">
                        <div class="box m-10px border">
                            <div class="imgBx">
                                <img src="assets/images/services/non.png">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="overflow-hidden"
        style="background: url(assets/images/link-bg.png) no-repeat center center;background-size: contain;background-repeat: no-repeat;background-position-y: -110px;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-7"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fw-600 text-white" style="font-size: 36px">Quick Links</span>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-2 justify-content-center"
                data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <div class="col rotate-box-style-02 mb-30px">
                    <div class="w-100 text-center rotate-box to-left">
                        <div
                            class="w-100 h-100 overflow-hidden z-index-1 front-side border-radius-20px box-shadow-quadruple-large">
                            <div class="rotate-content-front z-index-2 p-0">
                                <img class="mb-25px w-100 h-100" src="assets/images/epay.png" alt="">
                            </div>
                        </div>
                        <div
                            class="w-100 h-100 overflow-hidden back-side cover-background border-radius-20px box-shadow-quadruple-large">
                            <div class="opacity-light bg-charcoal-blue"></div>
                            <div
                                class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                                <span class="text-white alt-font fw-500 fs-19 mb-5px">ePay</span>
                                <p>The website enables online tax payments and services for municipalities and
                                    corporations across Tamil Nadu, excluding Chennai. It covers property tax, water,
                                    housing, sewerage, lease, and birth certificates.</p>
                                <a href="https://tnurbanepay.tn.gov.in/" target="_blank"
                                    class="btn btn-small btn-rounded btn-white btn-box-shadow">Pay
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col rotate-box-style-02 mb-30px">
                    <div class="w-100 text-center">

                        <div class="w-100 front-side cover-background border-radius-20px box-shadow-quadruple-large"
                            style="background-image:url('assets/images/online-services.png');height:350px">
                            <ul class="p-30px" style="text-align: left;">
                                <li class="pt-10px pb-10px"><img src="assets/images/icons/arrow-right-white.png" /><a
                                        href="#" target="_blank" class="text-white">&nbsp;&nbsp;Online Services - Land /
                                        Registration /
                                        Patta</a></li>
                                <li class="pt-10px pb-10px"><img src="assets/images/icons/arrow-right-white.png" /><a
                                        href="assets/pdf/PIO.pdf" target="_blank" class="text-white">&nbsp;&nbsp;RTI -
                                        Right to
                                        Information</a></li>
                                <li class="pt-10px pb-10px"><img src="assets/images/icons/arrow-right-white.png" /><a
                                        href="https://tnurbantree.tn.gov.in/tambaram/citizen-charter/" target="_blank"
                                        class="text-white">&nbsp;&nbsp;Citizen charter</a></li>
                                <li class="pt-10px pb-10px"><img src="assets/images/icons/arrow-right-white.png" /><a
                                        href="https://voiceoftambaram.tcmcpublichealth.in/" target="_blank"
                                        class="text-white">&nbsp;&nbsp;Grievance redressal</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col rotate-box-style-02 mb-30px">
                    <div class="w-100 text-center rotate-box to-left">
                        <div
                            class="w-100 h-100 overflow-hidden z-index-1 front-side border-radius-20px box-shadow-quadruple-large">
                            <div class="rotate-content-front z-index-2 p-0">
                                <img class="mb-25px w-100 h-100" src="assets/images/place-of-interest.png" alt="">
                            </div>
                        </div>
                        <div
                            class="w-100 h-100 overflow-hidden back-side cover-background border-radius-20px box-shadow-quadruple-large">
                            <div class="opacity-light bg-charcoal-blue"></div>
                            <div
                                class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                                <ul class="p-30px" style="text-align: left;">
                                    <li class="pt-10px pb-10px"><img
                                            src="assets/images/icons/arrow-right-white.png" /><a href="#"
                                            target="_blank" class="text-white">&nbsp;&nbsp;How to Reach?</a></li>
                                    <li class="pt-10px pb-10px"><img
                                            src="assets/images/icons/arrow-right-white.png" /><a href="#"
                                            target="_blank" class="text-white">&nbsp;&nbsp;Tourist
                                            Places</a></li>
                                    <li class="pt-10px pb-10px"><img
                                            src="assets/images/icons/arrow-right-white.png" /><a href="#"
                                            target="_blank" class="text-white">&nbsp;&nbsp;Tourist Information</a></li>
                                    <li class="pt-10px pb-10px"><img
                                            src="assets/images/icons/arrow-right-white.png" /><a href="#"
                                            target="_blank" class="text-white">&nbsp;&nbsp;Events and Festivals</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="p-70"
        style="background-image: url(assets/images/vector-bg.png);background-repeat: no-repeat;background-position: bottom left;background-size: 400px;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-7"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fw-600 text-black" style="font-size: 36px">Gallery</span>
                </div>
            </div>
            <div class="row">
                <div class="col sm-p-0">
                    <div class="justified-gallery image-gallery-style-06"
                        data-justified-options='{ "rowHeight": 350, "maxRowHeight": false, "captions": false, "margins": 20, "waitThumbnailsLoad": true }'
                        data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 500, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="gallery-box transition-inner-all">
                            <a href="assets/images/gallery/1.png" data-group="lightbox-group-gallery-item-6" title="">
                                <div class="position-relative bg-dark-gray">
                                    <img src="assets/images/gallery/1.png" alt="" />
                                    <div
                                        class="d-flex align-items-center flex-column justify-content-end h-100 w-100 gallery-hover p-45px">
                                        <i
                                            class="icon feather icon-feather-plus-square icon-very-medium text-white absolute-middle-center"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="gallery-box transition-inner-all">
                            <a href="assets/images/gallery/2.png" data-group="lightbox-group-gallery-item-6" title="">
                                <div class="position-relative bg-dark-gray">
                                    <img src="assets/images/gallery/2.png" alt="" />
                                    <div
                                        class="d-flex align-items-center flex-column justify-content-end h-100 w-100 gallery-hover p-45px">
                                        <i
                                            class="icon feather icon-feather-plus-square icon-very-medium text-white absolute-middle-center"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="gallery-box transition-inner-all">
                            <a href="assets/images/gallery/3.png" data-group="lightbox-group-gallery-item-6" title="">
                                <div class="position-relative bg-dark-gray">
                                    <img src="assets/images/gallery/3.png" alt="" />
                                    <div
                                        class="d-flex align-items-center flex-column justify-content-end h-100 w-100 gallery-hover p-45px">
                                        <i
                                            class="icon feather icon-feather-plus-square icon-very-medium text-white absolute-middle-center"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="gallery-box transition-inner-all">
                            <a href="assets/images/gallery/4.png" data-group="lightbox-group-gallery-item-6" title="">
                                <div class="position-relative bg-dark-gray">
                                    <img src="assets/images/gallery/4.png" alt="" />
                                    <div
                                        class="d-flex align-items-center flex-column justify-content-end h-100 w-100 gallery-hover p-45px">
                                        <i
                                            class="icon feather icon-feather-plus-square icon-very-medium text-white absolute-middle-center"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="gallery-box transition-inner-all">
                            <a href="assets/images/gallery/5.png" data-group="lightbox-group-gallery-item-6" title="">
                                <div class="position-relative bg-dark-gray">
                                    <img src="assets/images/gallery/5.png" alt="" />
                                    <div
                                        class="d-flex align-items-center flex-column justify-content-end h-100 w-100 gallery-hover p-45px">
                                        <i
                                            class="icon feather icon-feather-plus-square icon-very-medium text-white absolute-middle-center"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="gallery-box transition-inner-all">
                            <a href="assets/images/gallery/6.png" data-group="lightbox-group-gallery-item-6" title="">
                                <div class="position-relative bg-dark-gray">
                                    <img src="assets/images/gallery/6.png" alt="" />
                                    <div
                                        class="d-flex align-items-center flex-column justify-content-end h-100 w-100 gallery-hover p-45px">
                                        <i
                                            class="icon feather icon-feather-plus-square icon-very-medium text-white absolute-middle-center"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="gallery-box transition-inner-all">
                            <a href="assets/images/gallery/7.png" data-group="lightbox-group-gallery-item-6" title="">
                                <div class="position-relative bg-dark-gray">
                                    <img src="assets/images/gallery/7.png" alt="" />
                                    <div
                                        class="d-flex align-items-center flex-column justify-content-end h-100 w-100 gallery-hover p-45px">
                                        <i
                                            class="icon feather icon-feather-plus-square icon-very-medium text-white absolute-middle-center"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="gallery-box transition-inner-all">
                            <a href="assets/images/gallery/8.png" data-group="lightbox-group-gallery-item-6" title="">
                                <div class="position-relative bg-dark-gray">
                                    <img src="assets/images/gallery/8.png" alt="" />
                                    <div
                                        class="d-flex align-items-center flex-column justify-content-end h-100 w-100 gallery-hover p-45px">
                                        <i
                                            class="icon feather icon-feather-plus-square icon-very-medium text-white absolute-middle-center"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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