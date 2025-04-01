<!DOCTYPE html>
<html data-bs-theme="dark">
<head>
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="ISO-8859-15">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #121212;
            color: white;
            text-align: left;
        }
        .container {
            width: 50%;
        }
        .file-link {
            display: block;
            padding: 10px;
            margin: 5px 0;
            background-color: #333;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }
        .file-link:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
<h1>PB-Web three.js demos!</h1>
<?php
        $files = array();
        $dir = opendir('.');
        while(false !== ($file = readdir($dir))) {
            if (!in_array($file, ['.', '..', 'index.php', 'includes',  'libs', 'assets', 'login.php', 'logout.php', '@eaDir', 'Thumbs.db'])) {
                $files[] = $file;
            }
        }
        closedir($dir);
        natsort($files);
        
        foreach ($files as $file) {
            echo "<a class='file-link' href='$file'>$file</a>";
        }
        ?>
</div>
</body>
</html>