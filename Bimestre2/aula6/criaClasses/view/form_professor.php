<html>
    <head> 
        <title>Cadastro</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container mt-5">
    <h2 class="mb-4">Cadastro</h2>
    <form action="../control/professorControl.php" method"ṔOST">
    <input type="hidden" name="acao" value="1">
      <div class="mb-3"><label for="nome" class="form-label">nome</label><input type='text' name='nome' class="form-control"></div>
	<div class="mb-3"><label for="titulacao" class="form-label">titulacao</label><input type='text' name='titulacao' class="form-control"></div>
	
      <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    </body>
</html>