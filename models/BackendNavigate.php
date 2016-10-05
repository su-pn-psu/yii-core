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
class BackendNavigate extends \firdows\menu\models\Navigate {
    
    public function getCount($router) {
        $count = '';
        # /backend
        $siteend = Url::base() ; 
        
        
        switch ($router) {
             
            case "{$siteend}/user/admin":
                
                $searchModel = new \suPnPsu\user\models\UserSearchWaiting();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                $count = $dataProvider->getCount();
                $count = $count ? '<small class="label bg-yellow pull-right">' . $count . '</small>' : '';
                break;
            
            
            
        }
        
        return $count;
    }

}
