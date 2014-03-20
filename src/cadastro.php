<!DOCTYPE html>
<html>
   <head>
   <title>Cadastro de usuário</title>
      <script type="text/javascript" src="scripts/jquery-2.1.0.js"></script>
      <script type="text/javascript" src="scripts/script_cadastro.js"></script>
	 
   </head>
   <body>
      <form id="form_cadastro" name="form_cadastro" method="post" action="database/cadastro_usuario.php">
	    <fieldset>
		   Nome : <input type="text" id="nome" name="nome" />
		   <br>
		   Senha : <input type="text" id="senha" name="senha" />
		   <br>
		   E-mail : <input type="text" id="senha" name="senha" />
		   <br>
		   <button id="btn_cadastrar" name="btn_cadastrar" onClick="validarForm()">Cadastrar</button>
		</fieldset>
	  </form>
   
   </body>
</html>