<script>
function textCounter(textField, showCountField) {
  if (textField.value.length > 0) {
        showCountField.value = textField.value.length;
	}
}
</script>
</head>

/* Counts characters in a text string and assesses their suitability for headlines, Tweets or meta descriptions */

echo 'Ready to count characters?<hr>

<br>

<FORM METHOD="GET" ACTION="charcountcoach2.php">

<TEXTAREA  NAME="typedtext" ROWS=2 COLS=114 onKeyDown="textCounter(this.form.typedtext,this.form.countDisplay);" onKeyUp="textCounter(this.form.typedtext,this.form.countDisplay);" WRAP=soft></textarea>
<br>


<span STYLE="font-size:.70em;">*********10********20********30********40********50********60********70********</a></span>
<br>
<input type=submit value=Submit> for a use case analysis displayed below. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=reset  value=reset>
<BR>






?>