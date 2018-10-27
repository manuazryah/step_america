<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_steps".
 *
 * @property int $id
 * @property int $user_id
 * @property string $retainer_contract_download
 * @property string $dhp_download_date
 * @property int $retainer_contract_approve
 * @property int $dhp_approve
 * @property int $step_1_completed
 * @property string $step_1_complete_date
 * @property int $step_3_completed
 * @property string $step_3_complete_date
 */
class UserSteps extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'user_steps';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['user_id', 'retainer_contract_approve', 'dhp_approve', 'step_1_completed', 'step_3_completed'], 'integer'],
            [['retainer_contract_download', 'dhp_download_date', 'step_1_complete_date', 'step_3_complete_date', 'selected_project', 'step_4_completed', 'step_4_complete_date', 'step_5_completed', 'step_5_complete_date', 'deposited_on', 'deposited_amount', 'currency', 'confirmation_ref_id'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'retainer_contract_download' => 'Retainer Contract Download',
            'dhp_download_date' => 'Dhp Download Date',
            'retainer_contract_approve' => 'Retainer Contract Approve',
            'dhp_approve' => 'Dhp Approve',
            'step_1_completed' => 'Step 1 Completed',
            'step_1_complete_date' => 'Step 1 Complete Date',
            'step_3_completed' => 'Step 3 Completed',
            'step_3_complete_date' => 'Step 3 Complete Date',
        ];
    }

}
