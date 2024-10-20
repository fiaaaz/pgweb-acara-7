<!DOCTYPE html>
<html>
<body>

    <?php
    $group = array("EXO", "RED VELVET", "NCT", "BLACKPINK", "TREASURE", "BABYMONTERS");
    $fandom = array("EXO-L", "REDLUV", "NCTzen", "BLINK", "TEUME", "MONSTIEZ");
    $member = array("9", "5", "25", "4", "10", "7"); // Tambahkan titik koma di sini

    echo "<table border='1'>"; // Perbaiki 'borders' menjadi 'border'
    echo "<tr><th>Group</th><th>Fandom</th><th>Members</th></tr>"; // Tambahkan header untuk tabel
    for ($i = 0; $i < count($group); $i++) { // Ganti $1 menjadi $i dan gunakan count()
        echo "<tr><td>{$group[$i]}</td><td>{$fandom[$i]}</td><td>{$member[$i]}</td></tr>"; // Perbaiki struktur <tr> dan <td>
    }
    echo "</table>";
    ?>

</body>
</html>
