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
            [['TenSanPham', 'GiaBan', 'LoaiSanPham'], 'required','message'=>'Không được để trống'],
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
            'SanPhamID' => 'ID',
            'TenSanPham' => 'Tên sản phẩm',
            'GiaBan' => 'Giá bán',
            'LoaiSanPham' => 'Loại sản phẩm',
        ];
    }
}
