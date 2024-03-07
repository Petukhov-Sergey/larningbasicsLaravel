<?php

namespace App\Http\Filters;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const BODY = 'body';
    public const CATEGORY_ID = 'category_id';

    protected function getCallbacks(): array
    {
        return [
            self::TITLE=>[$this, 'title'],
            self::BODY=>[$this, 'body'],
            self::CATEGORY_ID=>[$this, 'categoryId'],
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

    public function body(Builder $builder, $value)
    {
        $builder->where('body', 'like', "%{$value}%");
    }
    public function categoryId(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }
}
