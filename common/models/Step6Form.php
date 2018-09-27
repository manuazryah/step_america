<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "step6_form".
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $date
 * @property string $upload_doc
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Step6Form extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'step6_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'DOC', 'DOU'], 'safe'],
            [['status', 'CB', 'UB'], 'integer'],
            [['title', 'author'], 'string', 'max' => 255],
            [['upload_doc'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
            'date' => 'Date',
            'upload_doc' => 'Upload Doc',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
