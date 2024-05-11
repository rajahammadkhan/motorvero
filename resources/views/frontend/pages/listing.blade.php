@extends('frontend.layouts.master')
@section('title')
Listing - {{config('app.name')}}
@endsection
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<style>
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

    .range-slider {
        width: 100%;
        position: relative;
        margin: 15px 0 30px 0;
    }

    input[type=range] {
        -webkit-appearance: none;
        width: 100%;
        background: transparent;
        position: absolute;
        left: 0;
    }

    input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        height: 15px;
        width: 15px;
        border-radius: 50%;
        background: #4a93d2;
        cursor: pointer;
        margin-top: -5px;
        position: relative;
        z-index: 1;
    }

    input[type=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 5px;
        background: #e8e8e8;
        border-radius: 3px;
        border: none;
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
<section class="search-car-top-banner">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div>
                <p class="heading text-center">New And Used<span> Car</span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="bg-white p-3 px-md-5">
    <div class="container-fluid px-1">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-12">
                    <div class="leftPanelWrapper">
                        <div class="listingSearchWrap-leftPanel searchPanel">
                            <div class="col-12 " bis_skin_checked="1">
                                <button class="w-100 btn-tsg rounded-5 saved-search mb-2 btn btn-primary text-white back-primary "><i class="fa-regular fa-star"></i> Save Search
                                </button>
                            </div>
                            <form action="{{url('listing')}}" method="GET">
                                <input type="hidden" name="tracking" value="home">
                                <div class="search-button main p-0 rounded-5" role="tablist">
                                    <div class="d-flex mb-2" style="background-color: white; border-radius: 100px; border: 1px solid #cdd2d2;padding: 4px;">
                                        <div class="col-6 text-center">
                                            <input class="stock-search-tab rounded-5 m-1" checked name="search-car" value="Used" type="radio" role="tab" id="react-tabs-0" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-1" tabindex="0">
                                            <label for="react-tabs-0">Search Used</label>
                                        </div>
                                        <div class="col-6 text-center">
                                            <input class="stock-search-tab rounded-5 m-1" name="search-car" value="New" type="radio" role="tab" id="react-tabs-2" aria-selected="false" aria-disabled="false" aria-controls="react-tabs-3">
                                            <label for="react-tabs-2">Search
                                                New</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" id="react-tabs-1" aria-labelledby="react-tabs-0">
                                    <div class="searchForms">
                                        <div class="tabGroup" data-tabs="true">
                                            <ul class="tabList p-0 rounded-5" role="tablist">
                                                <li class="tab selected rounded-5" role="tab" id="react-tabs-4" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-5" tabindex="0">By Car
                                                </li>
                                            </ul>
                                            <div class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" id="react-tabs-5" aria-labelledby="react-tabs-4">
                                                <form>
                                                    <div class="carPicker">
                                                        <select name="make" id="maker" aria-label="Select Make" class="form-control rounded-4">
                                                            @foreach($makes as $make)
                                                            <option value="{{$make->id}}">{{$make->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="d-flex my-2">

                                                        <select id="Year" name="year" class="form-control w-50 rounded-4">
                                                            <option value="" selected disabled>All Years</option>
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
                                                            <option value="" selected disabled>All Years</option>
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
                                                </form>
                                            </div>
                                            <div class="my-1 pricefilter">
                                                <span>Price Range Slider</span>

                                                <div class="price-content">
                                                    <div>
                                                        <label>Min</label>
                                                        <p id="min-value">$50</p>
                                                    </div>

                                                    <div>
                                                        <label>Max</label>
                                                        <p id="max-value">$500</p>
                                                    </div>
                                                </div>

                                                <div class="range-slider">
                                                    <input type="range" class="min-price" value="100" min="10" max="500" step="10">
                                                    <input type="range" class="max-price" value="250" min="10" max="500" step="10">
                                                </div>
                                            </div>
                                            <div class="my-1 inlineLabel">
                                                <label for="zip">ZIP</label>
                                                <span><input name="zip" id="zip" type="tel" size="7" maxlength="7" class="fullWidth form-control"></span>
                                            </div>
                                            <div class="inlineLabel my-1">
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
                        <div class="_3K15rt" data-cg-ft="filters-panel-desktop">
                            <div class="d-flex justify-content-between">
                                <h3>Filter Results</h3>
                                @if($car != null)
                                <p class="my-auto">{{$car->total()}} listings</p>
                                @endif
                            </div>
                            <div>
                                {{-- <fieldset class="mt-4" data-cg-ft="filters-panel-filter-price">--}}
                                {{-- <legend class="_5m33yq"><span>Price</span></legend>--}}
                                {{-- <div>--}}
                                {{-- <div class="wXkvin">--}}
                                {{-- <div class="px-3 clr-dark" data-cg-ft="range-slider-label-mobile">$4,000--}}
                                {{-- ---}}
                                {{-- $60,000--}}
                                {{-- </div>--}}
                                {{-- <div class="d-flex position-relative">--}}
                                {{-- <div class="_3vmcUg"></div>--}}
                                {{-- <!-- <label for="customRange3" class="form-label">Example range</label> -->--}}
                                {{-- <input type="range" class="form-range custom-range-left" min="4000"--}}
                                {{-- max="5000" id="stockpriceleft" value="4000">--}}
                                {{-- <input type="range" class="form-range custom-range-right" min="5001"--}}
                                {{-- max="6000" id="stockpriceright" value="60000">--}}
                                {{-- <div class="_3pdaxM"></div>--}}

                                {{-- </div>--}}
                                {{-- </div>--}}
                                {{-- <label class="d-flex my-3"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="rangeFilter"--}}
                                {{-- data-cg-ft="checkbox-rangeFilter" value=""--}}
                                {{-- checked="">--}}
                                {{-- <p class="my-auto ps-1 small">Include Listings Without Available Pricing--}}
                                {{-- </p>--}}
                                {{-- </label>--}}
                                {{-- </div>--}}
                                {{-- </fieldset>--}}
                                {{-- <fieldset class="_5pN1ma" data-cg-ft="filters-panel-filter-contactless_options">--}}
                                {{-- <legend class="_5m33yq"><span>Contactless Services</span></legend>--}}
                                {{-- <ul class="filter-result">--}}
                                {{-- <li class="_4YS7ud"><label class="_4MtdAD"><input type="checkbox"--}}
                                {{-- class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="CONTACTLESS_OPTIONS-REMOTE_PURCHASES"--}}
                                {{-- data-cg-ft="checkbox-67"--}}
                                {{-- value="REMOTE_PURCHASES">--}}
                                {{-- <p class="_2J3cfC">Contactless purchase<span--}}
                                {{-- class="_4vKwXK">(67)</span>--}}
                                {{-- </p>--}}
                                {{-- </label>--}}

                                {{-- <svg aria-hidden="true" focusable="false" data-prefix="fas"--}}
                                {{-- data-icon="info-circle" width="15px" height="15px"--}}
                                {{-- class="svg-inline--fa fa-info-circle fa-w-16 fa-fw fa-1x "--}}
                                {{-- role="img"--}}
                                {{-- xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">--}}
                                {{-- <path fill="currentColor"--}}
                                {{-- d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">--}}
                                {{-- </path>--}}
                                {{-- </svg>--}}
                                {{-- <div hidden="" id="REMOTE_PURCHASES" class="_26jUmd">View more</div>--}}

                                {{-- <div role="dialog" id="hidden-7k0k4l" class="hidden _3sja5r" hidden=""--}}
                                {{-- tabindex="-1" aria-modal="false" data-dialog="true"--}}
                                {{-- aria-label="Pay or finance this car completely remotely—either by phone or email. Paperwork will be delivered to you."--}}
                                {{-- style="display: none; position: absolute; transform: translate3d(242px, 707px, 0px); top: 0px; left: 0px; will-change: transform;">--}}
                                {{-- <div class="_3DxALd"--}}
                                {{-- style="position: absolute; font-size: 30px; width: 1em; height: 1em; pointer-events: none; transform: rotateZ(180deg); top: 100%; left: 0px;">--}}
                                {{-- <svg viewBox="0 0 30 30">--}}
                                {{-- <path class="stroke"--}}
                                {{-- d="M23.7,27.1L17,19.9C16.5,19.3,15.8,19,15,19s-1.6,0.3-2.1,0.9l-6.6,7.2C5.3,28.1,3.4,29,2,29h26 C26.7,29,24.6,28.1,23.7,27.1z">--}}
                                {{-- </path>--}}
                                {{-- <path class="fill"--}}
                                {{-- d="M23,27.8c1.1,1.2,3.4,2.2,5,2.2h2H0h2c1.7,0,3.9-1,5-2.2l6.6-7.2c0.7-0.8,2-0.8,2.7,0L23,27.8L23,27.8z">--}}
                                {{-- </path>--}}
                                {{-- </svg>--}}
                                {{-- </div>--}}
                                {{-- <p class="_25ALsM">Pay or finance this car completely--}}
                                {{-- remotely—either by--}}
                                {{-- phone or email. Paperwork will be delivered to you.</p>--}}
                                {{-- </div>--}}
                                {{-- </li>--}}
                                {{-- <li class="_4YS7ud"><label class="_4MtdAD"><input type="checkbox"--}}
                                {{-- class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="CONTACTLESS_OPTIONS-AT_HOME_DROP_OFF"--}}
                                {{-- data-cg-ft="checkbox-65"--}}
                                {{-- value="AT_HOME_DROP_OFF">--}}
                                {{-- <p class="_2J3cfC">Free home drop-off<span--}}
                                {{-- class="_4vKwXK">(65)</span>--}}
                                {{-- </p>--}}
                                {{-- </label>--}}
                                {{-- <svg aria-hidden="true" focusable="false" data-prefix="fas"--}}
                                {{-- data-icon="info-circle" width="15px" height="15px"--}}
                                {{-- class="svg-inline--fa fa-info-circle fa-w-16 fa-fw fa-1x "--}}
                                {{-- role="img"--}}
                                {{-- xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">--}}
                                {{-- <path fill="currentColor"--}}
                                {{-- d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">--}}
                                {{-- </path>--}}
                                {{-- </svg>--}}
                                {{-- <div role="dialog" id="hidden-t2dm3m" class="hidden _3sja5r" hidden=""--}}
                                {{-- tabindex="-1" aria-modal="false" data-dialog="true"--}}
                                {{-- aria-label="Ready to buy? This dealer will drop your new car off at your home, free of charge within 25 miles of the dealership."--}}
                                {{-- style="display: none; position: absolute; transform: translate3d(241px, 758px, 0px); top: 0px; left: 0px; will-change: transform;">--}}
                                {{-- <div class="_3DxALd"--}}
                                {{-- style="position: absolute; font-size: 30px; width: 1em; height: 1em; pointer-events: none; transform: rotateZ(180deg); top: 100%; left: 0px;">--}}
                                {{-- <svg viewBox="0 0 30 30">--}}
                                {{-- <path class="stroke"--}}
                                {{-- d="M23.7,27.1L17,19.9C16.5,19.3,15.8,19,15,19s-1.6,0.3-2.1,0.9l-6.6,7.2C5.3,28.1,3.4,29,2,29h26 C26.7,29,24.6,28.1,23.7,27.1z">--}}
                                {{-- </path>--}}
                                {{-- <path class="fill"--}}
                                {{-- d="M23,27.8c1.1,1.2,3.4,2.2,5,2.2h2H0h2c1.7,0,3.9-1,5-2.2l6.6-7.2c0.7-0.8,2-0.8,2.7,0L23,27.8L23,27.8z">--}}
                                {{-- </path>--}}
                                {{-- </svg>--}}
                                {{-- </div>--}}
                                {{-- <p class="_25ALsM">Ready to buy? This dealer will drop your new car--}}
                                {{-- off--}}
                                {{-- at--}}
                                {{-- your home, free of charge within 25 miles of the dealership.</p>--}}
                                {{-- </div>--}}
                                {{-- </li>--}}
                                {{-- <li class="_4YS7ud"><label class="_4MtdAD"><input type="checkbox"--}}
                                {{-- class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="CONTACTLESS_OPTIONS-AT_HOME_TEST_DRIVE"--}}
                                {{-- data-cg-ft="checkbox-59"--}}
                                {{-- value="AT_HOME_TEST_DRIVE">--}}
                                {{-- <p class="_2J3cfC">Free test drive at home<span--}}
                                {{-- class="_4vKwXK">(59)</span>--}}
                                {{-- </p>--}}
                                {{-- </label>--}}
                                {{-- <svg aria-hidden="true" focusable="false" data-prefix="fas"--}}
                                {{-- data-icon="info-circle" width="15px" height="15px"--}}
                                {{-- class="svg-inline--fa fa-info-circle fa-w-16 fa-fw fa-1x "--}}
                                {{-- role="img"--}}
                                {{-- xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">--}}
                                {{-- <path fill="currentColor"--}}
                                {{-- d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">--}}
                                {{-- </path>--}}
                                {{-- </svg>--}}
                                {{-- <div role="dialog" id="hidden-pqmjcd" class="hidden _3sja5r" hidden=""--}}
                                {{-- tabindex="-1" aria-modal="false" data-dialog="true"--}}
                                {{-- aria-label="Try a no-commitment, free test drive at home. Car will be dropped off (within 25 miles of the dealership) so you can safely test drive on your own."--}}
                                {{-- style="display: none; position: absolute; transform: translate3d(242px, 794px, 0px); top: 0px; left: 0px; will-change: transform;">--}}
                                {{-- <div class="_3DxALd"--}}
                                {{-- style="position: absolute; font-size: 30px; width: 1em; height: 1em; pointer-events: none; transform: rotateZ(180deg); top: 100%; left: 0px;">--}}
                                {{-- <svg viewBox="0 0 30 30">--}}
                                {{-- <path class="stroke"--}}
                                {{-- d="M23.7,27.1L17,19.9C16.5,19.3,15.8,19,15,19s-1.6,0.3-2.1,0.9l-6.6,7.2C5.3,28.1,3.4,29,2,29h26 C26.7,29,24.6,28.1,23.7,27.1z">--}}
                                {{-- </path>--}}
                                {{-- <path class="fill"--}}
                                {{-- d="M23,27.8c1.1,1.2,3.4,2.2,5,2.2h2H0h2c1.7,0,3.9-1,5-2.2l6.6-7.2c0.7-0.8,2-0.8,2.7,0L23,27.8L23,27.8z">--}}
                                {{-- </path>--}}
                                {{-- </svg>--}}
                                {{-- </div>--}}
                                {{-- <p class="_25ALsM">Try a no-commitment, free test drive at home. Car--}}
                                {{-- will be--}}
                                {{-- dropped off (within 25 miles of the dealership) so you can--}}
                                {{-- safely--}}
                                {{-- test--}}
                                {{-- drive on your own.</p>--}}
                                {{-- </div>--}}
                                {{-- </li>--}}
                                {{-- <li class="_4YS7ud"><label class="_4MtdAD"><input type="checkbox"--}}
                                {{-- class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="CONTACTLESS_OPTIONS-SHOWROOM_APPOINTMENTS"--}}
                                {{-- data-cg-ft="checkbox-66"--}}
                                {{-- value="SHOWROOM_APPOINTMENTS">--}}
                                {{-- <p class="_2J3cfC">Private dealer appointments<span--}}
                                {{-- class="_4vKwXK">(66)</span>--}}
                                {{-- </p>--}}
                                {{-- </label>--}}
                                {{-- <svg aria-hidden="true" focusable="false" data-prefix="fas"--}}
                                {{-- data-icon="info-circle" width="15px" height="15px"--}}
                                {{-- class="svg-inline--fa fa-info-circle fa-w-16 fa-fw fa-1x "--}}
                                {{-- role="img"--}}
                                {{-- xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">--}}
                                {{-- <path fill="currentColor"--}}
                                {{-- d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">--}}
                                {{-- </path>--}}
                                {{-- </svg>--}}
                                {{-- <div role="dialog" id="hidden-iq1mao" class="hidden _3sja5r" hidden=""--}}
                                {{-- tabindex="-1" aria-modal="false" data-dialog="true"--}}
                                {{-- aria-label="Practice social distancing and get a specific time to visit this dealer to enjoy a solo test drive."--}}
                                {{-- style="display: none; position: absolute; transform: translate3d(242px, 849px, 0px); top: 0px; left: 0px; will-change: transform;">--}}
                                {{-- <div class="_3DxALd"--}}
                                {{-- style="position: absolute; font-size: 30px; width: 1em; height: 1em; pointer-events: none; transform: rotateZ(180deg); top: 100%; left: 0px;">--}}
                                {{-- <svg viewBox="0 0 30 30">--}}
                                {{-- <path class="stroke"--}}
                                {{-- d="M23.7,27.1L17,19.9C16.5,19.3,15.8,19,15,19s-1.6,0.3-2.1,0.9l-6.6,7.2C5.3,28.1,3.4,29,2,29h26 C26.7,29,24.6,28.1,23.7,27.1z">--}}
                                {{-- </path>--}}
                                {{-- <path class="fill"--}}
                                {{-- d="M23,27.8c1.1,1.2,3.4,2.2,5,2.2h2H0h2c1.7,0,3.9-1,5-2.2l6.6-7.2c0.7-0.8,2-0.8,2.7,0L23,27.8L23,27.8z">--}}
                                {{-- </path>--}}
                                {{-- </svg>--}}
                                {{-- </div>--}}
                                {{-- <p class="_25ALsM">Practice social distancing and get a specific--}}
                                {{-- time to--}}
                                {{-- visit this dealer to enjoy a solo test drive.</p>--}}
                                {{-- </div>--}}
                                {{-- </li>--}}
                                {{-- <li class="_4YS7ud"><label class="_4MtdAD"><input type="checkbox"--}}
                                {{-- class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="CONTACTLESS_OPTIONS-REMOTE_APPOINTMENTS"--}}
                                {{-- data-cg-ft="checkbox-65"--}}
                                {{-- value="REMOTE_APPOINTMENTS">--}}
                                {{-- <p class="_2J3cfC">Virtual appointments<span--}}
                                {{-- class="_4vKwXK">(65)</span>--}}
                                {{-- </p>--}}
                                {{-- </label>--}}
                                {{-- <svg aria-hidden="true" focusable="false" data-prefix="fas"--}}
                                {{-- data-icon="info-circle" width="15px" height="15px"--}}
                                {{-- class="svg-inline--fa fa-info-circle fa-w-16 fa-fw fa-1x "--}}
                                {{-- role="img"--}}
                                {{-- xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">--}}
                                {{-- <path fill="currentColor"--}}
                                {{-- d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">--}}
                                {{-- </path>--}}
                                {{-- </svg>--}}
                                {{-- <div role="dialog" id="hidden-fadl8h" class="hidden _3sja5r" hidden=""--}}
                                {{-- tabindex="-1" aria-modal="false" data-dialog="true"--}}
                                {{-- aria-label="Schedule a virtual meeting with this dealer and get a video tour of this car."--}}
                                {{-- style="display: none; position: absolute; transform: translate3d(242px, 904px, 0px); top: 0px; left: 0px; will-change: transform;">--}}
                                {{-- <div class="_3DxALd"--}}
                                {{-- style="position: absolute; font-size: 30px; width: 1em; height: 1em; pointer-events: none; transform: rotateZ(180deg); top: 100%; left: 0px;">--}}
                                {{-- <svg viewBox="0 0 30 30">--}}
                                {{-- <path class="stroke"--}}
                                {{-- d="M23.7,27.1L17,19.9C16.5,19.3,15.8,19,15,19s-1.6,0.3-2.1,0.9l-6.6,7.2C5.3,28.1,3.4,29,2,29h26 C26.7,29,24.6,28.1,23.7,27.1z">--}}
                                {{-- </path>--}}
                                {{-- <path class="fill"--}}
                                {{-- d="M23,27.8c1.1,1.2,3.4,2.2,5,2.2h2H0h2c1.7,0,3.9-1,5-2.2l6.6-7.2c0.7-0.8,2-0.8,2.7,0L23,27.8L23,27.8z">--}}
                                {{-- </path>--}}
                                {{-- </svg>--}}
                                {{-- </div>--}}
                                {{-- <p class="_25ALsM">Schedule a virtual meeting with this dealer and--}}
                                {{-- get a--}}
                                {{-- video tour of this car.</p>--}}
                                {{-- </div>--}}
                                {{-- </li>--}}
                                {{-- </ul>--}}
                                {{-- </fieldset>--}}
                                {{-- <fieldset class="_5pN1ma" data-cg-ft="filters-panel-filter-finance_partners">--}}
                                {{-- <legend class="_5m33yq"><span>Financing</span></legend>--}}
                                {{-- <ul class="filter-result" role="group">--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="HAS_FINANCING"--}}
                                {{-- data-cg-ft="checkbox-HAS_FINANCING"--}}
                                {{-- value="">--}}
                                {{-- <p class="_2J3cfC">Online Financing<span class="_4vKwXK">(77)</span>--}}
                                {{-- </p>--}}
                                {{-- </label></li>--}}
                                {{-- <li class="qZvkvr">--}}
                                {{-- <ul>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="FINANCE_PARTNERS-CAPITAL_ONE"--}}
                                {{-- data-cg-ft="checkbox-FINANCE_PARTNERS"--}}
                                {{-- value="CAPITAL_ONE">--}}
                                {{-- <p class="_2J3cfC">Capital One<span--}}
                                {{-- class="_4vKwXK">(63)</span>--}}
                                {{-- </p>--}}
                                {{-- </label></li>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="FINANCE_PARTNERS-GLS"--}}
                                {{-- data-cg-ft="checkbox-FINANCE_PARTNERS"--}}
                                {{-- value="GLS">--}}
                                {{-- <p class="_2J3cfC">GLS<span class="_4vKwXK">(45)</span></p>--}}
                                {{-- </label>--}}
                                {{-- </li>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="FINANCE_PARTNERS-WESTLAKE"--}}
                                {{-- data-cg-ft="checkbox-FINANCE_PARTNERS"--}}
                                {{-- value="WESTLAKE">--}}
                                {{-- <p class="_2J3cfC">Westlake<span class="_4vKwXK">(69)</span>--}}
                                {{-- </p>--}}
                                {{-- </label></li>--}}
                                {{-- </ul>--}}
                                {{-- </li>--}}
                                {{-- </ul>--}}
                                {{-- <div class="N39hwG">--}}
                                {{-- <div class="text-center">--}}
                                {{-- <a class="clr-primary fs-6 lh-1 my-3"--}}
                                {{-- data-cg-ft="financing-link-launcher-SRP_FILTER_LAUNCHER"--}}
                                {{-- role="button"--}}
                                {{-- type="button">Learn more about online financing--}}
                                {{-- </a>--}}
                                {{-- </div>--}}
                                {{-- </div>--}}
                                {{-- </fieldset>--}}
                                {{-- <fieldset class="_5pN1ma" data-cg-ft="filters-panel-filter-mileage">--}}
                                {{-- <legend class="_5m33yq"><span>Mileage</span></legend>--}}
                                {{-- <div class="ps-3">--}}
                                {{-- <div class="_4jC7Yw" data-cg-ft="range-slider-label-mobile">Any</div>--}}
                                {{-- <div class="_4VRgPK">--}}
                                {{-- <div class="_3vmcUg"></div>--}}
                                {{-- <div class="_3pdaxM"></div>--}}
                                {{-- <input type="range" class="form-range custom-range" value="100" name=""--}}
                                {{-- id="mileage">--}}
                                {{-- <div class="_4sw7vZ" style="left: 0%; width: 100%;"></div>--}}
                                {{-- </div>--}}
                                {{-- </div>--}}
                                {{-- </fieldset>--}}
                                {{-- <fieldset class="_5pN1ma" data-cg-ft="filters-panel-filter-shop_by_type">--}}
                                {{-- <legend class="_5m33yq"><span>Choose how to shop</span>--}}
                                {{-- <svg aria-hidden="true" focusable="false" data-prefix="fas"--}}
                                {{-- data-icon="info-circle" width="15px" height="15px"--}}
                                {{-- class="svg-inline--fa fa-info-circle fa-w-16 fa-fw fa-1x " role="img"--}}
                                {{-- xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">--}}
                                {{-- <path fill="currentColor"--}}
                                {{-- d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">--}}
                                {{-- </path>--}}
                                {{-- </svg>--}}
                                {{-- </legend>--}}
                                {{-- <div aria-hidden="true" class="_5giXsd" style="min-height: 0px; display: none;">--}}
                                {{-- <div class="_2LMv9T">--}}
                                {{-- <div class="_3jW2QL">--}}
                                {{-- <div class="HB59W6">--}}
                                {{-- <div class="_4XKgKt"><span>Find the car you love at a price--}}
                                {{-- that's--}}
                                {{-- just right—no matter where it's located.</span>--}}
                                {{-- <div><span class="SVefyn">Nearby listings:--}}
                                {{-- </span><span>Local--}}
                                {{-- listings available in your area now.</span>--}}
                                {{-- </div>--}}
                                {{-- <div><span class="SVefyn">Home delivery:--}}
                                {{-- </span><span>Listings you can buy online and get delivered--}}
                                {{-- to your--}}
                                {{-- driveway.</span>--}}
                                {{-- </div>--}}
                                {{-- <div><span class="SVefyn">Store transfers: </span><span>Cars--}}
                                {{-- available for transfer to a local dealer.</span>--}}
                                {{-- </div>--}}
                                {{-- </div>--}}
                                {{-- </div>--}}
                                {{-- </div>--}}
                                {{-- </div>--}}
                                {{-- </div>--}}
                                {{-- <ul class="filter-result">--}}
                                {{-- <li>--}}
                                {{-- <label class="_2J3cfC" for="seeamix"> <input type="checkbox"--}}
                                {{-- id="seeamix">--}}
                                {{-- <p class="fw-bold">See a--}}
                                {{-- mix:<span class="_42L88F fw-normal">show all local cars &amp;--}}
                                {{-- some--}}
                                {{-- delivery--}}
                                {{-- &amp;--}}
                                {{-- store transfer results</span>--}}
                                {{-- </p>--}}
                                {{-- </label>--}}
                                {{-- </li>--}}


                                {{-- <p class="_4eTETB clr-dark  fw-bold">Customize results</p>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="NEAR_BY" data-cg-ft="checkbox-NEAR_BY"--}}
                                {{-- value="">--}}
                                {{-- <p class="_2J3cfC">Nearby listings<span class="_4vKwXK">(2)</span>--}}
                                {{-- </p>--}}
                                {{-- </label>--}}
                                {{-- </li>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="HOME_DELIVERY"--}}
                                {{-- data-cg-ft="checkbox-HOME_DELIVERY"--}}
                                {{-- value="">--}}
                                {{-- <p class="_2J3cfC">Home delivery<span class="_4vKwXK">(91)</span>--}}
                                {{-- </p>--}}
                                {{-- </label>--}}
                                {{-- </li>--}}
                                {{-- </ul>--}}
                                {{-- </fieldset>--}}
                                {{-- <fieldset class="_5pN1ma" data-cg-ft="filters-panel-filter-trim_name">--}}
                                {{-- <legend class="_5m33yq"><span>Trim</span></legend>--}}
                                {{-- <ul class="filter-result">--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="TRIM_NAME-AWD"--}}
                                {{-- data-cg-ft="checkbox-AWD" value="AWD">--}}
                                {{-- <p class="_2J3cfC">AWD<span class="_4vKwXK">(1)</span></p>--}}
                                {{-- </label></li>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="TRIM_NAME-FWD"--}}
                                {{-- data-cg-ft="checkbox-FWD" value="FWD">--}}
                                {{-- <p class="_2J3cfC">FWD<span class="_4vKwXK">(4)</span></p>--}}
                                {{-- </label></li>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="TRIM_NAME-FWD with Technology Package"--}}
                                {{-- data-cg-ft="checkbox-FWD with Technology Package"--}}
                                {{-- value="FWD with Technology Package">--}}
                                {{-- <p class="_2J3cfC">FWD with Technology Package<span--}}
                                {{-- class="_4vKwXK">(6)</span>--}}
                                {{-- </p>--}}
                                {{-- </label></li>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="TRIM_NAME-FWD wth Technology Package"--}}
                                {{-- data-cg-ft="checkbox-FWD wth Technology Package"--}}
                                {{-- value="FWD wth Technology Package">--}}
                                {{-- <p class="_2J3cfC">FWD wth Technology Package<span--}}
                                {{-- class="_4vKwXK">(1)</span>--}}
                                {{-- </p>--}}
                                {{-- </label></li>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="TRIM_NAME-SH-AWD"--}}
                                {{-- data-cg-ft="checkbox-SH-AWD"--}}
                                {{-- value="SH-AWD">--}}
                                {{-- <p class="_2J3cfC">SH-AWD<span class="_4vKwXK">(32)</span></p>--}}
                                {{-- </label></li>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="TRIM_NAME-SH-AWD with A-SPEC Package"--}}
                                {{-- data-cg-ft="checkbox-SH-AWD with A-SPEC Package"--}}
                                {{-- value="SH-AWD with A-SPEC Package">--}}
                                {{-- <p class="_2J3cfC">SH-AWD with A-SPEC Package<span--}}
                                {{-- class="_4vKwXK">(1)</span>--}}
                                {{-- </p>--}}
                                {{-- </label></li>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="TRIM_NAME-SH-AWD with Advance and Entertainment Package"--}}
                                {{-- data-cg-ft="checkbox-SH-AWD with Advance and Entertainment Package"--}}
                                {{-- value="SH-AWD with Advance and Entertainment Package">--}}
                                {{-- <p class="_2J3cfC">SH-AWD with Advance and Entertainment--}}
                                {{-- Package<span class="_4vKwXK">(6)</span></p>--}}
                                {{-- </label></li>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="TRIM_NAME-SH-AWD with Advance Package"--}}
                                {{-- data-cg-ft="checkbox-SH-AWD with Advance Package"--}}
                                {{-- value="SH-AWD with Advance Package">--}}
                                {{-- <p class="_2J3cfC">SH-AWD with Advance Package<span--}}
                                {{-- class="_4vKwXK">(4)</span>--}}
                                {{-- </p>--}}
                                {{-- </label></li>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="TRIM_NAME-SH-AWD with Technology and A-SPEC Package"--}}
                                {{-- data-cg-ft="checkbox-SH-AWD with Technology and A-SPEC Package"--}}
                                {{-- value="SH-AWD with Technology and A-SPEC Package">--}}
                                {{-- <p class="_2J3cfC">SH-AWD with Technology and A-SPEC Package<span--}}
                                {{-- class="_4vKwXK">(1)</span></p>--}}
                                {{-- </label></li>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="TRIM_NAME-SH-AWD with Technology and Entertainment Package"--}}
                                {{-- data-cg-ft="checkbox-SH-AWD with Technology and Entertainment Package"--}}
                                {{-- value="SH-AWD with Technology and Entertainment Package">--}}
                                {{-- <p class="_2J3cfC">SH-AWD with Technology and Entertainment--}}
                                {{-- Package<span class="_4vKwXK">(3)</span></p>--}}
                                {{-- </label></li>--}}
                                {{-- <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="TRIM_NAME-SH-AWD with Technology Package"--}}
                                {{-- data-cg-ft="checkbox-SH-AWD with Technology Package"--}}
                                {{-- value="SH-AWD with Technology Package">--}}
                                {{-- <p class="_2J3cfC">SH-AWD with Technology Package<span--}}
                                {{-- class="_4vKwXK">(31)</span></p>--}}
                                {{-- </label></li>--}}
                                {{-- </ul>--}}
                                {{-- </fieldset>--}}
                                {{-- <fieldset class="_5pN1ma" data-cg-ft="filters-panel-filter-days_on_market">--}}
                                {{-- <legend class="_5m33yq"><span>Days on Market</span></legend>--}}
                                {{-- <div class="ps-3">--}}
                                {{-- <div class="_4jC7Yw" data-cg-ft="range-slider-label-mobile">0 days - 200--}}
                                {{-- days--}}

                                {{-- <div class="d-flex position-relative">--}}
                                {{-- <div class="_3vmcUg"></div>--}}
                                {{-- <!-- <label for="customRange3" class="form-label">Example range</label> -->--}}
                                {{-- <input type="range" class="form-range custom-range-left" min="0"--}}
                                {{-- max="100" id="daysonmarketleft" value="0">--}}
                                {{-- <input type="range" class="form-range custom-range-right" min="101"--}}
                                {{-- max="200" id="daysonmarketright" value="200">--}}
                                {{-- <div class="_3pdaxM"></div>--}}

                                {{-- </div>--}}
                                {{-- </div>--}}
                                {{-- </div>--}}
                                {{-- </fieldset>--}}
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
                                                <div class="_3ZsiJM"><span class="EWdfup BNasx5"></span><span class="_2P52Mt">Black</span></div>
                                                <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="external_color[]" id="COLOR-BLUE" data-cg-ft="checkbox-BLUE" value="BLUE">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_3ZsiJM"><span class="EWdfup RdKcF6"></span><span class="_2P52Mt">Blue</span></div>
                                                <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="external_color[]" id="COLOR-GRAY" data-cg-ft="checkbox-GRAY" value="GRAY">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_3ZsiJM"><span class="EWdfup _2wmsu7"></span><span class="_2P52Mt">Gray</span></div>
                                                <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="external_color[]" id="COLOR-RED" data-cg-ft="checkbox-RED" value="RED">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_3ZsiJM"><span class="EWdfup _3VL3i3"></span><span class="_2P52Mt">Red</span></div>
                                                <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" id="COLOR-SILVER" name="external_color[]" data-cg-ft="checkbox-SILVER" value="SILVER">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_3ZsiJM"><span class="EWdfup _4NchCV"></span><span class="_2P52Mt">Silver</span></div>
                                                <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" id="COLOR-WHITE" name="external_color[]" data-cg-ft="checkbox-WHITE" value="WHITE">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_3ZsiJM"><span class="EWdfup _3Vvhnr"></span><span class="_2P52Mt">White</span></div>
                                                <span class="_4vKwXK"></span>
                                                <p></p>
                                            </label></li>
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" id="COLOR-UNKNOWN" name="external_color[]" data-cg-ft="checkbox-UNKNOWN" value="UNKNOWN">
                                                <p class="_2J3cfC">
                                                </p>
                                                <div class="_3ZsiJM"><span class="EWdfup _3Zr7XV"></span><span class="_2P52Mt">Unknown</span></div>
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
                                                <div class="_2YwLJP">
                                                    <div class="_3uEYW2 _2QYuhA">
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
                                                <div class="_2YwLJP">
                                                    <div class="_3uEYW2 _5174Ak">
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
                                                <div class="_2YwLJP">
                                                    <div class="_3uEYW2 EVaT8S">
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
                                                <div class="_2YwLJP">
                                                    <div class="_3uEYW2 _5ZQc7H">
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
                                        <li><label class="_4MtdAD"><input type="checkbox" class="RUxFSo submit-form" tabindex="0" name="certified[]" value="1" id="VEHICLE_CONDITION-CPO" data-cg-ft="checkbox-CPO" value="CPO">
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
                                    <div aria-hidden="true" class="_5giXsd" style="min-height: 0px; display: none;">
                                        <div class="_2LMv9T">
                                            <div class="_3jW2QL">
                                                <div class="HB59W6">
                                                    <div>Vehicle history data provided by Experian AutoCheck. This
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
                                {{-- <fieldset class="_5pN1ma" data-cg-ft="filters-panel-filter-fuel_consumption">--}}
                                {{-- <legend class="_5m33yq"><span>Gas Mileage</span></legend>--}}
                                {{-- <div class="ps-3 _4jC7Yw" data-cg-ft="range-slider-label-mobile">17 MPG - 24 MPG--}}
                                {{-- <div class="d-flex position-relative">--}}
                                {{-- <div class="_3vmcUg"></div>--}}
                                {{-- <!-- <label for="customRange3" class="form-label">Example range</label> -->--}}
                                {{-- <input type="range" class="form-range custom-range-left" min="0"--}}
                                {{-- max="100"--}}
                                {{-- id="daysonmarketleft" value="0">--}}
                                {{-- <input type="range" class="form-range custom-range-right" min="101"--}}
                                {{-- max="200" id="daysonmarketright" value="200">--}}
                                {{-- <div class="_3pdaxM"></div>--}}

                                {{-- </div>--}}
                                {{-- </div>--}}
                                {{-- </fieldset>--}}
                                {{-- <fieldset class="_5pN1ma mt-5"--}}
                                {{-- data-cg-ft="filters-panel-filter-has_recent_price_drops">--}}
                                {{-- <legend class="_5m33yq"><span>Price Drops</span></legend>--}}
                                {{-- <label class="d-flex"><input type="radio" class="RUxFSo submit-form"--}}
                                {{-- tabindex="0"--}}
                                {{-- id="HAS_RECENT_PRICE_DROPS"--}}
                                {{-- name="lower_price[]"--}}
                                {{-- data-cg-ft="checkbox-HAS_RECENT_PRICE_DROPS"--}}
                                {{-- value="low_price">--}}
                                {{-- <p class="ps-3 mb-0">Only show recent price drops<span--}}
                                {{-- class="_5DuqYT"></span>--}}
                                {{-- </p>--}}
                                {{-- </label>--}}
                                {{-- </fieldset>--}}
                                <fieldset class="mt-4" data-cg-ft="filters-panel-filter-average_dealer_ratings">
                                    <legend class="_5m33yq"><span>Average Dealer Rating</span></legend>
                                    <ul class="filter-result-rating">
                                        <li class="_4rfAz3" data-cg-ft="radio-AVERAGE_DEALER_RATINGS-FIVE_STAR">
                                            <input type="radio" name="dealer_rating[]" value="5" class="RUxFSo submit-form" tabindex="0" id="AVERAGE_DEALER_RATINGS-FIVE_STAR"><label for="AVERAGE_DEALER_RATINGS-FIVE_STAR">
                                                <div class="_583KVb">
                                                    <div class="_3sopyT">
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
                                                <div class="_583KVb">
                                                    <div class="_3sopyT">
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
                                                <div class="_583KVb">
                                                    <div class="_3sopyT">
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
                                                <div class="_583KVb">
                                                    <div class="_3sopyT">
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
                                                <div class="_583KVb">
                                                    <div class="_3sopyT">
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

                    <div class="row product-grid">
                        @include('frontend/snippets/listing_car')
                        <div class="row">
                            <div class="col-12">
                                @if(!empty($car))
                                {!! $car->links() !!}
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
<script>
    $(document).ready(function() {
        $(".submit-form").click(function() {
            $('.product-grid').html('');
            var vehicle_type = $("input[name='vehicle_type[]']:checked").map(function(item) {
                return $(this).val();
            }).get();
            var external_color = $("input[name='external_color[]']:checked").map(function() {
                return $(this).val();
            }).get();
            var internal_color = $("input[name='internal_color[]']:checked").map(function() {
                return $(this).val();
            }).get();
            var deal_type = $("input[name='deal_type[]']:checked").map(function() {
                return $(this).val();
            }).get();
            var certified = $("input[name='certified[]']:checked").map(function() {
                return $(this).val();
            }).get();
            var owner = $("input[name='owner[]']:checked").map(function() {
                return $(this).val();
            }).get();
            var accident_check = $("input[name='accident_check[]']:checked").map(function() {
                return $(this).val();
            }).get();
            var transmission = $("input[name='transmission[]']:checked").map(function() {
                return $(this).val();
            }).get();
            var vehicle_body_shape = $("input[name='vehicle_body_shape[]']:checked").map(function() {
                return $(this).val();
            }).get();
            var dealer_rating = $("input[name='dealer_rating[]']:checked").map(function() {
                return $(this).val();
            }).get();
            $.ajax({
                type: 'GET',
                url: "{{ url('fetch-car') }}",
                data: {
                    // "_token": "{{ csrf_token() }}",
                    'vehicle_type': vehicle_type,
                    'external_color': external_color,
                    'internal_color': internal_color,
                    'deal_type': deal_type,
                    'certified': certified,
                    'owner': owner,
                    'accident_check': accident_check,
                    'transmission': transmission,
                    'vehicle_body_shape': vehicle_body_shape,
                    'dealer_rating': dealer_rating,
                },
                contentType: "application/json",
                success: function(data) {
                    // console.log(data);
                    $('.product-grid').html(data);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {

        $('#btnOpenSearch').click(function(e) {
            if ($(this).text() == "Search") {
                $('.leftPanelWrapper').show();
                $(this).text("Hide Search");
            } else {
                $('.leftPanelWrapper').hide();
                $(this).text("Search");
            }
        })
    })

    async function successwal() {
        let s = await swal("Request Sent", "Request Sent Successfully.", "success");
        if (s) {
            $('[data-bs-dismiss="modal"]').trigger('click');
        }
    }

    async function avvv() {
        let s = await swal("Request Sent", "Request Sent Soccessfully.", "success");
        if (s) {
            $('[data-bs-dismiss="modal"]').trigger('click');
        }
    }

    function makeActive() {
        var element = document.getElementsByClassName("react-tabs-0");
        element.classList.add("selected");
        //    element.innerHTML="This is Active";
    }

    // makeActive()
    Array.from({
        length: 10
    }, (_, index) => {
        //
        // console.log(index);

    });
    Array.from(document.querySelectorAll(".stock-search-tab")).forEach(function(element) {
        element.onclick = function() {
            Array.from(document.querySelectorAll(".stock-search-tab")).forEach((plant) => plant.classList
                .remove('selected'));
            this.classList.toggle('selected');
        };
    });
</script>
<script>
    $(document).ready(function() {
        $('.btnsave').on('click', function(event) {
            var name = "'#exampleModal" + $("#car_id").val() + "'";
            // console.log(name);
            toastr.options.closeButton = true;
            toastr.options.progressBar = true;
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{url('request-info')}}",
                type: "POST",
                data: $('#request_form').serialize(),
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    $('#request_form').trigger('reset');
                    toastr.success('Request Submit Successfully');
                    //  $(name).modal('close');
                    $('.trg').click();
                }
            });
        });


        $('.saved-search').on('click', function() {
            toastr.options.closeButton = true;
            toastr.options.progressBar = true;
            var url = window.location.href;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                type: "get",
                data: {
                    url: url
                },
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    if (response == 5) {
                        toastr.error('Please sign-in to your account first')

                    } else {
                        toastr.success('Your Search Saved Successfully')

                    }
                }
            });
        });
    })
</script>
<script>
    let minValue = document.getElementById("min-value");
    let maxValue = document.getElementById("max-value");

    function validateRange(minPrice, maxPrice) {
        if (minPrice > maxPrice) {

            // Swap to Values
            let tempValue = maxPrice;
            maxPrice = minPrice;
            minPrice = tempValue;
        }

        minValue.innerHTML = "$" + minPrice;
        maxValue.innerHTML = "$" + maxPrice;
    }

    const inputElements = document.querySelectorAll("input");

    inputElements.forEach((element) => {
        element.addEventListener("change", (e) => {
            let minPrice = parseInt(inputElements[0].value);
            let maxPrice = parseInt(inputElements[1].value);

            validateRange(minPrice, maxPrice);
        });
    });

    validateRange(inputElements[0].value, inputElements[1].value);
</script>
<script src="{{asset('frontend/js/script.js')}}"></script>