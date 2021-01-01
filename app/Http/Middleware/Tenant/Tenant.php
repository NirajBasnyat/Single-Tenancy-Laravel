<?php

namespace App\Http\Middleware\Tenant;

use Closure;
use App\Models\Company;
use App\Tenant\Manager;
use Illuminate\Http\Request;

class Tenant
{
    public function handle(Request $request, Closure $next)
    {
        //reqst->company gives company's id
        $tenant = $this->resolveTenant(
            $request->company ?: session()->get('tenant')
        );

        if (!auth()->user()->companies->contains('id', $tenant->id)) {
            return redirect('/home');
        }

        $this->registerTenant($tenant);

        return $next($request);
    }

    public function registerTenant($tenant)
    {
        app(Manager::class)->setTenant($tenant);
        session()->put('tenant', $tenant->id);
    }

    public function resolveTenant($id)
    {
        return Company::findOrFail($id);
    }
}
