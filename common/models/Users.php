<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $user_name
 * @property string $password
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Users extends ActiveRecord implements IdentityInterface {

    private $_user;
    public $rememberMe = true;
    public $created_at;
    public $updated_at;

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['address', 'user_name', 'password', 'name', 'email', 'phone'], 'required', 'on' => 'create'],
            [['address', 'name', 'email', 'phone'], 'required', 'on' => 'update'],
            [['user_name'], 'unique', 'message' => 'Username must be unique.', 'on' => 'create'],
            [['user_name'], 'unique', 'message' => 'Username must be unique.', 'on' => 'update'],
            [['address'], 'string'],
            [['status', 'CB', 'UB', 'current_step'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['user_name'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 300],
            [['name', 'email'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 15],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\Users', 'message' => 'This email address has already been taken.'],
            [['user_name', 'password'], 'required', 'on' => 'login'],
            [['password'], 'validatePassword', 'on' => 'login'],
        ];
    }

    public function validatePassword($attribute, $params) {

        if (!$this->hasErrors()) {

            $user = $this->getUser();
            if (!$user || !Yii::$app->security->validatePassword($this->password, $user->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'user_name' => 'User Name',
            'password' => 'Password',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

    public function login() {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), /* $this->rememberMe ? 3600 * 24 * 30 : */ 0);
        } else {
            return false;
        }
    }

    protected function getUser() {
        if ($this->_user === null) {
            $this->_user = static::find()->where('user_name = :uname and status = :stat', ['uname' => $this->user_name, 'stat' => '1'])->one();
        }

        return $this->_user;
    }

    public function validatedata($data) {
        if ($data == '') {
            $this->addError('password', 'Incorrect username or password');
            return true;
        }
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username) {
        return static::findOne(['user_name' => $username, 'status' => 1]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id) {
        return static::findOne(['id' => $id, 'status' => 1]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null) {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public function getId() {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey() {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey) {
        return $this->getAuthKey() === $authKey;
    }

}
