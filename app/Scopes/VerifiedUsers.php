<php namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;

class VerfiedUsers implements Scope{
    public function apply (Builder, Model $model )
}