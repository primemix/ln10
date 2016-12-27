<?php

namespace console\controllers;

use Yii;
use frontend\models\University;
use yii\console\Controller;
use yii\helpers\Console;
use yii\helpers\FileHelper;

class InsertController extends Controller
{
    function randomData($length = 1) {
        $gener = 'qwjr';
        return substr(str_shuffle($gener),1,$length);
    }
    /**
     * random data insert to Table University 
     * @return int
     */
    public function actionIndex() {
        
        $result = $this->prompt("Progress bar start Y/N ");
        
        if($result=="Y" || $result == 'y'){
            Console::startProgress(0,100);
            for($i = 0; $i <= 100; $i++) {
                Yii::$app->db->createCommand()->insert('university', [
                    'name' => $this->randomData(),
                ])->execute();
                usleep(30000);
                Console::updateProgress($i,100);
            }
            Console::endProgress("Done!".PHP_EOL);
        } elseif ($result == "N" || $result == 'n') {
            Console::endProgress("Exit".PHP_EOL);
        }
        else {
            echo '...Unknown command...'.PHP_EOL;
        }
        return parent::EXIT_CODE_NORMAL;
    }
}