@extends('frontend.layouts.master')
@section('title')
Finance
@endsection
@section('content')
<style>
    .field-required {
        display: none;
    }

    .form-label>[data-required="true"]::after {
        color: hsl(var(--form-error-color));
        content: "*";
        padding-left: 0.25em;
        position: absolute;
    }

    span [data-required] {
        display: block;
        height: 100px;
        width: 100px;

    }

    /* .modal
 {
        display: block !important;
    } */


    .fade:not(.show) {
        opacity: 0;
    }


    label>[data-required="true"]::after,
    legend>[data-required="true"]::after {
        /* color: hsl(var(--form-error-color)); */
        content: "*";
        padding-left: 0.25em;
        position: absolute;

    }

    .tab {
        display: none;
        color: var(--dark);
    }

    .step {
        /* content: "aaa"; */

        margin: 0 2px;
        /* background-color: #bbbbbb; */
        border: none;
        border-radius: 50%;
        display: none;
        opacity: 0.5;
    }

    .step.active {
        /* content: "step-count"; */
        opacity: 1;
        display: block;
    }

    .tab.invalid>div {
        /* position: absolute; */
        /* content: "Please Fill";
        height: 100px;
        width: 100px;
        background-color: blue; */
        display: none;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        /* background-color: yellow; */
        /* display: none; */

    }

    .required-none {
        display: none;
    }

    .required {
        display: flex;
        color: red;
        font-size: small;
    }

    .required svg {
        margin-top: auto;
        margin-bottom: auto;
    }

    .required p {
        padding-left: 10px;
        margin-bottom: 0;
    }

    #prevBtn {
        cursor: pointer;
    }

    .text-red {
        color: red;
    }

    nav>div>div button.active:after {
        border: 0.5rem solid transparent;
        border-top-color: #fff;
        content: "";
        height: 0;
        left: 50%;
        bottom: -1px;
        position: absolute;
        transform: translateX(-50%) rotate(180deg);
        width: 100;
    }

    .dropdown_items {
        display: none;
    }

    /* .showaccordion{
        display: block;
        transition: display 0.3s ease;
    } */
    .preloader {
        width: 100%;
        height: 100%;
        position: fixed;
        background: #000000ad;
        z-index: 99999999999;
        top: 0;
    }

    .preloader>div {
        width: 100%;
        height: 100%;
        justify-content: center;
        align-items: center;
        color: white;
        display: flex;
    }

    #tyModal {
        display: none;
        z-index: 9999999;
    }

    .tymodalll {
        position: absolute;
        z-index: 99999;
        /* border-radius: 10px; */
        display: flex;
        justify-content: center;
        width: 100%;
        align-items: center;
        height: 100%;
        top: 0;
    }

    .tymodal {
        display: block;
        background: white;
        text-align: center;
        padding: 10px;
        border-radius: 10px;
    }
</style>
<div id="tymodalll" class="tymodalll" style="display: none;">
    <div id="tyModal" class="tymodal">
        <div class="ty-modal-content">
            <lord-icon src="https://cdn.lordicon.com/iepbfivp.json" trigger="hover" colors="primary:#121331,secondary:#4bb3fd,tertiary:#ebe6ef" style="width:150px;height:150px">
            </lord-icon>
            <h3>Thank You</h3>
            <p>Your request is submitted. We will call you back within 24hrs.</p>
        </div>
    </div>
</div>
<div class="preloader" style="display: none;">
    <div class="">
        <div class="spinner-border text-light" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>
<section class="financing-top-banner">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div>
                <p class="heading">Shop with real rates in hand
                </p>
                <!-- Button trigger modal -->
                <button type="button" class="book-button btn-primary fs-5 back-primary border-0  px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Get Pre-Qualified
                </button>

                <!-- Modal -->
                <div class="modal  fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="container modal-css modal-dialog modal-dialog-centered">
                        <div class="modal-content rounded-0 ">
                            <div class="modal-header">

                                <div class="col">
                                    <svg id="prevBtn" onclick="nextPrev(-1)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                    </svg>
                                </div>
                                <div class="col text-center">
                                    <div id="step-count" style="text-align:center;margin-top:40px;">
                                        <span class="step"></span>
                                        <span class="step"></span>
                                        <span class="step"></span>
                                        <span class="step"></span>
                                        <span class="step"></span>
                                        <span class="step"></span>
                                        <span class="step"></span>
                                    </div>
                                    <h1 class="modal-title fs-5 mx-auto" id="ModalLabel">Overview</h1>
                                </div>
                                <div class="d-flex col justify-content-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#707070" class="bi bi-lock-fill my-auto" viewBox="0 0 16 16">
                                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                    </svg>
                                    <p class=" my-auto">Secure</p>
                                    <button type="button" class="btn-close ms-0 my-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            </div>
                            <div class="modal-body p-0 py-4">
                                <form id="regForm" method="POST">
                                    <!-- One "tab" for each step in the form: -->
                                    <div class="tab p-3">
                                        <div class="">
                                            <p class="fs-4 fw-bold text-center">Shop with real rates in hand</p>
                                            <div class="d-sm-flex justify-content-between">
                                                <div class="modal-fianceinadiv text-center w-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="52" viewBox="0 0 96 74" width="52">
                                                        <g fill="none" fill-rule="evenodd">
                                                            <path d="m70.212766 0h-63.82978728c-3.52393617 0-6.38297872 2.85904255-6.38297872 6.38297872v46.80851068c0 3.5239361 2.85904255 6.3829787 6.38297872 6.3829787h63.82978728c3.5239361 0 6.3829787-2.8590426 6.3829787-6.3829787v-46.80851068c0-3.52393617-2.8590426-6.38297872-6.3829787-6.38297872zm2.1276595 53.1914894c0 1.1702127-.9574468 2.1276595-2.1276595 2.1276595h-63.82978728c-1.17021276 0-2.12765957-.9574468-2.12765957-2.1276595v-46.80851068c0-1.17021276.95744681-2.12765957 2.12765957-2.12765957h63.82978728c1.1702127 0 2.1276595.95744681 2.1276595 2.12765957zm-46.8085106-9.0425532v1.0638298c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-9.5744681c-.8776595 0-1.5957447-.7180851-1.5957447-1.5957446v-1.0638298c0-.8776596.7180852-1.5957447 1.5957447-1.5957447h9.5744681c.8776596 0 1.5957447.7180851 1.5957447 1.5957447zm25.5319149 0v1.0638298c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-18.0851064c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446v-1.0638298c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h18.0851064c.8776596 0 1.5957447.7180851 1.5957447 1.5957447zm13.8297872-35.6382979h-10.6382979c-1.768617 0-3.1914893 1.42287234-3.1914893 3.1914894v6.3829787c0 1.768617 1.4228723 3.1914893 3.1914893 3.1914893h10.6382979c1.768617 0 3.1914894-1.4228723 3.1914894-3.1914893v-6.3829787c0-1.76861706-1.4228724-3.1914894-3.1914894-3.1914894zm-1.0638298 8.5106383h-8.5106383v-4.2553192h8.5106383zm-29.2553191 21.2765957h-7.4468085c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446v-5.319149c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h7.4468085c.8776596 0 1.5957447.7180851 1.5957447 1.5957447v5.319149c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446zm3.7234042-1.5957446v-5.319149c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h7.4468085c.8776596 0 1.5957447.7180851 1.5957447 1.5957447v5.319149c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-7.4468085c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446zm-25.5319149 0v-5.319149c0-.8776596.7180852-1.5957447 1.5957447-1.5957447h7.4468085c.8776596 0 1.5957447.7180851 1.5957447 1.5957447v5.319149c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-7.4468085c-.8776595 0-1.5957447-.7180851-1.5957447-1.5957446zm51.0638298-5.319149v5.319149c0 .8776595-.7180851 1.5957446-1.5957446 1.5957446h-9.5744681c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446v-5.319149c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h9.5744681c.8776595 0 1.5957446.7180851 1.5957446 1.5957447z" fill="#00a0dd" fill-rule="nonzero" transform="translate(0 14.425532)">
                                                            </path>
                                                            <g transform="translate(54.106383)">
                                                                <path d="m27.5872936 8.59459619 3.7928308 1.90455891 1.8960249 3.8083347c.211671.4244243.6442674.6925102 1.1174677.6925102.4732004 0 .9057967-.2680859 1.1174678-.6925102l1.8960249-3.8083347 3.7928307-1.90455891c.4249399-.21164659.6936766-.64640393.6936766-1.12221749 0-.47581355-.2687367-.91057089-.6936766-1.12221748l-3.7928307-1.90455891-1.8960249-3.8083347c-.4240287-.84969015-1.8109069-.84969015-2.2349355 0l-1.8960249 3.8083347-3.7928308 1.90455891c-.4249399.21164659-.6936766.64640393-.6936766 1.12221748 0 .47581356.2687367.9105709.6936766 1.12221749zm5.2629042-2.07630351c.2449373-.12287123.4436739-.32133858.5667118-.56594399l.9767074-1.95234869.9767074 1.95551039c.1235853.24342877.3222643.44073008.5667119.56278229l1.9565807.97854562-1.9565807.98170732c-.2446049.12333045-.4432141.32167057-.5667119.56594399l-.9767074 1.95551039-.9767074-1.95234869c-.1234977-.24427342-.322107-.44261355-.5667118-.56594399l-1.9565808-.98170732zm4.5565958 23.92795502-1.8958261-3.8083844c-.4239841-.8504844-1.8107168-.8504844-2.234701 0l-1.895826 3.8083844-3.7924329 1.9038006c-.4253272.2114907-.6943906.6464865-.6943906 1.1226237 0 .4761373.2690634.911133.6943906 1.1226237l3.7924329 1.9038007 1.895826 3.8083844c.2116488.4244298.6441998.6925192 1.1173505.6925192.4731508 0 .9057017-.2680894 1.1173505-.6925192l1.8958261-3.8083844 3.7924328-1.9038007c.4253272-.2114907.6943906-.6464864.6943906-1.1226237 0-.4761372-.2690634-.911133-.6943906-1.1226237zm-1.4697573 4.0315075c-.2448264.1233983-.443488.3220677-.5667119.5667344l-.9767074 1.9555104-.9767074-1.9555104c-.1232239-.2446667-.3218854-.4433361-.5667118-.5667344l-1.9565808-.9777552 1.9565808-.9785456c.2448264-.1233983.4434879-.3220678.5667118-.5667344l.9767074-1.95472.9767074 1.95472c.1232239.2446666.3218855.4433361.5667119.5667344l1.9565807.9785456zm-4.0434193-14.0059403c-.0004743-.4896463-.2764504-.9373006-.7135471-1.1574279l-9.0864254-4.5481345-4.5428091-9.10838435c-.4382987-.87715753-1.8718504-.87715753-2.3101492 0l-4.5428091 9.10838435-9.08642539 4.5481345c-.43968713.2181236-.71783469.6667618-.71783469 1.1578318s.27814756.9397082.71783469 1.1578318l9.08642539 4.5521729 4.5428091 9.1035383c.2187945.4377409.6659493.7142382 1.1550746.7142382s.9362801-.2764973 1.1550746-.7142382l4.5428091-9.1035383 9.0864254-4.5505575c.4374794-.2209513.7135471-.6694917.7135471-1.1598511z" fill="#527d89" fill-rule="nonzero"></path>
                                                                <path d="m19.8188651 24.2020076c-.198627.1162427-.3597884.3040033-.4595635.5354129l-2.8459564 6.6425595-2.8459564-6.6425595c-.0997751-.2314096-.2609365-.4191702-.4595635-.5354129l-5.6944801-3.3224015 5.6944801-3.3216536c.1983574-.1166771.3594155-.3043174.4595635-.5354129l2.8459564-6.6425596 2.8459564 6.6425596c.100148.2310955.2612061.4187358.4595635.5354129l5.6944801 3.3216536z" fill="#fff"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <p class="fs4 mb-sm-0 text-dark  px-1">
                                                        Only Takes Minutes
                                                    </p>
                                                </div>
                                                <div class="modal-fianceinadiv text-center w-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="52" viewBox="0 0 92 70" width="52">
                                                        <g fill="none" fill-rule="evenodd">
                                                            <path d="m53.7714844 19.3183594 2.3925781-2.3925782c.6425781-.6425781.6425781-1.6816406 0-2.3242187l-.7792969-.7792969c-.6425781-.6425781-1.6816406-.6425781-2.3242187 0l-2.3925781 2.3925782c-4.8945313-4.2382813-11.1425782-6.95898442-18.0058594-7.4101563v-4.4296875h3.4179687c.9023438 0 1.640625-.73828125 1.640625-1.640625v-1.09375c0-.90234375-.7382812-1.640625-1.640625-1.640625h-10.9375c-.9023437 0-1.640625.73828125-1.640625 1.640625v1.09375c0 .90234375.7382813 1.640625 1.640625 1.640625h3.1445313v4.45703125c-15.8183594 1.18945315-28.2871094 14.41015625-28.2871094 30.54296875 0 16.9121094 13.7128906 30.625 30.625 30.625s30.625-13.7128906 30.625-30.625c0-7.6699219-2.8164062-14.6835938-7.4785156-20.0566406zm-23.1464844 46.3066406c-14.5058594 0-26.25-11.7441406-26.25-26.25s11.7441406-26.25 26.25-26.25 26.25 11.7441406 26.25 26.25-11.7441406 26.25-26.25 26.25zm.546875-17.5h-1.09375c-.9023438 0-1.640625-.7382812-1.640625-1.640625v-22.96875c0-.9023438.7382812-1.640625 1.640625-1.640625h1.09375c.9023438 0 1.640625.7382812 1.640625 1.640625v22.96875c0 .9023438-.7382812 1.640625-1.640625 1.640625z" fill="#00a0dd" fill-rule="nonzero" transform="translate(30)">
                                                            </path>
                                                            <g stroke-linecap="round">
                                                                <g stroke="#fff" stroke-width="6.125">
                                                                    <path d="m9.4375 42.4375h32.375"></path>
                                                                    <path d="m13.8125 32.8125h32.375"></path>
                                                                    <path d="m13.8125 23.1875h32.375"></path>
                                                                </g>
                                                                <g stroke="#527d89" stroke-width="3.5">
                                                                    <path d="m9.472039 23.1875h34.930922"></path>
                                                                    <path d="m2.4375 42.4375h32.375"></path>
                                                                    <path d="m12.016447 32.8125h28.967106"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <p class="fs4 mb-sm-0 text-dark  px-1">
                                                        No impact on your credit score
                                                    </p>
                                                </div>
                                                <div class=" text-center w-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="52" viewBox="0 0 79 70" width="42">
                                                        <g fill="none">
                                                            <path d="m10.9375 48.125h-8.75c-1.20859375 0-2.1875.9789063-2.1875 2.1875v17.5c0 1.2085937.97890625 2.1875 2.1875 2.1875h8.75c1.2085938 0 2.1875-.9789063 2.1875-2.1875v-17.5c0-1.2085937-.9789062-2.1875-2.1875-2.1875zm-2.1875 17.5h-4.375v-13.125h4.375zm67.8125-39.375h-8.75c-1.2085937 0-2.1875.9789062-2.1875 2.1875v39.375c0 1.2085938.9789063 2.1875 2.1875 2.1875h8.75c1.2085938 0 2.1875-.9789062 2.1875-2.1875v-39.375c0-1.2085938-.9789062-2.1875-2.1875-2.1875zm-2.1875 39.375h-4.375v-35h4.375zm-5.6369141-53.5007812c1.0048829.6234374 2.1792969 1.0007812 3.4494141 1.0007812 3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 .75332031.153125 1.46425781.3869141 2.13828125l-12.25 9.79999995c-1.0048828-.6248046-2.1792969-1.0021484-3.4494141-1.0021484s-2.4445313.3773438-3.4494141 1.0021484l-12.25-9.79999995c.2337891-.67265625.3869141-1.38496094.3869141-2.13828125 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 1.01171875.2474609 1.9578125.65625 2.81367187l-13.15507812 13.15507813c-.85585938-.4087891-1.80195313-.65625-2.81367188-.65625-3.62441406 0-6.5625 2.9380859-6.5625 6.5625s2.93808594 6.5625 6.5625 6.5625c3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-1.0117188-.2474609-1.9578125-.65625-2.8136719l13.1550781-13.1550781c.8558594.4087891 1.8019531.65625 2.8136719.65625 1.2701172 0 2.4445313-.3773438 3.4494141-1.0021484l12.25 9.8c-.2337891.6740234-.3869141 1.3863281-.3869141 2.1396484 0 3.6244141 2.9380859 6.5625 6.5625 6.5625s6.5625-2.9380859 6.5625-6.5625c0-.7533203-.153125-1.465625-.3869141-2.1396484zm3.4494141-7.7492188c1.2058594 0 2.1875.98164062 2.1875 2.1875s-.9816406 2.1875-2.1875 2.1875-2.1875-.98164062-2.1875-2.1875.9816406-2.1875 2.1875-2.1875zm-65.625 26.25c-1.20585938 0-2.1875-.9816406-2.1875-2.1875s.98164062-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.98164062 2.1875-2.1875 2.1875zm21.875-21.875c-1.2058594 0-2.1875-.98164062-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.98164062 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875zm21.875 17.5c-1.2058594 0-2.1875-.9816406-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875zm-17.5 0h-8.75c-1.2085938 0-2.1875.9789062-2.1875 2.1875v39.375c0 1.2085938.9789062 2.1875 2.1875 2.1875h8.75c1.2085937 0 2.1875-.9789062 2.1875-2.1875v-39.375c0-1.2085938-.9789063-2.1875-2.1875-2.1875zm-2.1875 39.375h-4.375v-35h4.375zm24.0625-21.875h-8.75c-1.2085937 0-2.1875.9789063-2.1875 2.1875v21.875c0 1.2085937.9789063 2.1875 2.1875 2.1875h8.75c1.2085937 0 2.1875-.9789063 2.1875-2.1875v-21.875c0-1.2085937-.9789063-2.1875-2.1875-2.1875zm-2.1875 21.875h-4.375v-17.5h4.375z" fill="#00a0dd"></path>
                                                            <path d="m68.7380859 12.1242188c1.0048829.6234374 2.1792969 1.0007812 3.4494141 1.0007812 3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 .75332031.153125 1.46425781.3869141 2.13828125l-12.25 9.79999995c-1.0048828-.6248046-2.1792969-1.0021484-3.4494141-1.0021484s-2.4445313.3773438-3.4494141 1.0021484l-12.25-9.79999995c.2337891-.67265625.3869141-1.38496094.3869141-2.13828125 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 1.01171875.2474609 1.9578125.65625 2.81367187l-13.15507812 13.15507813c-.85585938-.4087891-1.80195313-.65625-2.81367188-.65625-3.62441406 0-6.5625 2.9380859-6.5625 6.5625s2.93808594 6.5625 6.5625 6.5625c3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-1.0117188-.2474609-1.9578125-.65625-2.8136719l13.1550781-13.1550781c.8558594.4087891 1.8019531.65625 2.8136719.65625 1.2701172 0 2.4445313-.3773438 3.4494141-1.0021484l12.25 9.8c-.2337891.6740234-.3869141 1.3863281-.3869141 2.1396484 0 3.6244141 2.9380859 6.5625 6.5625 6.5625s6.5625-2.9380859 6.5625-6.5625c0-.7533203-.153125-1.465625-.3869141-2.1396484zm3.4494141-7.7492188c1.2058594 0 2.1875.98164062 2.1875 2.1875s-.9816406 2.1875-2.1875 2.1875-2.1875-.98164062-2.1875-2.1875.9816406-2.1875 2.1875-2.1875zm-65.625 26.25c-1.20585938 0-2.1875-.9816406-2.1875-2.1875s.98164062-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.98164062 2.1875-2.1875 2.1875zm21.875-21.875c-1.2058594 0-2.1875-.98164062-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.98164062 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875zm21.875 17.5c-1.2058594 0-2.1875-.9816406-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875z" fill="#527d89"></path>
                                                        </g>
                                                    </svg>
                                                    <p class="fs4 mb-sm-0 text-dark  px-1">
                                                        Personalized Real Rates
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-12 my-3">
                                                <button class="py-3 btn btn-primary back-primary w-100 border-0 rounded-1" type="button" onclick="nextPrev(1)">Get
                                                    Started</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab ">
                                        <h2 class="text-center">We'd like to get to know you better</h2>
                                        <h6 class="text-center clr-dark">We need some basic information to confirm
                                            your identity.
                                        </h6>
                                        <div class="row mx-2">
                                            <div class="mt-3 form__field applicant col-md-6">
                                                <label for="FirstName" class="form-label ">First Name
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="text" id="firstnameid" class="form-control" name="first_name" required>
                                                <div class="field-required">
                                                    hello
                                                </div>

                                            </div>
                                            <div class="mt-3 form__field applicant col-md-6">
                                                <label for="LastName" class="form-label">Last Name
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="text" class="form-control" id="lastnameid" name="last_name" required>
                                                <div class="field-required"></div>

                                            </div>
                                        </div>
                                        <div class="row mx-2">
                                            <div class="mt-3 form__field applicant col-md-6">
                                                <label for="email" class="form-label  ">Email
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="email" id="emailid" class="form-control" name="email" required>
                                                <div class="field-required"></div>

                                            </div>
                                            <div class="mt-3 form__field applicant col-md-6">
                                                <label for="confirmemail" class="form-label">Confirm Email
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="email" class="form-control " id="confirmemailid" name="confirm_email" required>
                                                <div class="field-required"></div>

                                            </div>
                                        </div>
                                        <div class="row mx-2">
                                            <p class="small mt-3">
                                                When you provide your email address, our
                                                participating lenders may use it to send important information about
                                                this
                                                application.
                                            </p>
                                        </div>
                                        <div class="row mx-2">
                                            <div class="mt-3 form__field applicant col-md-6">
                                                <label for="phonenumber" class="form-label">Phone Number
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="number" class="form-control " id="phonenumberid" name="phone_number" required>
                                                <div class="field-required"></div>
                                                <p class="small">Example: (555) 555-1234</p>

                                            </div>
                                        </div>
                                        <!-- <div class="back-light">
                                            <div class="py-4">
                                                <div class="d-flex ">
                                                    <div class="lock mx-2">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="lock" class="svg-inline--fa fa-lock fa-w-14 "
                                                            width="15px" height="15px" role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 448 512">
                                                            <path fill="red"
                                                                d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="ps-1">
                                                        <p class="small mb-0">
                                                            In order to see if you pre-qualify, our
                                                            participating leaders needs the
                                                            following information. <span class="text-red fw-bold">
                                                                This will not
                                                                impact
                                                                your credit score. </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mx-2">
                                                    <div class="mt-3 form__field applicant col-md-6">
                                                        <label for="scn" class="form-label  ">Social Security Number
                                                            <span data-required="true" aria-hidden="true"></span>
                                                        </label>
                                                        <input type="number" help="Example: 123-45-6789"
                                                            maxlength="11" id="scnid" class="form-control"
                                                            name="scn" required >
                                                        <div class="field-required"></div>
                                                    </div>
                                                    <div class="mt-3 form__field applicant col-md-6">
                                                        <label for="dob" class="form-label">Date of birth
                                                            <span data-required="true" aria-hidden="true"></span>
                                                        </label>
                                                        <input type="date" class="form-control " id="dobid"
                                                            name="dob" required>
                                                        <div class="field-required"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="tab">
                                        <h3 class="text-center ">Hi <span class="firstnameidtab-2"></span>! Where do
                                            you live?</h3>
                                        <div class="row mx-2">
                                            <div class="mt-3 form__field applicant col-md-8">
                                                <label for="homeadd" class="form-label  ">Home address
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="text" id="homeaddid" class="form-control" name="home_address" required>
                                                <div class="field-required">
                                                    hi
                                                </div>

                                            </div>
                                            <div class="mt-3 form__field applicant col-md-4">
                                                <label for="appunit" class="form-label">Apt/Unit
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="text" class="form-control" id="appunitid" name="app_unit" required>
                                                <div class="field-required"></div>

                                            </div>
                                        </div>
                                        <div class="row mx-2">
                                            <div class="mt-3 form__field applicant col-12">
                                                <label for="city" class="form-label">City
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="text" id="cityid" class="form-control" name="city" required>
                                                <div class="field-required"></div>

                                            </div>
                                        </div>
                                        <div class="row mx-2">
                                            <div class="mt-3 form__field applicant col-md-8">
                                                <label for="state" class="form-label  ">State
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>

                                                <select type="text" id="stateid" class="form-control" name="state" required>

                                                    <option value="" disabled selected>Select a state</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="CA">California</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="DC">District Of Columbia</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WA">Washington</option>
                                                    <option value="WV">West Virginia</option>
                                                    <option value="WI">Wisconsin</option>
                                                    <option value="WY">Wyoming</option>

                                                </select>
                                                <div class="field-required"></div>

                                            </div>
                                            <div class="mt-3 form__field applicant col-md-4">
                                                <label for="zipcode" class="form-label">Zip code
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="text" class="form-control" id="zipcodeid" name="zip_code" required>
                                                <div class="field-required"></div>

                                            </div>
                                        </div>
                                        <div class="row mx-2">
                                            <div class="mt-3 form__field applicant col-md-12">
                                                <label for="durationofempe" class="form-label">Duration of
                                                    employment
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <div class="row col">
                                                    <div class="col">
                                                        <select type="text" id="durationofempeid" class="form-control col" name="duration" required>
                                                            <option value="" disabled selected>Select Years</option>
                                                            <option value="0">0 years</option>
                                                            <option value="1">1 years</option>
                                                            <option value="2">2 years</option>
                                                            <option value="3">3 years</option>
                                                            <option value="4">4 years</option>
                                                            <option value="5">5 years</option>
                                                            <option value="6">6 years</option>
                                                            <option value="7">7 years</option>
                                                            <option value="8">8 years</option>
                                                            <option value="9">9 years</option>
                                                            <option value="10">10 years</option>
                                                            <option value="11">11 years</option>
                                                            <option value="12">12 years</option>
                                                            <option value="13">13 years</option>
                                                            <option value="14">14 years</option>
                                                            <option value="15">15 years</option>
                                                            <option value="16">16 years</option>
                                                            <option value="17">17 years</option>
                                                            <option value="18">18 years</option>
                                                            <option value="19">19 years</option>
                                                            <option value="20">20 years</option>
                                                            <option value="21">21 years</option>
                                                            <option value="22">22 years</option>
                                                            <option value="23">23 years</option>
                                                            <option value="24">24 years</option>
                                                            <option value="25">25 years</option>
                                                            <option value="26">26 years</option>
                                                            <option value="27">27 years</option>
                                                            <option value="28">28 years</option>
                                                            <option value="29">29 years</option>
                                                            <option value="30">30 years</option>
                                                            <option value="31">31 years</option>
                                                            <option value="32">32 years</option>
                                                            <option value="33">33 years</option>
                                                            <option value="34">34 years</option>
                                                            <option value="35">35 years</option>
                                                            <option value="36">36 years</option>
                                                            <option value="37">37 years</option>
                                                            <option value="38">38 years</option>
                                                            <option value="39">39 years</option>
                                                            <option value="40">40 years</option>
                                                            <option value="41">41 years</option>
                                                            <option value="42">42 years</option>
                                                            <option value="43">43 years</option>
                                                            <option value="44">44 years</option>
                                                            <option value="45">45 years</option>
                                                            <option value="46">46 years</option>
                                                            <option value="47">47 years</option>
                                                            <option value="48">48 years</option>
                                                            <option value="49">49 years</option>
                                                            <option value="50">50 years</option>
                                                            <option value="51">51 years</option>
                                                            <option value="52">52 years</option>
                                                            <option value="53">53 years</option>
                                                            <option value="54">54 years</option>
                                                            <option value="55">55 years</option>
                                                            <option value="56">56 years</option>
                                                            <option value="57">57 years</option>
                                                            <option value="58">58 years</option>
                                                            <option value="59">59 years</option>
                                                            <option value="60">60 years</option>
                                                            <option value="61">61 years</option>
                                                            <option value="62">62 years</option>
                                                            <option value="63">63 years</option>
                                                            <option value="64">64 years</option>
                                                            <option value="65">65 years</option>
                                                            <option value="66">66 years</option>
                                                            <option value="67">67 years</option>
                                                            <option value="68">68 years</option>
                                                            <option value="69">69 years</option>
                                                            <option value="70">70 years</option>
                                                            <option value="71">71 years</option>
                                                            <option value="72">72 years</option>
                                                            <option value="73">73 years</option>
                                                            <option value="74">74 years</option>
                                                            <option value="75">75 years</option>
                                                            <option value="76">76 years</option>
                                                            <option value="77">77 years</option>
                                                            <option value="78">78 years</option>
                                                            <option value="79">79 years</option>
                                                            <option value="80">80 years</option>
                                                            <option value="81">81 years</option>
                                                            <option value="82">82 years</option>
                                                            <option value="83">83 years</option>
                                                            <option value="84">84 years</option>
                                                            <option value="85">85 years</option>
                                                            <option value="86">86 years</option>
                                                            <option value="87">87 years</option>
                                                            <option value="88">88 years</option>
                                                            <option value="89">89 years</option>
                                                            <option value="90">90 years</option>
                                                            <option value="91">91 years</option>
                                                            <option value="92">92 years</option>
                                                            <option value="93">93 years</option>
                                                            <option value="94">94 years</option>
                                                            <option value="95">95 years</option>
                                                            <option value="96">96 years</option>
                                                            <option value="97">97 years</option>
                                                            <option value="98">98 years</option>
                                                            <option value="99">99 years</option>
                                                        </select>

                                                    </div>
                                                    <div class="col">
                                                        <select type="text" id="durationofempemonthid" class="form-control col" name="month" required>
                                                            <option selected value="" disabled>Select Months
                                                            </option>
                                                            <option value="0">0 months</option>
                                                            <option value="1">1 months</option>
                                                            <option value="2">2 months</option>
                                                            <option value="3">3 months</option>
                                                            <option value="4">4 months</option>
                                                            <option value="5">5 months</option>
                                                            <option value="6">6 months</option>
                                                            <option value="7">7 months</option>
                                                            <option value="8">8 months</option>
                                                            <option value="9">9 months</option>
                                                            <option value="10">10 months</option>
                                                            <option value="11">11 months</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="field-required"></div>

                                            </div>

                                        </div>
                                        <div class="row mx-2" id="propertytypeid">
                                            <p class="mb-0 mt-3">Property type</p>
                                            <div class="p-0 mt-3 form__field applicant col">
                                                <input type="radio" id="ownid" class="opacity-0 " name="property_type" value="own" required>
                                                <label for="ownid" class="rounded-0 border bg-transparent w-100 form-label btn ">Own
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <div class="field-required"></div>

                                            </div>
                                            <div class="p-0 mt-3 form__field applicant col">
                                                <input type="radio" class=" opacity-0" id="rentid" name="property_type" value="Rent">
                                                <label for="rentid" class="rounded-0 border bg-transparent w-100 form-label btn ">Rent
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <div class="field-required"></div>

                                            </div>
                                            <div class="p-0 mt-3 form__field applicant col">
                                                <input type="radio" class="opacity-0 " id="otherid" name="property_type" value="Other">
                                                <label for="otherid" class="rounded-0 border bg-transparent w-100 form-label btn ">Other
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <div class="field-required"></div>
                                            </div>
                                        </div>

                                        <div class="row mx-2">
                                            <div class="mt-3 form__field applicant col-12">
                                                <label for="monthlypayid" class="form-label  ">Monthly Pay
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="number" id="monthlypayid" class="form-control" name="monthly_pay" required>
                                                <div class="field-required"></div>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="tab">
                                        <h3 class="text-center">You're almost done.</h3>
                                        <h6 class="text-center">Just a few questions about your
                                            employment.</h6>
                                        <div class="row mx-2">
                                            <div class="mt-3 form__field applicant col-md-12">
                                                <!-- <label for="state" class="form-label  ">State
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label> -->
                                                <select id="empstatusid" class="form-control" name="employment_status" required>
                                                    <option name="empstatusopt" value="">Select employment status
                                                    </option>
                                                    <option name="empstatusopt" value="Full-time">Full-time</option>
                                                    <option name="empstatusopt" value="Part-time">Part-time</option>
                                                    <option name="empstatusopt" value="Self-employed">Self-employed
                                                    </option>
                                                    <option name="empstatusopt" value="Unemployed">Unemployed
                                                    </option>
                                                    <option name="empstatusopt" value="Retired">Retired</option>
                                                    <option name="empstatusopt" value="Military">Military</option>
                                                    <option name="empstatusopt" value="Other">Other</option>
                                                </select>
                                                <div class="field-required"></div>

                                            </div>
                                        </div>
                                        <div class="row mx-2">
                                            <div class="mt-3 form__field applicant col-md-12">
                                                <label for="employer" class="form-label">Employer
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="text" id="employerid" class="form-control" name="employer" required>
                                                <div class="field-required"></div>

                                            </div>
                                        </div>

                                        <div class="row mx-2">
                                            <div class="mt-3 form__field applicant col-md-12">
                                                <label for="jobtitle" class="form-label  ">Job Title
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="text" id="jobtitleid" class="form-control" name="job_title" required>
                                                <div class="field-required"></div>

                                            </div>
                                        </div>


                                        <div class="row mx-2">
                                            <div class="mt-3 form__field applicant col-md-12">
                                                <label for="durationofresidence" class="form-label">Duration of
                                                    residence
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <div class="row col">
                                                    <div class="col">
                                                        <select type="text" id="durationofresidenceid" class="form-control col" name="duration_of_residence" required>
                                                            <option value="" disabled selected>Select Years</option>
                                                            <option value="0">0 years</option>
                                                            <option value="1">1 years</option>
                                                            <option value="2">2 years</option>
                                                            <option value="3">3 years</option>
                                                            <option value="4">4 years</option>
                                                            <option value="5">5 years</option>
                                                            <option value="6">6 years</option>
                                                            <option value="7">7 years</option>
                                                            <option value="8">8 years</option>
                                                            <option value="9">9 years</option>
                                                            <option value="10">10 years</option>
                                                            <option value="11">11 years</option>
                                                            <option value="12">12 years</option>
                                                            <option value="13">13 years</option>
                                                            <option value="14">14 years</option>
                                                            <option value="15">15 years</option>
                                                            <option value="16">16 years</option>
                                                            <option value="17">17 years</option>
                                                            <option value="18">18 years</option>
                                                            <option value="19">19 years</option>
                                                            <option value="20">20 years</option>
                                                            <option value="21">21 years</option>
                                                            <option value="22">22 years</option>
                                                            <option value="23">23 years</option>
                                                            <option value="24">24 years</option>
                                                            <option value="25">25 years</option>
                                                            <option value="26">26 years</option>
                                                            <option value="27">27 years</option>
                                                            <option value="28">28 years</option>
                                                            <option value="29">29 years</option>
                                                            <option value="30">30 years</option>
                                                            <option value="31">31 years</option>
                                                            <option value="32">32 years</option>
                                                            <option value="33">33 years</option>
                                                            <option value="34">34 years</option>
                                                            <option value="35">35 years</option>
                                                            <option value="36">36 years</option>
                                                            <option value="37">37 years</option>
                                                            <option value="38">38 years</option>
                                                            <option value="39">39 years</option>
                                                            <option value="40">40 years</option>
                                                            <option value="41">41 years</option>
                                                            <option value="42">42 years</option>
                                                            <option value="43">43 years</option>
                                                            <option value="44">44 years</option>
                                                            <option value="45">45 years</option>
                                                            <option value="46">46 years</option>
                                                            <option value="47">47 years</option>
                                                            <option value="48">48 years</option>
                                                            <option value="49">49 years</option>
                                                            <option value="50">50 years</option>
                                                            <option value="51">51 years</option>
                                                            <option value="52">52 years</option>
                                                            <option value="53">53 years</option>
                                                            <option value="54">54 years</option>
                                                            <option value="55">55 years</option>
                                                            <option value="56">56 years</option>
                                                            <option value="57">57 years</option>
                                                            <option value="58">58 years</option>
                                                            <option value="59">59 years</option>
                                                            <option value="60">60 years</option>
                                                            <option value="61">61 years</option>
                                                            <option value="62">62 years</option>
                                                            <option value="63">63 years</option>
                                                            <option value="64">64 years</option>
                                                            <option value="65">65 years</option>
                                                            <option value="66">66 years</option>
                                                            <option value="67">67 years</option>
                                                            <option value="68">68 years</option>
                                                            <option value="69">69 years</option>
                                                            <option value="70">70 years</option>
                                                            <option value="71">71 years</option>
                                                            <option value="72">72 years</option>
                                                            <option value="73">73 years</option>
                                                            <option value="74">74 years</option>
                                                            <option value="75">75 years</option>
                                                            <option value="76">76 years</option>
                                                            <option value="77">77 years</option>
                                                            <option value="78">78 years</option>
                                                            <option value="79">79 years</option>
                                                            <option value="80">80 years</option>
                                                            <option value="81">81 years</option>
                                                            <option value="82">82 years</option>
                                                            <option value="83">83 years</option>
                                                            <option value="84">84 years</option>
                                                            <option value="85">85 years</option>
                                                            <option value="86">86 years</option>
                                                            <option value="87">87 years</option>
                                                            <option value="88">88 years</option>
                                                            <option value="89">89 years</option>
                                                            <option value="90">90 years</option>
                                                            <option value="91">91 years</option>
                                                            <option value="92">92 years</option>
                                                            <option value="93">93 years</option>
                                                            <option value="94">94 years</option>
                                                            <option value="95">95 years</option>
                                                            <option value="96">96 years</option>
                                                            <option value="97">97 years</option>
                                                            <option value="98">98 years</option>
                                                            <option value="99">99 years</option>
                                                        </select>

                                                    </div>
                                                    <div class="col">
                                                        <select type="text" id="durationofresidenceidmonthid" class="form-control col" name="month_of_residence" required>
                                                            <option selected value="" disabled>Select Months
                                                            </option>
                                                            <option value="0">0 months</option>
                                                            <option value="1">1 months</option>
                                                            <option value="2">2 months</option>
                                                            <option value="3">3 months</option>
                                                            <option value="4">4 months</option>
                                                            <option value="5">5 months</option>
                                                            <option value="6">6 months</option>
                                                            <option value="7">7 months</option>
                                                            <option value="8">8 months</option>
                                                            <option value="9">9 months</option>
                                                            <option value="10">10 months</option>
                                                            <option value="11">11 months</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="field-required"></div>

                                            </div>

                                        </div>

                                        <div class="row mx-2">
                                            <div class="mt-3 form__field applicant col-12">
                                                <label for="primaryanum" class="form-label  ">Primary Annual Income
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="number" id="primaryanumid" class="form-control" name="primary_income" required>
                                                <div class="field-required"></div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab">
                                        <h3 class="text-center ">Last two questions!</h3>
                                        <h6 class="text-center ">In order to see if you pre-qualify, our
                                            participating lenders
                                            need the following information.This will not impact your credit score.
                                        </h6>
                                        <div class="row mx-2">
                                            <div class="mt-3 form__field applicant col-md-12">
                                                <div class="py-4">
                                                    <div class="d-flex ">
                                                        <div class="lock">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="lock" class="svg-inline--fa fa-lock fa-w-14 " width="15px" height="15px" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                <path fill="red" d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="ps-1">
                                                            <p class="small mb-0">
                                                                We take your privacy very seriously. Your data is
                                                                safe, secure, and we will never share it without
                                                                your permission.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mt-3 form__field applicant col-md-6">
                                                            <label for="scn" class="form-label">Social Security
                                                                Number
                                                                <span data-required="true" aria-hidden="true"></span>
                                                            </label>
                                                            <input type="password" help="Example: 123-45-6789" maxlength="11" id="scnid" class="form-control" name="social_security" required="" oninput="myFunction()">
                                                            <div class="field-required"></div>

                                                        </div>
                                                        <div class="mt-3 form__field applicant col-md-6">
                                                            <label for="dob" class="form-label">Date of birth
                                                                <span data-required="true" aria-hidden="true"></span>
                                                            </label>
                                                            <input type="date" class="form-control " id="dobid" name="date_of_birth" required="">
                                                            <div class="field-required"></div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="tab">
                                        <h3 class="text-center">Double check everything before you submit your
                                            application</h3>

                                        <div>
                                            <div class="row mx-2">
                                                <div class="mt-3 form__field applicant col-md-12">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="text-black">Personal</h5>
                                                        <p onclick="nextPrev(-4)">Edit</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mx-2">
                                                <div class="row form__field applicant ">
                                                    <div class="col-6">
                                                        <h6 class="fw-bold">Name</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-black firstnameid"></h6>
                                                    </div>
                                                </div>
                                                <div class="row form__field applicant ">
                                                    <div class="col-6">
                                                        <h6 class="fw-bold">Email address</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-black emailid"></h6>
                                                    </div>
                                                </div>
                                                <div class="row form__field applicant ">
                                                    <div class="col-6">
                                                        <h6 class="fw-bold">Phone</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-black phonenumberid"></h6>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row mx-2">
                                                <div class="mt-3 form__field applicant col-md-12">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="text-black">Residence</h5>
                                                        <p onclick="nextPrev(-3)">Edit</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mx-2">
                                                <div class="row form__field applicant ">
                                                    <div class="col-6">
                                                        <h6 class="fw-bold">Address</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-black homeaddid"></h6>
                                                    </div>
                                                </div>
                                                <div class="row form__field applicant ">
                                                    <div class="col-6">
                                                        <h6 class="fw-bold ">Property type</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-black propertytypeid"></h6>
                                                    </div>
                                                </div>
                                                <div class="row form__field applicant ">
                                                    <div class="col-6">
                                                        <h6 class="fw-bold">Months in residence</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-black durationofresidenceid"></h6>
                                                    </div>
                                                </div>
                                                <div class="row form__field applicant ">
                                                    <div class="col-6">
                                                        <h6 class="fw-bold ">Monthly payment</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-black monthlypayid"></h6>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row mx-2">
                                                <div class="mt-3 form__field applicant col-md-12">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="text-black">Employment</h5>
                                                        <p onclick="nextPrev(-2)">Edit</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mx-2">
                                                <div class="row form__field applicant ">
                                                    <div class="col-6">
                                                        <h6 class="fw-bold">Status</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-black empstatusopt"></h6>
                                                    </div>
                                                </div>
                                                <div class="row form__field applicant ">
                                                    <div class="col-6">
                                                        <h6 class="fw-bold ">Employer</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-black employerid"></h6>
                                                    </div>
                                                </div>
                                                <div class="row form__field applicant ">
                                                    <div class="col-6">
                                                        <h6 class="fw-bold">Job Title</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-black jobtitleid"></h6>
                                                    </div>
                                                </div>
                                                <div class="row form__field applicant ">
                                                    <div class="col-6">
                                                        <h6 class="fw-bold ">Months employed</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-black "></h6>
                                                    </div>
                                                </div>
                                                <div class="row form__field applicant ">
                                                    <div class="col-6">
                                                        <h6 class="fw-bold ">Primary annual income</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-black primaryanumid"></h6>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row mx-2">
                                                <div class="mt-3 form__field applicant col-md-12">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="text-black">Identity information</h5>
                                                        <p onclick="nextPrev(-1)">Edit</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mx-2">
                                                <div class="row form__field applicant ">
                                                    <div class="col-6">
                                                        <h6 class="fw-bold">Social Security Number</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-black scnid"></h6>
                                                    </div>
                                                </div>
                                                <div class="row form__field applicant ">
                                                    <div class="col-6">
                                                        <h6 class="fw-bold ">Date of birth</h6>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-black dobid"></h6>
                                                    </div>
                                                </div>

                                                <hr>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="back-light">
                                                <div class="py-4">
                                                    <div>
                                                        <h6 class="mx-3 ">Borrower agreement</h6>
                                                        <div class="modal-detail-overview mx-3">
                                                            <span>By clicking “I agree”, you: <br> <br> 1. Authorize
                                                                Motorvero to share with Motorvero Participating Lenders
                                                                the information you have provided, so that they may
                                                                evaluate your eligibility for auto financing
                                                                pre-qualification;<br> <br> 2. Are providing written
                                                                instructions to each Motorvero Participating Lender under
                                                                the Fair Credit Reporting Act and are authorizing each
                                                                Motorvero Participating Lender to obtain information from
                                                                your personal credit profile from credit reporting
                                                                agencies, so that any Motorvero Participating Lender may
                                                                evaluate your eligibility for auto financing
                                                                pre-qualification;<br> <br> 3. Authorize each Motorvero
                                                                Participating Lender to share with Motorvero your credit
                                                                tier, range or band, so that Motorvero can show you
                                                                estimated finance offers for select vehicles displayed
                                                                on Motorvero’ website, for which you are pre-qualified,
                                                                pending confirmation of information to be provided later
                                                                in your complete credit application;<br> <br> 4.
                                                                Authorize Motorvero to share a Motorvero Participating
                                                                Lender’s response to your pre-qualification request
                                                                along with your pre-qualified terms and preferences,
                                                                including vehicle information, with participating
                                                                dealers; <br> <br>5. Authorize Motorvero to share with
                                                                its service providers the information you have provided
                                                                to Motorvero, to facilitate your financing experience at
                                                                the dealership; and <br> <br> 6. Authorize each Motorvero
                                                                Participating Lender to (1) share the information
                                                                provided by Motorvero from your pre-qualification request
                                                                with other Motorvero Participating Lenders, (2) share its
                                                                response to your pre-qualification request along with
                                                                your pre-qualified terms with Motorvero, and (3) share
                                                                its response to your pre-qualification request along
                                                                with your pre-qualified terms and preferences, including
                                                                vehicle information, with participating dealers. The
                                                                option to share with the dealer is not available at all
                                                                participating dealerships.</span>
                                                        </div>
                                                        <div class="px-1 mt-3 form__field applicant row">
                                                            <div class="form-check d-flex">
                                                                <input class="" type="checkbox" name="agreed" value="1" id="Borroweragreementid">
                                                                <label class="form-check-label ps-2 mb-0 form-label text-black" for="Borroweragreementid">
                                                                    I have read and agree to the borrower agreement
                                                                    above.
                                                                    <span data-required="true" aria-hidden="true"></span>
                                                                </label>
                                                            </div>

                                                            <div class="field-required"></div>

                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="mx-3 ">Terms & Conditions</h6>
                                                        <div class="modal-detail-overview mx-3">
                                                            <div class="UJ_0c"><span>By submitting my information, I certify that all of the information and statements in this form are true and complete and are made for the purpose of evaluating if I pre qualify for auto financing and facilitating my loan experience at the dealer. I authorize each Motorvero Participating Lender to obtain information from my personal credit profile from credit reporting agencies to check my credit and employment history. I authorize each Motorvero Participating Lender to obtain such information solely to evaluate if I pre qualify for auto financing and acknowledge that this is not an application for credit. By providing my email address and/or cell phone number, I am giving my prior express consent to receive email messages, calls and text messages regarding my request for pre qualification from each Motorvero Participating Lender or its authorized agents at that number, including calls and messages made by using an auto-dialer or prerecorded message. <br> <br> By submitting this form, I consent to receive by electronic means only, including through the email address I provided above, all required disclosures and related documents, and I understand that these electronic disclosures may not be available in any paper or non electronic form, so if I would like to retain a copy for my records, I may print or download these disclosures. I understand that consent to electronic delivery is a requirement for submitting this form online, and that my consent cannot be withdrawn once my form is submitted.<br> <br> I understand that to access, view, and retain disclosures electronically, I will need a valid e-mail address and the ability to receive and read e-mails. If my e-mail address changes, I agree to notify each Motorvero Participating Lender at the following phone numbers: <br> Capital One, by contacting customer service at +1 (888) 571-1528 <br> Westlake Financial, by contacting customer service at +1 (866) 669-0679 <br> Global Lending Services (GLS), by contacting customer service at +1 (877) 856-5029 <br> I will also need the most recent version of Adobe Reader which can be downloaded for free at get.adobe.com/reader/. Additionally, my computer must meet certain hardware and software requirements of each Motorvero Participating Lender’s website. To access and retain the information subject to this consent and to receive disclosures electronically, my personal computer will need a supported Internet web browser which supports the latest W3C HTML / DOM recommendations and 128 bit SSL encryption. I will also need access to a printer or the ability to download information to keep copies for my records. By submitting this form, I acknowledge that I have or have access to equipment that allows me to access, view and retain disclosures electronically in accordance with these standards. <br> <br> If jointly checking for pre qualification online through this website, both persons jointly and individually consent to receive by electronic means only, including through the email address provided above, all required disclosures and related documents, including, but not limited to, eligibility decision notices required by the Equal Credit Opportunity Act. All individuals attest that they are authorized to receive the required disclosures and to contract on behalf of all individuals. <br> <br> I acknowledge that I have reviewed each Motorvero Participating Lender’s Privacy Statements.</span></div>
                                                        </div>
                                                        <div class="px-1 mt-3 form__field applicant row">
                                                            <div class="form-check d-flex">
                                                                <input class="" type="checkbox" name="term_condition" value="1" id="termsandconditions">
                                                                <label class="form-check-label ps-2 mb-0 form-label text-black" for="termsandconditions">
                                                                    I have read and agree to the terms and conditions above.
                                                                    <span data-required="true" aria-hidden="true"></span>
                                                                </label>
                                                            </div>

                                                            <div class="field-required"></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                    </div>
                                    <div class="col-12 my-3 px-3">
                                        <button class="py-3 btn back-primary text-white w-100 border-0 rounded-1 " onclick="nextPrev(1)" id="nextBtn" type="button"></button>
                                    </div>
                                    <!-- <div style="overflow:auto;" class="modal-next-btn">


                                            <button class="btn btn-primary" type="button" >Next</button>

                                    </div> -->
                                    <div class="col-12 px-3">
                                        <div class="modal-detail">
                                            <span><b>How Pre-Qualification Works with Motorvero Participating
                                                    Lenders</b>
                                                <br> Obtain conditional pre-qualification for auto financing with a
                                                Motorvero
                                                Participating Lender (listed below) prior to visiting a
                                                participating
                                                dealer. Participating Lenders may review the information you provide
                                                to
                                                determine whether you pre-qualify with no impact to your credit
                                                score. If
                                                you pre-qualify with one or more of our Participating Lenders, you
                                                will be
                                                able to see your monthly payments, APRs and offer summaries for
                                                vehicles you
                                                may be considering. Your request for pre-qualification may not be
                                                submitted
                                                to all Participating Lenders. <br><br> Remember, your
                                                pre-qualification can
                                                only be used for the purchase of one, personal use vehicle. The
                                                offer
                                                summary will include an estimate of the financing terms (including
                                                down
                                                payment) you could qualify for when you apply for financing at the
                                                dealer.
                                                When you are ready to finance a vehicle, you can send your offer
                                                summary to
                                                a participating dealer to let them know you are conditionally
                                                pre-qualified
                                                for auto financing with a Motorvero Participating Lender. If you have
                                                recently applied and funded another loan with a Motorvero
                                                Participating
                                                Lender, this might impact your eligibility for a new loan with this
                                                pre-qualification. <br><br> <b>Motorvero Participating Lenders</b>
                                                <br> •
                                                Capital One, <a href="https://www.capitalone.com/cars" target="_blank">www.capitalone.com/cars</a> <br> • Westlake
                                                Financial,
                                                <a href="https://www.westlakefinancial.com" target="_blank">www.westlakefinancial.com</a> <br> • Global
                                                Lending
                                                Services, <a href="https://www.glsllc.com" target="_blank">www.glsllc.com</a> <br><br>
                                                <b><em>General Disclosures
                                                        Regarding Motorvero Financing pre-qualification</em></b>
                                                <br><br>
                                                <b>Monthly Payment, APR, and Product Terms</b> <br> Monthly payment
                                                and
                                                Annual Percentage Rate (APR) terms are not final until your
                                                financing is
                                                completed at a participating dealer. These terms are based on
                                                information
                                                you provide and might change if you update any information in the
                                                Motorvero
                                                financing experience or at the dealer. <br><br> Pre-qualification
                                                does not
                                                guarantee that you will receive financing or any particular
                                                financing terms,
                                                which are subject to change based on each Motorvero Participating
                                                Lender’s
                                                evaluation of your credit application submitted at the dealer and
                                                any
                                                required documents. <br><br> To pre-qualify, you must be at least 18
                                                years
                                                old, have a valid street address within the contiguous United States
                                                or an
                                                APO/FPO address. <br><br> <b>Using Your Motorvero Financing
                                                    Pre-Qualification
                                                    at a Dealer</b> <br> When you visit a participating dealer, show
                                                them
                                                your offer summary for the vehicle you would like to finance.
                                                Sharing with
                                                the dealer will allow that dealer to access your pre-qualified terms
                                                and
                                                preferences, including vehicle information. (Sharing is not a
                                                mandatory
                                                step.) Then you will fill out a credit application and provide any
                                                information needed for review to complete your financing. A credit
                                                application at the dealer will result in one or more inquiries
                                                posted to
                                                your credit file. After negotiating purchase terms and receiving
                                                dealer
                                                credit approval, you will sign a contract with the dealer reflecting
                                                both
                                                your purchase and financing terms. Your purchase will result in a
                                                retail
                                                installment contract with the dealer as the original creditor.
                                                <br><br>
                                                <b>Amount Financed Restrictions</b> <br> Your maximum Amount
                                                Financed may be
                                                based on income, key credit characteristics, the vehicle you are
                                                purchasing,
                                                the details of the financing deal, and/or the specific dealership
                                                from which
                                                you purchase the vehicle. The Amount Financed may include the
                                                vehicle sales
                                                price, tax, title, licensing fees, dealer fees, and any optional
                                                products,
                                                like service contracts and/or extended warranties, that you choose
                                                to
                                                purchase from the dealer. See “Additional Disclosures for
                                                Participating
                                                Lenders” section below for additional restrictions. <br><br>
                                                <b>APR</b> <br>
                                                APR is the Annual Percentage Rate. Advertised rates depend on the
                                                individual's credit and key financing characteristics, including but
                                                not
                                                limited to the Amount Financed, term, loan-to-value (LTV) ratio,
                                                down
                                                payment amount, and vehicle characteristics. A representative
                                                example of
                                                payment terms is as follows: a $1000 down payment, an amount
                                                financed of
                                                $22,000 with an APR of 10.00%, and a term of 72 months would have a
                                                monthly
                                                payment of $407.57. Cash down may be required in order to complete
                                                your
                                                purchase; down payments vary depending on your credit approval.
                                                Estimated
                                                rates are subject to change without notice. <br><br> Representative
                                                APR is
                                                based on the individual's credit and key financing characteristics,
                                                including but not limited to the amount financed, term, the
                                                loan-to-value
                                                (LTV) ratio, and vehicle mileage. Your actual APR will be based on
                                                your
                                                specific situation. <br><br> <b>Dealer Participation
                                                    Requirements</b> <br>
                                                Motorvero Participating Lenders provide financing for new and used
                                                vehicles
                                                purchased from participating dealers and offer pre-qualification at
                                                participating dealers through dealer websites. The list of
                                                Participating
                                                dealers is subject to change. Motorvero Participating Lenders may not
                                                offer
                                                financing for certain dealers, auto brokers, or private party
                                                sellers.
                                                Motorvero Financing pre-qualification program does not offer
                                                financing for
                                                lease buyouts. <br><br> <b>Vehicle Type Restrictions</b> <br>
                                                Pre-qualification terms with Motorvero Participating Lenders can only
                                                be used
                                                at participating dealer locations in connection with the purchase of
                                                a new
                                                or used car, light truck, minivan, or SUV intended for personal use.
                                                Certain
                                                Motorvero Participating Lenders do not offer financing for commercial
                                                vehicles, motorcycles, recreational vehicles (RVs), ATVs, boats,
                                                camper
                                                vans, motor homes, vehicles with a history of chronic malfunctions
                                                and/or
                                                manufacturer or dealer buy back (alternatively referred to as a
                                                lemon)
                                                branded title vehicles, lease buyouts, or vehicles without a Vehicle
                                                Identification Number (VIN) or title issued. Motorvero Participating
                                                Lenders
                                                may determine a vehicle to be commercial or otherwise ineligible
                                                based on
                                                the model and/or information provided to such Lenders. See
                                                “Additional
                                                Disclosures for Participating Lenders” section below for additional
                                                restrictions. <br><br> <b>Third Party Information and Additional
                                                    Products</b> <br> Motorvero Participating Lenders use third party
                                                information, otherwise available, to enhance your auto financing
                                                experience.
                                                Third party information includes, but is not limited to, trade-in
                                                values,
                                                car images, dealer reported mileage, the price, description, and
                                                availability of optional products that may be able to be financed
                                                with the
                                                vehicle (e.g., service contracts, GAP, and protection products),
                                                dealer
                                                advertised price and car details. Please note that third parties,
                                                including
                                                participating dealers, provide this information and that Motorvero
                                                Participating Lenders do not make any express or implied
                                                representations or
                                                warranties with respect to the accuracy of the provided third party
                                                information. You should verify the accuracy of any third party
                                                information
                                                on your own. All trademarks are the property of their respective
                                                owners.
                                                Vehicle images may not be representative of the dealer advertised
                                                vehicle.
                                                Cars are subject to prior sale and availability should be confirmed
                                                with the
                                                dealer. Dealer advertised prices for vehicles and other additional
                                                products
                                                are subject to change without notice. <br><br> Dealer advertised
                                                prices for
                                                vehicles and other optional products may be negotiable and may not
                                                include
                                                tax, title, license, and other fees charged by the dealer. Other
                                                fees may
                                                include, but are not limited to, document fees, dealer preparation
                                                fees, and
                                                delivery charges. You should verify with the dealer what is included
                                                in the
                                                dealer advertised price. You should also verify tax, title, and
                                                license fees
                                                with the dealer. Should you choose to purchase any additional
                                                products,
                                                including GAP, service contract and/or extended warranty, from a
                                                participating dealer, such charges may impact your financing terms.
                                                Those
                                                additional products may or may not be offered or sold by a Motorvero
                                                Participating Lender. <br><br> <b>Privacy</b> <br> When you fill out
                                                your
                                                pre-qualification request, you are providing your information to
                                                Motorvero so
                                                that Motorvero can facilitate your request for pre-qualification from
                                                a
                                                Motorvero Participating Lender. Motorvero will use and share the
                                                information
                                                you provide consistent with the written instructions you provide to
                                                Motorvero
                                                in your pre-qualification request and in accordance with its Privacy
                                                Policy,
                                                available at: <a href="https://www.Motorvero.com/Cars/privacyPolicy.html" target="_blank">www.Motorvero.com/Cars/privacyPolicy.html</a>.
                                                Additionally, should you complete your pre-qualification request on
                                                the
                                                Motorvero website, Motorvero Participating Lenders may use the
                                                information you
                                                provide in order to determine whether you may be eligible to
                                                pre-qualify for
                                                financing from one or more Motorvero Participating Lenders and to
                                                send you
                                                important information about your pre-qualification request. For
                                                complete
                                                information, see each Motorvero Participating Lender’s privacy
                                                policies at:
                                                <br><br> •&nbsp;For Capital One, see <a href="https://www.capitalone.com/privacy" target="_blank">www.capitalone.com/privacy</a> <br> • For
                                                Westlake
                                                Financial, see <a href="https://www.westlakefinancial.com/privacy-policy/" target="_blank">www.westlakefinancial.com/privacy-policy/</a>
                                                <br>
                                                •&nbsp;For Global Lending Services, see <a href="https://www.glsllc.com/privacy-1/" target="_blank">www.glsllc.com/privacy-1/</a> <br><br>
                                                <b><em>Additional
                                                        Disclosures for Capital One</em></b> <br><br> <b>Applicant
                                                    Restrictions</b> <br> • Minimum monthly income required is
                                                $1,500 or
                                                $1,800, depending on your credit qualifications. <br> •&nbsp;Any
                                                existing
                                                Capital One accounts must be in good standing (not over limit, past
                                                due, or
                                                delinquent). <br> •&nbsp;Pre-qualification terms expire 30 days from
                                                the
                                                date your pre-qualification request is received. <br><br> <b>Amount
                                                    Financed
                                                    Restrictions</b> <br> •&nbsp;For new and used vehicles, the
                                                minimum
                                                Amount Financed is $4,000 <br><br> <b>Vehicle Type Restrictions</b>
                                                <br> •
                                                Vehicle must be 2013 model year or newer and have fewer than 120,000
                                                miles.
                                                In some instances, you may be able to purchase a 2008 model year
                                                with fewer
                                                than 150,000 miles. <br> •&nbsp;Certain vehicle makes, including but
                                                not
                                                limited to, Oldsmobile, Daewoo, Saab, Suzuki or Isuzu are not
                                                eligible for
                                                financing. <br><br> <b><em>Additional Disclosures for Westlake
                                                        Financial</em></b> <br><br> <b>Applicant Restrictions</b>
                                                <br> •
                                                Existing Westlake/Western Funding/Wilshire Consumer Credit accounts
                                                must be
                                                in good standing <br> • No Open Bankruptcies <br> • Maximum of one
                                                open
                                                derogatory account (not including collection accounts and student
                                                loan
                                                accounts) <br> • Open auto loans require further review, and in most
                                                cases
                                                must be traded-in or paid-off <br> • Out-of-state purchases are
                                                subject to
                                                review <br> • Customer address must be a permanent, non-commercial
                                                property
                                                <br><br> <b>Amount Financed Restrictions</b> <br> • Minimum amount
                                                financed
                                                is $4,000 <br><br> <b>Vehicle Type Restrictions</b> <br>
                                                •&nbsp;Exotic makes
                                                (Ferrari, Maserati, Lamborghini, McLaren etc.) ineligible <br> •
                                                Branded
                                                titles and commercial vehicles ineligible. <br><br>
                                                <b><em>Additional
                                                        Disclosures for Global Lending Services</em></b> <br><br>
                                                <b>Applicant Restrictions</b> <br> • Applicant and co-applicant must
                                                be
                                                older than 18 years of age. <br> •&nbsp;Applicant or co-applicant’s
                                                primary
                                                source of income cannot be self-employment income or 1099 income.
                                                <br> • At
                                                least one applicant must have a gross monthly income of $1,800 or
                                                greater.
                                                <br> • Applicant(s) should have at least 2 years of job history with
                                                no
                                                employment gaps and a max of 2 jobs within the last 2 years. <br> •
                                                No open
                                                bankruptcies or recent major derogatories. <br> • A
                                                pre-qualification is
                                                valid for 30 days from the date the pre-qualification is granted.
                                                <br><br>
                                                <b>Amount Financed Restrictions </b> <br> • Minimum amount financed
                                                is
                                                $6,500 <br><br> <b>Vehicle Type Restrictions</b> <br> • Vehicle must
                                                be less
                                                than 10 years old. <br> • Vehicle must have less than 122,000 miles
                                                <br> •
                                                Exotic makes, discontinued makes, smart car, electric, gray market,
                                                modified, weather damaged, branded title, salvage title,
                                                remanufactured
                                                title, manufacturer "lemon law" buybacks, commercial, limousine,
                                                taxi,
                                                delivery, tow, or heavy duty, and any vehicle not listed in NADA/KBB
                                                are
                                                ineligible for financing.</span>
                                        </div>
                                    </div>
                                    <!-- Circles which indicates the steps of the form: -->
                                </form>


                            </div>

                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <a class="text-black fs-6" href="https://eliteblue.net/motorvero/public/retrieve">Already pre-qualified? Retrieve your offer</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white">
    <div class="container py-5">
        <div class="row p-md-3 p-1">
            <div class="col-md-4  py-1 px-md-3 px-2">
                <div class="card car-card border-0 rounded-4 h-100 back-light p-0">
                    <div class="p-3">
                        <img src="{{asset('images/financing/1.png')}}" class="card-img-top deals-card-img rounded-4" alt="...">
                    </div>
                    <div class="card-body pt-0 text-center  px-4 mb-2">
                        <h6 class="font-secondary  m-0 fw-bold">
                            No Impact on Your Credit Score
                        </h6>
                        <p class="mb-0  clr-dark mt-1">
                            So check out your options. Your credit won't budge!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4  py-1 px-md-3 px-2 ">
                <div class="card car-card border-0 rounded-4 h-100 text-center back-light p-0">
                    <div class="p-3">
                        <img src="{{asset('images/financing/2.png')}}" class="card-img-top deals-card-img rounded-4" alt="...">
                    </div>
                    <div class="card-body pt-0 px-4 mb-2">
                        <h6 class="font-secondary  m-0 fw-bold">
                            Only Takes Minutes
                        </h6>
                        <p class="mb-0  clr-dark mt-1">
                            Just enter a few basic details to instantly see your options
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4  py-1 px-md-3 px-2">
                <div class="card car-card border-0 rounded-4 h-100 text-center back-light p-0">
                    <div class="p-3">
                        <img src="{{asset('images/financing/3.png')}}" class="card-img-top deals-card-img rounded-4" alt="...">
                    </div>
                    <div class="card-body pt-0 px-4 mb-2">
                        <h6 class="font-secondary  m-0 fw-bold">Personalized Real Rates</h6>
                        <p class="mb-0  clr-dark mt-1">
                            Know your real monthly payment before visiting the dealer
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <video src="{{asset('images/financing/Financial.mp4')}}" poster="{{asset('images/index/video.png')}}" style="width: 100%;height: 100%;" controls=""></video>
    </div>
</section>
<section>
    <div class="container mt-5">
        <div class="row">
            <p class="heading text-center">BITCOINS AND <span>CRYPTO CURRENCIES</span></p>
        </div>
        <div class="row">
            <p class="fw-bold">We Now Accept Bitcoin and other cryptocurrencies for payments at Car Gurus.</p>
            <p>The digital cryptocurrency, Bitcoin has gained traction over the last few years as a viable payment
                method for goods and services online. The team at Car Gurus has watched the development of the
                currency closely, and we are now ready to accept payments for vehicles in Bitcoins. While Bitcoins
                and the technology which surrounds them has much work to do in becoming mainstream, we at Car Gurus
                in MA feel that in our effort to serve the needs of our customers, it’s time to accept the digital
                currency. You can learn more about cryptocurrency here for details on acquiring cryptocurrency
                through sources like Paypal, Cashapp, coinbase, moonpay, Abra, Bitcoin ATM etc.</p>
        </div>
        <div class="row">
            <p class="fw-bold">How to Finance Your Next Vehicle with Bitcoin and other crypto currencies.</p>
            <p>All Bitcoin payments are securely handled through the payment processor Coinbase. Only Bitcoin
                payments that can cover 82% price of the vehicle including tax, tag, and title can be accepted at
                this time; finance and lease options are also currently available. To find out more information or
                if you are interested in speaking to one of our sales consultants to schedule a test-drive for your
                next vehicle, please send the Motorvero an E-mail to OfficialMotorvero@gmail.com or call our Motorvero
                dealership directly @ (334) 581-1797 to schedule a time with our auto finance center.</p>
        </div>
        <div class="row">
            <p class="fw-bold">Buy a New Car With Cryptocurrency in USA۔</p>
            <p>The entire Car Gurus team is excited for this new approach to car shopping with Bitcoin, and we hope
                you are too. Whether you’re searching for any car, truck, or SUV, our automotive financing experts
                are equipped and ready to serve you during our open business hours. Let us work with you to find a
                car model that fits your lifestyle and budget. After exploring our new and used car inventory
                online, contact our automotive specialists to schedule transportation with home delivery and make an
                appointment to discuss your Bitcoin car payment options. We look forward to serving you with the way
                of the future – cryptocurrency car shopping is now available!</p>
        </div>
        <div class="row">
            <p>Buy a New Car With Cryptocurrency in USA</p>
        </div>
        <div class="row">
            <p>#blacklivesmatter
                <br> #covidisreal
            </p>
        </div>
        <div class="row">
            <p class="fw-bold">
                Stay Save and Go Get the Vaccine
            </p>
        </div>
    </div>
</section>
<section>
    <div class="container my-4">
        <div>
            <h2 class="heading text-center">Finance in Advance</h2>
            <div class="row my-4">
                <div class="col-md-4 mt-3">
                    <div class="fianceinadiv">
                        <div class="finance-step mx-auto">
                            <p class="my-auto">step 1:</p>
                        </div>
                        <p class="text-center pt-1">Estimate your payment</p>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="fianceinadiv">
                        <div class="finance-step mx-auto">
                            <p class="my-auto">step 2:</p>
                        </div>
                        <p class="text-center pt-1">Get pre-qualified</p>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="">
                        <div class="finance-step mx-auto">
                            <p class="my-auto">step 3:</p>
                        </div>
                        <p class="text-center pt-1">Shop with real, personalized rates</p>
                    </div>
                </div>

            </div>
        </div>
        <span class="vehicle-price d-none vp">500</span>
        <div class="row">
            <div class="col-md-6">

                <div class="col-12 mb-4">
                    <div class="">Vehicle Price</div>
                    <input onclick="clear()" oninput="vehiclepriceinp()" aria-label="Vehicle Price" class="form-control w-100 VehiclePricea" id="VehiclePrice" name="price" type="number" min="500" max="500000" value="500">
                    <input onclick="vehicleprice()" name="price" type="range" min="500" max="500000" id="VehiclePriceRange" value="500" class="form-range mt-3" id="customRange1">
                    <div class="d-flex smaller justify-content-between">
                        <p>$500</p>
                        <p>$50,000+</p>
                    </div>

                    <!-- <label class="_2cplq"><div class="_1EYON">Vehicle Price</div><input step="1" aria-label="Vehicle Price" class="B-DaV" name="price" type="text" value="$27,952.60"></label> -->

                    <div class="mt-3">Down Payment (<span id="DownPaymentPercent">0</span>%)</div>
                    <input placeholder="$0.00" class="form-control w-100 VehiclePricea downPayment" name="downPayment" type="number">
                    <div class="mt-4">Credit score</div>
                    <div class="d-flex justify-content-between selectScore mt-2 border-0 cal-btn">
                        <label class="_56Te6L _3aSadT">
                            <input data-down="14" data-up="24" aria-label="Rebuilding <640" class="_5LPSVN" name="score" type="radio" value="REBUILDING">
                            <div class="cevdhy">Rebuilding<br>&lt;640</div>
                        </label><label class="_56Te6L _3aSadT"><input data-down="5" data-up="10" aria-label="Fair 641-699" class="_5LPSVN" name="score" type="radio" value="FAIR">
                            <div class="cevdhy">Fair<br>641-699</div>
                        </label><label class="_56Te6L _3aSadT " aria-selected="true"><input data-down="4" data-up="6" aria-label="Good 700-749" class="_5LPSVN" name="score" type="radio" value="GOOD" checked="">
                            <div class="cevdhy">Good<br>700-749</div>
                        </label><label class="_56Te6L _3aSadT"><input data-down="3.45" data-up="4.5" aria-label="Excellent 750-850" class="_5LPSVN" name="score" type="radio" value="EXCELLENT">
                            <div class="cevdhy">Excellent<br>750-850</div>
                        </label>
                    </div>
                    <div class="mt-4">Loan Term</div>
                    <div class="d-flex justify-content-between selectMonths mt-2 border-0 cal-btn">

                        <label class="_56Te6L _3aSadT" data-month="36" aria-selected="true"><input class="_5LPSVN" name="term" type="radio" value="36">
                            <div class="cevdhy">36 mo</div>
                        </label><label class="_56Te6L _3aSadT" data-month="48"><input class="_5LPSVN" name="term" type="radio" value="48">
                            <div class="cevdhy">48 mo</div>
                        </label><label class="_56Te6L _3aSadT " data-month="60"><input class="_5LPSVN" name="term" type="radio" value="60" checked="">
                            <div class="cevdhy">60 mo</div>
                        </label><label class="_56Te6L _3aSadT" data-month="72"><input class="_5LPSVN" name="term" type="radio" value="72">
                            <div class="cevdhy">72 mo</div>
                        </label>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="estimate-payment text-center my-auto py-2 rounded-2">
                    <p class="fs-5 fw-bold my-4">Your estimated payment is</p>
                    <!-- <h1 class="my-3 estimate-payment-price" id="estimatepay">
                                        $10 <span>/ mo*</span>
                                    </h1> -->
                    <span class="_2aSBdU">
                        <span class="my-3 dollar">
                            $
                            <span class="downamount my-3 estimate-payment-price">
                                0.00
                            </span>
                            <div class="d-none">
                                - $
                                <span class="upamount my-3 estimate-payment-price">
                                    688
                                </span>
                            </div>
                        </span>
                        / mo*
                    </span>



                    <p class="my-4">Sounds good? Submit a pre-qualification request now to get your personalized
                        rates</p>
                    <button type="button" class="btn btn-primary fs-5 back-primary border-0  px-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Get Pre-Qualified
                    </button>
                    <p class="my-4">Already pre-qualified? <a href="https://eliteblue.net/motorvero/public/retrieve" class="clr-primary"> Retrieve your offer </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-5">
        <div class="row">
            <p class="heading text-center">Frequently Asked Questions</span></p>
        </div>

        <div class="">
            <nav>
                <div class="border-0 nav nav-tabs mb-3 justify-content-between" id="nav-tab" role="tablist">
                    <div class="a col p-1">
                        <button class="h-100 position-relative border-0 btn btn-primary back-primary active w-100 py-3" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Getting pre-qualified</button>
                    </div>
                    <div class="col p-1">
                        <button class="h-100 position-relative border-0 btn btn-primary w-100 py-3 back-primary" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Our participating lenders &
                            rates</button>
                    </div>
                    <div class="col p-1">
                        <button class="h-100 position-relative border-0 btn btn-primary w-100 py-3 back-primary" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Using pre-qualification
                            offers</button>
                    </div>
                </div>
            </nav>
            <div class="tab-content px-3 " id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            How do I get pre-qualified?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p><a href="#">CLICK here</a> Kindly Send us your data so that we can see if you qualify for any pre-qualification offers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            Where can I check my pre-qualification status?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p><a href="#">Click here</a> to view your offers for pre-qualification.
                                            No account with Motorvero? Enter the email address you used to apply, and we'll send you setup instructions by email.
                                            Check your spam and inbox frequently. In addition, <a href="#">reach out</a> directly to the participating lender.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            When does my pre-qualification expire?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>After we accept your request for pre-qualification, your offer is valid for 30 days.
                                            You can always re-submit your information if your offer has expired to see if you qualify for a different one.
                                            Note that if you submit again, the offer can change.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            I have an offer. What am I pre-qualified for?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>One of our participating lenders has already pre-approved you for auto financing.
                                            The participating lender(s) with which you have pre-qualified may accept your offer to buy cars from dealers who sell them.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            How much am I pre-qualified for?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>
                                            Depending on the lender, different amounts may be financed for a particular vehicle.
                                            Reach out direct any additional inquiries to participating lenders.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            Can I get pre-qualified with poor credit?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>Checking pre-qualification with our participating lenders is open to everyone!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            Is a down payment required?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>In some cases, a down payment may be necessary. Where a down payment is required to acquire the vehicle, you will be prompted to do so.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            I never recieved notification of my pre-qualification approval.
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>Be sure to check your spam and inbox. Also, you can browse and accept pre-qualification offers. <a href="#">here.</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            I need to revise the information I've already submitted.
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p><a href="#">Reach out</a> directly to participating lenders for help.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            Which lenders do you work with?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>Capital One Auto Finance, Westlake Financial and Global Lending Services (GLS) are our participating lenders.
                                            Have questions about lender restrictions or your specific offer? Reach out directly to lenders for help.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            Which lenders am I pre-qualified with?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p><a href="#">Click here</a> to view your financing dashboard to check your current offers.
                                            If you don’t see any active offers, you can see if you pre-qualify <a href="#">here</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            Which lender is my offer rate from?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>You’ll see the name of the lender next to each rate with your offer. <a href="#">Click here</a> to see your current offers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            How is my monthly payment for my offer calculated?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>The amount you intend to finance, your annual percentage rate, and the length of your loan are used to determine your monthly payment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            Why don't I see rates from each of my pre-qualified participating lenders?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>Each of our lenders has different dealers they partner with. The lender(s) who supply offer(s) may differ depending on the dealer, the car, and the state of your pre-qualification.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            Why are rates and loan terms different for some lenders vs. others?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>Credit and lending policies vary amongst lenders. Depending on the car and credit requirements, they may change.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            What do I do with my pre-qualification offer?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>See rates for vehicles qualified for finance using the information in your offer on Motorvero.
                                            Please remember to print or keep a copy of your pre-qualification certificate on hand.
                                            When you visit the dealer, bring your pre-qualification offer along. Until your financing is completed with a participating dealer, the terms are not final.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            What should I expect at the dealer?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>Make sure the car you want is still available by getting in touch with the dealer beforehand.
                                            You may make a more informed choice about financing if you bring your offer and know your terms in advance.
                                            If the dealer provides additional financing choices, you'll also have a negotiating point of comparison.
                                            <br><br><br>
                                            The dealer will require you to submit an additional credit application and may also want a driver's license, proof of insurance, proof of income, or evidence of residency before allowing you to use your offer to finish your car purchase.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            Where can I find my pre-qualification certificate?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p><a href="#">Click Here</a> select "View Vehicle Offers" next to the offer you would like to view, then select "Rebuild Your Offer".
                                            Then, click "Print Certificate" or "Email Certificate."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            How do I know the dealer will have the car I selected?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>Pre-qualification does not ensure that the exact automobile you want will be on hand when you visit the dealer.
                                            For availability information on the specific model you have chosen, please call the dealer before you visit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            Can I use my pre-qualification for multiple vehicles?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>You are able to check and contrast rates for various vehicles thanks to your pre-qualification. You may only buy one vehicle for personal use using the pre-qualification you have received.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row  p-1  py-0 parent_dropdown">
                            <div class="col-12 p-0">
                                <button class="button-primary dropdown_menu  rounded-3 back-light p-2 px-3 fs-2 d-md-block mb-2 border-0 w-100 border-0">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-black py-2 text-md-center text-start my-auto">
                                            What should I expect at the dealer?
                                        </h6>
                                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i>
                                        </div>
                                    </div>



                                </button>

                            </div>
                            <div class="col-12">
                                <div class="dropdown_items  bg-white rounded-3 ">
                                    <div class="row">
                                        <p>Rest assured you’re getting a good deal thanks to the proprietary
                                            Motorvero Instant Market
                                            Value (IMV). We analyze every deal and give it a rating from Overpriced
                                            to Great. And
                                            since we’re the largest online car marketplace, we know a good deal when
                                            we see one.</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>
<section>
    <div class="container mt-md-5 mt-2" id="financing-faq-contact">
        <div class="row ">
            <div class="">
                <div class="back-light py-md-5 py-3">
                    <header class="section-header">
                        <h5 class="font-primary text-center">Didn’t get your question answered?</h5>
                    </header>
                    <div class="contact-financing">
                        <div>Reach out to our participating lenders directly.</div>
                        <div>Capital One: <a href="tel:+13345811797">+1 (334) 581-1797</a> or visit <a href="https://www.capitalone.com/cars/faq" target="_blank">here</a></div>
                        <div>Westlake Financial: <a href="tel:+13345811797">+1 (334) 581-1797</a> or visit <a href="https://www.westlakefinancial.com/Motorvero-customer-faq/" target="_blank">here</a></div>
                        <div>Global Lending Services (GLS): <a href="tel:+13345811797">+1 (334) 581-1797</a> or
                            visit <a href="https://glsllc.com/MotorveroFAQ/" target="_blank">here</a></div>
                        <div>For all other questions, <a href="enterFeedback.action" target="_blank">ask us here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function checkMedia(x) {
        // if (x.matches) {
        $(".dropdown_menu").click(function() {
            $(this).parents('.parent_dropdown').find(".dropdown_items").toggleClass('showaccordion').slideToggle();
            $(this).parents('.parent_dropdown').siblings().find(".showaccordion").removeClass('showaccordion').slideToggle();
            $(this).parents('.parent_dropdown').find(".dropdown_menu").toggleClass('active');
            $(this).parents('.parent_dropdown').siblings().find(".active").removeClass('active');

        });
    }
    checkMedia('')
</script>
<script>
    $('.field-required').html(`
                    <div class="required"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg><p class="text-black">Required</p></div>
                    `);
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
            document.getElementById("nextBtn").style.display = "none";
            document.getElementById("step-count").style.display = "none";
            // document.getElementById("back-arrow").style.display = "none";

        } else {
            document.getElementById("prevBtn").style.display = "inline";
            document.getElementById("nextBtn").style.display = "inline";
            document.getElementById("step-count").style.display = "inline";
            // document.getElementById("back-arrow").style.display = "inline";
            document.getElementById("ModalLabel").innerHTML = "Applicant";
        }

        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit Your Application";
            $('#nextBtn').addClass('btnsave')
            // document.getElementById("nextBtn").addc = "Submit Your Application";
        } else if (n == (x.length - 2)) {
            document.getElementById("nextBtn").innerHTML = "Next: Review";
        } else if (n == (x.length - 3)) {
            document.getElementById("nextBtn").innerHTML = "Next: Identity";
        } else if (n == (x.length - 4)) {
            document.getElementById("nextBtn").innerHTML = "Next: Your Employment";
        } else if (n == (x.length - 5)) {
            document.getElementById("nextBtn").innerHTML = "Next: Your Residence";
        } else {
            document.getElementById("nextBtn").innerHTML = "Submit";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {

        document.querySelector('.firstnameidtab-2').innerHTML = regForm.firstnameid.value;
        document.querySelector('.firstnameid').innerHTML = regForm.firstnameid.value;
        document.querySelector('.emailid').innerHTML = regForm.emailid.value;
        document.querySelector('.phonenumberid').innerHTML = regForm.phonenumberid.value;
        document.querySelector('.homeaddid').innerHTML = regForm.homeaddid.value;
        document.querySelector('.monthlypayid').innerHTML = regForm.monthlypayid.value;
        document.querySelector('.employerid').innerHTML = regForm.employerid.value;
        document.querySelector('.jobtitleid').innerHTML = regForm.jobtitleid.value;
        document.querySelector('.scnid').innerHTML = regForm.scnid.value;
        document.querySelector('.dobid').innerHTML = regForm.dobid.value;
        document.querySelector('.primaryanumid').innerHTML = regForm.primaryanumid.value;
        document.querySelector('.propertytypeid').innerHTML = regForm.querySelector('[name="property_type"]').value;
        document.querySelector('.empstatusopt').innerHTML = regForm.querySelector('[name="empstatusopt"]').value;
        console.log(document.querySelector('.propertytypeid').value);
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            // document.getElementById("regForm").submit();
            $('body').on('click', '.btnsave', function(event) {
                event.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{url('finance')}}",
                    type: "POST",
                    data: $('#regForm').serialize(),
                    dataType: "json",
                    beforeSend: function() {
                        // Show the preloader
                        $('.preloader').show();
                    },
                    success: function(response) {
                        $('#regForm').trigger('reset');
                        // alert('Thank you');

                    },
                    error: function(xhr, status, error) {
                        // Handle the error if needed
                    },
                    complete: function() {
                        // Hide the preloader
                        $('.preloader').hide();
                        $('.modal-dialog-centered').hide();
                        var tymodal = document.getElementById('tyModal');
                        var tymodalll = document.getElementById('tymodalll');
                        tymodal.style.display = 'block';
                        tymodalll.style.display = 'flex';
                        // setTimeout(closety, 5000)
                    }
                });
            });

            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        // z = document.getElementsByClassName("required-none");
        z = document.getElementsByClassName("field-required");
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...

            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                var sibling = y[i].nextElementSibling;
                sibling.style.display = "block";

                // and set the current valid status to false
                valid = false;
            }
            // var disable = document.getElementById('nextBtn')
            // if (y[i].value == "") {
            //     disable.classList.add('disabled')
            // }

        }


        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
            x[i].innerHTML = "Step " + i + " of 5"
        }
        //... and adds the "active" class on the current step:
        // x[n].innerHTML += " active";
        x[n].className += " active";
        // document.getElementsByClassName('.active').innerHTML = "aaa"
    }

    function myFunction() {
        var x = document.getElementById("scnid");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function closety() {
        var tymodal = document.getElementById('tyModal');
        tymodal.style.display = 'none';
        location.reload()
    }
    //         let firstname = document.getElementById('firstnameid').innerHTML
    //         let fuck = document.getElementById('dcfullname').innerHTML = firstname
    // console.log(fuck);
</script>

<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
@endsection