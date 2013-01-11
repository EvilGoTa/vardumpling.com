
<?php
  $car = (object)array(
          'name' => 'var_dumpling()',
          'about' => 'A Google Chrome extension that beautifies your var_dumps and makes them easier for humans to comprehend automatically. No pre tags and no libraries needed!',
          'version' => 'beta',
          'libraries' => FAlSE,
          'pre_tags' => null,
          'cost' => 0,
          'installation' => array(
            'github' => 'https://github.com/alexnaspo/var_dumpling-chrome',
            'chome_web_store' => 'coming soon!',
            'firefox_web_store' => 'coming soon!'
          ),
          'support' => 'Please create an issue on github',          
          'creator' => array(
            'name'  => 'Alex Naspo',
            'website' => 'alexnaspo.com',
            'github' => 'https://github.com/alexnaspo'

          )
        ); 
  // var_dump($car);die;

?>
<html>
<link rel="stylesheet" href="/public/css/var_dumpling.css">
<head>
  <link rel="shortcut icon" href="/public/img/icon128.png" type="image/x-icon" />

  <title>Var_dumpling</title>
</head>
<body>
  <div id="var_dump">
    <?php echo 'object(stdClass)#1 (9) { ["name"]=> string(14) "var_dumpling()" ["about"]=> string(155) "A Google Chrome extension that beautifies your var_dumps and makes them easier for humans to comprehend automatically. No pre tags and no libraries needed!" ["version"]=> string(4) "beta" ["libraries"]=> bool(false) ["pre_tags"]=> NULL ["cost"]=> int(0) ["installation"]=> array(3) { ["github"]=> string(48) "https://github.com/alexnaspo/var_dumpling-chrome" ["chome_web_store"]=> string(12) "coming soon!" ["firefox_web_store"]=> string(12) "coming soon!" } ["support"]=> string(32) "Please create an issue on github" ["creator"]=> array(3) { ["name"]=> string(10) "Alex Naspo" ["website"]=> string(13) "alexnaspo.com" ["github"]=> string(28) "https://github.com/alexnaspo" } }'
    ?>
  </div>
  <div id="var_dumpling">
<div class="element nestLevel0" style="padding-left:0px;"><span class="object">object(stdClass)#1 (9) {</span></div><div class="element nestLevel1" style="padding-left:10px;"><span class="index">["name"]</span> <span class="string"> "var_dumpling()"</span></div><div class="element nestLevel1" style="padding-left:10px;"><span class="index">["about"]</span> <span class="string"> "A Google Chrome extension that beautifies your var_dumps and makes them easier for humans to comprehend automatically. No pre tags and no libraries needed!"</span></div><div class="element nestLevel1" style="padding-left:10px;"><span class="index">["version"]</span> <span class="string"> "beta"</span></div><div class="element nestLevel1" style="padding-left:10px;"><span class="index">["libraries"]</span> <span class="bool"> false </span> </div><div class="element nestLevel1" style="padding-left:10px;"><span class="index">["pre_tags"]</span> NULL</div><div class="element nestLevel1" style="padding-left:10px;"><span class="index">["cost"]</span> <span class="int"> 0 </span> </div><div class="element nestLevel1" style="padding-left:10px;"><span class="index">["installation"]</span> <span class="array">array(3) {</span></div><div class="element nestLevel2" style="padding-left:20px;"><span class="index">["github"]</span> <span class="string"> "https://github.com/alexnaspo/var_dumpling-chrome"</span></div><div class="element nestLevel2" style="padding-left:20px;"><span class="index">["chome_web_store"]</span> <span class="string"> "coming soon!"</span></div><div class="element nestLevel2" style="padding-left:20px;"><span class="index">["firefox_web_store"]</span> <span class="string"> "coming soon!"</span></div><div class="element nestLevel1" style="padding-left:10px;">}</div><div class="element nestLevel1" style="padding-left:10px;"><span class="index">["support"]</span> <span class="string"> "Please create an issue on github"</span></div><div class="element nestLevel1" style="padding-left:10px;"><span class="index">["creator"]</span> <span class="array">array(3) {</span></div><div class="element nestLevel2" style="padding-left:20px;"><span class="index">["name"]</span> <span class="string"> "Alex Naspo"</span></div><div class="element nestLevel2" style="padding-left:20px;"><span class="index">["website"]</span> <span class="string"> "alexnaspo.com"</span></div><div class="element nestLevel2" style="padding-left:20px;"><span class="index">["github"]</span> <span class="string"> "https://github.com/alexnaspo"</span></div><div class="element nestLevel1" style="padding-left:10px;">}</div><div class="element nestLevel0" style="padding-left:0px;">}</div>
  </div>



  <div id="details">
    <img id="icon" src="/public/img/icon48.png">
    
    <div id="title">
      <h3>Turn off var_dumpling</h3>
      <!-- <button id="switch">Here</button> -->
    </div>
  </div>
  
</body>
<script type="text/javascript" src="/public/js/jquery.js"></script>
<script type="text/javascript" src="/public/js/var_dumpling.js"></script>
</html>
