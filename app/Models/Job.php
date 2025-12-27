<?php

namespace App\Models;

class Job
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Frontend Developer',
                'salary' => 1000,
            ],
            [
                'id' => 2,
                'title' => 'Backend Developer',
                'salary' => 2000,
            ],
        ];
    }
}
