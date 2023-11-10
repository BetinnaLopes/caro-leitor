<h2>Testes de API</h2>

<button id="buttonFaqs">Faqs</button>

<div id="divFaqs">
</div>

<script type="module" async>

    import {request, requestDebugError}
        from "<?php echo url("/assets/_shared/functions.js"); ?>";

    // http://localhost/escola-manha/api/faqs
    const url = "<?php echo url("/api/faqs"); ?>";
    console.log(url);

    const options = {
        method: "GET"
    };

    const getFaqs = async () => {
        const faqs = await request(url, options);
        console.log(faqs);
    };

    getFaqs();

    const button = document.querySelector("#buttonFaqs");
    button.addEventListener("click", async () => {
        const faqs = await request(url, options);
        //console.log(faqs);
        faqs.forEach((faq) => {
            document.querySelector("#divFaqs").insertAdjacentHTML("beforeend", `<p>${faq.question} ${faq.answer}</p>`);
        });
    });

    const urlCaroleitor = "<?php echo url("/api/caroleitor/category/2"); ?>";

    fetch(urlCaroleitor).then(response => {
        response.json().then(caroleitor => {
            //console.log(courses);
            caroleitor.forEach(caroleitor => {
                console.log(caroleitor);
            });
        })
    });

</script>