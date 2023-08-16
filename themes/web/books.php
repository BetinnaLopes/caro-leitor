<?php  
    $this->layout("_theme");
?>

<?php
      foreach ($books as $book){
            ?>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                        </div>
                        <h2><a href=""><?= $book->name_books; ?></a></h2>
                        <div class="product-carousel-price">
                            <ins><?= $book->synopsis; ?></ins> <del><?= $book->gender; ?></del>
                            <ins><?= $book->date_publication; ?></ins> <del><?= $book->name_author; ?></del>
                        </div>                       
                    </div>
                </div>

<?php
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Filtro de Gêneros de Livros</title>
  <style>
    /* Estilos para a checkbox */
    .genre-filter label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .genre-filter input[type="checkbox"] {
      margin-right: 5px;
    }

    /* Estilos para o resultado do filtro */
    #filtered-books {
      margin-top: 10px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>Filtro de gêneros de livros</h1>

  <div class="genre-filter">
    <label>
      <input type="checkbox" name="genre" value="fiction"> Ficção
    </label>
    <label>
      <input type="checkbox" name="genre" value="mystery"> Mistério
    </label>
    <label>
      <input type="checkbox" name="genre" value="fantasy"> Fantasia
    </label>
    <label>
      <input type="checkbox" name="genre" value="romance"> Romance
    </label>
    <label>
      <input type="checkbox" name="genre" value="horror"> Terror
    </label>
    <label>
      <input type="checkbox" name="genre" value="drama"> Drama
    </label>
    <label>
      <input type="checkbox" name="genre" value="romantic comedy"> Comédia romântica
    </label>
    <label>
      <input type="checkbox" name="genre" value="biography"> Biografia
    </label>
    <label>
      <input type="checkbox" name="genre" value="poem"> Poema
    </label>
    <label>
      <input type="checkbox" name="genre" value="self help"> Autoajuda
    </label>
    <label>
      <input type="checkbox" name="genre" value="nonfiction"> Não-ficção
    </label>
    <label>
      <input type="checkbox" name="genre" value="crime"> Crime
    </label>
  </div>

  <div id="filtered-books">
    <h2>Livros Filtrados:</h2>
    <ul>
      <!-- Os livros filtrados serão adicionados dinamicamente aqui -->
    </ul>
  </div>

  <script>
    // Obtém todas as checkboxes de gênero
    const genreCheckboxes = document.querySelectorAll('input[name="genre"]');

    // Adiciona um ouvinte de evento para cada checkbox
    genreCheckboxes.forEach(checkbox => {
      checkbox.addEventListener('change', updateFilteredBooks);
    });

    // Função para atualizar a lista de livros filtrados
    function updateFilteredBooks() {
      const filteredBooksContainer = document.querySelector('#filtered-books ul');
      filteredBooksContainer.innerHTML = ''; // Limpa a lista atual

      // Obtém os gêneros selecionados
      const selectedGenres = Array.from(genreCheckboxes)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);

      // Simula uma lista de livros
      const books = [
        { title: 'A Biblioteca da Meia-Noite', genre: 'fiction' },
        { title: 'A Garota do Lago', genre: 'mystery' },
        { title: 'A Vida invisível de Addie Larue', genre: 'fantasy' },
        { title: 'Carrie', genre: 'horror' },
        { title: 'A Culpa é das Estrelas', genre: 'romance' },
        { title: 'Teto para Dois', genre: 'romantic comedy' },
        { title: 'Poemas de Amor', genre: 'poem' },
        { title: 'Rita Lee: uma autobiografia', genre: 'biography' },
        { title: 'É assim que acaba', genre: 'drama' },
        { title: 'As coisas que você só vê quando desacelera', genre: 'self help' },
        { title: 'Mulheres que correm com os lobos', genre: 'nonfiction' },
        { title: 'Lady Killers', genre: 'crime' }
      ];

      // Filtra os livros de acordo com os gêneros selecionados
      const filteredBooks = books.filter(book => selectedGenres.includes(book.genre));

      // Adiciona os livros filtrados à lista
      filteredBooks.forEach(book => {
        const li = document.createElement('li');
        li.textContent = book.title;
        filteredBooksContainer.appendChild(li);
      });

      // Exibe uma mensagem se nenhum livro for encontrado
      if (filteredBooks.length === 0) {
        const li = document.createElement('li');
        li.textContent = 'Nenhum livro encontrado para os gêneros selecionados.';
        filteredBooksContainer.appendChild(li);
      }
    }
  </script>
</body>
</html>

