<?php
/**
 * Created by PhpStorm.
 * User: tadaspetruskevicius
 * Date: 2019-11-15
 * Time: 12:59
 */

namespace table;

include('DataBase.php');

use db\DataBase;

class Tables extends DataBase
{
    public function getTable()
    {
        $db = New DataBase();
        $sql_key_dovanuSarasas = "SELECT * FROM dovanuSarasas";
        print '<table>';
        foreach ($db->select($sql_key_dovanuSarasas) as $arrayMini) {
            print '<tr>';
            foreach ($arrayMini as $value) {
                print '<td>' . $value . '</td>';
            }
            print '</tr>';
        }
        print '</table>';
    }

}