<html>
    <head> 
        <title>Cadastro</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container mt-5">
    <h2 class="mb-4">Cadastro</h2>
    <form action="../control/alunoControl.php" method"ṔOST">
    <input type="hidden" name="acao" value="1">
      <div class="mb-3"><label for="nome" class="form-label">nome</label><input type='text' name='nome' class="form-control"></div>
	<div class="mb-3"><label for="nascimento" class="form-label">nascimento</label><input type='date' name='nascimento' class="form-control"></div>
	<div class="mb-3"><label for="curso" class="form-label">curso</label><input type='text' name='curso' class="form-control"></div>
	
      <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    </body>
</html>