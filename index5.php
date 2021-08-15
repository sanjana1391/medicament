<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="style.css">
  <style>
    body {
    background: url(https://wallpaperbat.com/img/206597-download-wallpaper-1440x900-meditation-calmness-harmony-art.jpg) no-repeat center;
    background-size: cover;
    height: 100vh;
    cursor: none;
}

h1 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    font-family: "Roboto", Arial, sans-serif;
    font-size: calc(20px + 2vw);
    font-weight: 700;
    color: #fafafa;
    text-shadow: 2px 2px 2px #000;
    pointer-events: none;
    user-select: none;
    white-space: nowrap;
}
.spotlight {
    position: absolute;
    height: 100%;
    width: 100%;
    background-image: radial-gradient(
        circle,
        transparent 160px,
        rgba(0, 0, 0, 0.85) 200px
    );
}


  </style>
</head>

<body>
  <h1><a href="health.php">MEDITATE AND SELF INTROSPECT </a></h1>
  

<div class="spotlight"></div>

<script>
    window.addEventListener("DOMContentLoaded", () => {

const spotlight = document.querySelector('.spotlight');

let spotlightSize = 'transparent 160px, rgba(0, 0, 0, 0.85) 200px)';

window.addEventListener('mousemove', e => updateSpotlight(e));

window.addEventListener('mousedown', e => {

    spotlightSize = 'transparent 130px, rgba(0, 0, 0, 0.95) 150px)';

    updateSpotlight(e);

});

window.addEventListener('mouseup', e => {

    spotlightSize = 'transparent 160px, rgba(0, 0, 0, 0.85) 200px)';

    updateSpotlight(e);

});

function updateSpotlight(e) {

    spotlight.style.backgroundImage = `radial-gradient(circle at ${e.pageX / window.innerWidth * 100}% ${e.pageY / window.innerHeight * 100}%, ${spotlightSize}`;

}
});
</script>

</body>

</html>