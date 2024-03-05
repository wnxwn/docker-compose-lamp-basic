<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LAMP STACK</title>
        <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/svg+xml">
        <link rel="stylesheet" href="/assets/css/bulma.min.css">
    </head>
    <body>
        <section class="hero is-medium is-info is-bold">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                        SIMPLE LAMP STACK
                    </h1>
                    <h2 class="subtitle">
                        Your local development environment for CTEC2712
                    </h2>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Environment</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><?= apache_get_version(); ?></li>
                                <li>PHP <?= phpversion(); ?></li>
                                <li>
                                    <?php
                                    $link = new mysqli("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);

                                    // Check connection
                                    if ($link->connect_error) {
                                        die("Connection failed: " . $link->connect_error);
                                    } else {
                                        $result = $link->query("SELECT VERSION() AS version");
                                        $row = $result->fetch_assoc();
                                        echo "MariaDB Database Version: " . $row['version']; 
                                    }
                                    /* close connection */
                                    $link->close();
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Quick Links</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><a href="/phpinfo.php">phpinfo()</a></li>
                                <li><a href="http://localhost:<? print $_ENV['PMA_PORT']; ?>">phpMyAdmin</a></li>
                                <li><a href="/test_db.php">Test DB Connection with mysqli</a></li>
                                <li><a href="/test_db_pdo.php">Test DB Connection with PDO</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                    <strong><a href="https://github.com/wnxwn/docker-compose-lamp-basic">Modified by wnxwn (one by one)</a></strong><br>
                    <strong><a href="https://www.sprintcube.com" target="_blank">Originally by SprintCube</a></strong><br>
                    The source code is released under the <a href="https://github.com/wnxwn/docker-compose-lamp-basic/blob/master/LICENSE" target="_blank">MIT license</a>.
                </p>
            </div>
        </footer>
    </body>
</html>
