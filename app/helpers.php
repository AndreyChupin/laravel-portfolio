<?php

use Carbon\Carbon;

function in_production()
{
    return app()->environment('production');
}

if (!function_exists('get_formated_views')) {
    function get_formated_views($value)
    {
        if ($value < 1000) {
            return sprintf('%d', $value);
        }

        if ($value < 1000000) {
            $value = $value / 1000;

            return $newVal = number_format($value, 1, ',', '.') . 'k';
        }

        if ($value >= 1000000 && $value < 1000000000) {
            $value = $value / 1000000;

            return $newVal = number_format($value, 1, ',', '.') . 'M';
        }

        if ($value >= 1000000000 && $value < 1000000000000) {
            $value = $value / 1000000000;

            return $newVal = number_format($value, 1, ',', '.') . 'B';
        }

        return sprintf('%d%s', floor($value / 1000000000000), 'T+');
    }
}

if (!function_exists('get_formated_date')) {
    function get_formated_date($value)
    {
        $date = Carbon::parse($value);
        if ($date->isToday()) {
            return $date->translatedFormat('сегодня в H:i');
        } elseif ($date->isYesterday()) {
            return $date->translatedFormat('вчера в H:i');
        } else {
            return $date->translatedFormat('j F Y в H:i');
        }
    }
}

if (!function_exists('validate_hub_post')) {
    function validate_hub_post($class_rel, $class_field1, $class_field2, $field1, $field2, $faker)
    {
        $value1 = $class_field1::all()->random();
        $value2 = $class_field2::all()->random();


        $value1_value2_rel = $class_rel::query()->where([
            [$field1, '=', $value1->id],
            [$field2, '=', $value2->id],
        ])->first();

        if ((bool)$value1_value2_rel) {
            return validate_hub_post($class_rel, $class_field1, $class_field2, $field1, $field2, $faker);
        } else {
            return [
                $field1 => $value1->id,
                $field2 => $value2->id,
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ];
        }
    }
}
