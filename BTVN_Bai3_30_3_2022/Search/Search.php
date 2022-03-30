<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2 Vy Văn Hùng_2019601093</title>

</head>
<body>

<?php

$oke = true;
function highlight($text='', $word='')
{
    if(strlen($text) > 0 && strlen($word) > 0)
    {
       return  (str_replace($word, "<span style='color: #e3e300'>{$word}</span>", $text));
    }
    return ($text);
}

function findWord(){

    function get_tag( $attr, $value, $xml ) {

        $attr = preg_quote($attr);
        $value = preg_quote($value);

        $tag_regex = '/<div[^>]*' .$attr. '="'.$value.'">(.*?)<\\/div>/si';

        preg_match($tag_regex,
            $xml,
            $matches);

        return $matches[1];

    }

    if(isset($_POST['search_bar'])){
        $word = $_POST['search_bar'];
        $yourentirehtml = file_get_contents("Search.php");
        $extract = get_tag('id', 'content', $yourentirehtml);
        //   echo $extract;
        echo highlight($extract, $word);
        $GLOBALS['oke'] = false;
    }else{
        $GLOBALS['oke'] = true;
    }

}
?>

<form method="post" action="Search.php">
    <table>
        <tr >

            <td>
                <input type="search" name="search_bar" id="search_bar"  placeholder="Nhập chuỗi cần tìm" onerror="true" >
                <button name="action_search" onclick="findWord()">Tìm</button>
                <?php echo findWord() ?>

            </td>
        </tr>
    </table>
</form>

<?php
if($oke){
    echo '
    <div id="content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>';
}

?>
</body>
</html>