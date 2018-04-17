<?php
/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */

namespace App\Models;

class Invite extends BaseModel
{
    protected $table = 'invites';

    protected $casts = [
        'sex' => 'int',
    ];

    public function getName(): string
    {
        if ($this->multiple) {
            $prefix = 'Дорогие';
        } elseif ($this->sex === 1) {
            $prefix = 'Дорогой';
        } else {
            $prefix = 'Дорогая';
        }

        return $prefix . ' ' . $this->name;
    }

}