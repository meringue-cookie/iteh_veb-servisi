<?php 
echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark " . $navbarType . "\">"
?>
    <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="Logo">
        FuzzyWuzzy
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="register.php">Make a Reservation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="table.php">Reservation List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>