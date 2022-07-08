<!DOCTYPE html>
<html lang="en">
<head>
  <title>Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Put your description here.">
</head>
<script>
    window.addEventListener('beforeunload', (event) => {
        if (pageHasUnsavedChanges()) {
            event.preventDefault();
            return event.returnValue = 'Are you sure you want to exit?';
        }
    });
</script>
<body>
  <!-- fix : Image elements do not have [alt] attributes -->
  <img src="img/wallpaper.jpg" alt="view of the ocean from a mountain top">
</body>
</html>
