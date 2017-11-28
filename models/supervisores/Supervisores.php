<?php

namespace app\models\supervisores;

use Yii;

/**
 * This is the model class for table "supervisores".
 *
 * @property integer $superv_id
 * @property string $superv_nome
 */
class Supervisores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supervisores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['superv_nome'], 'required'],
            [['superv_nome'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'superv_id' => 'Superv ID',
            'superv_nome' => 'Superv Nome',
        ];
    }
}
