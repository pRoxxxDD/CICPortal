<?php
$lat = isset($_GET['lat']) ? $_GET['lat'] : "0";
$long = isset($_GET['long']) ? $_GET['long'] : "0";
?>
<!DOCTYPE html>
<html>
<head>
<title>CIC Portal > Settings</title>
<?php if (isset($_COOKIE['development'])) echo '<link href="/assets/css/default_bon.css" type="text/css" rel="stylesheet">'; ?>
<style>body{margin-top:50px}ul{list-style:none;padding-left:0}a:focus{border:3px solid #fc3c00;margin:-3px -3px -3px -3px}a:link,a:visited{display:block;width:100%}a:visited img{border:none;background-color:initial}li{margin:8px;border:3px solid #494949}li>a:focus{color:#fff}img{border:none;margin:0 30px -5px 30px}.column{float:left;width:50%}.column2{text-align:center}.setting-icon{margin-top:25px}</style>
</head>
<body>
<div>
<div class="column">
<ul>
<li><a href="./appearance-local-settings.php"><img src="/assets/img/side-left-view-32.png" height="32px"/>Appearance & local</a></li>
<li><a href="./view-provisioning.php"><img src="/assets/img/code-32.png" height="32px"/>View Provisioning</a></li>
<li><a href="<?php echo "./info.php?lat={$lat}&long={$long}"; ?>"><img src="/assets/img/info-2-32.png" height="32px"/>Info</a></li>
<li><a href="" onclick="clear_cookies();"><img src="/assets/img/refresh-2-32.png" height="32px"/>Reset</a></li>
</ul>
</div>
<div class="column column2"><img class="setting-icon" src="/assets/img/settings-5-256.png"/></div>
</div> 
<script>
function clear_cookies(){document.cookie.split(";").forEach(function(e){document.cookie=e.replace(/^ +/,"").replace(/=.*/,"=;expires="+(new Date).toUTCString()+";path=/")}),location.reload()}
</script>
</body>
</html> 