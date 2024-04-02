<!DOCTYPE html>
<html lang="en">

<style>
body{
    width: 2vw;
    height: 4.3vh;
    margin: auto;
}
body.dark-mode{
    background-color: #1f1f1f;
    color: #ffffff;
}

.container-box{
    display: flex;
    flex-direction: row;
    position: relative;
    top: 1rem;
    width: 100%;
    height: 100%;
    /* border: 1px solid; */
    left: 43rem;
    background: black;
    border-radius: 7rem;
    box-shadow: 0px -5px 10px 0px rgba(0, 0, 0, 0.5);
    cursor: pointer;
    justify-content: end;
    align-items: center;
}


.night-mode{
    background: white;
}
img{
    cursor: pointer;
    width: 30px;
}
#day-mode{
    position: absolute;
    width: 19px;
    left: 10px;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-box" >
      
        <div class="container-img" onclick="changeMode(this)">
            
            <img src="../assets/day-mode.png" id="day-mode">
            <img src="../assets/night-mode.png" id="night-mode">
        </div>
    </div>

<script>
  function changeMode(image) {
    let darkMode = document.body.classList.contains('dark-mode');

    if (darkMode) {
        document.body.classList.remove('dark-mode');
        document.getElementById('day-mode')
        image.src = '../assets/day-mode.png';
    } else {
        document.body.classList.add('dark-mode');
        document.getElementById('night-mode')
        image.src = '../assets/night-mode.png';
    }
}

</script>

</body>
</html>