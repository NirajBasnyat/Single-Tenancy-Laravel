<?php

namespace App\Tenant\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class TenantScope implements Scope
{
    protected $tenant;

    public function __construct(Model $tenant)
    {
        $this->tenant = $tenant;
    }

    public function apply(Builder $builder, Model $model)
    {
        // $this->tenant->getForeignKey() gives company_id for now

        $builder->where($this->tenant->getForeignKey(), $this->tenant->id);
    }
}
