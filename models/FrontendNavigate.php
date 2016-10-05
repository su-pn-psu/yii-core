<?php

namespace suPnPsu\core\models;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
/**
 * Description of navigate
 *
 * @author madone
 */
class FrontendNavigate extends \firdows\menu\models\Navigate {
    
    public function getCount($router) {
        $count = '';
        # /backend
        $siteend = Url::base() ; 
       
        
        switch ($router) {
             
            case "/reserve-room":
//                 echo $router;
//        exit();
                $searchModel = new \suPnPsu\reserveRoom\models\RoomReserveDefaultIndexSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                $count = $dataProvider->getTotalCount();
                //$count = $count ? Html::tag('b',  ' ('.$count.')',['class'=>'text-default']) : '';
                $count = $count ? ' '.Html::tag('span',$count,['class'=>'badge pull-right']) : '';
                break;
            
            
            
        }
        
        return $count;
    }

}
