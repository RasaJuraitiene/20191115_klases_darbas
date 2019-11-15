<?php
/**
 * Created by PhpStorm.
 * User: tadaspetruskevicius
 * Date: 2019-11-15
 * Time: 14:07
 */

namespace input;

use db\DataBase;

class Form extends DataBase
{
    public function viewOption()
    {
        $db = New DataBase();
        print '<select>';
        foreach ($db->select('SELECT `dish_name` FROM `patiekalai`') as $array) {
            foreach ($array as $value) {
                print "<option value=\"$value\">" . $value . '</option>';
            }
        }
        print '</select>';
    }
}