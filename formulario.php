<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórmulário</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="box">
<form action="">
<fieldset>
<legend><b>Fórmulário de Clientes</b></legend>
<br>
<div class="inputBox">
    <input type="text" name="nome" id="nome" class="inputUser" required>
    <label for="nome" class="labelInput">Nome</label>
</div>
<br><br>
<div class="inputBox">
    <input type="text" name="nome" id="email" class="inputUser" required>
    <label for="email" class="labelInput">Email</label>
</div>
<br><br>
<div class="inputBox">
    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
    <label for="telefone" class="labelInput">Telefone</label>
    <br>
    <p>Sexo: </p>
    <input type="radio" id="feminino" name="genero" value="feminino" required>
    <label for="feminino">Feminino</label>
<br>
    <input type="radio" id="masculino" name="genero" value="masculino" required>
    <label for="masculino">Masculino</label>
<br>
    <input type="radio" id="outro" name="genero" value="outro" required>
    <label for="outro">Outro</label>
</div>
<br><br>
<div class="inputBox">
    <input type="text" name="cidade" id="cidade" class="inputUser" required>
    <label for="cidade" class="labelInput">Cidade</label>
</div>
<br><br>

<div class="inputBox">
    <input type="text" name="estado" id="estado" class="inputUser" required>
    <label for="estado" class="labelInput">Estado</label>
</div>
<br><br>

<div class="inputBox">
    <input type="text" name="endereco" id="endereco" class="inputUser" required>
    <label for="endereco" class="labelInput">Endereço</label>
</div>
<br><br>

<input type="submit" name="submit" id="submit">


</fieldset>




</form>
    </div>
    
</body>
</html>