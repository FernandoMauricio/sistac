<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categoria_questionarios".
 *
 * @property integer $id
 * @property string $descricao
 *
 * @property Avaliacoes[] $avaliacoes
 * @property Questionarios[] $questionarios
 */
class CategoriaQuestionarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categoria_questionarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao'], 'required'],
            [['descricao'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAvaliacoes()
    {
        return $this->hasMany(Avaliacoes::className(), ['categoria_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionarios()
    {
        return $this->hasMany(Questionarios::className(), ['categoria_id' => 'id']);
    }
}
