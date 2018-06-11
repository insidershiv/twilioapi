<html>

<head>
<meta name="google-signin-client_id" content="1000489100286-nnqn2bgocv6nudjkslao1tu08j1dti5m.apps.googleusercontent.com">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel = "stylesheet" href="style.css">
</head>

<body>
<div class="g-signin2 center" data-onsuccess="onSignIn"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>

<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
//   console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
//   console.log('Name: ' + profile.getName());
//   console.log('Image URL: ' + profile.getImageUrl());
//   console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
<?php
$GLOBALS['userid'] = profile.getId();
$GLOBALS['name']   = profile.getName();
$GLOBALS['image']  = profile.getImageUrl();


?>



}
</script>


</body>
</html>