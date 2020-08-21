@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('content')

<div class="row">
    <div class="col-md-3">
    <a href="{{ route('message.inbox') }}" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

    @include('message.sidebar')
    </div>
    <!-- /.col -->
    <div class="col-md-9">
    <div class="card card-primary card-outline">
    <form method="POST" action="{{ route('message.send') }}">
        @csrf
        <div class="card-header">
        <h3 class="card-title">Compose New Message</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <div class="form-group">
            <input class="form-control" placeholder="To:" name="email_recipient">
        </div>
        <div class="form-group">
            <input class="form-control" placeholder="Subject:" name="email_subject">
        </div>
        <div class="form-group">
            <textarea id="compose-textarea" class="form-control" style="height: 300px" name="email_body"></textarea>
        </div>
        <div class="form-group">
            <div class="btn btn-default btn-file">
            <i class="fas fa-paperclip"></i> Attachment
            <input type="file" name="attachment">
            </div>
            <p class="help-block">Max. 32MB</p>
        </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <div class="float-right">
            <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>
            <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
        </div>
        <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
        </div>
        <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
</div>

@endsection

@section('scripts')
<script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote({
        height: 300
    })
  })
</script>
@endsection