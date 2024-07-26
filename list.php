<?php
require __DIR__ . '/vendor/autoload.php';

use Qualicc\FileExplorer\Requests\FileListRequest;

$request = new FileListRequest($_GET['dir']);
//print_r($request -> getList());
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo("File list of " . $_GET['dir']);?></title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body id="lista">
    <table class="table-fill">
        <thead>
        <tr>
            <th class="text-left">#</th>
            <th class="text-left">File name</th>
            <th class="text-left">Link</th>
        </tr>
        </thead>
        <tbody class="table-hover">
            <?php
                $i = 0;
                foreach ($request -> getList() as $one) {
                    echo"
                        <tr>
                            <td class='text-left'>" . $i++ . "</td>
                            <td class='text-left'>" . $one -> getName() . "</td>
                            <td class='text-left'><a href='" . $one -> getLink() . "'>Link</a></td>
                        </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>