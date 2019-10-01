<?php
include __DIR__.'/lib.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Сайт тест</title>
</head>
<body>

<table border="1" width="100%">
    <tr>
        <td colspan="2" align="center">
            <?php
                include __DIR__.DS.'header.php';
            ?>
        </td>
    </tr>

    <tr>
        <td>
            <?php
            $menu = [
                '1'=>'Страница 1',
                '2'=>'Страница 2',
                '3'=>'Страница 3',
                '4'=>'Страница 4',
                'table'=>'Таблица умножения',
            ];

            menu($menu);
            ?>
        </td>
        <td>
            <?php
            if(isset($_GET['id'])&&!empty($_GET['id'])){
                $page = '';
                switch ($_GET['id']){
                    case '1':
                        $page = 'page1';
                        break;
                    case '2':
                        $page = 'page2';
                        break;
                    case '3':
                        $page = 'page3';
                        break;
                    case 'table':
                        $page = 'table';
                        break;
                    default:
                        $page = '404';
                }

                include __DIR__.DS.$page.'.php';
            }else{
                echo "Main content";
            }
            ?>

        </td>
    </tr>

    <tr>
        <td colspan="2" align="center">
            <?php
                include __DIR__.DS.'footer.php';
            ?>
        </td>
    </tr>
</table>

test1111

</body>
</html>