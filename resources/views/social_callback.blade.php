<html>
<head>
  <meta charset="utf-8">
  <title>Redirecting, Please wait...</title>
  <script>
    window.opener.postMessage({ token: "{{ $passportToken }}" }, "https://sadiq.dev");
    window.close();
  </script>
</head>
<body>
</body>
</html>