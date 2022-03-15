<?php
/*
Plugin Name: Hello World
Description: Echos "Hello World" in footer of theme
Version: 1.0
Author: Chris Cagle
Author URI: http://www.cagintranet.com/
*/
 
# get correct id for plugin
$thisfile=basename(__FILE__, ".php");
 
# register plugin
register_plugin(
	$thisfile, //Plugin id
	'Light Theme admin Mod', 	//Plugin name
	'1.8', 		//Plugin version
	'Mateusz Skrzypczak',  //Plugin author
	'http://www.multicolor.stargard.pl/', //author website
	'Light Admin Theme for get simple now with config', //Plugin description
	'plugins', //page type - on which admin tab to display
	'hello_light_theme'  //main function (administration)
);


i18n_merge('light_theme') || i18n_merge('Light_theme','en_US');
		global $i18n; 


register_script('lightscript', $SITEURL.'plugins/light_theme/js/script.js', '0.1', TRUE);
register_style('lightstyle', $SITEURL.'plugins/light_theme/css/lightstyle.css','0.1', FALSE);


queue_script('lightscript', GSBACK); 
 
queue_style('lightstyle', GSBACK); 
 
# activate filter 
add_action('header','light_theme'); 
add_action(' plugin-hook','light_theme'); 

add_action('index-login','light_themeindex'); 
 
 add_action('pages-sidebar','clonethis_light_theme');

# add a link in the admin tab 'theme'
add_action('plugins-sidebar','createSideMenu',array($thisfile,'Light Theme Admin'));
 

# functions
function light_theme() {
	
	
	 $plugin_id = 'lightadmin';
 
// Set up the folder name and its permissions
// Note the constant GSDATAOTHERPATH, which points to /path/to/getsimple/data/other/
$folder        = GSDATAOTHERPATH . '/' . $plugin_id . '/';
$lightadminbg  = $folder . 'lightadminbackgroundcolor.txt';
$lightadminbodycolor  = $folder . 'lightadminbodycolor.txt';
	$googlefonts  = $folder . 'googlefonts.txt';
	$fontfamily  = $folder . 'fontfamily.txt';
$fontsizebody  = $folder . 'fontsizebody.txt';
$ownstyle = $folder . 'ownstyle.txt';
$headersize = $folder . 'headersize.txt';
$h3size = $folder . 'h3size.txt';
$checkboxfile = $folder . 'checkboxfile.txt';
$leftorright = $folder . 'leftorright.txt';

	echo ('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
	
	echo '<style> ';
	
	echo file_get_contents($googlefonts); echo'.header{ background:'; echo file_get_contents($lightadminbg );
	echo ' !important }
	
 .edit-nav a:hover{background:';echo file_get_contents($lightadminbg ) ;echo ' !important} 
	';echo '#sidebar .snav li a:link, #sidebar .snav li a:visited {background:';
echo file_get_contents($lightadminbg );
	echo ' !important } '; 
	echo '#page_submit{
	background:';echo file_get_contents($lightadminbg );echo'}';
	echo ' body{';
	echo file_get_contents($fontfamily); echo '
	background-color:';echo file_get_contents($lightadminbodycolor);echo'!important}';
	
echo file_get_contents($ownstyle);

echo 'body {font-size:';
	echo file_get_contents($fontsizebody);
	echo' !important}';
echo'#sitename{font-size:';
echo file_get_contents($headersize);

echo' !important}';

echo '#maincontent h3{ font-size:';
echo file_get_contents($h3size);
echo' !important}';echo file_get_contents($checkboxfile);
echo file_get_contents($leftorright);
echo'
	</style>';
	

	
};


function clonethis_light_theme(){



}




function light_themeindex() {


 $plugin_id = 'lightadmin';
 
// Set up the folder name and its permissions
// Note the constant GSDATAOTHERPATH, which points to /path/to/getsimple/data/other/
$folder        = GSDATAOTHERPATH . '/' . $plugin_id . '/';
$lightadminbg  = $folder . 'lightadminbackgroundcolor.txt';
$lightadminbodycolor  = $folder . 'lightadminbodycolor.txt';
	$googlefonts  = $folder . 'googlefonts.txt';
	$fontfamily  = $folder . 'fontfamily.txt';
$ownstyle = $folder . 'ownstyle.txt';
$fontsizebody  = $folder . 'fontsizebody.txt';
$headersize = $folder . 'headersize.txt';
$checkboxfile = $folder . 'checkboxfile.txt';
$modernuse = $folder . 'modernuse.txt';
$leftorright = $folder . 'leftorright.txt';

		$fontsizebody  = $folder . 'fontsizebody.txt';

	echo ('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
	
	echo '<style> ';
	
	echo file_get_contents($googlefonts); echo'.header{ background:'; echo file_get_contents($lightadminbg ); echo ' !important }
	
 .edit-nav a:hover{background:';echo file_get_contents($lightadminbg ) ;echo ' !important} 
	';echo '#sidebar .snav li a:link, #sidebar .snav li a:visited {background:';
echo file_get_contents($lightadminbg );
	echo ' !important } '; 
	echo '#page_submit{
	background:';echo file_get_contents($lightadminbg );echo'}';
	echo 'body{';
	echo file_get_contents($fontfamily);echo'
	background-color:';echo file_get_contents($lightadminbg );echo'!important}';
	echo'#maincontent  h3{
		';echo file_get_contents($fontfamily) ;echo' !important }';
echo file_get_contents($ownstyle);
echo'body{font-size:';
	echo file_get_contents($fontsizebody);
echo'}';
echo file_get_contents($checkboxfile);
echo file_get_contents($leftorright);

echo'
	</style>';
	
	
	
	echo ('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');


}





function hello_light_theme() {
	

	
 $plugin_id = 'lightadmin';
 
// Set up the folder name and its permissions
// Note the constant GSDATAOTHERPATH, which points to /path/to/getsimple/data/other/
$folder        = GSDATAOTHERPATH . '/' . $plugin_id . '/';
$lightadminbg  = $folder . 'lightadminbackgroundcolor.txt';
$lightadminbodycolor  = $folder . 'lightadminbodycolor.txt';
$googlefonts  = $folder . 'googlefonts.txt';
$fontfamily  = $folder . 'fontfamily.txt';
$ownstyle = $folder . 'ownstyle.txt';
$bgindex = $folder . 'bgindex.txt';
$fontsizebody = $folder . 'fontsizebody.txt';
$headersize = $folder . 'headersize.txt';
$h3size = $folder . 'h3size.txt';
$checkboxfile = $folder . 'checkboxfile.txt';
$checkboxfiletrue = $folder . 'checkboxfiletrue.txt';
$leftorright = $folder . 'leftorright.txt';
$chmod_mode    = 0755;
$folder_exists = file_exists($folder) || mkdir($folder, $chmod_mode);
 
// Save the file (assuming that the folder indeed exists)


i18n_merge('light_theme') || i18n_merge('Light_theme','en_US');
		global $i18n; 
		
		
	
 
$styleupload = '

#upload #imageTable tr:first-child {
  width: 100%;
  display: none !important
}
#upload #imageTable tbody {
  display: flex;
  flex-wrap: wrap
}
#upload #imageTable tr {
  width: 30%;
  margin: 1.5%;
  height: calc(auto - 5px);
  display: flex;
  flex-direction: column;
  ;
  box-sizing: border-box;
  border: solid 1px #ddd;
  box-shadow: 1px 1px 10px #ddd;
}
#upload #imageTable tr td {
  flex: 1 !important;
  width: 100% !important;
  padding: 10px;
  text-align: center !important;
  box-sizing: border-box;
  padding: 10px;
}
.imgthumb img {
  width: 25%;
}
.folder {
  text-align: center;
}
#imageTable .folder img {
  display: none;
}
#upload #imageTable tr a {
  text-decoration: none;
}
#upload #imageTable tr a {
  text-decoration: none;
  font-size: 13px;
}
#upload #imageTable td {
  transition: all 250ms linear
}
#upload #imageTable td:hover {
  background: var(--main-bg-color);
  color: #fff !important
}
#upload #imageTable td:hover span {
  color: #fff
}
#upload #imageTable td.delete:hover {
  background: #a80038;
}
#upload #imageTable td.delete:hover a {
  color: #fff !important;
  background: transparent
}
.delconfirm:hover {
  background: transparent !important;
}
#upload #imageTable td:hover a {
  color: #fff
}
#imageTable td.delete:hover a {
  background: transparent !important;
}
@media (max-width:800px) {
  #upload #imageTable tr {
    width: 100%
  }
}
';
 
 
 
$styleclassic = '
.modern{display:none !important;}
';

$leftsidebar ='

#sidebar{float:left;}
#maincontent{float:right;}

'; 



	
		
  	echo'

	
	 <form  action="#" style="margin:0 auto; " method="POST">

<div style="width:100%;padding:20px 0;display:flex">
<div style="margin-right:10px;"> <b>'. i18n_r("light_theme/MASTERCOLORS").'</b><br>
<input type="text" style="" value="'; echo file_get_contents($lightadminbg ) ; echo'"  name="bgcolor" />  default : #132238
</div>


<div >
 <b>'. i18n_r("light_theme/BODYCOLOR").'</b><br>
 <input type="text" style="" value="';echo file_get_contents($lightadminbodycolor ) ;echo '"  name="bodycolor" />  default : #EBF0F6
</div>
 
 </div>
 
 
 <div style="width:100%;display:flex;padding:20px 0;">

 <div style="margin-right:10px;">
'. i18n_r("light_theme/MODERN").'
     
   
   <select name="modern">
   		<option value="';echo $styleclassic;echo '" >'.i18n_r("light_theme/CLASSICMODE").'</option>
		<option value="';echo $styleupload ;echo'" >'.i18n_r("light_theme/MODERNMODE").'</option>

	</select>

</div>
   
   <div>
'. i18n_r("light_theme/LEFTSIDE").'


  <select name="leftsidebar">
  <option value="1" >'.i18n_r("light_theme/RIGHTSIDE").'</option>
		<option value="'.$leftsidebar.'" >'.i18n_r("light_theme/LEFTSIDE").'</option>
		
	</select>
  
   </div>
   
   </div>
  
<p style="width:100%">
'. i18n_r("light_theme/FONTAWESOME").' <a href="https://fonts.google.com/" target="_blank"> Google fonts use @import and put to the form</a>
 <br>
<input type="text" style="width:90%;padding:10px;border-radius:5px;" value="';echo file_get_contents($googlefonts ) ;echo '"  name="googlefont" />
<br> 
' . i18n_r("light_theme/FONTFAMILY"). '<br>

<input type="text" style="width:90%;padding:10px;border-radius:5px;" value="';echo file_get_contents($fontfamily ) ;echo '"  name="fontfamily" />
<br>
'. i18n_r("light_theme/FONTSIZEBODY"). '<br>

<input type="text" style="width:90%;padding:10px;border-radius:5px;" value="';echo file_get_contents($fontsizebody ) ;echo '"  name="fontsizebod" />
<br>

'. i18n_r("light_theme/FONTSIZEHEADER").' <br>

<input type="text" style="width:90%;padding:10px;border-radius:5px;" value="';echo file_get_contents($headersize ) ;echo '"  name="headers" />
<br>

  ' . i18n_r("light_theme/MAINCONTENTH3"). '<br>

<input type="text" style="width:90%;padding:10px;border-radius:5px;" value="';echo file_get_contents($h3size ) ;echo '"  name="h3" />
<br>

<br>
'. i18n_r("light_theme/CUSTOMSTYLE").'
</br>	
 <textarea style="width:90%;padding:10px;border-radius:5px;height:300px" name="style" ">
 
 ';echo file_get_contents($ownstyle );echo'
 
 </textarea>
 

   <br>
	
	<br>
	<input type="submit" name="submit" style="background:#000;color:#fff;padding:10px;margin-top:10px;border:solid 0 ;border-radius:10px;" value="'. i18n_r("light_theme/SAVESETTING").'" />
 

 

 </form>';
 
 
 echo'<br><br>';


 


 


 
 	    
  if(isset($_POST['submit'])){
$bgcolor = $_POST['bgcolor'];
$bodycolor = $_POST['bodycolor'];
$googlefont = $_POST['googlefont'];
$googlefontfamily = $_POST['fontfamily'];
$style = $_POST['style'];
$fontsizebod = $_POST['fontsizebod'];
$backgroundindex = $_POST['backgroundindex'];
$headers = $_POST['headers'];
$modern = $_POST['modern'];
$leftsidebar = $_POST['leftsidebar'];
$h3 = $_POST['h3'];

  file_put_contents($lightadminbg , $bgcolor);
  file_put_contents($lightadminbodycolor , $bodycolor);
  file_put_contents($googlefonts , $googlefont);
  file_put_contents($fontfamily , $googlefontfamily);
  file_put_contents($ownstyle , $style);
  file_put_contents($bgindex , $backgroundindex);
  file_put_contents($fontsizebody , $fontsizebod);
  file_put_contents($headersize , $headers);
   file_put_contents($h3size , $h3);
      file_put_contents($checkboxfile , $modern);
	      file_put_contents($leftorright , $leftsidebar);
   echo '<div style=" position:fixed;top:0;left:0; width:100%;background:green;color:#fff;border-radius:5px;padding:10px;text-align:center;">ok ! ';

  echo' choose a different page to see the changes';
  echo'</div>';
	
	
	

  };

  
  }	;
  
  
  


  
?>