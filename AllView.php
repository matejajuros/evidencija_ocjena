<?php

class AllView
{
    public function unosOcjena()
    {
        echo '
            <form method="POST" action="OcjenaController.php">
                ID studenta: <br><input type="number" name="id_student" required><br>
                Predmet: <br><input type="text" name="predmet" required><br>
                Ocjena: <br><input type="number" name="ocjena" required><br>
                <input type="submit" value="Unesi ocjene!">
            </form>
        ';
    }

    public function unosStudenta()
    {
        echo '
            <form method="POST" action="StudentController.php">
                Ime: <br><input type="text" name="predmet" required><br>
                Prezime: <br><input type="number" name="ocjena" required><br>
                <input type="submit" value="Unesi studenta!">
            </form>
        ';
    }
    public function ispisOcjena($ocjene)
    {
        foreach ($ocjene as $ocjena)
        {
            echo "<p>{$ocjena['id_student']}<p>";
            echo "<p>{$ocjena['predmet']}</p>";
            echo "<p>{$ocjena['ocjena']}</p>";
        }
    }

    public function ispisStudenta($studenti)
    {
        foreach ($studenti as $student)
        {
            echo "<p>{$ostudent['id_student']}<p>";
            echo "<p>{$student['ime']}</p>";
            echo "<p>{$student['prezime']}</p>";
        }
    }

}

?>