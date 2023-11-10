<?php
    // "categories" => $categories
    $this->layout("_theme", []);
?>

<section id="contact" class="contact section-bg">
<div class="container">
<h3>Cadastrar</h3>
    <form>
        <div>
            Nome: <input name="name" type="text">
        </div>
        <div>
            E-mail: <input name="email" type="text">
        </div>
        <div>
            Senha: <input name="password" type="text">
        </div>
        <div>
            <button>Enviar</button>
        </div>
        <p id="success"></p>

        <a>Já tem uma conta?<a href="<?= url("login"); ?>">Faça login</a>
    </form>
</div>
</section>
<script type="text/javascript">
    var success = document.querySelector("#success");
    const form = document.querySelector("form");

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const inputs = form.querySelectorAll('input');
        let allFieldsFilled = true;
        inputs.forEach((input) => {
            if (input.value.trim() === '') {
                allFieldsFilled = false;
                return;
            }
        });

        if (allFieldsFilled) {
            const data = await fetch(`<?= url("api/user"); ?>`, {
                method: "POST",
                body: new FormData(form)
            });
            const user = await data.json();
            console.log(user);
            success.innerHTML = 'Usuário cadastrado com sucesso';
        } else {
            success.innerHTML = 'Por favor, preencha todos os campos do formulário';
        }
    }); 
</script>

