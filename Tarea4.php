<!DOCTYPE html>
<html>
        <head>
                <title>Tarea 4</title>        
        </head>
        <body>
            <h1>Ingresar Usuario</h1>
			<form method="post" action="Sesion.php">
			<center>          
                <fieldset style = "width : 40%; margin : 30px; background-color:#B8B8B8;">
                <legend><h3>Usuario</h3></legend><br/>
				<div> 
				Codigo : </br>
                    <input type="text" size="40" maxlength="255" name="codigo"/>                                
                    <br/>
                    <br/>
				Password : </br>
                    <input type="password" size="40" maxlength="255" name="pass">
                    <br/>
                    <br/>
                    <input type="submit" value="Enviar"/>  
                </div>					
                </fieldset>                                                           
                </center>      
            </form>
        </body> 
</html>