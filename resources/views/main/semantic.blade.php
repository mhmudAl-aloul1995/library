


<!DOCTYPE html>
<html lang="ar">
<head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" /><meta http-equiv="X-UA-Compatible" content="ie=edge" /><link rel="dns-prefetch" href="//fonts.googleapis.com" /><link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" /><link href="https://fonts.googleapis.com/css?family=Cairo:300,400,600,700&amp;display=swap" rel="stylesheet" />

    <style>
        .navbar {
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
        }

        .navbar.navigation {
            padding: 32px 0;
            transition: all 0.5s ease-in-out 0ms;
            transition: all 0.5s ease-in-out 0ms;
            transition: all 0.5s ease-in-out 0ms;
            will-change: background-color, padding, box-shadow;
        }

        .navbar.scrolled {
            background-color: transparent;
            background-image: -webkit-linear-gradient(45deg, rgba(72,133,244,0.85) 0%, rgba(44,235,199,0.85) 100%);
            background-image: -moz-linear-gradient(45deg, rgba(72,133,244,0.85) 0%, rgba(44,235,199,0.85) 100%);
            background-image: linear-gradient(45deg, rgba(72,133,244,0.85) 0%, rgba(44,235,199,0.85) 100%);
            -webkit-box-shadow: 0px 15px 35px 0px rgba(47, 68, 95, 0.1), 0px 5px 15px 0px rgba(47, 68, 95, 0.15);
            box-shadow: 0px 15px 35px 0px rgba(47, 68, 95, 0.1), 0px 5px 15px 0px rgba(47, 68, 95, 0.15);
            margin-top: 0;
            padding: 16px 0;
        }

        .navbar.fixed-top {
            z-index: 10000;
        }

        .navbar a {
            color: #fff;
            text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.3);
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
            font-weight: 700;
        }

        .navbar a:hover {
            color: #2f445f;
        }

        .navbar a.navbar-brand {
            color: #2f445f;
            text-shadow: 0 0 0 transparent;
            margin: 0;
            padding: 0;
            -webkit-transition: all 0.6s;
            -moz-transition: all 0.6s;
            transition: all 0.6s;
        }

        .navbar a.navbar-brand:hover {
            color: #2f445f;
        }

        .navbar a.navbar-brand .logo {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
        }

        .navbar a.navbar-brand img {
            width: 53px;
            height: 53px;
            margin-left: 16px;
        }

        .navbar a.navbar-brand h1 {
            font-size: 24px;
            font-weight: 700;
            margin: 0;
        }

        .navbar a.navbar-brand h1 span {
            font-size: 18px;
            font-weight: 300;
            display: block;
            margin-top: 4px;
        }

        .navbar .navbar-nav .nav-item a.nav-link {
            margin: 0 20px;
            padding: 0;
        }

        .navbar .navbar-nav .nav-item .cd-nav-trigger {
            font-size: 20px;
            color: #fff;
            margin: 0 20px;
            padding: 0;
            cursor: pointer;
            -webkit-filter: drop-shadow(0px 1px 1px rgba(0, 0, 0, 0.2));
            filter: drop-shadow(0px 1px 1px rgba(0, 0, 0, 0.2));
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
        }

        .navbar .navbar-nav .nav-item .cd-nav-trigger:hover {
            color: #2f445f;
        }

        .cd-nav {
            position: fixed;
            z-index: 10000;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            visibility: hidden;
            -webkit-transition: visibility 0s 0.7s;
            -moz-transition: visibility 0s 0.7s;
            transition: visibility 0s 0.7s;
        }

        #cd-nav-trigger:checked ~ .cd-nav {
            visibility: visible;
            -webkit-transition: visibility 0s 0s;
            -moz-transition: visibility 0s 0s;
            transition: visibility 0s 0s;
        }

        .cd-nav .cd-navigation-wrapper {
            font-size: 24px;
            font-weight: 600;
            color: #fff;
            height: 100%;
            background-color: #2f445f;
            background-image: -webkit-linear-gradient(to right, #141e30, #243b55);
            background-image: -moz-linear-gradient(to right, #141e30, #243b55);
            background-image: linear-gradient(to right, #141e30, #243b55);
            padding: 80px calc(5% + 80px);
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            /* Force Hardware Acceleration in WebKit */
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            transform: translateX(-100%);
            -webkit-transition: -webkit-transform 0.7s;
            -moz-transition: transform 0.7s;
            transition: transform 0.7s;
            -webkit-transition-timing-function: cubic-bezier(0.86, 0.01, 0.77, 0.78);
            -moz-transition-timing-function: cubic-bezier(0.86, 0.01, 0.77, 0.78);
            transition-timing-function: cubic-bezier(0.86, 0.01, 0.77, 0.78);
        }

        #cd-nav-trigger:checked ~ .cd-nav .cd-navigation-wrapper {
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0);
            -webkit-transition: -webkit-transform 0.5s;
            -moz-transition: transform 0.5s;
            transition: transform 0.5s;
            -webkit-transition-timing-function: cubic-bezier(0.82, 0.01, 0.77, 0.78);
            -moz-transition-timing-function: cubic-bezier(0.82, 0.01, 0.77, 0.78);
            transition-timing-function: cubic-bezier(0.82, 0.01, 0.77, 0.78);
        }

        .cd-nav .cd-navigation-wrapper h5 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 45px;
        }

        .cd-nav .cd-navigation-wrapper li {
            margin: 24px 0;
        }

        .cd-nav .cd-navigation-wrapper a {
            color: #6d7d92;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
        }

        .cd-nav .cd-navigation-wrapper a:hover {
            color: #fff;
        }

        .cd-nav .cd-navigation-wrapper .cd-nav-trigger {
            font-size: 40px;
            color: #fff;
            position: fixed;
            top: 80px;
            left: 80px;
            padding: 8px;
            cursor: pointer;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
        }

        .cd-nav .cd-navigation-wrapper .cd-nav-trigger:hover {
            -webkit-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .header {
            background-color: #fff;
            background-image: -moz-linear-gradient(45deg, rgba(72,133,244,0.75) 0%, rgba(44,235,199,0.75) 100%);
            background-image: -webkit-linear-gradient(45deg, rgba(72,133,244,0.75) 0%, rgba(44,235,199,0.75) 100%);
            background-image: linear-gradient(45deg, rgba(72,133,244,0.75) 0%, rgba(44,235,199,0.75) 100%);
            height: 100vh;
            min-height: 540px;
            max-height: 100vh;
            position: relative;
            color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin: 0;
            overflow: hidden;
        }

        .header:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            display: block;
            height: 100%;
            width: 100%;
/*
            background-image: url(https://library.iugaza.edu.ps/img/background.jpg);
*/
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top center;
            mix-blend-mode: multiply;
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
            opacity: 0.2;
        }

        .header video {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            background: url(img/background.jpg) no-repeat;
            background-size: cover;
            -webkit-transition: 1s opacity;
            -moz-transition: 1s opacity;
            transition: 1s opacity;
            mix-blend-mode: multiply;
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
            opacity: 0.2;
        }

        .header .search-console {
            position: absolute;

        }

        .header h2 {
            font-size: 48px;
            font-weight: 600;
            line-height: 40px;
            text-align: center;
            text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.25);
            margin: 0;
        }

        .header h2 span {
            font-size: 24px;
            font-weight: 300;
            line-height: 100px;
            display: block;
        }

        .header .search-form {
            font-size: 24px;
            color: #2f445f;
            -webkit-box-shadow: 0px 15px 35px 0px rgba(0, 0, 0, 0.1),
            0px 5px 15px 0px rgba(0, 0, 0, 0.15),
            inset 50px 0px 0px 0px rgba(1, 222, 117, 0.004);
            box-shadow: 0px 15px 35px 0px rgba(0, 0, 0, 0.1),
            0px 5px 15px 0px rgba(0, 0, 0, 0.15),
            inset 50px 0px 0px 0px rgba(1, 222, 117, 0.004);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            border-radius: 8px;
            margin-top: 20px;
            overflow: hidden;
        }

        .header .search-form .search-field {
            font-weight: 700;
            border: 0 none;
            border-left: 1px solid #ccd9e3;
            border-radius: 0 8px 8px 0;
            padding: 22px 28px;
            min-width: 430px;
        }

        .header .search-form .search-field::placeholder {
            color: #d4d9dd;
        }

        .header .search-form .search-select {
            overflow: hidden;
            border: 0 none;
            position: relative;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: end;
            padding: 0;
            background: #fff;
        }

        .header .search-form .search-select .icon {
            position: absolute;
            left: 0;
            pointer-events:  none;
            margin-left: 30px;
        }

        .header .search-form .search-select select {
            font-weight: 700;
            line-height: normal;
            cursor: pointer;
            border: none;
            background: #fff;
            padding: 16px 28px 16px 130px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .header .search-form .search-button {
            font-weight: 700;
            background: #01de75;
            color: #fff;
            border: 0 none;
            border-radius: 8px 0 0 8px;
            padding: 0 85px;
            cursor: pointer;
        }

        .header .jump-to-content {
            color: #2f445f;
            font-size: 24px;
            text-align: center;
            position: absolute;
            bottom: 0;
            background: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            height: 40px;
            width: 80px;
            border-radius: 90px 90px 0 0;
            cursor: pointer;
        }

        .header .jump-to-content .icon {
            margin-top: 8px;
        }

        @media (max-width: 991px) {
            .navbar .container {
                max-width: 85% !important;
            }

            .navbar-nav {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .cd-nav .cd-navigation-wrapper .cd-nav-trigger {
                top: 16px;
                left: 16px;
            }

            .cd-nav .cd-navigation-wrapper {
                padding: 80px calc(5% + 40px);
            }

            .header .search-console {
                width: 95%;
            }

            .header .search-form .search-field {
                flex-grow: 1;
                min-width: auto;
                padding: 22px 16px;
            }

            .header .search-form .search-select {
                -webkit-box-pack: inherit;
                -ms-flex-pack: inherit;
                justify-content: inherit;
                padding-left: 0;
            }

            .header .search-form .search-select select {
                width: 100%;
                padding: 16px;
            }

            .header .search-form .search-select .icon {
                margin-left: 16px;
            }

            .header .search-form .search-button {
                padding: 0 50px;
            }
        }

        @media (max-width: 767px) {
            .navbar .navbar-nav .nav-item .cd-nav-trigger {
                font-size: 32px;
            }

            .cd-nav .cd-navigation-wrapper .list-unstyled {
                margin-bottom: 60px;
            }

            .header .search-form {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .header .search-form .search-field {
                padding: 22px 28px;
                border-radius: 8px 8px 0 0;
                border-left: 0 none;
                border-bottom: 1px solid #ccd9e3;
            }

            .header .search-form .search-select .icon {
                margin-left: 30px;
            }

            .header .search-form .search-select select {
                padding: 16px 28px 16px 130px;
            }

            .header .search-form .search-button {
                border-radius: 0 0 8px 8px;
                padding: 24px 50px;
            }
        }

        @media (max-width: 575px) {
            .navbar a.navbar-brand img {
                width: 40px;
                height: 40px;
                margin-left: 8px;
            }

            .navbar a.navbar-brand h1 {
                font-size: 16px;
            }

            .navbar a.navbar-brand h1 span {
                font-size: 12px;
            }

            .navbar .navbar-nav .nav-item .cd-nav-trigger {
                font-size: 24px;
            }

            .header h2 {
                font-size: 32px;
                line-height: normal;
            }

            .header .search-console {
                width: 90%;
            }

            .header h2 span {
                font-size: 16px;
                line-height: normal;
            }

            .header .search-form {
                font-size: 20px;
                margin-top: 30px;
            }

            .header .search-form .search-select .icon {
                font-size: 24px;
            }

            .header .jump-to-content {
                height: 30px;
                width: 60px;
            }
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-1047290-7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-1047290-7');
    </script>

    <title>
        المكتبة المركزية - الجامعة الإسلامية بغزة
    </title></head>
<body>
<form name="form1" method="post" action="./" id="form1">
    <div>
        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTEzNzgxMTQyMDZkZIxbYeog3NVLtaTO0mtjd/He3FadpCurwkeumgKkrmnZ" />
    </div>

    <script type="text/javascript">
        //<![CDATA[
        var theForm = document.forms['form1'];
        if (!theForm) {
            theForm = document.form1;
        }
        function __doPostBack(eventTarget, eventArgument) {
            if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                theForm.__EVENTTARGET.value = eventTarget;
                theForm.__EVENTARGUMENT.value = eventArgument;
                theForm.submit();
            }
        }
        //]]>
    </script>


    <script src="https://library.iugaza.edu.ps/WebResource.axd?d=oPWoeahR6qDjTO5Rs37QygbBmnelgSxQTVDdllqwAz0QKbTFpAmoagtlqhM8vxiv77qx9a9u9EaH1nRXdsGc6qSJJApBNJJ4i9JB1CN108I1&amp;t=636533020011730888" type="text/javascript"></script>


    <script src="Scripts/WebForms/MsAjax/MicrosoftAjax.js" type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
        //]]>
    </script>

        <div>

        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAQiiNem/viOAKC6eZmoAuVEqCT78i9Pjx8oTjBs9e4kcISMrLwPSvmRiDONwXABpTrgKBlSCTezjrYROg+apTDcIhC4V58O5REe+iIScAYDhsY3DigHVE2ul11UT/MQLxM=" />
    </div>
    <script type="text/javascript">
        //<![CDATA[
        Sys.WebForms.PageRequestManager._initialize('Home_ToolkitScriptManager', 'form1', [], [], [], 90, '');
        //]]>
    </script>

    <nav class="navigation navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="https://library.iugaza.edu.ps" title="المكتبة المركزية - الجامعة الإسلامية بغزة">
                <div class="logo">
                    <img src="https://library.iugaza.edu.ps/img/IUG-Logo.png" alt="IUG Logo" title="IUG Logo">
                    <h1>المكتبة المركزية <span>الجامعة الإسلامية - غزة</span></h1>
                </div>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link d-none d-md-block" href="https://library.iugaza.edu.ps/user_pages/default.aspx" title="خدمات إلكترونية">خدمات إلكترونية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-none d-md-block" href="https://library.iugaza.edu.ps/fulltext.aspx" title="قواعد بيانات إلكترونية">قواعد بيانات</a>
                </li>
                <li class="nav-item">
                    <label class="nav-link cd-nav-trigger mr-0" for="cd-nav-trigger"><i class="fas fa-bars"></i></label>
                </li>
            </ul>
        </div>
    </nav>

    <input type="checkbox" name="cd-nav-trigger" id="cd-nav-trigger" hidden>
    <div id="cd-nav" class="cd-nav">
        <div class="cd-navigation-wrapper">
            <label class="cd-nav-trigger" for="cd-nav-trigger"><i class="fas fa-times"></i></label>
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 offset-lg-2 col-md-4 col-sm-6 text-sm-center text-md-left">
                        <h5>المكتبة</h5>
                        <ul class="list-unstyled">
                            <li><a href="https://library.iugaza.edu.ps/aboutus.aspx" title="عن المكتبة">عن المكتبة</a></li>
                            <li><a href="https://library.iugaza.edu.ps/building.aspx" title="مبنى المكتبة">مبنى المكتبة</a></li>
                            <li><a href="https://library.iugaza.edu.ps/management.aspx" title="الهيكل الإداري">الهيكل الإداري</a></li>
                            <li><a href="https://library.iugaza.edu.ps/agenda.aspx" title="أوقات الدوام">أوقات الدوام</a></li>
                            <li><a href="https://library.iugaza.edu.ps/contact.aspx" title="تواصل معنا">تواصل معنا</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 text-sm-center text-md-left">
                        <h5>سياسات وخدمات</h5>
                        <ul class="list-unstyled">
                            <li><a href="https://library.iugaza.edu.ps/systems.aspx" title="سياسات المكتبة">سياسات المكتبة</a></li>
                            <li><a href="https://library.iugaza.edu.ps/services.aspx" title="خدمات المكتبة">خدمات المكتبة</a></li>
                            <li><a href="https://library.iugaza.edu.ps/arrangement.aspx" title="ترتيب الكتب">ترتيب الكتب</a></li>
                            <li><a href="https://library.iugaza.edu.ps/classification.aspx" title="الإجراءات الفنية">الإجراءات الفنية</a></li>
                            <li><a href="https://library.iugaza.edu.ps/new_books.aspx" title="وصل حديثًا">وصل حديثًا</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 text-sm-center text-md-left">
                        <h5>خدمات إلكترونية</h5>
                        <ul class="list-unstyled">
                            <li><a href="https://library.iugaza.edu.ps/search_library.aspx" title="البحث في الكتب">البحث في الكتب</a></li>
                            <li><a href="https://library.iugaza.edu.ps/thesis.aspx" title="رسائل علمية">رسائل علمية</a></li>
                            <li><a href="https://library.iugaza.edu.ps/search_journal.aspx" title="البحث في الدوريات">البحث في الدوريات</a></li>
                            <li><a href="https://library.iugaza.edu.ps/search_contents.aspx" title="البحث في فهارس الكتب">البحث في فهارس الكتب</a></li>
                            <li><a href="https://library.iugaza.edu.ps/fulltext.aspx" title="قواعد بيانات إلكترونية">قواعد بيانات إلكترونية</a></li>
                            <li><a href="https://library.iugaza.edu.ps/open_access_books.aspx" title="كتب رقمية مفتوحة الوصول">كتب رقمية مفتوحة الوصول</a></li>
                            <li><a href="https://library.iugaza.edu.ps/arabic_repository.aspx" title="المستودعات الرقمية في الوطن العربي">المستودعات الرقمية في الوطن العربي</a></li>
                            <li><a href="https://library.iugaza.edu.ps/browse_library.aspx" title="استعراض الكتب حسب المساق الجامعي">استعراض الكتب</a></li>
                            <li><a href="https://library.iugaza.edu.ps/browse_thesis.aspx" title="استعراض الرسائل العلمية حسب الكلية">استعراض الرسائل</a></li>
                            <li><a href="https://library.iugaza.edu.ps/https://library.iugaza.edu.ps/user_pages/borrow_history.aspx" title="سجل الإعارة">سجل الإعارة</a></li>
                            <li><a href="https://library.iugaza.edu.ps/library_index.aspx" title="فهرس المكتبة">فهرس المكتبة</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <header id="header" class="header">
            <div class="search-console">
                <h2>البحث في المكتبة <span>كتب، دوريات، رسائل علمية، فهارس</span></h2>
                <div class="search-form">
                    <input name="title" type="text" id="title" tabindex="1" class="search-field" placeholder="أدخل كلمة البحث" title="البحث في المكتبة المركزية" aria-label="البحث في المكتبة المركزية" spellcheck="false" autocomplete="off" /><div class="search-select flex-md-fill"><i class="fas fa-angle-down icon"></i><select name="search_type" id="search_type" tabindex="2">
                            <option value="books">المكتبة</option>
                            <option value="journals">الدوريات</option>
                            <option value="thesis">الرسائل</option>
                            <option value="contents">الفهارس</option>
                            <option value="iugspace">المستودع الرقمي</option>
                        </select></div><input type="submit" name="search" value="ابحث" id="search" tabindex="3" class="search-button" aria-label="ابحث في المكتبة" />
                </div>
            </div>
            <div class="jump-to-content"><i class="fas fa-angle-down icon"></i></div>
        </header>

        <section class="services" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>خدمات المكتبة</h3>
                    </div>
                    <div class="service col-lg-3 col-sm-6">
                        <a href="https://library.iugaza.edu.ps/browse_library.aspx" title="استعراض الكتب حسب المساقات الجامعية">
                            <img src="https://library.iugaza.edu.ps/img/service-1.png" alt="أيقونة استعراض الكتب">
                            <h4>استعراض الكتب</h4>
                            <span>عرض الكتب حسب المساقات الجامعية</span>
                        </a>
                    </div>
                    <div class="service col-lg-3 col-sm-6">
                        <a href="https://library.iugaza.edu.ps/browse_thesis.aspx" title="استعراض الرسائل حسب الكليات والأقسام الأكاديمية">
                            <img src="https://library.iugaza.edu.ps/img/service-2.png" alt="أيقونة استعراض الرسائل">
                            <h4>استعراض الرسائل</h4>
                            <span>عرض الرسائل حسب الكليات والأقسام الأكاديمية</span>
                        </a>
                    </div>
                    <div class="service col-lg-3 col-sm-6 m-sm-0">
                        <a href="https://library.iugaza.edu.ps/library_index.aspx" title="استعراض محتويات المكتبة حسب تصنيف الأحرف">
                            <img src="https://library.iugaza.edu.ps/img/service-3.png" alt="أيقونة فهرس المكتبة">
                            <h4>فهرس المكتبة</h4>
                            <span>عرض محتويات المكتبة حسب تصنيف الأحرف</span>
                        </a>
                    </div>
                    <div class="service col-lg-3 col-sm-6 m-sm-0">
                        <a href="https://library.iugaza.edu.ps/user_pages/default.aspx" title="الاطلاع على سجل الإعارة وتجديد إعارة الكتب">
                            <img src="https://library.iugaza.edu.ps/img/service-4.png" alt="أيقونة سجل الإعارة">
                            <h4>سجل الإعارة</h4>
                            <span>الاطلاع على سجل الإعارة وتجديد إعارة الكتب</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>





        <footer>
            <div class="container">
                <div class="row">
                    <div class="brand col-lg-5 order-lg-0 d-lg-block col-md-12 order-1 d-md-flex justify-content-md-between text-center text-md-left">
                        <div class="logo">
                            <a href="https://library.iugaza.edu.ps" title="المكتبة المركزية - الجامعة الإسلامية بغزة">
                                <img src="https://library.iugaza.edu.ps/img/IUG-Logo.png" alt="IUG Logo" title="IUG Logo">
                                <h1>المكتبة المركزية <span>الجامعة الإسلامية - غزة</span></h1>
                            </a>
                        </div>
                        <div class="contact-info">
                            <span>هاتف:</span> 2886455 (8) 972+  |  <span>فاكس:</span> 2886455 (8) 972+<br>
                            <span>ص. ب.</span> 108  |  <span>بريد إلكتروني</span>: <span class="email">library@iugaza.edu.ps</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 text-center text-md-left">
                        <h5>المكتبة</h5>
                        <ul class="list-unstyled">
                            <li><a href="https://library.iugaza.edu.ps/aboutus.aspx" title="عن المكتبة">عن المكتبة</a></li>
                            <li><a href="https://library.iugaza.edu.ps/building.aspx" title="مبنى المكتبة">مبنى المكتبة</a></li>
                            <li><a href="https://library.iugaza.edu.ps/management.aspx" title="الهيكل الإداري">الهيكل الإداري</a></li>
                            <li><a href="https://library.iugaza.edu.ps/agenda.aspx" title="أوقات الدوام">أوقات الدوام</a></li>
                            <li><a href="https://library.iugaza.edu.ps/contact.aspx" title="تواصل معنا">تواصل معنا</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-4 text-center text-md-left">
                        <h5>سياسات وخدمات</h5>
                        <ul class="list-unstyled">
                            <li><a href="https://library.iugaza.edu.ps/systems.aspx" title="سياسات المكتبة">سياسات المكتبة</a></li>
                            <li><a href="https://library.iugaza.edu.ps/services.aspx" title="خدمات المكتبة">خدمات المكتبة</a></li>
                            <li><a href="https://library.iugaza.edu.ps/arrangement.aspx" title="ترتيب الكتب">ترتيب الكتب</a></li>
                            <li><a href="https://library.iugaza.edu.ps/classification.aspx" title="الإجراءات الفنية">الإجراءات الفنية</a></li>
                            <li><a href="https://library.iugaza.edu.ps/new_books.aspx" title="وصل حديثًا">وصل حديثًا</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-4 text-center text-md-left">
                        <h5>خدمات إلكترونية</h5>
                        <ul class="list-unstyled mb-0">
                            <li><a href="https://library.iugaza.edu.ps/fulltext.aspx" title="قواعد بيانات إلكترونية">قواعد بيانات إلكترونية</a></li>
                            <li><a href="https://library.iugaza.edu.ps/browse_library.aspx" title="استعراض الكتب حسب المساق الجامعي">استعراض الكتب</a></li>
                            <li><a href="https://library.iugaza.edu.ps/browse_thesis.aspx" title="استعراض الرسائل العلمية حسب الكلية">استعراض الرسائل</a></li>
                            <li><a href="https://library.iugaza.edu.ps/https://library.iugaza.edu.ps/user_pages/borrow_history.aspx" title="سجل الإعارة">سجل الإعارة</a></li>
                            <li><a href="https://library.iugaza.edu.ps/library_index.aspx" title="فهرس المكتبة">فهرس المكتبة</a></li>
                            <li><a href="https://library.iugaza.edu.ps/open_access_books.aspx" title="كتب رقمية مفتوحة الوصول">كتب رقمية مفتوحة الوصول</a></li>
                            <li><a href="https://library.iugaza.edu.ps/arabic_repository.aspx" title="المستودعات الرقمية في الوطن العربي">المستودعات الرقمية في الوطن العربي</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <link rel="stylesheet" href="https://library.iugaza.edu.ps/css/bootstrap.min.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://library.iugaza.edu.ps/css/style.css" media="print" onload="this.media='all'">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://library.iugaza.edu.ps/js/bootstrap.min.js" defer></script>
    <script src="https://library.iugaza.edu.ps/js/font-awesome.js" defer></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js" defer></script>
    <script src="https://library.iugaza.edu.ps/js/script.js" defer></script>
    <script>
        function redirect(value){
            if (value == 'iugspace') {
                window.location = 'https://iugspace.iugaza.edu.ps/?locale-attribute=ar';
            }
        }

        var selectEl = document.getElementById('search_type');

        selectEl.onchange = function(){
            var value = this.value;
            redirect(value);
        };
    </script>
</form>
</body>
</html>
