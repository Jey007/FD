<?
/*                      Пример использования класса
 *                          (c) oleg@freedevs.ru
 */
// Для битрикса эту строку нужно включить в init.php
    include($_SERVER['DOCUMENT_ROOT'].'/include/FD/!FD.php');
// Пример вызова ф-и для склонения числительных:
    // echo $FD->plural(2,Array('шкаф','шкафа'));
    // $FD->blablabla();
    // $FD->log('=)');
    // $FD->show_log();
    // $FD->update();
    echo '<hr><pre>'.print_r($FD->get_functions_list(),1).'</pre><hr>';

?>