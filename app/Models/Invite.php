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
        'sex'      => 'int',
        'respect'  => 'bool',
        'multiple' => 'bool',
    ];

    public function getTitle(): string
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

    public function getText(string $single, string $multiple, string $single_respect = ''): string
    {
        if (empty($single_respect)){
            $single_respect = $multiple;
        }

        switch (true) {
            case $this->multiple:
                return $multiple;
            case $this->respect:
                return $single_respect;
            default:
                return $single;
        }
    }

    public function getNames()
    {
        return explode(' и ', $this->name);
    }

}