<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "queue_statuses".
 *
 * @property int $id
 * @property string|null $s_name
 * @property string|null $c_name
 * @property string|null $c_id
 * @property string|null $a_type
 * @property string|null $direction
 * @property string|null $activation
 * @property string|null $c_state
 * @property string|null $control
 */
class QueueStatuses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'queue_statuses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['s_name', 'c_name'], 'string', 'max' => 512],
            [['c_id', 'direction', 'activation', 'c_state', 'control'], 'string', 'max' => 32],
            [['a_type'], 'string', 'max' => 128],
            [['s_name', 'c_name','c_id', 'direction', 'activation', 'c_state', 'control', 'a_type'], 'required']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            's_name' => 'S Name',
            'c_name' => 'C Name',
            'c_id' => 'C ID',
            'a_type' => 'A Type',
            'direction' => 'Direction',
            'activation' => 'Activation',
            'c_state' => 'C State',
            'control' => 'Control',
        ];
    }
}
