<script>
function textCounter(textField, showCountField) {
  if (textField.value.length > 0) {
        showCountField.value = textField.value.length;
	}
}
</script>
</head><?php

/* Counts characters in a text string and assesses their suitability for headlines, Tweets or meta descriptions */

echo 'Ready to count characters?<hr>

<br>

<FORM METHOD="GET" ACTION="charcountcoach2.php">
You have typed <input readonly type="text" name="countDisplay" size="3" maxlength="3" value="0">  characters so far<br>Type in your text:<br>
<TEXTAREA  NAME="typedtext" ROWS=2 COLS=114 onKeyDown="textCounter(this.form.typedtext,this.form.countDisplay);" onKeyUp="textCounter(this.form.typedtext,this.form.countDisplay);" WRAP=soft></textarea>
<br>


<span STYLE="font-size:.70em;">*********10********20********30********40********50********60********70********</a></span>
<br>
<input type=submit value=Submit> for a use case analysis displayed below. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=reset  value=reset>
<BR>

</FORM>';




?>