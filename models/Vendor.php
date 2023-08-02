<?php

namespace app\models;

use yii\mongodb\ActiveRecord;

class Vendor extends ActiveRecord
{
    public static function collectionName()
    {
        return [$_ENV['MONGO_DB_NAME'], 'vendor'];
    }

    public function attributes()
    {
        return ['_id', 'name', 'email','payouts'];
    }


}