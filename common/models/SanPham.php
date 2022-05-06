<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%sanpham}}".
 *
 * @property int $SanPhamID
 * @property string $TenSanPham
 * @property int $GiaBan
 * @property int $LoaiSanPham
 */
class SanPham extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%sanpham}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TenSanPham', 'GiaBan', 'LoaiSanPham'], 'required'],
            [['GiaBan', 'LoaiSanPham'], 'integer'],
            [['TenSanPham'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'SanPhamID' => 'San Pham ID',
            'TenSanPham' => 'Ten San Pham',
            'GiaBan' => 'Gia Ban',
            'LoaiSanPham' => 'Loai San Pham',
        ];
    }
}
