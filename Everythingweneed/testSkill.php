<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js">
    </script>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }
        
        @-ms-viewport {
            width: device-width;
        }
        
        figcaption,
        footer,
        header,
        main,
        nav,
        section {
            display: block;
        }
        
        body {
            font-family: Open Sans, sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            margin: 0;
            text-align: left;
            color: #525f7f;
            background-color: #fff;
        }
        
        [tabindex='-1']:focus {
            outline: 0 !important;
        }
        
        h2,
        h5 {
            margin-top: 0;
            margin-bottom: .5rem;
        }
        
        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }
        
        dfn {
            font-style: italic;
        }
        
        strong {
            font-weight: bolder;
        }
        
        a {
            text-decoration: none;
            color: #5e72e4;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }
        
        a:hover {
            text-decoration: none;
            color: #233dd2;
        }
        
        a:not([href]):not([tabindex]) {
            text-decoration: none;
            color: inherit;
        }
        
        a:not([href]):not([tabindex]):hover,
        a:not([href]):not([tabindex]):focus {
            text-decoration: none;
            color: inherit;
        }
        
        a:not([href]):not([tabindex]):focus {
            outline: 0;
        }
        
        caption {
            padding-top: 1rem;
            padding-bottom: 1rem;
            caption-side: bottom;
            text-align: left;
            color: #8898aa;
        }
        
        button {
            border-radius: 0;
        }
        
        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color;
        }
        
        input,
        button {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            margin: 0;
        }
        
        button,
        input {
            overflow: visible;
        }
        
        button {
            text-transform: none;
        }
        
        button,
        [type='reset'],
        [type='submit'] {
            -webkit-appearance: button;
        }
        
        button::-moz-focus-inner,
        [type='button']::-moz-focus-inner,
        [type='reset']::-moz-focus-inner,
        [type='submit']::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }
        
        input[type='radio'],
        input[type='checkbox'] {
            box-sizing: border-box;
            padding: 0;
        }
        
        input[type='date'],
        input[type='time'],
        input[type='datetime-local'],
        input[type='month'] {
            -webkit-appearance: listbox;
        }
        
        legend {
            font-size: 1.5rem;
            line-height: inherit;
            display: block;
            width: 100%;
            max-width: 100%;
            margin-bottom: .5rem;
            padding: 0;
            white-space: normal;
            color: inherit;
        }
        
        [type='number']::-webkit-inner-spin-button,
        [type='number']::-webkit-outer-spin-button {
            height: auto;
        }
        
        [type='search'] {
            outline-offset: -2px;
            -webkit-appearance: none;
        }
        
        [type='search']::-webkit-search-cancel-button,
        [type='search']::-webkit-search-decoration {
            -webkit-appearance: none;
        }
        
         ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button;
        }
        
        [hidden] {
            display: none !important;
        }
        
        h2,
        h5,
        .h2,
        .h5 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            /* color: #32325d; */
        }
        
        h2,
        .h2 {
            font-size: 1.25rem;
        }
        
        h5,
        .h5 {
            font-size: .8125rem;
        }
        
        .container-fluid {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
        }
        
        .row {
            display: flex;
            margin-right: -15px;
            margin-left: -15px;
            flex-wrap: wrap;
        }
        
        .col,
        .col-auto,
        .col-lg-6,
        .col-xl-3,
        .col-xl-6 {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        
        .col {
            max-width: 100%;
            flex-basis: 0;
            flex-grow: 1;
        }
        
        .col-auto {
            width: auto;
            max-width: none;
            flex: 0 0 auto;
        }
        
        @media (min-width: 992px) {
            .col-lg-6 {
                max-width: 50%;
                flex: 0 0 50%;
            }
        }
        
        @media (min-width: 1200px) {
            .col-xl-3 {
                max-width: 25%;
                flex: 0 0 25%;
            }
            .col-xl-6 {
                max-width: 50%;
                flex: 0 0 50%;
            }
        }
        
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            border: 1px solid rgba(0, 0, 0, .05);
            border-radius: .375rem;
            background-color: #fff;
            background-clip: border-box;
        }
        
        .card-body {
            padding: 1.5rem;
            flex: 1 1 auto;
            border-radius: 8px;
        }
        
        .card-title {
            margin-bottom: 1.25rem;
            font-weight: bold;
            font-size: 15px;
            text-align: center;
        }
        
        @keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0;
            }
            to {
                background-position: 0 0;
            }
        }
        
        .bg-info {
            background-color: #11cdef !important;
        }
        
        a.bg-info:hover,
        a.bg-info:focus,
        button.bg-info:hover,
        button.bg-info:focus {
            background-color: #0da5c0 !important;
        }
        
        .bg-warning {
            background-color: #fb6340 !important;
        }
        
        a.bg-warning:hover,
        a.bg-warning:focus,
        button.bg-warning:hover,
        button.bg-warning:focus {
            background-color: #fa3a0e !important;
        }
        
        .bg-danger {
            background-color: #f5365c !important;
        }
        
        a.bg-danger:hover,
        a.bg-danger:focus,
        button.bg-danger:hover,
        button.bg-danger:focus {
            background-color: #ec0c38 !important;
        }
        
        .bg-default {
            background-color: #fff !important;
        }
        
        .rounded-circle {
            border-radius: 50% !important;
        }
        
        .align-items-center {
            align-items: center !important;
        }
        
        @media (min-width: 1200px) {
            .justify-content-xl-between {
                justify-content: space-between !important;
            }
        }
        
        .shadow {
            box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
        }
        
        .mb-0 {
            margin-bottom: 0 !important;
        }
        
        .mr-2 {
            margin-right: .5rem !important;
        }
        
        .mt-3 {
            margin-top: 1rem !important;
        }
        
        .mb-4 {
            margin-bottom: 1.5rem !important;
        }
        
        .mb-5 {
            margin-bottom: 3rem !important;
        }
        
        .pt-5 {
            padding-top: 3rem !important;
        }
        
        .pb-8 {
            padding-bottom: 8rem !important;
        }
        
        .m-auto {
            margin: auto !important;
        }
        
        @media (min-width: 768px) {
            .pt-md-8 {
                padding-top: 8rem !important;
            }
        }
        
        @media (min-width: 1200px) {
            .mb-xl-0 {
                margin-bottom: 0 !important;
            }
        }
        
        .text-nowrap {
            white-space: nowrap !important;
        }
        
        .text-center {
            text-align: center !important;
        }
        
        .text-uppercase {
            text-transform: uppercase !important;
        }
        
        .font-weight-bold {
            font-weight: 600 !important;
        }
        
        .text-white {
            color: #fff !important;
        }
        
        .text-success {
            color: #2dce89 !important;
            font-weight: bold;
        }
        
        a.text-success:hover,
        a.text-success:focus {
            color: #24a46d !important;
        }
        
        .text-warning {
            color: #fb6340 !important;
        }
        
        a.text-warning:hover,
        a.text-warning:focus {
            color: #fa3a0e !important;
        }
        
        .text-danger {
            color: #f5365c !important;
        }
        
        a.text-danger:hover,
        a.text-danger:focus {
            color: #ec0c38 !important;
        }
        
        .text-white {
            color: #fff !important;
        }
        
        a.text-white:hover,
        a.text-white:focus {
            color: #e6e6e6 !important;
        }
        
        .text-muted {
            color: #8898aa !important;
        }
        
        @media print {
            *,
            *::before,
            *::after {
                box-shadow: none !important;
                text-shadow: none !important;
            }
            a:not(.btn) {
                text-decoration: underline;
            }
            p,
            h2 {
                orphans: 3;
                widows: 3;
            }
            h2 {
                page-break-after: avoid;
            }
            @page {
                size: a3;
            }
            body {
                min-width: 992px !important;
            }
        }
        
        figcaption,
        main {
            display: block;
        }
        
        main {
            overflow: hidden;
        }
        
        .bg-yellow {
            background-color: #ffd600 !important;
        }
        
        a.bg-yellow:hover,
        a.bg-yellow:focus,
        button.bg-yellow:hover,
        button.bg-yellow:focus {
            background-color: #ccab00 !important;
        }
        
        .bg-gradient-primary {
            background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
        }
        
        .bg-gradient-primary {
            background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
        }
        
        @keyframes floating-lg {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(15px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        @keyframes floating {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(10px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        @keyframes floating-sm {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(5px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        [class*='shadow'] {
            transition: all .15s ease;
        }
        
        .text-sm {
            font-size: .875rem !important;
        }
        
        .text-white {
            color: #fff !important;
        }
        
        a.text-white:hover,
        a.text-white:focus {
            color: #e6e6e6 !important;
        }
        
        [class*='btn-outline-'] {
            border-width: 1px;
        }
        /* .card-stats {
            /* border-radius: 50px; */
        /* } */
        
        .card-stats .card-body {
            padding: 1rem 1.5rem;
            background-color: black;
        }
        
        .main-content {
            position: relative;
            background-color: #fff;
            margin-bottom: 0%;
            /* border: solid red; */
        }
        
        @media (min-width: 768px) {
            .main-content .container-fluid {
                padding-right: 39px !important;
                padding-left: 39px !important;
            }
        }
        
        .footer {
            padding: 2.5rem 0;
            background: #f7fafc;
        }
        
        .footer .copyright {
            font-size: .875rem;
        }
        
        .header {
            position: relative;
        }
        
        .icon {
            width: 3rem;
            height: 3rem;
        }
        
        .icon i {
            font-size: 2.25rem;
        }
        
        .icon-shape {
            display: inline-flex;
            padding: 12px;
            text-align: center;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
        }
        
        .icon-shape i {
            font-size: 1.25rem;
        }
        
        @media (min-width: 768px) {
            @keyframes show-navbar-dropdown {
                0% {
                    transition: visibility .25s, opacity .25s, transform .25s;
                    transform: translate(0, 10px) perspective(200px) rotateX(-2deg);
                    opacity: 0;
                }
                100% {
                    transform: translate(0, 0);
                    opacity: 1;
                }
            }
            @keyframes hide-navbar-dropdown {
                from {
                    opacity: 1;
                }
                to {
                    transform: translate(0, 10px);
                    opacity: 0;
                }
            }
        }
        
        @keyframes show-navbar-collapse {
            0% {
                transform: scale(.95);
                transform-origin: 100% 0;
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        
        @keyframes hide-navbar-collapse {
            from {
                transform: scale(1);
                transform-origin: 100% 0;
                opacity: 1;
            }
            to {
                transform: scale(.95);
                opacity: 0;
            }
        }
        
        p {
            font-size: 1rem;
            font-weight: 300;
            line-height: 1.7;
        }
        
        .btn {
            margin: 0px;
            padding: 3px;
        }
        
        .main {
            background-color: #F8F8FF;
        }
        /* certi */
        
        .certi {
            font-size: 30px;
            font-weight: bold;
        }
        
        article {
            margin: 15px;
        }
        
        h1 {
            color: green;
        }
        
        .carousel-inner {
            height: 310px;
        }
        
        .item.active {
            height: 310px!important;
        }
        
        .item img {
            object-fit: cover;
            height: 100%!important;
        }
        
        .imgCoro {
            height: 250px;
        }
    </style>
</head>


<body>
    <?php include 'Nav.php' ?>
    <div class="main-content  mb-0 p-0">
        <div class="header mb-0 pb-8 pt-5 pt-md-3">
            <div class=" mb-0 container-fluid ">
                <h2 class="mb-5  text-white text-center bg-gradient-primary">Free Online PLACEMENT TEST Practice & Preparation Tests </h2>
                <div class="header-body ">
                    <div class="row ">
                        <div class="col-xl-4 col-lg-3 col-md-6 mb-3">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-white card-title text-uppercase  mb-0">DS & Algo</h4>
                                            <br><span class=" text-danger text-nowrap">Score</span>
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>OO</span>
                                            </p>
                                        </div>
                                        <div class="col-auto mt-0">
                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class="fas fa-solid fa-code"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p class="mt-3 mb-0 text-muted text-sm text-center"> -->


                                    <!-- <span class=" mr-0"> -->
                                    <div class="text-center">
                                        <button onClick="window.location.href='Quizs/dsaQuiz.html';" type="button" class="btn btn-info  ">Test-Skills</button></div>
                                    <!-- </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3 col-md-6 mb-3">
                            <div class="card text-white card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-white card-title text-uppercase  mb-0">Operating System </h4>
                                            <br><span class="text-nowrap">Score</span>
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>00</span>
                                            </p>
                                        </div>
                                        <div class="col-auto mt-0">
                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class=" fas fa-solid fa-desktop"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p class="mt-3 mb-0 text-muted text-sm text-center"> -->


                                    <!-- <span class=" mr-0"> -->
                                    <div class="text-center">
                                        <button type="button" class="btn btn-info  ">Test-Skills</button></div>
                                    <!-- </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3 col-md-6 mb-3">
                            <div class="card bg-dark text-white card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-white card-title text-uppercase  mb-0">Compiler Design</h4>
                                            <br><span class="text-nowrap">Score</span>
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>00</span>
                                            </p>
                                        </div>
                                        <div class="col-auto mt-0">
                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class="fas fa-solid fa-code"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p class="mt-3 mb-0 text-muted text-sm text-center"> -->


                                    <!-- <span class=" mr-0"> -->
                                    <div class="text-center">
                                        <button type="button" class="btn btn-info  ">Test-Skills</button></div>
                                    <!-- </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3 col-md-6 mb-3">
                            <div class="card bg-dark text-white card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-white card-title text-uppercase  mb-0">OPPs</h4>
                                            <br><span class="text-nowrap">Score</span>
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>00</span>
                                            </p>
                                        </div>
                                        <div class="col-auto mt-0">
                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class="fas fa-solid fa-code"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p class="mt-3 mb-0 text-muted text-sm text-center"> -->


                                    <!-- <span class=" mr-0"> -->
                                    <div class="text-center">
                                        <button type="button" class="btn btn-info  ">Test-Skills</button></div>
                                    <!-- </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3 col-md-6 mb-3">
                            <div class="card bg-dark text-white card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-white card-title text-uppercase  mb-0">Computer Network</h4>
                                            <br><span class="text-nowrap">Score</span>
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>00</span>
                                            </p>
                                        </div>
                                        <div class="col-auto mt-0">
                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class="fas fa-solid fa-code"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p class="mt-3 mb-0 text-muted text-sm text-center"> -->


                                    <!-- <span class=" mr-0"> -->
                                    <div class="text-center">
                                        <button type="button" class="btn btn-info  ">Test-Skills</button></div>
                                    <!-- </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3 col-md-6 mb-3">
                            <div class="card bg-dark text-white card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-white card-title text-uppercase  mb-0">DBMS</h4>
                                            <br><span class="text-nowrap">Score</span>
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>00</span>
                                            </p>
                                        </div>
                                        <div class="col-auto mt-0">
                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class="fas fa-solid fa-code"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p class="mt-3 mb-0 text-muted text-sm text-center"> -->


                                    <!-- <span class=" mr-0"> -->
                                    <div class="text-center">
                                        <button type="button" class="btn btn-info  ">Test-Skills</button></div>
                                    <!-- </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3 col-md-6 mb-3">
                            <div class="card bg-dark text-white card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-white card-title text-uppercase  mb-0">System Design</h4>
                                            <br><span class="text-nowrap">Score</span>
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>00</span>
                                            </p>
                                        </div>
                                        <div class="col-auto mt-0">
                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class="fas fa-solid fa-code"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p class="mt-3 mb-0 text-muted text-sm text-center"> -->


                                    <!-- <span class=" mr-0"> -->
                                    <div class="text-center">
                                        <button type="button" class="btn btn-info  ">Test-Skills</button></div>
                                    <!-- </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3 col-md-6 mb-3">
                            <div class="card bg-dark text-white card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-white  card-title text-uppercase  mb-0">Aptitude</h4>
                                            <br><span class="text-nowrap">Score</span>
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>00</span>
                                            </p>
                                        </div>
                                        <div class="col-auto mt-0">
                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class="fas fa-solid fa-code"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p class="mt-3 mb-0 text-muted text-sm text-center"> -->


                                    <!-- <span class=" mr-0"> -->
                                    <div class="text-center">
                                        <button type="button" class="btn btn-info  ">Test-Skills</button></div>
                                    <!-- </p> -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
    </div>
    <!-- certification -->
    <div class="container">
        <p class="text-center certi text-info text-uppercase">Certification</p>

    </div>
    <div class="container">
        <div class="card  mb-3 text-center">
            <div class="card-header">
                <h2 class="text-success"> <span> <i style="font-weight: bold; font-size:30px; " class=" mr-2 fas text-success text-left font-weight-bold fa-solid fa-solid fa-award"></i></span> Verified Skills</h2>
            </div>
            <div class="card-body text-primary">
                <span class="text-center" style="font-size: 30px;"> <i  class=" fas fa-solid fa-file-certificate"></i></span>
                <h4 class="card-title">Get Your Skills Certified</h4>
                <span style="color: black;  ">You have not earned any certificates yet.<a style="font-weight: bold;" class="  text-info   ">Get Certified</a> </span>
            </div>

        </div>
        <div class="container-fluid mt-5">
            <div class="header-body  ml-5 p-0  mb-2">
                <div class=" card1 mt-0 ml-4 pt-0" data-aos="fade-up-right" data-aos-duration="500">
                    <div class="row no-gutters">
                        <div class=" col-sm-3 text-center ">
                            <img src="images/menwithcomputer.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-11 col-lg-4 ml-5">
                            <div class="card-block px-2 mt-3">
                                <h3><strong class="text-info">Why is it important to do skill tests?</strong></h3><br>
                                <p class="card-text">A skills test is an assessment test used to evaluate the knowledge, skills and abilities of job candidates. These tests are designed to determine if a job applicant has the necessary skills to perform the various aspects
                                    of a job.</p>
                            </div>
                        </div>
                        <div class="col-sm-11 col-lg-4 ml-5">
                            <div class="card-block px-2 mt-3">
                                <h3><strong class="text-info"> Certification as a complement to education</strong></h3>
                                <p class="card-text">Professional certification is not a replacement for accredited degree work, but instead is supposed to complement your education or professional experience in your field. Once you've earned a certification. certified professionals
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>