   <html>
<head>
   <title>Calculadora</title
<style type="text/css">
    
</style>
<style type="text/css">
   .linha{
		padding: 5px;
	}
	table{
		border: 5px solid #cccccc;
		border-radius: 15px;
		background-color: #000;
		padding: 5px;
		height: 300px;
	}
	.linha input{
		border: 2px solid white;
		background-color: #cccccc;
		color: black;
		font-family: 'arial';
		font-weight: bold;
		font-size: 20px;
		cursor: pointer;
		transition: ease-out;
		transition-duration: .4s;
		width: 60px;
		height: 40px;
	}
	.linha input:hover{
		color: white;
		background-color: red;
	}
	.result{
		padding: 3px;
		cursor: default !important;
		height: 50px;
		font-size: 20px;
		font-family: 'arial';
		font-weight: bold;
		border: 2px solid #ccc;
		border-radius: 5px;
	}
</style>



</head>
<body>
<CENTER>
   <FORM NAME="Calc">
      <TABLE>
      	<TR>
      		<TD ALIGN="CENTER">
      			<INPUT TYPE="text" CLASS="result"  NAME="Input"  readonly="readonly">
      		</TD>
      	</TR>
      	<TR>
      		<TD ALIGN="CENTER">
      			<DIV class="linha">
      				<INPUT TYPE="button" NAME="one" VALUE="  1  " onClick="Calc.Input.value += '1'">
      				<INPUT TYPE="button" NAME="two" VALUE="  2  " onClick="Calc.Input.value += '2'">
      				<INPUT TYPE="button" NAME="three" VALUE="  3  " onClick="Calc.Input.value += '3'">
      				<INPUT TYPE="button" NAME="plus" VALUE="  +  " onClick="Calc.Input.value += ' + '">
      			</DIV>
      			
      			
      			
      			<DIV class="linha">
      				<INPUT TYPE="button" NAME="four" VALUE="  4  " onClick="Calc.Input.value += '4'">
      				<INPUT TYPE="button" NAME="five" VALUE="  5  " onClick="Calc.Input.value += '5'">
      				<INPUT TYPE="button" NAME="six" VALUE="  6  " onClick="Calc.Input.value += '6'">
      				<INPUT TYPE="button" NAME="minus" VALUE="  -   " onClick="Calc.Input.value += ' - '">
      			</DIV>
      			
      			
      			
      			<DIV class="linha">
      				<INPUT TYPE="button" NAME="seven" VALUE="  7  " onClick="Calc.Input.value += '7'">
      				<INPUT TYPE="button" NAME="eight" VALUE="  8  " onClick="Calc.Input.value += '8'">
      				<INPUT TYPE="button" NAME="nine" VALUE="  9  " onClick="Calc.Input.value += '9'">
      				<INPUT TYPE="button" NAME="times" VALUE="  x  " onClick="Calc.Input.value += ' * '">
      			</DIV>
      
      			
      			<DIV class="linha">
      				<INPUT TYPE="button" NAME="clear" VALUE="  a  " onClick="Calc.Input.value = ''">
      				<INPUT TYPE="button" NAME="zero" VALUE="  0  " onClick="Calc.Input.value += '0'">
      				<INPUT TYPE="button" NAME="DoIt" VALUE="  =  " onClick="Calc.Input.value = eval(Calc.Input.value)">
      				<INPUT TYPE="button" NAME="div" VALUE="  /   " onClick="Calc.Input.value += ' / '">
      			</DIV>
      
      		</TD>
      	</TR>
      </TABLE>
   </FORM>
</CENTER>
</body>
</html> 
