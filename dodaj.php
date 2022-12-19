<?php
    $conn = mysqli_connect('localhost','root','','dane');
    $canproceed = true;

    if(empty($_POST['title']) || empty($_POST['genre']) || empty($_POST['rating']) || empty($_POST['year'])){$canproceed = false;}

    if($canproceed)
    {
        mysqli_query($conn, 'INSERT INTO `filmy` (`id`, `gatunki_id`, `rezyserzy_id`, `tytul`, `rok`, `ocena`) VALUES (NULL, "'.$_POST['genre'].'", "0", "'.$_POST['title'].'", "'.$_POST['year'].'", "'.$_POST['rating'].'");');
        echo("Film ".$_POST['title']." został dodany do bazy");
    }
    else
    {
        echo("Uzupełnij wszystkie pola!");
    }
?>