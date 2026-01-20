<header>
    <nav>
        <div class="nav-links">
            <a href="?page=home">Hem</a>
            <a href="?page=api_model">API Debug</a>
        </div>

        <form action="index.php" method="GET" class="search-form">
            <input type="hidden" name="page" value="home"> <input type="text" name="city" placeholder="Sök stad..." required>
            <button type="submit">Sök</button>
        </form>
    </nav>
</header>