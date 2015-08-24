<?php

  $typedtext = $_GET['typedtext'];
 

if (isset($_GET['hdldvwidth2']))
   {
     $hdldvwidth = $_GET['hdldvwidth2'];
   } else {
     $hdldvwidth = 600; //hdldvwidth is headline div width and will be measured in pixels
   }

if (isset($_GET['hdldvfontpctmod2']))
   {
     $hdldvfontpctmod = $_GET['hdldvfontpctmod2'];
   } else {
     $hdldvfontpctmod = 50; //hdldvfongpctmod is headline div font percent modfication and is measure in percent
   }

?>
<head>
<style>

body {
    background-color: linen;
     font-family:  Consolas, "Letter Gothic", Monaco, "Prestige Elite", monofur, Courier, monospace;
     width:960px;
}

h1 {
    color: maroon;
} 
</style>
function textCounter(textField, showCountField) {
  if (textField.value.length > 0) {
        showCountField.value = textField.value.length;
	}
}
</script>
</head>
<A HREF='charcountcoach1.php'>Do it again?</a><hr>

This page will assess a short section of text. First and foremost returning its number of characters. Then it will provide rudimentary assessments of its suitability, judged solely on that character count, for its use as a Tweet, a meta description in the head section of a Web page, an IRC post,
a headline or as the blurb for a Facebook post. Any suggestions that are readily made on the basis of the character count will be given.
<p>
<FORM METHOD="GET" ACTION="charcountcoach2.php">

<TEXTAREA  NAME="typedtext" ROWS=2 COLS=114 onKeyDown="textCounter(this.form.typedtext,this.form.countDisplay);" onKeyUp="textCounter(this.form.typedtext,this.form.countDisplay);" WRAP=soft><?php echo $typedtext ?></textarea>
<br>


<span STYLE='font-size:.70em;'>*********10********20********30********40********50********60********70********</a></span>
<br>
<input type=submit value=Submit> for a use case analysis displayed below. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=reset  value=reset>
<BR>



<?php
//The astrericks below, and above under the textarea, give a rudimentary scale to assess character string length
echo '*********10********20********30********40********50********60********70********<br>';
echo 'Here is what you typed:<br>';
   
$charcount = strlen($typedtext);
echo  'This line has <strong>' , $charcount , '</strong> characters.';
#These variables calculate the remaining number of characters for different purposes
#headline variables
$head56over = $h1headlineremainder54 * -1;
$h1headlineremainder66 = 66 - $charcount;
$head66over = $h1headlineremainder66 * -1;
#tweet variables
$tweetoverage = $tweetremainder * -1;
#metadescription variables
$metadescrip_overage = $metadescripremainder * -1;
#IRC vars
$noIRCflooding = 365 - $charcount;
$IRCfloodingoverage = $noIRCflooding * -1;
#fb vars
$fbover = $fbremainder * -1;
#tech constraint vars
$chor80drupcodeover = $char80linedrupalcode * -1;
  
echo '<hr>';
//THE WRITING STYLE section refers to usages that the writer has control over. In most cases a longer-than-optimal character string will work technically, but it would either bad or be poor form. Twitter will not post more than 140 characters and will self-correct you. END NOTE:  WRITING STYLE
  
echo '<h2>Writing Style</h2>';
echo '<strong STYLE=\'font-size:1.05em\'>H1 Headline</strong> 54 characters<br>';
   
 if ($charcount < 55) {
   echo ("An H1 headline for a 960 pixel width, such as this page, is about 54 characters. <br>");
   echo '<div STYLE=\'width:960px; padding:0px; border: 1px solid blue; margin:0px; font-size:100%\'><h1>' , $typedtext , '</h1></div><p>';
     } else {
         echo 'Your text is <strong>' ,  $head56over , '</strong> characters too long for a 54-character H1 headline stretching across a 960px page.<p>';
     } 
 if ($charcount < 67) {
   echo 'CSS stylings could alter a headline\'s look.<br>';
   echo ("Here is what the headline above would look like in a<br> <strong>$hdldvwidth</strong> pixel-wide div");
   echo '<div STYLE=\'width:',  $hdldvwidth , '; padding:2px; border: 1px solid blue; margin:2px; font-size: ' , $hdldvfontpctmod , '%\'><h1>' , $typedtext , '</h1></div>';    
?>


<FORM METHOD="GET" ACTION="charcountcoach2.php"> 
Try a new divisor width, in pixels:  
<TEXTAREA NAME="hdldvwidth2" ROWS=1 COLS=6 WRAP=soft><?php echo $hdldvwidth ?></textarea> 
<br>
and/or a new font size in percentage:
<TEXTAREA NAME="hdldvfontpctmod2" ROWS=1 COLS=4 WRAP=soft><?php echo $hdldvfontpctmod  ?></textarea>
<br>
Change the Headline if necessary:
 <TEXTAREA NAME="typedtext" ROWS=2 COLS=114 WRAP=soft> <?php echo $typedtext ?></textarea>
<br><input type=submit value="submit"> <input type=reset  value="reset">
</FORM>  

<?php        
    } else {
          echo 'This text is also too long for smaller headline fonts, especially if there is less space for it. For example, your text is <strong>' ,  $head66over , '</strong> characters too long for a 66-character headline across 600 pixels.<p>';
     } 
    echo '<p>';
  
  echo '<strong STYLE=\'font-size:1.05em\'>Twitter Analysis</strong> 140 characters<br>';
   if ($charcount < 141) {
  echo 'You could use <strong>' , $tweetremainder , '</strong> more characters in a tweet.';
    echo '<br>';
    echo 'If you add a couple hashtags , then you have about <strong>', $afterhashtags6and8 , '</strong> characters left for a URL.';
    } else {
    echo 'Your text is <strong>' , $tweetoverage , '</strong> characters too long for Twitter.';
    }
     echo '<br>';
     echo 'One line of the text area box above is designed to hold 140 characters.';
       
       echo '<p>';
  
  if ($charcount < 477) {        
    echo 'FB truncates at 477 characters.  Your text could have <strong>' , $fbremainder , '</strong> more characters in your FB post before truncation starts.';
      } else {
        echo 'Cut <strong>' , $fbover , '</strong> characters from your FB post if you wish to avoid truncation. FB allows 5,000 characters in a post.';
      }
echo '<p>';  
   
  echo '<strong STYLE=\'font-size:1.05em\'>Metadescription</strong> 160 characters<br>';
  
  if ($charcount < 161) {
  echo 'You could use <strong>' , $metadescripremainder , '</strong> more characters in a metadescription before search engines start snipping off the end of the sentence.';
  } else {
    echo 'Your text is <strong>' , $metadescrip_overage , '</strong> characters too long for a metadescription.';
    }
    
    
  if ($charcount < 366) {        
    echo ("IRC netiquette limits posts to four lines  (about 365 characters).");
      } else {
        echo 'You\'re flooding dude! Cut <strong>' , $IRCfloodingoverage , '</strong> characters from your IRC post.';
      }
  
echo '<hr>';
echo '<h2>Technical Constraints</h2>';
echo '<strong STYLE=\'font-size:1.05em\'>256-Character Limit</strong><br>';
     echo 'If you are faced with a 256-character limit, for a filepath perhaps, you would have <strong>' , $limit256char , '</strong> characters left.';
 echo '<p>';

   

     echo '<strong STYLE=\'font-size:1.05em\'>Drupal Code Standard of 80 Characters Per Line</strong><br>';
   if ($charcount < 477) {        
  echo ("<A HREF=\'https://www.drupal.org/coding-standards\'>Drupal coding standards</a> requires 80 characters per line."); 
   } else {
     <A HREF=\'https://www.drupal.org/coding-standards\'>Drupal coding standards</a> requires 80 characters per line.");
    }
   
   
   
?>