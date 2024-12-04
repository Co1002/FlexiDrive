<?php

namespace App\Helper;

class Alert{
    public static function setAlert($message, $name, $type){
        $_SESSION['alerts'][] = array('message' => $message, 'name' => $name, 'type' => $type);
    }

    private static function setAlertHtml($message, $type){
        $html = '<div class="alert alert-'.$type.'"><p class="mb-0">';
        $html.= $message;
        $html.= '</p></div>';
        return $html;
    }

    public static function getAlerts($name = null) {
        if(isset($_SESSION['alerts']) && $_SESSION['alerts'] != null){
            $return = "";
            if($name == null){
                foreach($_SESSION['alerts'] as $alert){
                    $return .= self::setAlertHtml($alert['message'],$alert['type']);
                    unset($_SESSION['alerts']);
                }
            }else{
                $i = 0;
                foreach($_SESSION['alerts'] as $alert){
                    if($name == $alert['name']){
                        $return .= self::setAlertHtml($alert['message'],$alert['type']);
                        unset($_SESSION['alerts'][$i]);
                        $_SESSION['alerts'] = array_values($_SESSION['alerts']);
                    }
                    $i++;
                }
            }
            return $return;
        }else{
            return "";
        }
    }
}