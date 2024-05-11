<form action="{{url('listing')}}" method="GET">
    <input type="hidden" name="tracking" value="home">
    <input type="hidden" name="condition" value="New">
    <div data-cg-ft="used-cars-search-form">
        <div class="row by-make-model">
            <div class="col-md-12">
                <select name="make" id="maker" class="rounded-0 form-control">
                    <option value="" disabled selected>Select Maker</option>
                    @foreach(App\Helpers\DefaultLanguage::Make() as $makes)
                        <option value="{{$makes->id}}">{{$makes->title}} </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <select id="mySelect" name="model" class="rounded-0 form-control mt-2">
                    <option value="">Select Model</option>

                </select>
            </div>
            <div class="col-md-12 mt-2 ">
                <input type="number" name="year" id="Year" placeholder="Please Enter Year" class="form-control">
            </div>
            <div class="col-md-12 mt-2">
                <input type="number" name="price" id="Price" placeholder="Enter Price" class="form-control">
            </div>
            <div class="col-md-12 mt-2">
                <input type="number" name="zip" id="Zip" placeholder="Your ZipCode" class="form-control">
            </div>
            <div class="col-md-12 mt-2">
                <button type="submit" id="btnSearch" class="btn btn-primary back-primary w-100 py-2">Search
                </button>
            </div>
        </div>
    </div>
</form>

<script>
    $(Document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#maker').change(function () {
            let makeId = $(this).val();
            $('#mySelect').empty();
            $.ajax({
                url: '{{url('fetch-all-model')}}',
                method: 'POST',
                dataType: 'json',
                data:{'makeId':makeId},
                success: function(data) {
                    // Process the response data
                    let payload = data.data;
                    // Clear existing options

                    if(payload){
                        $('#mySelect').append($('<option>', {
                            value:'null',
                            text: "Select Model"
                        }));
                        // Add new options based on the received data
                        $.each(payload, function(key, value) {

                            $('#mySelect').append($('<option>', {
                                value: value.id,
                                text: value.title
                            }));
                        });
                    }

                },
                error: function(xhr, status, error) {
                    console.error('AJAX request failed:', status, error);
                }
            });
        })
    })
</script>

