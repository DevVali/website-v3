<?php
$id;
if (isset($_GET["id"])){
  if ($_GET["id"] == 1 || $_GET["id"] == 2 || $_GET["id"] == 3 || $_GET["id"] == 4 || $_GET["id"] == 5 || $_GET["id"] == 6 || $_GET["id"] == 7 || $_GET["id"] == 8 || $_GET["id"] == 9 || $_GET["id"] == 10 || $_GET["id"] == 11 || $_GET["id"] == 12){
    $id = $_GET["id"];
  } else {
    header("Location: /index.php");
  }
} else {
  header("Location: /index.php");
}

$name = "Vali";
$username = "ejvali";
$desc = "A library of free codes. Copy/Paste now.";
$section = "Code";
$prns = "they/it";
$keywords = "photographer";
$color = "#68ADAD";
$discord = "https://join.ejvali.eu/";
$discord_tag = "vidk#0001";
?>
<!DOCTYPE html>

<html lang="en">

<?php require "/home/runner/ejvali-eu/includeto/pagehead.php" ?>

</head>
<body><div id="pageselect">
  <ul class="nav-bar">
    <li class="nav-item-l"><a class="nav-item-l" href="https://ejvali.eu"><img src="https://cdn.discordapp.com/attachments/889423777123938315/1031262315959566386/ejvali-photographer.png" style="height:1em;width:auto;font-size:30px" alt="navimage">&nbsp;&nbsp;@ejvali</a></li>
  </ul>
  <style>@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');html{text-align:center;scroll-behavior:smooth;margin:0;}.cookie{list-style-type:none;font-family:'Montserrat', sans-serif;font-size:18px;color:white;background-color:#68ADAD;overflow:hidden;margin:0;padding:0;position:sticky;bottom:0;width:100%;}.codearea{padding: 5px;margin-bottom: 10px;color: #aaa;box-sizing: border-box;border: 1px solid #8b8b8b;border-radius: 5px;background-color: #424242;font-size: 16px;resize: none;}footer{list-style-type:none;font-family:'Montserrat', sans-serif;font-size:18px;color:white;background-color:#68ADAD;overflow:hidden;margin:0;padding:0;}@media screen and (max-width: 600px){.nav-bar {display:none}}</style>

  <br><br><h1>A <font color="<?php echo $color ?>">library</font> of <font color="<?php echo $color ?>">free codes</font>. Copy/Paste now.</h1>
  <p><a href="#copybtn">Copy/Paste</a> the code, follow the intructions (usually written in the comments) and enjoy.<br>Having issues? Let us know on our Discord.</p><a href="<?php echo $discord ?>" target="_blank"><button class="btn btn-lg btn-primary">Discord support</button></a><br><br>
  
  <pre><textarea cols="80" rows="30" class="codearea" readonly>
<?php require "/home/runner/ejvali-eu/codefiles/$id.txt" ?>
  </textarea></pre>
  <button id="copybtn" class="btn btn-lg btn-primary">Copy code</button>
  <br><br>

<?php require "/home/runner/ejvali-eu/includeto/pagefooter.php" ?>

<!-- script -->
<script>
  var copybtn = document.querySelector("#copybtn");
  var texttocopy = document.querySelector(".codearea").value;
  let date = ""; //dev tool

  copybtn.addEventListener("click", onCopy);
  function onCopy(){
    navigator.clipboard.writeText(texttocopy);
    copybtn.classList.remove("btn-primary");
    copybtn.classList.add("btn-success");
    copybtn.textContent = "Copied!";
    
    setTimeout(afterDtag, 3000);
    function afterDtag(){
      copybtn.classList.add("btn-primary");
      copybtn.classList.remove("btn-success");
      copybtn.textContent = "Copy code";
    }
  }

  function onCookieconsent(){
    document.querySelector(".cookie").style.display = "none";
    date = new Date(Date.now() + 86400*1000*30);
    date = date.toUTCString();
    document.cookie = "cookieconsent_status=dismiss; expires=" + date;
  }

</script>

</div></body>

</html>