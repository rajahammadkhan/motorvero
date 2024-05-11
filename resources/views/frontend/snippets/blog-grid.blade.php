    <div class="column-blog col-lg-4 col-md-6 col-12 my-3">
        <div class="rounded-3 nbCard p-3">
            <?php
            $image = isset($blog['image']) ? $blog['image'] : 'galleryimage.png' ;

            ?>
            <a href="{{url('blogs',$blog['slug'])}}" >
                <img class="w-100 blogNewsImg " src="{{asset('images/media/'.$image)}}" alt="{{$blog['title']}}">
            </a>
{{--            <img src="{{asset('speedy/img/news1.png')}}"  draggable="false" alt="newsBlog" class="w-100 blogNewsImg">--}}
            <div class="content mt-3">
{{--                <p class="headingMini categ fs-6 fw-bolder mb-0">Category</p>--}}
                <div class="title row my-2">
                    <div class="col-10">
                        <a href="{{url('blogs',$blog['slug'])}}" >
                            <p class="parawf fs-4 fw-bolder mb-0 text-white">
                                {{$blog['title']}}
                            </p>
                        </a>

                    </div>
                    <div class="col-2 pe-0 ico">



                        <a href="{{url('blogs',$blog['slug'])}}"
                           class="w-100 d-flex justify-content-center align-items-center h-100">
                            <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11.8392L11 1.83923M11 1.83923H1M11 1.83923V11.8392"
                                      stroke="#00C6FF" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="para">
                    {!! $blog['short_description'] !!}
                </div>
            </div>
            <div class="profile mt-5 mb-3 d-flex align-items-center">
                <img src="{{asset('frontend/images/logo/logo.png')}}" alt="pro" draggable="false">
                <div class="contentPro ms-3">
                    <p class="title mb-0">
                        {{$blog['user']}}
                    </p>
                    <p class="decs mb-0">
                        {{date('F d, Y', strtotime($blog['created_at']))}}
                    </p>
                </div>
            </div>
        </div>
    </div>


<style>
    @media (min-width: 768px){
        .blog-grid-view img {
            object-fit: cover;
            height: 430px;
        }
    }


</style>
