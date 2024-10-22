<main>
    <section>
        <img src="<?= $poster_url ?>" width="300" alt="Poster de <?= $title ?>"
        style="border-radius: 16px" />
    </section>

    <hgroup>
        <h5><?= $title ?> - <?= $until_message?> dias</h5>
        <p>Fecha de estreno: <?= $release_date ?></p>
        <p>La siguiente pelicula a estrenar es: <?= $following_production ?></p>
    </hgroup>
</main>