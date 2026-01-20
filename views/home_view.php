<section class="weather-grid">
    <?php if (isset($multiData) && is_array($multiData)): ?>
        <?php foreach ($multiData as $cityData): ?>
            <article class="card">
                <h3><?= $cityData['location']['name'] ?></h3>
                <img src="https:<?= $cityData['current']['condition']['icon'] ?>" alt="väder">
                <p class="temp"><?= round($cityData['current']['temp_c']) ?>°C</p>
                <p><?= $cityData['current']['condition']['text'] ?></p>
            </article>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Ingen data hittades.</p>
    <?php endif; ?>
</section>

<style>
    /* Behållaren för alla kort */
    .weather-grid {
        display: grid;
        /* Skapar kolumner som är minst 250px, men fyller ut resten av utrymmet */
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto; /* Centrerar hela gridden */
    }

    /* Styling för det enskilda kortet */
    .card {
        background: white;
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        border: 1px solid #eee;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    /* Lite effekt när man hovrar över ett kort */
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .card h3 {
        color: #2c3e50;
        margin-bottom: 10px;
        font-size: 1.4rem;
    }

    .temp {
        font-size: 2.5rem;
        font-weight: bold;
        color: #3498db;
        margin: 10px 0;
    }

    .card img {
        width: 64px;
        height: 64px;
    }

    .card p {
        color: #7f8c8d;
        text-transform: capitalize; /* Gör väderbeskrivningen snyggare */
    }
</style>