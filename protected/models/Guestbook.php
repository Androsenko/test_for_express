<?php

/**
 * This is the model class for table "tbl_guestbook".
 *
 * The followings are the available columns in table 'tbl_guestbook':
 * @property integer $id
 * @property string $user
 * @property string $email
 * @property string $homepage
 * @property string $text
 * @property string $cdt
 * @property string $ua
 * @property string $ip
 */
class Guestbook extends CActiveRecord
{
	public $verifyCode;
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'tbl_guestbook';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
		return array(
			array('user, email, text, cdt, ua, ip', 'required'),
			array('email','email'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('user', 'match', 'pattern' => '/^[a-zA-Z]+[\d,]+$/u', 'message' => 'Только цифры и буквы латинского алфавита'),
			array('text', 'match', 'pattern' => '/<.*?>/u', 'message' => 'HTML тэги недопустимы','not'=>true),
			array('user, email, homepage', 'length', 'max'=>256),
			array('homepage','url', 'message' => 'Домашняя страница не является правильным URL. Пример: http://www.example.com'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user, email, homepage, text, cdt, ua, ip', 'safe', 'on'=>'search'),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'user' => 'Имя',
            'email' => 'Email',
            'homepage' => 'Домашняя страница',
            'text' => 'Текст сообщения',
            'cdt' => 'Дата',
            'ua' => 'Ua',
            'ip' => 'Ip',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('user',$this->user,true);
        $criteria->compare('email',$this->email,true);
        $criteria->compare('homepage',$this->homepage,true);
        $criteria->compare('text',$this->text,true);
        $criteria->compare('cdt',$this->cdt,true);
        $criteria->compare('ua',$this->ua,true);
        $criteria->compare('ip',$this->ip,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Guestbook the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
	
	
	public static function makeLink($string_t) //--- Заменяем урлы на ссылки ---- 
	{
		$string_t = preg_replace("/([^\w\/])(www\.[a-z0-9\-]+\.[a-z0-9\-]+)/i", "$1http://$2",$string_t);
		$string_t = preg_replace("/([\w]+:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/i","<a target=\"_blank\" href=\"$1\">$1</a>",$string_t);
		$string_t = preg_replace("/([\w-?&;#~=\.\/]+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?))/i","<A HREF=\"mailto:$1\">$1</a>",$string_t);
		return $string_t;
	} 
}






