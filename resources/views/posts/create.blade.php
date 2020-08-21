@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="postForm"  method="POST" action="{{ route('postPhotoUpload') }}" autocomplete="off">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="post_title">Name</label>
                    <input type="text" class="form-control" id="post_title" name="title" placeholder="Type product name">
                </div>
                <div class="form-group">
                    <label for="post_desc">Description</label>
                    <textarea class="form-control" id="post_desc" name="desc" placeholder="Description..."></textarea>
                </div>
                <div class="form-group">
                    <label for="post_price">Price</label>
                    <input type="number" class="form-control" id="post_price" name="price" placeholder="Enter Price">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="custom-select" name="category_id">
                        <option value="1">Electronics</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="number" class="form-control" name="amount" placeholder="e.g. 1, 45, 100">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Units</label>
                            <select class="custom-select" name="unit_id">
                            @foreach($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            </form>
        </div>
    </div>
    <div class="col-md-4">

        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="col-md-12" id="image-wrapper">
                    <img id="post-image" id src="{{ asset('profile-default.jpg') }}" class="" style="width: 100%">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image-file">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    
</div>
<div class="row">
    <div class="col-md-12">
        <input type="submit" id="uploadButton" class="btn btn-primary float-right" value="Add">
    </div>
</div>

@endsection
@section('scripts')
<script>
var cropper, canvas;
var cropped = false;
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#image-file').change(function(e) {
    readURL(this);
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#post-image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$('#post-image').on('load', function() {
    $('#post-image').cropper('destroy');
    if (!cropped){

        startCrop();
    }
});


function startCrop() {
    $image = $('#post-image');
    $image.cropper({
        aspectRatio: 1 / 1 ,
        viewMode: 2,
    });
    cropper = $image.data('cropper');
}


$('#uploadButton').click(function(event) {
    event.preventDefault();
    if (cropper) {
        canvas = cropper.getCroppedCanvas({
            width: 250,
            height: 250,
        });
        $('#post-image').attr('src', canvas.toDataURL());
        $('#post-image').cropper('destroy');
        

    }

    var form = $('#postForm')[0];
    canvas.toBlob((blob) => {
        cropper.destroy();
        const formData = new FormData(form);
        formData.append('image-file', blob/*, 'example.png' */);
        $.ajax({    
            url: '/postPhotoUpload',
            type: 'POST',
            //dataType: 'json',
            processData: false,
            contentType: false,    
            data: formData,
            success: function(data)
            {
                console.log(data.file);
                window.location.href = "{{ route('home') }}";
            },
            error: function(data)
            {
                console.log(data);
            }
        });
    });


});

</script>
@endsection