<?php
    $this->layout("_theme", []);
?>

<form id="form-login">
<div class="container">
<h3>Login</h3>
      <div data-conteudo="entrar" id="entrar">           
      <form class="form32">
       <div>
        Email: <input type="text" name="email">
        </div>
        <div>
        Senha: <input type="password" name="password">
        </div>  
        <button>Entrar</button>
        <p id="errorDeLoged"></p>
      </form>
      <a>Quer criar uma conta?<a href="<?= url("registro"); ?>">Registrar</a>
</div>
</div>
<script type="text/javascript" async>
    var trueOrFalse = false;
    
    const url = `<?= url("api/user/login");?>`;

    async function request (url, options) {
        try {
            const response = await fetch (url, options);
            const data = await response.json();
            return data;
        } catch (err) {
            console.error(err);
            return {
                type: "error",
                message: err.message
            };
        }
    }
    var pError = document.querySelector("#errorDeLoged");
    var userLogeded = {
        email: "",
        trueorNot: false
    }
    document.querySelector("form").addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(document.querySelector("form"));
    const options = {
        method: 'POST',
        body: formData
    };
    const resp = await request(url, options);
    console.log(resp.code);
    if (formData.get("email") === "" || formData.get("password") === "") {
        pError.innerHTML = "Por favor, preencha o email e a senha";
    } else if (resp.code === 200) {
        userLogeded.email = resp.email;
        userLogeded.trueorNot = true;
        localStorage.setItem("userLogeded", JSON.stringify(userLogeded));
        pError.innerHTML = "Usuario cadastrado";
        window.location.href = "<?= url(""); ?>";
    } else {
        pError.innerHTML = "Senha ou email incorretos";
    }
});

