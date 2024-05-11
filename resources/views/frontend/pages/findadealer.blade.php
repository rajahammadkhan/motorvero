@extends('frontend.layouts.master')
@section('title')
    Find Dealer
@endsection
@section('content')
    <style>
        .aboutdeals>div svg {
            margin: 0;
        }

        .content-items {
            font-size: 20px;

        }

        .menubar a {
            text-decoration: none;
            color: #4179ee;
        }

        .menubar a:hover {
            text-decoration: none;
            margin-left: 10px;
            margin-right: -10px;
            transition: margin-left 0.4s, margin-right 0.4s;
        }

        .qJTHM {
            -webkit-user-select: none;
            color: #202124;
            direction: ltr;
            -webkit-touch-callout: none;
            font-family: 'Roboto-Regular', arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            font-weight: 400;
            margin: 0;
            overflow: hidden;
            -webkit-text-size-adjust: 100%
        }

        nav a,
        nav button {
            line-height: 25px !important;
        }

        .ynRLnc {
            left: -9999px;
            position: absolute;
            top: -9999px
        }

        .L6cTce {
            display: none
        }

        .bltWBb {
            word-break: break-all
        }

        .hSRGPd {
            color: #1a73e8;
            cursor: pointer;
            font-weight: 500;
            text-decoration: none
        }

        .Bz112c-W3lGp {
            height: 16px;
            width: 16px
        }

        .Bz112c-E3DyYd {
            height: 20px;
            width: 20px
        }

        .Bz112c-r9oPif {
            height: 24px;
            width: 24px
        }

        .Bz112c-uaxL4e {
            -webkit-border-radius: 10px;
            border-radius: 10px
        }

        .LgbsSe-Bz112c {
            display: block
        }

        .S9gUrf-YoZ4jf,
        .S9gUrf-YoZ4jf * {
            border: none;
            margin: 0;
            padding: 0
        }

        .fFW7wc-ibnC6b>.aZ2wEe>div {
            border-color: #4285f4
        }

        .P1ekSe-ZMv3u>div:nth-child(1) {
            background-color: #1a73e8 !important
        }

        .P1ekSe-ZMv3u>div:nth-child(2),
        .P1ekSe-ZMv3u>div:nth-child(3) {
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)), linear-gradient(to right, #1a73e8, #1a73e8) !important
        }

        .haAclf {
            display: inline-block
        }

        .nsm7Bb-HzV7m-LgbsSe {
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: background-color .218s, border-color .218s;
            transition: background-color .218s, border-color .218s;
            -webkit-user-select: none;
            -webkit-appearance: none;
            background-color: #fff;
            background-image: none;
            border: 1px solid #dadce0;
            color: #3c4043;
            cursor: pointer;
            font-family: 'Google Sans', arial, sans-serif;
            font-size: 14px;
            height: 40px;
            letter-spacing: 0.25px;
            outline: none;
            overflow: hidden;
            padding: 0 12px;
            position: relative;
            text-align: center;
            vertical-align: middle;
            white-space: nowrap;
            width: auto
        }

        @media screen and (-ms-high-contrast: active) {
            .nsm7Bb-HzV7m-LgbsSe {
                border: 2px solid windowText;
                color: windowText
            }
        }

        .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe {
            font-size: 14px;
            height: 32px;
            letter-spacing: 0.25px;
            padding: 0 10px
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe {
            font-size: 11px;
            height: 20px;
            letter-spacing: 0.3px;
            padding: 0 8px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe {
            padding: 0;
            width: 40px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.pSzOP-SxQuSe {
            width: 32px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.purZT-SxQuSe {
            width: 20px
        }

        .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK {
            -webkit-border-radius: 20px;
            border-radius: 20px
        }

        .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK.pSzOP-SxQuSe {
            -webkit-border-radius: 16px;
            border-radius: 16px
        }

        .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK.purZT-SxQuSe {
            -webkit-border-radius: 10px;
            border-radius: 10px
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc {
            border: none;
            color: #fff
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-v3pZbf-Ia7Qfc {
            background-color: #1a73e8
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-JaPV2b-Ia7Qfc {
            background-color: #202124;
            color: #e8eaed
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            height: 18px;
            margin-right: 8px;
            min-width: 18px;
            width: 18px
        }

        .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            height: 14px;
            min-width: 14px;
            width: 14px
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            height: 10px;
            min-width: 10px;
            width: 10px
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            margin-left: 8px;
            margin-right: -4px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            margin: 0;
            padding: 10px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            padding: 8px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            padding: 4px
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-top-left-radius: 3px;
            border-top-left-radius: 3px;
            -webkit-border-bottom-left-radius: 3px;
            border-bottom-left-radius: 3px;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            background-color: #fff;
            height: 36px;
            margin-left: -10px;
            margin-right: 12px;
            min-width: 36px;
            width: 36px
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf .nsm7Bb-HzV7m-LgbsSe-Bz112c,
        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            margin: 0;
            padding: 0
        }

        .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            height: 28px;
            margin-left: -8px;
            margin-right: 10px;
            min-width: 28px;
            width: 28px
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            height: 16px;
            margin-left: -6px;
            margin-right: 8px;
            min-width: 16px;
            width: 16px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 3px;
            border-radius: 3px;
            margin-left: 2px;
            margin-right: 0;
            padding: 0
        }

        .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 18px;
            border-radius: 18px
        }

        .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 14px;
            border-radius: 14px
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 8px;
            border-radius: 8px
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-bN97Pc-sM5MNb {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-flex-direction: row;
            flex-direction: row;
            justify-content: space-between;
            -webkit-flex-wrap: nowrap;
            flex-wrap: nowrap;
            height: 100%;
            position: relative;
            width: 100%
        }

        .nsm7Bb-HzV7m-LgbsSe .oXtfBe-l4eHX {
            justify-content: center
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-BPrWId {
            -webkit-flex-grow: 1;
            flex-grow: 1;
            font-family: 'Google Sans', arial, sans-serif;
            font-weight: 500;
            overflow: hidden;
            text-overflow: ellipsis;
            vertical-align: top
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-BPrWId {
            font-weight: 300
        }

        .nsm7Bb-HzV7m-LgbsSe .oXtfBe-l4eHX .nsm7Bb-HzV7m-LgbsSe-BPrWId {
            -webkit-flex-grow: 0;
            flex-grow: 0
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            -webkit-transition: background-color .218s;
            transition: background-color .218s;
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .nsm7Bb-HzV7m-LgbsSe:hover,
        .nsm7Bb-HzV7m-LgbsSe:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
            border-color: #d2e3fc;
            outline: none
        }

        .nsm7Bb-HzV7m-LgbsSe:hover .nsm7Bb-HzV7m-LgbsSe-MJoBVe,
        .nsm7Bb-HzV7m-LgbsSe:focus .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            background: rgba(66, 133, 244, 0.04)
        }

        .nsm7Bb-HzV7m-LgbsSe:active .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            background: rgba(66, 133, 244, 0.1)
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:hover .nsm7Bb-HzV7m-LgbsSe-MJoBVe,
        .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:focus .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            background: rgba(255, 255, 255, 0.24)
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:active .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            background: rgba(255, 255, 255, 0.32)
        }

        .nsm7Bb-HzV7m-LgbsSe .n1UuX-DkfjY {
            -webkit-border-radius: 50%;
            border-radius: 50%;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            height: 20px;
            margin-left: -4px;
            margin-right: 8px;
            min-width: 20px;
            width: 20px
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId {
            font-family: 'Roboto';
            font-size: 12px;
            text-align: left
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .ssJRIf,
        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff .fmcmS {
            overflow: hidden;
            text-overflow: ellipsis
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            color: #5f6368;
            fill: #5f6368;
            font-size: 11px;
            font-weight: 400
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe.MFS4be-Ia7Qfc .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff {
            color: #e8eaed;
            fill: #e8eaed
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff .Bz112c {
            height: 18px;
            margin: -3px -3px -3px 2px;
            min-width: 18px;
            width: 18px
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-top-left-radius: 0;
            border-top-left-radius: 0;
            -webkit-border-bottom-left-radius: 0;
            border-bottom-left-radius: 0;
            -webkit-border-top-right-radius: 3px;
            border-top-right-radius: 3px;
            -webkit-border-bottom-right-radius: 3px;
            border-bottom-right-radius: 3px;
            margin-left: 12px;
            margin-right: -10px
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 18px;
            border-radius: 18px
        }

        .L5Fo6c-sM5MNb {
            border: 0;
            display: block;
            left: 0;
            position: relative;
            top: 0
        }

        .L5Fo6c-bF1uUb {
            -webkit-border-radius: 4px;
            border-radius: 4px;
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .L5Fo6c-bF1uUb:focus {
            border: none;
            outline: none
        }

        .leftPanelWrapper>div {
            background-color: #f5f6f6;
            border: 1px solid #cccccc;
            padding: 0.5rem;
            margin-bottom: 0.625rem;
            border-radius: 14px;
            width: 100%;
        }

        #main .tabList.main {
            margin: 0.5rem;
            width: calc(100% - 1rem);
        }

        #main .tabList.main {
            padding: 0.25rem;
        }

        #main ul.tabList {
            padding-left: 0px;
        }

        #main .tabList {
            border-radius: 54px;
        }

        .tabList.main {
            align-content: stretch;
            background-color: #ffffff;
            border: 1px solid #cdd2d2;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            margin: 0 0 0.5rem;
            width: 100%;
        }

        .tabList {
            align-content: stretch;
            background-color: #ffffff;
            border: 1px solid #cdd2d2;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            margin: 0 0 1rem;
            width: 100%;
        }

        #main .tabList .tab {
            border-radius: 36px;
        }

        .tabList .tab.selected {
            background-color: #4a93d2;
            color: #ffffff !important;
        }

        .tabList.main .tab {
            border-right: 1px solid #cdd2d2;
            color: #006598;
            padding: 0.6rem 0;
        }

        .search-button label {
            font-size: 14px;
            color: #006598;
            padding: 0.6rem 0;
            border-radius: 20px;
            width: 100%;
        }

        .tab {
            cursor: pointer;
            border-right: 0.1rem solid #cdd2d2;
            color: #000;
            display: flex;
            flex-grow: 1;
            height: 100%;
            justify-content: center;
            text-align: center;
            padding: 0.4rem 0;
        }

        .tabList.main .tab:last-child,
        .tab:last-child {
            border-right: none;
        }

        .tabList.main .tab {
            border-right: 1px solid #cdd2d2;
            color: #006598;
            padding: 0.6rem 0;
        }

        .tab {
            cursor: pointer;
            border-right: 0.1rem solid #cdd2d2;
            color: #000;
            display: flex;
            flex-grow: 1;
            height: 100%;
            justify-content: center;
            text-align: center;
            padding: 0.4rem 0;
        }

        .tabGroup {
            display: inline-block;
            width: 100%;
            box-sizing: border-box;
            font-size: 1em;
        }

        #main ul.tabList {
            padding-left: 0px;
        }

        #main .tabList {
            border-radius: 54px;
        }

        .tabList {
            align-content: stretch;
            background-color: #ffffff;
            border: 1px solid #cdd2d2;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            margin: 0 0 1rem;
            width: 100%;
        }

        .form-range::-webkit-slider-thumb:active {
            background-color: white;
        }

        .form-range::-webkit-slider-thumb {
            background-color: white;
        }

        .form-range::-webkit-slider-runnable-track {
            background-color: #5093ce;
        }

        img.heart_img {
            height: 30px;
            width: 30px !important;
        }

        /* .form-rang::-webkit-slider-thumb {
                            background: gray !important;
                        }

                        .form-rang::-moz-range-thumb {
                            background: rgb(81, 40, 40) !important;
                        }

                        .form-rang::-ms-thumb {
                            background: yellow !important;
                        } */

        /* .form-range::-webkit-slider-runnable-track {
                            background-color: #006598 !important;
                        } */

        /* .stock-search-tab .selected{
                            background-color: #000;
                        } */

        /*# sourceURL=/_/gsi/_/ss/k=gsi.gsi.tCB0CF0PYPo.L.W.O/am=chE/d=1/rs=AF0KOtVnwrR3G0SH_dAafZ_I2U2nbna7aw/m=gis_client_button_style */
    </style>
    <section class="used-car-top-banner">
        <div class="container h-100 d-flex align-items-center">
            <h1 class="heading"> Find a <span>Dealer</span></h1>
        </div>
    </section>
    <section class=" py-5 bg-white">
        <div class="container-fluid">

            <div class="col-md-12 d-none">
                <div class="content row">



                    <div class="col-md-12">
                        <div class="reviewcard reviewcard-r row">
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-4 mb-3">
                                            <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body rounded-4 bg-white">

                                                <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                                </svg>
                                                <p class="card-text my-3 ">Good Dealer</p>

                                                <h4 class="card-title   fw-bold mt-3 ">
                                                    Raheel
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-4 mb-3">
                                            <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body rounded-4 bg-white">

                                                <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                                </svg>
                                                <p class="card-text my-3 ">Good Dealer</p>


                                                <h4 class="card-title   fw-bold mt-3 ">
                                                    Raheel
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-4 mb-3">
                                            <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body rounded-4 bg-white">

                                                <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                                </svg>
                                                <p class="card-text my-3 ">Good Dealer</p>


                                                <h4 class="card-title   fw-bold mt-3 ">
                                                    Raheel
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-4 mb-3">
                                            <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body rounded-4 bg-white">

                                                <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                                </svg>
                                                <p class="card-text my-3 ">Good Dealer</p>

                                                <h4 class="card-title   fw-bold mt-3 ">
                                                    Raheel
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-5 col-12" bis_skin_checked="1">
                    <div class="leftPanelWrapper" bis_skin_checked="1">
                        <div class="listingSearchWrap-leftPanel searchPanel" bis_skin_checked="1">
                            <form action="https://eliteblue.net/motorvero/public/listing" method="GET">
                                <input type="hidden" name="tracking" value="home">
                                <div class="search-button main p-0 rounded-5" role="tablist" bis_skin_checked="1">
                                    <div class="d-flex mb-2" bis_skin_checked="1">
                                        <div class="col-6 text-center" bis_skin_checked="1">
                                            <input class="stock-search-tab rounded-5 m-1" checked="" name="search-car" value="Used" type="radio" role="tab" id="react-tabs-0" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-1" tabindex="0">
                                            <label for="react-tabs-0">Search Used</label>
                                        </div>
                                        <div class="col-6 text-center" bis_skin_checked="1">
                                            <input class="stock-search-tab rounded-5 m-1" name="search-car" value="New" type="radio" role="tab" id="react-tabs-2" aria-selected="false" aria-disabled="false" aria-controls="react-tabs-3">
                                            <label for="react-tabs-2">Search
                                                New</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" id="react-tabs-1" aria-labelledby="react-tabs-0" bis_skin_checked="1">
                                    <div class="searchForms" bis_skin_checked="1">
                                        <div class="tabGroup" data-tabs="true" bis_skin_checked="1">
                                            <ul class="tabList p-0 rounded-5" role="tablist">
                                                <li class="tab selected rounded-5" role="tab" id="react-tabs-4" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-5" tabindex="0">By Car
                                                </li>
                                            </ul>
                                            <div class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" id="react-tabs-5" aria-labelledby="react-tabs-4" bis_skin_checked="1">

                                                <div class="carPicker" bis_skin_checked="1">
                                                    <select name="make" id="maker" aria-label="Select Make" class="form-control rounded-4">
                                                        <option value="62">Acura</option>
                                                        <option value="63">Audi</option>
                                                        <option value="64">BMW</option>
                                                        <option value="65">Chevyy</option>
                                                        <option value="66">ferrari</option>
                                                        <option value="68">Hummer</option>
                                                        <option value="69">Civic</option>
                                                        <option value="70">Mazda</option>
                                                        <option value="71">Mercedes</option>
                                                        <option value="72">Rolls-Royce</option>
                                                        <option value="73">Suzuki</option>
                                                        <option value="74">Tesla</option>
                                                        <option value="75">Toyota</option>
                                                        <option value="76">Volvo</option>
                                                        <option value="77">Nissan</option>
                                                        <option value="78">Dodge</option>
                                                        <option value="79">Dodge</option>
                                                        <option value="80">Porsche</option>
                                                        <option value="81">Jeep</option>
                                                        <option value="82">Chrysler</option>
                                                        <option value="83">Civic</option>
                                                        <option value="85">electric car</option>
                                                        <option value="86">trsting</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex my-2" bis_skin_checked="1">

                                                    <select id="Year" name="year" class="form-control w-50 rounded-4">
                                                        <option value="" selected="" disabled="">All Years</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2000">2000</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1987">1987</option>
                                                        <option value="1985">1985</option>
                                                        <option value="1981">1981</option>
                                                    </select>


                                                    <span class="px-1 my-auto">to</span>

                                                    <select name="year" aria-label="Select To Year" class="w-50 form-control rounded-4">
                                                        <option value="" selected="" disabled="">All Years</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2000">2000</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1987">1987</option>
                                                        <option value="1985">1985</option>
                                                        <option value="1981">1981</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="my-1 inlineLabel" bis_skin_checked="1">
                                                <label for="zip">ZIP</label>
                                                <span><input name="zip" id="zip" type="tel" size="7" maxlength="7" class="fullWidth form-control"></span>
                                            </div>
                                            <div class="inlineLabel my-1" bis_skin_checked="1">
                                                <label for="distance">Radius</label>
                                                <select id="distance" class="fullWidth form-control">
                                                    <option>10 mi</option>
                                                    <option>25 mi</option>
                                                    <option>50 mi</option>
                                                    <option>75 mi</option>
                                                    <option>100 mi</option>
                                                    <option>150 mi</option>
                                                    <option>200 mi</option>
                                                    <option>500 mi</option>
                                                    <option selected="selected">Nationwide
                                                    </option>
                                                </select>
                                            </div>
                                            <button class="text-white btn back-primary py-2 my-1 rounded-pill w-100" type="submit">Search
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="_3K15rt" data-cg-ft="filters-panel-desktop" bis_skin_checked="1">
                            <div class="d-flex justify-content-between" bis_skin_checked="1">
                                <h3>Filter Results</h3>
                                <p class="my-auto">1 listings</p>
                            </div>
                            <div bis_skin_checked="1">

































































































































































































































































































































































































































































































                                <fieldset class="mt-3" data-cg-ft="filters-panel-filter-drivetrain">
                                    <legend class="_5m33yq"><span>Vehicle Type</span></legend>
                                    <ul class="filter-result">
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="vehicle_type[]" id="DRIVETRAIN-ALL_WHEEL_DRIVE" data-cg-ft="checkbox-ALL_WHEEL_DRIVE" value="Four Wheeler">
                                                <p class="_2J3cfC">Four Wheeler<span class="_4vKwXK"></span>
                                                </p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="vehicle_type[]" id="DRIVETRAIN-FRONT_WHEEL_DRIVE" data-cg-ft="checkbox-FRONT_WHEEL_DRIVE" value="Two Wheeler">
                                                <p class="_2J3cfC">Two Wheeler<span class="_4vKwXK"></span>
                                                </p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="vehicle_type[]" id="DRIVETRAIN-FRONT_WHEEL_DRIVE" data-cg-ft="checkbox-FRONT_WHEEL_DRIVE" value="Other">
                                                <p class="_2J3cfC">Other<span class="_4vKwXK"></span>
                                                </p>
                                            </label></li>
                                    </ul>
                                </fieldset>
                                <fieldset class="_5pN1ma" data-cg-ft="filters-panel-filter-color">
                                    <legend class="_5m33yq"><span>Color</span></legend>
                                    <ul class="filter-result">
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" id="COLOR-BLACK" name="external_color[]" data-cg-ft="checkbox-BLACK" value="BLACK">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_3ZsiJM" bis_skin_checked="1"><span class="EWdfup BNasx5"></span><span class="_2P52Mt">Black</span></div>
                                                <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="external_color[]" id="COLOR-BLUE" data-cg-ft="checkbox-BLUE" value="BLUE">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_3ZsiJM" bis_skin_checked="1"><span class="EWdfup RdKcF6"></span><span class="_2P52Mt">Blue</span></div>
                                                <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="external_color[]" id="COLOR-GRAY" data-cg-ft="checkbox-GRAY" value="GRAY">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_3ZsiJM" bis_skin_checked="1"><span class="EWdfup _2wmsu7"></span><span class="_2P52Mt">Gray</span></div>
                                                <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="external_color[]" id="COLOR-RED" data-cg-ft="checkbox-RED" value="RED">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_3ZsiJM" bis_skin_checked="1"><span class="EWdfup _3VL3i3"></span><span class="_2P52Mt">Red</span></div>
                                                <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" id="COLOR-SILVER" name="external_color[]" data-cg-ft="checkbox-SILVER" value="SILVER">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_3ZsiJM" bis_skin_checked="1"><span class="EWdfup _4NchCV"></span><span class="_2P52Mt">Silver</span></div>
                                                <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" id="COLOR-WHITE" name="external_color[]" data-cg-ft="checkbox-WHITE" value="WHITE">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_3ZsiJM" bis_skin_checked="1"><span class="EWdfup _3Vvhnr"></span><span class="_2P52Mt">White</span></div>
                                                <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" id="COLOR-UNKNOWN" name="external_color[]" data-cg-ft="checkbox-UNKNOWN" value="UNKNOWN">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_3ZsiJM" bis_skin_checked="1"><span class="EWdfup _3Zr7XV"></span><span class="_2P52Mt">Unknown</span></div>
                                                <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                    </ul>
                                </fieldset>
                                <fieldset class="_5pN1ma" data-cg-ft="filters-panel-filter-interior_color">
                                    <legend class="_5m33yq"><span>Interior Color</span></legend>
                                    <ul class="filter-result">
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" id="INTERIOR_COLOR-BLACK" name="internal_color[]" data-cg-ft="checkbox-BLACK" value="BLACK">
                                                <p class="_2J3cfC">Black<span class="_4vKwXK"></span></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" id="INTERIOR_COLOR-BROWN" name="internal_color[]" data-cg-ft="checkbox-BROWN" value="BROWN">
                                                <p class="_2J3cfC">Brown<span class="_4vKwXK"></span></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" id="INTERIOR_COLOR-GRAY" name="internal_color[]" data-cg-ft="checkbox-GRAY" value="GRAY">
                                                <p class="_2J3cfC">Gray<span class="_4vKwXK"></span></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" id="INTERIOR_COLOR-WHITE" name="internal_color[]" data-cg-ft="checkbox-WHITE" value="WHITE">
                                                <p class="_2J3cfC">White<span class="_4vKwXK"></span></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" id="INTERIOR_COLOR-UNKNOWN" name="internal_color[]" data-cg-ft="checkbox-UNKNOWN" value="UNKNOWN">
                                                <p class="_2J3cfC">Unknown<span class="_4vKwXK"></span></p>
                                            </label></li>
                                    </ul>
                                </fieldset>
                                <fieldset class="_5pN1ma" data-cg-ft="filters-panel-filter-vehicle_option">
                                    <legend class="_5m33yq"><span>Vehicle Body Shape</span></legend>
                                    <ul class="filter-result">
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="vehicle_body_shape[]" id="VEHICLE_OPTION-132" data-cg-ft="checkbox-132" value="SUV/Crosover">
                                                <p class="_2J3cfC">SUV/Crosover<span class="_4vKwXK"></span>
                                                </p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="vehicle_body_shape[]" id="VEHICLE_OPTION-136" data-cg-ft="checkbox-136" value="Sedan">
                                                <p class="_2J3cfC">Sedan<span class="_4vKwXK"></span>
                                                </p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="vehicle_body_shape[]" id="VEHICLE_OPTION-6" data-cg-ft="checkbox-6" value="PickUp Truck">
                                                <p class="_2J3cfC">PickUp Truck<span class="_4vKwXK"></span></p>
                                            </label>
                                        </li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="vehicle_body_shape[]" id="VEHICLE_OPTION-19" data-cg-ft="checkbox-19" value="Coupe">
                                                <p class="_2J3cfC">Coupe<span class="_4vKwXK"></span>
                                                </p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="vehicle_body_shape[]" id="VEHICLE_OPTION-141" data-cg-ft="checkbox-141" value="HatchBack">
                                                <p class="_2J3cfC">HatchBack<span class="_4vKwXK"></span></p>
                                            </label>
                                        </li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="vehicle_body_shape[]" id="VEHICLE_OPTION-23" data-cg-ft="checkbox-23" value="Covertable">
                                                <p class="_2J3cfC">Covertable<span class="_4vKwXK"></span></p>
                                            </label>
                                        </li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="vehicle_body_shape[]" id="VEHICLE_OPTION-121" data-cg-ft="checkbox-121" value="Wagon">
                                                <p class="_2J3cfC">Wagon<span class="_4vKwXK"></span>
                                                </p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="vehicle_body_shape[]" id="VEHICLE_OPTION-138" data-cg-ft="checkbox-138" value="MiniVan">
                                                <p class="_2J3cfC">MiniVan<span class="_4vKwXK"></span>
                                                </p>
                                            </label></li>
                                    </ul>
                                </fieldset>
                                <fieldset class="_5pN1ma" data-cg-ft="filters-panel-filter-deal_rating">
                                    <legend class="_5m33yq"><span>Deal Ratings</span></legend>
                                    <ul class="filter-result">
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="deal_type[]" id="DEAL_RATING-GREAT_PRICE" data-cg-ft="checkbox-GREAT_PRICE" value="Great">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_2YwLJP" bis_skin_checked="1">
                                                    <div class="_3uEYW2 _2QYuhA" bis_skin_checked="1">
                                                        <svg class="_39Jeuh _2UowKY" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34">
                                                            <circle fill="#ccc" cx="17" cy="17" r="15"></circle>
                                                            <path class="_4MkEVP" fill="#fff" d="M25.779,17l-7.97-7.97v4.857H8.221v6.226h9.588V24.97Z">
                                                            </path>
                                                            <path class="_3TQrgB" fill="#fff" d="M11.491,24.707a.731.731,0,0,1-.73-.733.723.723,0,0,1,.157-.451L21.934,9.571a.731.731,0,0,1,1.148.906h0L12.065,24.43A.725.725,0,0,1,11.491,24.707Z">
                                                            </path>
                                                            <path class="tSs9pu" fill="#fff" d="M12.713,10.43a7.843,7.843,0,0,1,.829-.635,5.98,5.98,0,0,1,.972-.522,6.1,6.1,0,0,1,1.134-.35A6.474,6.474,0,0,1,16.972,8.8a5.488,5.488,0,0,1,1.762.267,3.983,3.983,0,0,1,1.363.761,3.4,3.4,0,0,1,.877,1.2,3.823,3.823,0,0,1,.312,1.568,3.964,3.964,0,0,1-.245,1.462,4.114,4.114,0,0,1-.611,1.074,4.708,4.708,0,0,1-.807.789l-.828.628a6.378,6.378,0,0,0-.672.578,1.139,1.139,0,0,0-.34.639l-.255,1.624h-1.88l-.188-1.812a1.478,1.478,0,0,1,.149-.917,2.815,2.815,0,0,1,.579-.724,7.592,7.592,0,0,1,.806-.634,7.319,7.319,0,0,0,.834-.667,3.487,3.487,0,0,0,.65-.811,2.087,2.087,0,0,0,.261-1.074,1.643,1.643,0,0,0-.15-.717,1.617,1.617,0,0,0-.416-.544,1.853,1.853,0,0,0-.64-.35,2.559,2.559,0,0,0-.806-.122,3.565,3.565,0,0,0-1.072.139,3.867,3.867,0,0,0-.746.311c-.2.115-.376.219-.517.31a.707.707,0,0,1-.378.14.607.607,0,0,1-.578-.334Zm2.1,13.108a1.714,1.714,0,0,1,.127-.656,1.6,1.6,0,0,1,.351-.533,1.7,1.7,0,0,1,1.2-.49,1.636,1.636,0,0,1,.662.134,1.758,1.758,0,0,1,.534.356,1.628,1.628,0,0,1,.361.533,1.657,1.657,0,0,1-.895,2.2,1.708,1.708,0,0,1-.662.128,1.755,1.755,0,0,1-.667-.128,1.582,1.582,0,0,1-.884-.878A1.707,1.707,0,0,1,14.815,23.538Z">
                                                            </path>
                                                            <path class="_5VHxKG" fill="#ccc" d="M27.2,10.6l-8.3-8.3c-1.1-1.1-2.8-1.1-3.9,0l-8.3,8.3C6.3,11.1,6,11.8,6,12.6v17.2c0,1.5,1.2,2.7,2.7,2.7h16.5c1.5,0,2.7-1.2,2.7-2.7V12.6C28,11.8,27.7,11.1,27.2,10.6z M15.1,7.5c1.1-1.1,2.8-1.1,3.9,0c1.1,1.1,1.1,2.8,0,3.9c-1.1,1.1-2.8,1.1-3.9,0C14,10.3,14,8.6,15.1,7.5z M12.7,25.8h-0.4c-0.1,0-0.1,0-0.2,0c0,0-0.1-0.1-0.1-0.1l-3.1-4c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2v3.8H8.2v-5.5h0.4c0.1,0,0.1,0,0.2,0c0,0,0.1,0.1,0.1,0.1l3.1,4c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.2v-3.7h0.7V25.8z M17.2,25.8h-3.4v-5.5h3.4v0.7h-2.6v1.7h2.1v0.6h-2.1v1.8h2.6L17.2,25.8z M24.1,25.8h-0.7L22,21.7c0-0.1-0.1-0.2-0.1-0.3c0,0.1-0.1,0.2-0.1,0.3l-1.4,4.1h-0.7L18,20.2h0.7c0.1,0,0.1,0,0.2,0.1c0,0,0.1,0.1,0.1,0.1l1.1,3.7c0,0.1,0,0.1,0.1,0.2c0,0.1,0,0.2,0.1,0.3c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.2,0.1-0.2l1.2-3.7c0-0.1,0-0.1,0.1-0.1c0,0,0.1-0.1,0.2-0.1H22c0.1,0,0.1,0,0.2,0.1c0,0,0.1,0.1,0.1,0.1l1.2,3.7c0,0.1,0.1,0.3,0.1,0.5c0-0.2,0.1-0.3,0.1-0.5l1.1-3.7c0-0.1,0-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1h0.6L24.1,25.8z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Great Deal <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="deal_type[]" id="DEAL_RATING-GOOD_PRICE" data-cg-ft="checkbox-GOOD_PRICE" value="Good">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_2YwLJP" bis_skin_checked="1">
                                                    <div class="_3uEYW2 _5174Ak" bis_skin_checked="1">
                                                        <svg class="_39Jeuh _2UowKY" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34">
                                                            <circle fill="#ccc" cx="17" cy="17" r="15"></circle>
                                                            <path class="_4MkEVP" fill="#fff" d="M25.779,17l-7.97-7.97v4.857H8.221v6.226h9.588V24.97Z">
                                                            </path>
                                                            <path class="_3TQrgB" fill="#fff" d="M11.491,24.707a.731.731,0,0,1-.73-.733.723.723,0,0,1,.157-.451L21.934,9.571a.731.731,0,0,1,1.148.906h0L12.065,24.43A.725.725,0,0,1,11.491,24.707Z">
                                                            </path>
                                                            <path class="tSs9pu" fill="#fff" d="M12.713,10.43a7.843,7.843,0,0,1,.829-.635,5.98,5.98,0,0,1,.972-.522,6.1,6.1,0,0,1,1.134-.35A6.474,6.474,0,0,1,16.972,8.8a5.488,5.488,0,0,1,1.762.267,3.983,3.983,0,0,1,1.363.761,3.4,3.4,0,0,1,.877,1.2,3.823,3.823,0,0,1,.312,1.568,3.964,3.964,0,0,1-.245,1.462,4.114,4.114,0,0,1-.611,1.074,4.708,4.708,0,0,1-.807.789l-.828.628a6.378,6.378,0,0,0-.672.578,1.139,1.139,0,0,0-.34.639l-.255,1.624h-1.88l-.188-1.812a1.478,1.478,0,0,1,.149-.917,2.815,2.815,0,0,1,.579-.724,7.592,7.592,0,0,1,.806-.634,7.319,7.319,0,0,0,.834-.667,3.487,3.487,0,0,0,.65-.811,2.087,2.087,0,0,0,.261-1.074,1.643,1.643,0,0,0-.15-.717,1.617,1.617,0,0,0-.416-.544,1.853,1.853,0,0,0-.64-.35,2.559,2.559,0,0,0-.806-.122,3.565,3.565,0,0,0-1.072.139,3.867,3.867,0,0,0-.746.311c-.2.115-.376.219-.517.31a.707.707,0,0,1-.378.14.607.607,0,0,1-.578-.334Zm2.1,13.108a1.714,1.714,0,0,1,.127-.656,1.6,1.6,0,0,1,.351-.533,1.7,1.7,0,0,1,1.2-.49,1.636,1.636,0,0,1,.662.134,1.758,1.758,0,0,1,.534.356,1.628,1.628,0,0,1,.361.533,1.657,1.657,0,0,1-.895,2.2,1.708,1.708,0,0,1-.662.128,1.755,1.755,0,0,1-.667-.128,1.582,1.582,0,0,1-.884-.878A1.707,1.707,0,0,1,14.815,23.538Z">
                                                            </path>
                                                            <path class="_5VHxKG" fill="#ccc" d="M27.2,10.6l-8.3-8.3c-1.1-1.1-2.8-1.1-3.9,0l-8.3,8.3C6.3,11.1,6,11.8,6,12.6v17.2c0,1.5,1.2,2.7,2.7,2.7h16.5c1.5,0,2.7-1.2,2.7-2.7V12.6C28,11.8,27.7,11.1,27.2,10.6z M15.1,7.5c1.1-1.1,2.8-1.1,3.9,0c1.1,1.1,1.1,2.8,0,3.9c-1.1,1.1-2.8,1.1-3.9,0C14,10.3,14,8.6,15.1,7.5z M12.7,25.8h-0.4c-0.1,0-0.1,0-0.2,0c0,0-0.1-0.1-0.1-0.1l-3.1-4c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2v3.8H8.2v-5.5h0.4c0.1,0,0.1,0,0.2,0c0,0,0.1,0.1,0.1,0.1l3.1,4c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.2v-3.7h0.7V25.8z M17.2,25.8h-3.4v-5.5h3.4v0.7h-2.6v1.7h2.1v0.6h-2.1v1.8h2.6L17.2,25.8z M24.1,25.8h-0.7L22,21.7c0-0.1-0.1-0.2-0.1-0.3c0,0.1-0.1,0.2-0.1,0.3l-1.4,4.1h-0.7L18,20.2h0.7c0.1,0,0.1,0,0.2,0.1c0,0,0.1,0.1,0.1,0.1l1.1,3.7c0,0.1,0,0.1,0.1,0.2c0,0.1,0,0.2,0.1,0.3c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.2,0.1-0.2l1.2-3.7c0-0.1,0-0.1,0.1-0.1c0,0,0.1-0.1,0.2-0.1H22c0.1,0,0.1,0,0.2,0.1c0,0,0.1,0.1,0.1,0.1l1.2,3.7c0,0.1,0.1,0.3,0.1,0.5c0-0.2,0.1-0.3,0.1-0.5l1.1-3.7c0-0.1,0-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1h0.6L24.1,25.8z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Good Deal <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="deal_type[]" id="DEAL_RATING-FAIR_PRICE" data-cg-ft="checkbox-FAIR_PRICE" value="Fair">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_2YwLJP" bis_skin_checked="1">
                                                    <div class="_3uEYW2 EVaT8S" bis_skin_checked="1">
                                                        <svg class="_39Jeuh _2UowKY" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34">
                                                            <circle fill="#ccc" cx="17" cy="17" r="15"></circle>
                                                            <path class="_4MkEVP" fill="#fff" d="M25.779,17l-7.97-7.97v4.857H8.221v6.226h9.588V24.97Z">
                                                            </path>
                                                            <path class="_3TQrgB" fill="#fff" d="M11.491,24.707a.731.731,0,0,1-.73-.733.723.723,0,0,1,.157-.451L21.934,9.571a.731.731,0,0,1,1.148.906h0L12.065,24.43A.725.725,0,0,1,11.491,24.707Z">
                                                            </path>
                                                            <path class="tSs9pu" fill="#fff" d="M12.713,10.43a7.843,7.843,0,0,1,.829-.635,5.98,5.98,0,0,1,.972-.522,6.1,6.1,0,0,1,1.134-.35A6.474,6.474,0,0,1,16.972,8.8a5.488,5.488,0,0,1,1.762.267,3.983,3.983,0,0,1,1.363.761,3.4,3.4,0,0,1,.877,1.2,3.823,3.823,0,0,1,.312,1.568,3.964,3.964,0,0,1-.245,1.462,4.114,4.114,0,0,1-.611,1.074,4.708,4.708,0,0,1-.807.789l-.828.628a6.378,6.378,0,0,0-.672.578,1.139,1.139,0,0,0-.34.639l-.255,1.624h-1.88l-.188-1.812a1.478,1.478,0,0,1,.149-.917,2.815,2.815,0,0,1,.579-.724,7.592,7.592,0,0,1,.806-.634,7.319,7.319,0,0,0,.834-.667,3.487,3.487,0,0,0,.65-.811,2.087,2.087,0,0,0,.261-1.074,1.643,1.643,0,0,0-.15-.717,1.617,1.617,0,0,0-.416-.544,1.853,1.853,0,0,0-.64-.35,2.559,2.559,0,0,0-.806-.122,3.565,3.565,0,0,0-1.072.139,3.867,3.867,0,0,0-.746.311c-.2.115-.376.219-.517.31a.707.707,0,0,1-.378.14.607.607,0,0,1-.578-.334Zm2.1,13.108a1.714,1.714,0,0,1,.127-.656,1.6,1.6,0,0,1,.351-.533,1.7,1.7,0,0,1,1.2-.49,1.636,1.636,0,0,1,.662.134,1.758,1.758,0,0,1,.534.356,1.628,1.628,0,0,1,.361.533,1.657,1.657,0,0,1-.895,2.2,1.708,1.708,0,0,1-.662.128,1.755,1.755,0,0,1-.667-.128,1.582,1.582,0,0,1-.884-.878A1.707,1.707,0,0,1,14.815,23.538Z">
                                                            </path>
                                                            <path class="_5VHxKG" fill="#ccc" d="M27.2,10.6l-8.3-8.3c-1.1-1.1-2.8-1.1-3.9,0l-8.3,8.3C6.3,11.1,6,11.8,6,12.6v17.2c0,1.5,1.2,2.7,2.7,2.7h16.5c1.5,0,2.7-1.2,2.7-2.7V12.6C28,11.8,27.7,11.1,27.2,10.6z M15.1,7.5c1.1-1.1,2.8-1.1,3.9,0c1.1,1.1,1.1,2.8,0,3.9c-1.1,1.1-2.8,1.1-3.9,0C14,10.3,14,8.6,15.1,7.5z M12.7,25.8h-0.4c-0.1,0-0.1,0-0.2,0c0,0-0.1-0.1-0.1-0.1l-3.1-4c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2v3.8H8.2v-5.5h0.4c0.1,0,0.1,0,0.2,0c0,0,0.1,0.1,0.1,0.1l3.1,4c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.2v-3.7h0.7V25.8z M17.2,25.8h-3.4v-5.5h3.4v0.7h-2.6v1.7h2.1v0.6h-2.1v1.8h2.6L17.2,25.8z M24.1,25.8h-0.7L22,21.7c0-0.1-0.1-0.2-0.1-0.3c0,0.1-0.1,0.2-0.1,0.3l-1.4,4.1h-0.7L18,20.2h0.7c0.1,0,0.1,0,0.2,0.1c0,0,0.1,0.1,0.1,0.1l1.1,3.7c0,0.1,0,0.1,0.1,0.2c0,0.1,0,0.2,0.1,0.3c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.2,0.1-0.2l1.2-3.7c0-0.1,0-0.1,0.1-0.1c0,0,0.1-0.1,0.2-0.1H22c0.1,0,0.1,0,0.2,0.1c0,0,0.1,0.1,0.1,0.1l1.2,3.7c0,0.1,0.1,0.3,0.1,0.5c0-0.2,0.1-0.3,0.1-0.5l1.1-3.7c0-0.1,0-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1h0.6L24.1,25.8z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Fair Deal <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="deal_type[]" id="DEAL_RATING-POOR_PRICE" data-cg-ft="checkbox-POOR_PRICE" value="High">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_2YwLJP" bis_skin_checked="1">
                                                    <div class="_3uEYW2 _5ZQc7H" bis_skin_checked="1">
                                                        <svg class="_39Jeuh _2UowKY" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34">
                                                            <circle fill="#ccc" cx="17" cy="17" r="15"></circle>
                                                            <path class="_4MkEVP" fill="#fff" d="M25.779,17l-7.97-7.97v4.857H8.221v6.226h9.588V24.97Z">
                                                            </path>
                                                            <path class="_3TQrgB" fill="#fff" d="M11.491,24.707a.731.731,0,0,1-.73-.733.723.723,0,0,1,.157-.451L21.934,9.571a.731.731,0,0,1,1.148.906h0L12.065,24.43A.725.725,0,0,1,11.491,24.707Z">
                                                            </path>
                                                            <path class="tSs9pu" fill="#fff" d="M12.713,10.43a7.843,7.843,0,0,1,.829-.635,5.98,5.98,0,0,1,.972-.522,6.1,6.1,0,0,1,1.134-.35A6.474,6.474,0,0,1,16.972,8.8a5.488,5.488,0,0,1,1.762.267,3.983,3.983,0,0,1,1.363.761,3.4,3.4,0,0,1,.877,1.2,3.823,3.823,0,0,1,.312,1.568,3.964,3.964,0,0,1-.245,1.462,4.114,4.114,0,0,1-.611,1.074,4.708,4.708,0,0,1-.807.789l-.828.628a6.378,6.378,0,0,0-.672.578,1.139,1.139,0,0,0-.34.639l-.255,1.624h-1.88l-.188-1.812a1.478,1.478,0,0,1,.149-.917,2.815,2.815,0,0,1,.579-.724,7.592,7.592,0,0,1,.806-.634,7.319,7.319,0,0,0,.834-.667,3.487,3.487,0,0,0,.65-.811,2.087,2.087,0,0,0,.261-1.074,1.643,1.643,0,0,0-.15-.717,1.617,1.617,0,0,0-.416-.544,1.853,1.853,0,0,0-.64-.35,2.559,2.559,0,0,0-.806-.122,3.565,3.565,0,0,0-1.072.139,3.867,3.867,0,0,0-.746.311c-.2.115-.376.219-.517.31a.707.707,0,0,1-.378.14.607.607,0,0,1-.578-.334Zm2.1,13.108a1.714,1.714,0,0,1,.127-.656,1.6,1.6,0,0,1,.351-.533,1.7,1.7,0,0,1,1.2-.49,1.636,1.636,0,0,1,.662.134,1.758,1.758,0,0,1,.534.356,1.628,1.628,0,0,1,.361.533,1.657,1.657,0,0,1-.895,2.2,1.708,1.708,0,0,1-.662.128,1.755,1.755,0,0,1-.667-.128,1.582,1.582,0,0,1-.884-.878A1.707,1.707,0,0,1,14.815,23.538Z">
                                                            </path>
                                                            <path class="_5VHxKG" fill="#ccc" d="M27.2,10.6l-8.3-8.3c-1.1-1.1-2.8-1.1-3.9,0l-8.3,8.3C6.3,11.1,6,11.8,6,12.6v17.2c0,1.5,1.2,2.7,2.7,2.7h16.5c1.5,0,2.7-1.2,2.7-2.7V12.6C28,11.8,27.7,11.1,27.2,10.6z M15.1,7.5c1.1-1.1,2.8-1.1,3.9,0c1.1,1.1,1.1,2.8,0,3.9c-1.1,1.1-2.8,1.1-3.9,0C14,10.3,14,8.6,15.1,7.5z M12.7,25.8h-0.4c-0.1,0-0.1,0-0.2,0c0,0-0.1-0.1-0.1-0.1l-3.1-4c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2v3.8H8.2v-5.5h0.4c0.1,0,0.1,0,0.2,0c0,0,0.1,0.1,0.1,0.1l3.1,4c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.2v-3.7h0.7V25.8z M17.2,25.8h-3.4v-5.5h3.4v0.7h-2.6v1.7h2.1v0.6h-2.1v1.8h2.6L17.2,25.8z M24.1,25.8h-0.7L22,21.7c0-0.1-0.1-0.2-0.1-0.3c0,0.1-0.1,0.2-0.1,0.3l-1.4,4.1h-0.7L18,20.2h0.7c0.1,0,0.1,0,0.2,0.1c0,0,0.1,0.1,0.1,0.1l1.1,3.7c0,0.1,0,0.1,0.1,0.2c0,0.1,0,0.2,0.1,0.3c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.2,0.1-0.2l1.2-3.7c0-0.1,0-0.1,0.1-0.1c0,0,0.1-0.1,0.2-0.1H22c0.1,0,0.1,0,0.2,0.1c0,0,0.1,0.1,0.1,0.1l1.2,3.7c0,0.1,0.1,0.3,0.1,0.5c0-0.2,0.1-0.3,0.1-0.5l1.1-3.7c0-0.1,0-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1h0.6L24.1,25.8z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                High Price <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                    </ul>
                                </fieldset>
                                <fieldset class="_5pN1ma" data-cg-ft="filters-panel-filter-vehicle_condition">
                                    <legend class="_5m33yq"><span>New / Used / CPO</span></legend>
                                    <ul class="filter-result">
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="certified[]" value="1" id="VEHICLE_CONDITION-CPO" data-cg-ft="checkbox-CPO">
                                                <p class="_2J3cfC">Certified Pre-Owned<span class="_4vKwXK"></span>
                                                </p>
                                            </label></li>
                                    </ul>
                                </fieldset>
                                <fieldset class="_5pN1ma" data-cg-ft="filters-panel-filter-is_single_owner">
                                    <legend class="_5m33yq"><span>Vehicle History</span>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" width="15px" height="15px" class="svg-inline--fa fa-info-circle fa-w-16 fa-fw fa-1x " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">
                                            </path>
                                        </svg>
                                    </legend>
                                    <div aria-hidden="true" class="_5giXsd" style="min-height: 0px; display: none;" bis_skin_checked="1">
                                        <div class="_2LMv9T" bis_skin_checked="1">
                                            <div class="_3jW2QL" bis_skin_checked="1">
                                                <div class="HB59W6" bis_skin_checked="1">
                                                    <div bis_skin_checked="1">Vehicle history data provided by Experian AutoCheck. This
                                                        data,
                                                        and
                                                        any reliance on it, is subject to the <a href="https://www.autocheck.com/vehiclehistory/termsAndConditions" target="_blank" rel="noopener noreferrer">AutoCheck
                                                            Terms
                                                            and Conditions</a> and the <a href="/Cars/TermsOfUse.html" rel="nofollow" target="_blank">Motorvero
                                                            Terms of Use</a>.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="filter-result">
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="owner[]" id="IS_SINGLE_OWNER" data-cg-ft="checkbox-IS_SINGLE_OWNER" value="1">
                                                <p class="_2J3cfC">Single Owner<span class="_4vKwXK"></span></p>
                                            </label>
                                        </li>
                                        <li>
                                            <fieldset data-cg-ft="filters-panel-filter-is-single-owner-hide-vehicles-with">
                                                <legend class="_9Mt8kX">Hide vehicles with:</legend>
                                                <ul>
                                                    <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="accident_check[]" id="HAS_ACCIDENTS" data-cg-ft="checkbox-HAS_ACCIDENTS" value="issues reported">
                                                            <p class="_2J3cfC">Accidents Reported<span class="_4vKwXK"></span></p>
                                                        </label></li>
                                                    <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" name="accident_check[]" tabindex="0" id="IS_FLEET" data-cg-ft="checkbox-IS_FLEET" value="No issues reported">
                                                            <p class="_2J3cfC">Fleet (e.g. rental or corporate)<span class="_4vKwXK"></span></p>
                                                        </label></li>
                                                </ul>
                                            </fieldset>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset class="_5pN1ma" data-cg-ft="filters-panel-filter-seller_hierarchy_type">
                                    <legend class="_5m33yq"><span>Transmission</span></legend>
                                    <ul class="filter-result">
                                        <li><label class="_4MtdAD"><input type="radio" class="RUxFSo submit-form" tabindex="0" name="transmission[]" id="SELLER_HIERARCHY_TYPE-DEALER" data-cg-ft="checkbox-SELLER_HIERARCHY_TYPE" value="Automatic">
                                                <p class="_2J3cfC">Automatic<span class="_4vKwXK"></span></p>
                                            </label></li>
                                        <li class="qZvkvr"><label class="_4MtdAD"><input type="radio" class="RUxFSo submit-form" tabindex="0" name="transmission[]" id="FRANCHISE_DEALER" data-cg-ft="checkbox-FRANCHISE_DEALER" value="Manual">
                                                <p class="_2J3cfC">Manual<span class="_4vKwXK"></span>
                                                </p>
                                            </label></li>
                                    </ul>
                                </fieldset>






























                                <fieldset class="mt-4" data-cg-ft="filters-panel-filter-average_dealer_ratings">
                                    <legend class="_5m33yq"><span>Average Dealer Rating</span></legend>
                                    <ul class="filter-result-rating">
                                        <li class="_4rfAz3" data-cg-ft="radio-AVERAGE_DEALER_RATINGS-FIVE_STAR">
                                            <input type="radio" name="dealer_rating[]" value="5" class="RUxFSo submit-form" tabindex="0" id="AVERAGE_DEALER_RATINGS-FIVE_STAR"><label for="AVERAGE_DEALER_RATINGS-FIVE_STAR">
                                                <div class="_583KVb" bis_skin_checked="1">
                                                    <div class="_3sopyT" bis_skin_checked="1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <span class="DBay8A">5 Stars</span>
                                                    </div>
                                                </div>
                                                <span class="_4rKnjB"></span>
                                            </label>
                                        </li>
                                        <li class="_4rfAz3" data-cg-ft="radio-AVERAGE_DEALER_RATINGS-FOUR_STAR_AND_MORE">
                                            <input type="radio" name="dealer_rating[]" value="4" class="_59BKuC submit-form" tabindex="0" id="AVERAGE_DEALER_RATINGS-FOUR_STAR_AND_MORE"><label for="AVERAGE_DEALER_RATINGS-FOUR_STAR_AND_MORE">
                                                <div class="_583KVb" bis_skin_checked="1">
                                                    <div class="_3sopyT" bis_skin_checked="1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="RZugQc" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <span class="DBay8A">4+ Stars</span>
                                                    </div>
                                                </div>
                                                <span class="_4rKnjB"></span>
                                            </label>
                                        </li>
                                        <li class="_4rfAz3" data-cg-ft="radio-AVERAGE_DEALER_RATINGS-THREE_STAR_AND_MORE">
                                            <input type="radio" name="dealer_rating[]" value="3" class="_59BKuC submit-form" tabindex="0" id="AVERAGE_DEALER_RATINGS-THREE_STAR_AND_MORE"><label for="AVERAGE_DEALER_RATINGS-THREE_STAR_AND_MORE">
                                                <div class="_583KVb" bis_skin_checked="1">
                                                    <div class="_3sopyT" bis_skin_checked="1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="RZugQc" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="RZugQc" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <span class="DBay8A">3+ Stars</span>
                                                    </div>
                                                </div>
                                                <span class="_4rKnjB"></span>
                                            </label>
                                        </li>
                                        <li class="_4rfAz3" data-cg-ft="radio-AVERAGE_DEALER_RATINGS-TWO_STAR_AND_MORE">
                                            <input type="radio" name="dealer_rating[]" value="2" class="_59BKuC submit-form" tabindex="0" id="AVERAGE_DEALER_RATINGS-TWO_STAR_AND_MORE"><label for="AVERAGE_DEALER_RATINGS-TWO_STAR_AND_MORE">
                                                <div class="_583KVb" bis_skin_checked="1">
                                                    <div class="_3sopyT" bis_skin_checked="1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="RZugQc" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="RZugQc" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="RZugQc" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <span class="DBay8A">2+ Stars</span>
                                                    </div>
                                                </div>
                                                <span class="_4rKnjB"></span>
                                            </label>
                                        </li>
                                        <li class="_4rfAz3" data-cg-ft="radio-AVERAGE_DEALER_RATINGS-ONE_STAR_AND_MORE">
                                            <input type="radio" name="dealer_rating[]" value="1" class="_59BKuC submit-form" tabindex="0" id="AVERAGE_DEALER_RATINGS-ONE_STAR_AND_MORE"><label for="AVERAGE_DEALER_RATINGS-ONE_STAR_AND_MORE">
                                                <div class="_583KVb" bis_skin_checked="1">
                                                    <div class="_3sopyT" bis_skin_checked="1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="RZugQc" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="RZugQc" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="RZugQc" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                            <path class="RZugQc" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                            </path>
                                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                            </path>
                                                        </svg>
                                                        <span class="DBay8A">1+ Stars</span>
                                                    </div>
                                                </div>
                                                <span class="_4rKnjB"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    @if($allDealer->isNotEmpty())
                        @foreach($allDealer as $value)
                            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events" bis_skin_checked="1">
                                <div class="card-body " bis_skin_checked="1">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <a href="https://eliteblue.net/motorvero/public/press-room-detail">
                                                <h5 class="card-title text-primary fw-bold fs-6">{{$value->first_name}} {{$value->last_name}}</h5>
                                            </a>
                                            <p class="mb-0">(0.75miles away)</p>
                                            <p class="mb-0">{{$value->website}} Dealer Rating
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <span class="DBay8A">4.2 Stars</span>
                                            </p>
                                            <p class="card-text fs-6">254 E. THIRD Street, Superior, NE 68978</p>
                                        </div>

                                        <div class="col-md-3 align-items-center d-flex justify-content-between">
                                            @if(isset($value->website))
                                            <a href="{{$value->website}}" target="_blank" book-button h-auto py-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                                <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                                            </svg> &nbsp; Visit Dealer Website</a>
                                            @endif
                                            <a href="{{url('listing?dealer='.$value->id)}}" book-button h-auto py-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                                    <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                                                </svg> &nbsp; View Cars</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    {{--                    <div class="card hover-none bg-light my-3 border-0  rounded px-3 events" bis_skin_checked="1">--}}
                    {{--                        <div class="card-body " bis_skin_checked="1">--}}
                    {{--                            <div class="row">--}}
                    {{--                                <div class="col-md-9">--}}
                    {{--                                    <a href="https://eliteblue.net/motorvero/public/press-room-detail">--}}
                    {{--                                        <h5 class="card-title text-primary fw-bold fs-6">Scott Spady Motors</h5>--}}
                    {{--                                    </a>--}}
                    {{--                                    <p class="mb-0">(27.26miles away)</p>--}}
                    {{--                                    <p class="mb-0">Motorvero.com Dealer Rating--}}
                    {{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">--}}
                    {{--                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">--}}
                    {{--                                            </path>--}}
                    {{--                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">--}}
                    {{--                                            </path>--}}
                    {{--                                        </svg>--}}
                    {{--                                        <span class="DBay8A">4.7 Stars</span>--}}
                    {{--                                    </p>--}}
                    {{--                                    <p class="card-text fs-6">814 Highway 183, Alma, NE 68920</p>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="col-md-3 align-items-center d-flex justify-content-center">--}}
                    {{--                                    <button class="book-button h-auto py-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">--}}
                    {{--                                            <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />--}}
                    {{--                                        </svg> &nbsp; View Cars</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}

                    {{--                    </div>--}}
                    {{--                    <div class="card hover-none bg-light my-3 border-0  rounded px-3 events" bis_skin_checked="1">--}}
                    {{--                        <div class="card-body " bis_skin_checked="1">--}}
                    {{--                            <div class="row">--}}
                    {{--                                <div class="col-md-9">--}}
                    {{--                                    <a href="https://eliteblue.net/motorvero/public/press-room-detail">--}}
                    {{--                                        <h5 class="card-title text-primary fw-bold fs-6">Scott Spady Motors</h5>--}}
                    {{--                                    </a>--}}
                    {{--                                    <p class="mb-0">(40.98miles away)</p>--}}
                    {{--                                    <p class="mb-0">Motorvero.com Dealer Rating--}}
                    {{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">--}}
                    {{--                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">--}}
                    {{--                                            </path>--}}
                    {{--                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">--}}
                    {{--                                            </path>--}}
                    {{--                                        </svg>--}}
                    {{--                                        <span class="DBay8A">4.3 Stars</span>--}}
                    {{--                                    </p>--}}
                    {{--                                    <p class="card-text fs-6">445 S BROWN AVE, Minden, NE 68959</p>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="col-md-3 align-items-center d-flex justify-content-center">--}}
                    {{--                                    <button class="book-button h-auto py-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">--}}
                    {{--                                            <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />--}}
                    {{--                                        </svg> &nbsp; View Cars</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}

                    {{--                    </div>--}}
                    {{--                    <div class="card hover-none bg-light my-3 border-0  rounded px-3 events" bis_skin_checked="1">--}}
                    {{--                        <div class="card-body " bis_skin_checked="1">--}}
                    {{--                            <div class="row">--}}
                    {{--                                <div class="col-md-9">--}}
                    {{--                                    <a href="https://eliteblue.net/motorvero/public/press-room-detail">--}}
                    {{--                                        <h5 class="card-title text-primary fw-bold fs-6">Scott Spady Motors</h5>--}}
                    {{--                                    </a>--}}
                    {{--                                    <p class="mb-0">(41.26miles away)</p>--}}
                    {{--                                    <p class="mb-0">Motorvero.com Dealer Rating--}}
                    {{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">--}}
                    {{--                                            <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">--}}
                    {{--                                            </path>--}}
                    {{--                                            <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">--}}
                    {{--                                            </path>--}}
                    {{--                                        </svg>--}}
                    {{--                                        <span class="DBay8A">5 Stars</span>--}}
                    {{--                                    </p>--}}
                    {{--                                    <p class="card-text fs-6">800 South Burlington, Hastings, NE 68901</p>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="col-md-3 align-items-center d-flex justify-content-center">--}}
                    {{--                                    <button class="book-button h-auto py-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">--}}
                    {{--                                            <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />--}}
                    {{--                                        </svg> &nbsp; View Cars</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}

                    {{--                    </div>--}}
                </div>
            </div>

        </div>

    </section>
@endsection
