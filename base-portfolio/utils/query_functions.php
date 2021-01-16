<?php
function formulate_query($init_query, $values_array, $current_user_id)
{
    $final_query = $init_query;
    $i = 0;
    foreach ($values_array as $x => $val) {

        if ($i == count($values_array) - 1) {
            $final_query = $final_query . " ('$current_user_id', $val)";
        } else {
            $final_query = $final_query . " ('$current_user_id', $val),";
        }
        $i++;
    }

    return $final_query;
}

