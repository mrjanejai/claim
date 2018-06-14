<?php

namespace modules\hosxp\models;

use Yii;

/**
 * This is the model class for table "hosxp".
 *
 * @property int $id
 * @property string $an
 * @property string $vn
 * @property string $hn
 * @property string $fullname
 * @property string $cid
 * @property string $vstdate
 * @property string $pdx
 * @property string $dx0
 * @property string $dx1
 * @property string $dx2
 * @property string $dx3
 * @property string $dx4
 * @property string $dx5
 * @property string $sex
 * @property string $bday
 * @property string $age_y
 * @property string $pttype
 * @property string $pttype_name
 * @property string $adjrw
 * @property string $uc_money
 * @property string $paid_money
 * @property string $item_money
 */
class Hosxp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hosxp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vstdate', 'bday'], 'safe'],
            [['sex'], 'string'],
            [['an', 'vn'], 'string', 'max' => 15],
            [['hn', 'pdx', 'dx0', 'dx1', 'dx2', 'dx3', 'dx4', 'dx5', 'adjrw'], 'string', 'max' => 10],
            [['fullname'], 'string', 'max' => 150],
            [['cid'], 'string', 'max' => 13],
            [['age_y', 'pttype'], 'string', 'max' => 3],
            [['pttype_name', 'uc_money', 'paid_money', 'item_money'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'an' => 'An',
            'vn' => 'Vn',
            'hn' => 'Hn',
            'fullname' => 'Fullname',
            'cid' => 'Cid',
            'vstdate' => 'Vstdate',
            'pdx' => 'Pdx',
            'dx0' => 'Dx0',
            'dx1' => 'Dx1',
            'dx2' => 'Dx2',
            'dx3' => 'Dx3',
            'dx4' => 'Dx4',
            'dx5' => 'Dx5',
            'sex' => 'Sex',
            'bday' => 'Bday',
            'age_y' => 'Age Y',
            'pttype' => 'Pttype',
            'pttype_name' => 'Pttype Name',
            'adjrw' => 'Adjrw',
            'uc_money' => 'Uc Money',
            'paid_money' => 'Paid Money',
            'item_money' => 'Item Money',
        ];
    }
    
    
    
    
}
