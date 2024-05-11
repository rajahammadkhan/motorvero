<style>
    .alert-modal {
        display: flex;
        align-items: center;
        justify-content: center;
        /* position: fixed; */
        position: fixed;
        width: 100%;
    }
</style>
@if ($errors->any())
<div class="alert-modal"  role="alert">
    <div class="alert alert-danger alert-dismissibl fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        <h4 class="alert-heading">Error!</h4>
        <hr class="my-3">
        @foreach ($errors->all() as $error)
        <p class="mb-0">{{ $error }}</p>
        @endforeach

    </div>
</div>
@endif
@if (\Session::has('success'))
<div class="alert-modal" role="alert">
    <div class="alert alert-success alert-dismissible fade show alertsuccess">
        <h4 class="alert-heading">Success!</h4>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>


        <hr>
        <p class="mb-0">{!! \Session::get('success') !!}</p>
    </div>
</div>
@endif
@if (\Session::has('wrong'))
<div class="alert-modal" role="alert">
    <div class="alert alert-danger alert-dismissible fade show" >
        <h4 class="alert-heading">Error!</h4>
        <hr>
        <p class="mb-0 text-white">{!! \Session::get('wrong') !!}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>
</div>
@endif