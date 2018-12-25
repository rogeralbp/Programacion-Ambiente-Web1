<?php
  $title = 'Contact Us';
  require_once './shared/header.php'
?>
<body>
	<style type="text/css">
	
		h1 {
		font-size: 22px;
		font-family: 'Source Sans Pro', sans-serif;
		text-decoration: underline;
		margin: 0px 0px;
		}
 
		p {
			font-family: 'Source Sans Pro', sans-serif;
			font-size: 16px;
			margin-bottom: 0px;
		}
		a {
		  color: #333;
		  text-decoration: none;
		  font-family: 'Source Sans Pro', sans-serif;
		}
		label {
			font-family: 'Source Sans Pro', sans-serif;
			font-size: 16px;
			margin-bottom: 0px;
			font-weight: bold;
		}
		 
		input[type=text], input[type=tel], input[type=email] {
			width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    box-sizing: border-box;
		    border: 2px solid #ccc;
		    border-radius: 4px;
		}
		 
		textarea {
		    width: 100%;
		    height: 150px;
		    padding: 12px 20px;
		    box-sizing: border-box;
		    border: 2px solid #ccc;
		    border-radius: 4px;
		    background-color: #f8f8f8;
		    resize: none;
		}
		 
		input[type=button], input[type=submit], input[type=reset] {
		    background-color: #4CAF50;
		    border: none;
		    color: white;
		    padding: 16px 32px;
		    text-decoration: none;
		    margin: 4px 2px;
		    cursor: pointer;
		    margin-top: 10px;
		}
		 
		input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover {
		    background-color: #333;
		}
		 
		footer {
		  position: fixed;
		  width: 100%;
		  right: 0;
		  bottom: 0;
		  left: 0;
		  padding: 10px 0px 10px 0px;
		  background-color: #333;
		  text-align: center;
		}
		footer a {
		  color: #fff;
		}
	</style>

	<form> 
	<hr>
	<label for="first_name">Nombre</label> <INPUT type="text" size=30 name="first_name"></INPUT> 
	<label for="last_name">Apellido</label> <INPUT type="text" size=30 name="last_name"></INPUT> 
	<label for="email">E-mail</label> <INPUT type="email" size=30 name="email"></INPUT> 
	<label for="message">Mensaje</label> <TEXTAREA rows=5 cols=30 name="message"></TEXTAREA> 
	<br>
	<INPUT type="reset" value="Borrar"> <INPUT type="submit" value="Enviar"><a href="http://www.internetedadinero.com/tutorial-formulario/email_form.php"></a>
	 
    </form> 

</body>
<?php require_once './shared/footer.php' ?>
