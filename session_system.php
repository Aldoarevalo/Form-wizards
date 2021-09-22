<?php
if (!isset($_SESSION)) {
    session_start();
}

$usu_00     = $_SESSION['login_00'];
$usu_01     = $_SESSION['login_01'];
$usu_02     = $_SESSION['login_02'];
$usu_03     = $_SESSION['login_03'];
$usu_04     = $_SESSION['login_04'];
$usu_05     = $_SESSION['login_05'];
$usu_06     = $_SESSION['login_06'];
$usu_07_1   = $_SESSION['login_07_1'];
$usu_07_2   = $_SESSION['login_07_2'];
$usu_08     = $_SESSION['login_08'];
$usu_09     = $_SESSION['login_09'];
$usu_10     = $_SESSION['login_10'];
$usu_11     = $_SESSION['login_11'];
$usu_12     = $_SESSION['login_12'];
$usu_13     = $_SESSION['login_13'];
$usu_14     = $_SESSION['login_14'];
$usu_15     = $_SESSION['login_15'];
$usu_16     = $_SESSION['login_16'];
$usu_17     = $_SESSION['login_17'];
$usu_18     = $_SESSION['login_18'];
$usu_19     = $_SESSION['login_19'];
$usu_20     = $_SESSION['login_20'];
$usu_21     = $_SESSION['login_21'];
$usu_22     = $_SESSION['login_22'];
$usu_23     = $_SESSION['login_23'];
$usu_24     = $_SESSION['login_24'];
$usu_25     = $_SESSION['login_25'];
$usu_26     = $_SESSION['login_26'];
$usu_27     = $_SESSION['login_27'];
$usu_28     = $_SESSION['login_28'];
$usu_29     = $_SESSION['login_29'];
$usu_30     = $_SESSION['login_30'];
$usu_31     = $_SESSION['login_31'];
$usu_32     = $_SESSION['login_32'];
$usu_33     = $_SESSION['login_33'];
$usu_34     = $_SESSION['login_34'];
$usu_35     = $_SESSION['login_35'];
$usu_36     = $_SESSION['login_36'];
$usu_37     = $_SESSION['login_37'];
$usu_38     = $_SESSION['login_38'];
$usu_39     = $_SESSION['login_39'];
$usu_40     = $_SESSION['login_40'];
$usu_41     = $_SESSION['login_41'];
$usu_42     = $_SESSION['login_42'];
$usu_43     = $_SESSION['login_43'];
$usu_44     = $_SESSION['login_44'];
$usu_45     = $_SESSION['login_45'];
$usu_46     = $_SESSION['login_46'];
$usu_47     = $_SESSION['login_47'];






$seg_01     = $_SESSION['seg_01'];

$expire     = $_SESSION['expire'];

if ($expire < time()) {
    header('Location: ../../class/session/session_logout.php');
} else {
    if ($usu_01 == '') {
        header('Location: ../../class/session/session_logout.php');
    } else {
        if (isset($usu_01) && isset($usu_06) && isset($seg_01)) {
            setlocale(LC_MONETARY, 'es_PY');

            $_SESSION['expire'] = time() + 300;

            $urlAct             = $_SERVER['REQUEST_URI'];
            $urlPat             = strtoupper(substr(substr($_SERVER['SCRIPT_FILENAME'], 48), 0, -4));
            $ulrPos             = strpos($_SERVER['HTTP_REFERER'], 'public');
            $urlAnt             = substr($_SERVER['HTTP_REFERER'], $ulrPos);
            $ulrPos             = strpos($urlAnt, '.php?');

            if ($ulrPos > 0) {
                $urlQui = substr($urlAnt, $ulrPos);
                $ulrPos = strlen($urlQui);
                $urlAnt = substr($urlAnt, 0, ($ulrPos * -1));
            }
            /*
                foreach ($seg_01['data'] as $seg_01Key=>$seg_01Array) {
                    if ($urlPat == $seg_01Array['programa_nombre']){
                        if ($seg_01Array['acceso_ingresar'] == 'S'){
                            break;
                        } else {
                            header('Location: ../../public/home.php?code=401&msg=No tiene permiso para ingresar!');
                        }
                    }
                }
*/
        } else {
            header('Location: ../../class/session/session_logout.php');
        }
    }
}
