<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "step5_form".
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $date
 * @property int $project
 * @property string $doc
 */
class Step5Form extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'step5_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['project'], 'integer'],
            [['title', 'author', 'doc'], 'string', 'max' => 200],
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
            'project' => 'Project',
            'doc' => 'Doc',
        ];
    }
}
