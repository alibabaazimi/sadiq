<html>

<head>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<style>
img {
  max-width: 100%; /* This rule is very important, please do not ignore this! */
}
</style>

<body>

<div>
  <img id="image" src="{{ asset('profile-default.jpg') }}">
</div>


<script src="{{ asset('js/app.js') }}"></script>


<script>
var $image = $('#image');

$image.cropper({
  aspectRatio: 16 / 9,
  crop: function(event) {
    console.log(event.detail.x);
    console.log(event.detail.y);
    console.log(event.detail.width);
    console.log(event.detail.height);
    console.log(event.detail.rotate);
    console.log(event.detail.scaleX);
    console.log(event.detail.scaleY);
  }
});
</script>

</body>
</html>