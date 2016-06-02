<style>
    div{
        font-size: 20px;
        font-weight: bold;
    }
</style>
<?php
include 'resume.html';
function resume()
{
    $r = 'Резюме';
    return $r;
}
function content()
{
    $content[] = array('Владимир Николаевич Чорный', 'ул.Шлихтера ,8 кв.38', 'г. Киев, Украина, 02105', 'конт.тел.: 8-093-651-52-85',
        'Email: chornyi.vladimir@gmail.com');

    $content[] = array('Личные данные:', 'Дата рождения: 18 июня 1976г.', 'Место рождения: г. Киев', 'Национальность: Украинец',
        'Семейное положение: Женат');
    $content[] = array('Образование', 'Университет экономики и права « Крок » специальность «Логистика»');
    $content[] = array('Опыт работы:');
    $echo = '';
    for ($a = 0;$a < count($content);$a++) {

    foreach ($content[$a] as $key => $vol) {
        if ($key == 0) {
            $echo .= '<div>' . $vol . '</div>';
        } else {
            $echo .= $vol . '<br>';
        }
    }
    $echo .= '<br>';
}
return $echo;
}
function table($key1,$key2){
    $table = array(
        array(
            'date'=>'С 1 февраля 2015г. по 31 декабря 2015г',
            'firm'=>'ООО «Вайнстайл»',
            'nd'=>'Направление деятельности:',
            'rt'=>'Розничная торговля (Интернет-магазин)',
            'do'=>'Должность:',
            'lo'=>'Логист',
        )
    );
    return $table[$key1][$key2];
}
?>