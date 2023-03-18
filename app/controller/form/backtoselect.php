<form action="#" method="post">
    <button name="list">

    Back to list

    </button>
</form>

<?php
    extract($_POST);
    if(isset($list))
    {
        header("Location: index.php");
    }
?>