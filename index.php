<?php
// Get the current path
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 'CMS/');

?>
<script>console.log('<?php echo $path; ?>');</script>
<?php

// Default page
if ($path === '') {
    header("Location: /CMS/login");
    $path = 'login';
    exit();
}

// Allowed pages (security)
$allowedPages = ['login', 'dashboard', 'create_class'];

$pageFile = __DIR__ . "/pages/$path.php";

if (!in_array($path, $allowedPages) || !file_exists($pageFile)) {
    $pageFile = __DIR__ . "/pages/404.php";
}

?>

<!DOCTYPE html>
<html>

    <head>
        <title>CMS</title>
        <!-- Favicon -->
         <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Login CSS -->
        <link rel="stylesheet" href="./assets/css/login.css">
    </head>

    <body>
        <?php

        include_once $pageFile;

        ?>
    </body>

    <!-- JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.min.js"></script>

</html>
