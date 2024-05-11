<style>
    .carbody .card {
        height: 100% !important;
    }

    .cardbodyimg {
        background-color: white;
        margin: 10px;
        height: 70px;
        width: 90%;
    }

    .cardbodyimg img {
        height: 100% !important;
    }
</style>
<div class="row m-0">
    <div class="col-12 px-0 mb-3">
        <div class="row carbody m-0" role="listbox">
            <div class="my-2 col-md-3  col-6 col-sm-4 h-100 ">
                <a href="{{url('listing')}}?body={{'SUV/Crosover'}}">
                    <div class="card">
                        <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                        <div class="cardbodyimg">
                            <img draggable="false" alt="SUV / Crossover Body Style"
                                 src="{{asset('frontend/images/types/suv.jpeg')}}" class="w-100">
                        </div>
                        <div class="cardBody">
                            <div>
                                <h6 class="title">SUV / Crossover </h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="my-2 col-md-3  col-6 col-sm-4 h-100 ">
                <a href="{{url('listing')}}?body={{'Sedan'}}">
                    <div class="card">
                        <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                        <div class="cardbodyimg">
                            <img draggable="false" alt="Sedan Body Style"
                                 src="{{asset('frontend/images/types/sedan.jpeg')}}" class="w-100">
                        </div>
                        <div class="cardBody">
                            <div>
                                <h6 class="title">Sedan</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="my-2 col-md-3  col-6 col-sm-4 h-100">
                <a href="{{url('listing')}}?body={{'PickUp Truck'}}">
                    <div class="card">
                        <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                        <div class="cardbodyimg">
                            <img draggable="false" alt="Pickup Truck Body Style"
                                 src="{{asset('frontend/images/types/truck.jpeg')}}"
                                 data-src="https://static1.cargurus.com/gfx/reskin/bodystyle/small/pickup.png?io=true&amp;format=jpg&amp;auto=webp"
                                 class="w-100">
                        </div>
                        <div class="cardBody">
                            <div>
                                <h6 class="title">Pickup Truck</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="my-2 col-md-3  col-6 col-sm-4 h-100">
                <a href="{{url('listing')}}?body={{'Coupe'}}">
                    <div class="card">
                        <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                        <div class="cardbodyimg">
                            <img draggable="false" alt="Coupe Body Style"
                                 src="{{asset('frontend/images/types/coupe.jpeg')}}" class="w-100">
                        </div>
                        <div class="cardBody">
                            <div>
                                <h6 class="title">Coupe</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="my-2 col-md-3  col-6 col-sm-4 h-100">
                <a href="{{url('listing')}}?body={{'HatchBack'}}">
                    <div class="card">
                        <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                        <div class="cardbodyimg">
                            <img draggable="false" alt="Hatchback Body Style"
                                 src="{{asset('frontend/images/types/hatchback.jpeg')}}" class="w-100">
                        </div>
                        <div class="cardBody">
                            <div>
                                <h6 class="title">Hatchback</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="my-2 col-md-3  col-6 col-sm-4 h-100">
                <a href="{{url('listing')}}?body={{'Covertable'}}">
                    <div class="card">
                        <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                        <div class="cardbodyimg">
                            <img draggable="false" alt="Hatchback Body Style"
                                 src="{{asset('frontend/images/types/convertible.jpeg')}}" class="w-100">
                        </div>
                        <div class="cardBody">
                            <div>
                                <h6 class="title">Convertible</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="my-2 col-md-3  col-6 col-sm-4 h-100">
                <a href="{{url('listing')}}?body={{'Wagon'}}">
                    <div class="card">
                        <input type="checkbox" name="carModel" class="carModelCheckbox">
                        <div class="cardbodyimg">
                            <img draggable="false" alt="Wagon Body Style"
                                 src="{{asset('frontend/images/types/wagon.jpeg')}}" class="w-100">
                        </div>
                        <div class="cardBody">
                            <div>
                                <h6 class="title">Wagon</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="my-2 col-md-3  col-6 col-sm-4 h-100">
                <a href="{{url('listing')}}?body={{'MiniVan'}}">
                    <div class="card">
                        <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                        <div class="cardbodyimg">
                            <img draggable="false" alt="Minivan Body Style"
                                 src="{{asset('frontend/images/types/minivan.jpeg')}}" class="w-100">
                        </div>
                        <div class="cardBody">
                            <div>
                                <h6 class="title">Minivan</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


        </div>
    </div>

</div>
