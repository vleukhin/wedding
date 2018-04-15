<?php
/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * Статический метод получения имени таблицы
     *
     * @return string
     */
    public static function getTableName()
    {
        return (new static)->table;
    }

    /**
     * Gets array of defined constants
     *
     * @param string $prefix filter by prefix
     *
     * @return array
     */
    public static function getConstants($prefix = null)
    {
        $reflect = new \ReflectionClass(static::class);
        $constants = $reflect->getConstants();

        if (!is_null($prefix)) {
            foreach ($constants as $name => $value) {
                if (strpos($name, $prefix) !== 0) {
                    unset($constants[$name]);
                }
            }
        }

        return $constants;
    }
}