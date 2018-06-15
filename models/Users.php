<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $surname
 * @property string $name
 * @property string $patronymic
 * @property string $phone
 * @property string $specialization
 * @property string $profile_pic
 * @property string $created_at
 * @property string $updated_at
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'surname', 'name', 'patronymic'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['username'], 'string', 'max' => 50],
            [['password', 'email'], 'string', 'max' => 128],
            [['surname', 'name', 'patronymic', 'phone', 'specialization', 'profile_pic'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'password' => 'Пароль',
            'email' => 'Email',
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'patronymic' => 'Отчество',
            'phone' => 'Телефон',
            'specialization' => 'Специализация',
            'profile_pic' => 'Фото профиля',
            'created_at' => 'Зарегистрирован',
            'updated_at' => 'Обновлен',
        ];
    }
    
    public function getCreatedDate(){
      Yii::$app->formatter->locale = 'ru-RU';
      return Yii::$app->formatter->asDatetime($this->created_at, 'php:d.M.Y H:i:s');
    }
    
    public function afterSave($insert, $changedAttributes) {
        $user = Users::findOne(['id' => $this->id]);
        if ($insert) {
           $user->password = \Yii::$app->getSecurity()->generatePasswordHash($this->password);
           $user->save();
        }
    }
    /*
    public function beforeValidate() {
      if($this->scenario != 'editProfile'){
        $this->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
      }
      return parent::beforeValidate();
    }*/

}
