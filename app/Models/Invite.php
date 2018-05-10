<?php
/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Invite extends BaseModel
{
    protected $table = 'invites';

    protected static $unguarded = true;

    protected $casts = [
        'sex'        => 'int',
        'respect'    => 'bool',
        'multiple'   => 'bool',
        'accepted'   => 'bool',
        'groom_team' => 'bool',
        'bride_team' => 'bool',
        'survey'     => 'array',
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

        return $prefix . '<br/>' . $this->name;
    }

    public function getText(string $single, string $multiple, string $single_respect = ''): string
    {
        if (empty($single_respect)) {
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

    public static function getPeopleCount(): int
    {
        return Invite::select(DB::raw('sum(if(multiple=1, 2, 1)) as count'))->first()->count ?? 0;
    }

    public static function getPeopleAgreedCount(): int
    {
        return Invite::select(DB::raw('sum(if(multiple=1, 2, 1)) as count'))->where('accepted', 1)->first()->count ?? 0;
    }

}