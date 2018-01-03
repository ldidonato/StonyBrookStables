<header>
    <div id="logodiv">
    <h2><a href="index.php" id="logo">Stony Brook Stables</a></h2>
    </div>
    
    <div id="navdiv">
        <ul id="nav">
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="fsol.php">For Sale or Lease</a></li>
            <li><a href="lessonprogram.php">Lesson Program</a></li>
            <li><a href="rboarding.php">Retirement Boarding</a></li>
            <li><a href="boarding.php">Boarding</a></li>
        </ul>
    </div>
</header>
<div id="HeaderBar"></div>
<div id="mobilenav">
    <div class="topnav" id="myTopnav">
      <a href="index.php"><strong class="timesfont">Stony Brook Stables</strong></a>
        <a href="boarding.php">Boarding</a>
        <a href="rboarding.php">Retirement Boarding</a>
      <a href="lessonprogram.php">Lesson Program</a>
      <a href="fsol.php">For Sale or Lease</a>
      <a href="gallery.php">Gallery</a>
      <a href="javascript:void(0);" style="font-size:21px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>