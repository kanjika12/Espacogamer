<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Escreva</title>
    <link rel="stylesheet" href="bulma.min.css">
    
    
</head>
<body>
<div id="container">
<header>
		  <img class="fundo"src="he.jpg" alt="Fundo" title="Fundo">

		  <nav>
			<br><br>
			<div class="menu">
			  <ul>
				<li> <a href="index.html">Inicio</a></li>
				<li> <a href="dez.html">Top 10 Games</a></li>
				<li> <a href="https://isthereanydeal.com/">Promoções De Jogos</a></li>
				<li> <a href="artigos.html">Artigos</a></li>
				<li> <a href="reviews.html">Reviews</a></li>
			  </ul>
			</div>
		  </nav>
		</header>


<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column - is half">
                <h1 class="title has-text-centered">Preencha Os Dados Abaixo</h1>
        
                <form action="enviar.php" method="POST">
                  <div class="field">
                      <label class="label">Nome</label>
                      <div class="control">
                          <input name="nome" class="input" type="text" placeholder="Seu Nome">
                  </div>   
                  </div>

                  <div class="field">
                      <label class="label">Email *</label>
                      <div class="control">
                          <input name="email" class="input" type="email" placeholder="Seu Email" required>
                  </div>
                  </div>  

                  <div class="field">
                      <label class="label">Assunto *</label>
                      <div class="control">
                      <div class="select is-fullwidth">    
                      <select name="assunto">
                        <option>Melhorias No Site</option>
                        <option>Qual Review Gostaria De Ver</option>
                        <option>Quais Artigos Tem Interesse No Site</option>
                        <option>Qual Assunto Além De Games Você Quer Ver Aqui?</option>
                       </select>
                    </div>   
            </div>
      </div>

<div class="field">
    <label class="label">Mensagem *</label>
    <div class="control">
    <textarea name="mensagem" class="textarea"placeholder="Deixa Sua Mensagem"maxlength="2000"></textarea>
    </div>
</div>

<div class="field is-grouped">
     <div class="control">
         <button class="button is-link is-medium">Enviar</button>
         </div>
         </div>
</form>
</div>
</div>
</div>


</section>

<footer>
	<section class="foote">
	   
	  <img src="foote.jpg" alt="gaming" title="gaming"width="100%"height="auto">
	<nav>
	  <br><br>
	  <div class="menu">
		<ul>
		  <li> <a href="index.html">Inicio</a></li>
		  <li> <a href="https://www.youtube.com/user/ancaaaa">Canal No Youtube</a></li>
		  <li> <a href="https://steamcommunity.com/profiles/76561198444828882">Perfil Steam</a></li>
		  <li> <a href="contato.php">Contato</a></li>
		</ul>
	  </div>
	</nav><br>
	<h3> Criado Por LM Criações 2021. &copy;</h3>
	</section>
	 </footer>
     </div>
    
</body>
</html>