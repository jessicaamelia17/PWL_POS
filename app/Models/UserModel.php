<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject; // implementasi class Authenticatable
use Illuminate\Database\Eloquent\Casts\Attribute; // untuk casting attribute

class UserModel extends Authenticatable implements JWTSubject
{
    
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
    use HasFactory;
    // protected $table = 'users'; // jika nama tabel tidak sesuai dengan konvensi laravel

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';
    protected $fillable = [ 
         'username', 
         'nama', 
         'password', 
         'level_id', 
         'image'//tambahan
     ];

    protected $hidden = ['password']; // jangan di tampilkan saat select

    protected $casts = ['password' => 'hashed']; // casting password agar otomatis di hash

    /**
     * Relasi ke tabel level
     */
    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    public function getRoleName(): string
    {
        return $this->level->level_name ;
    }

    public function hasRole($role): bool
    {
        return $this->level->level_kode === $role;
    }

    public function getRole()
    {
        return $this->level->level_kode;
    }

        protected function image(): Attribute
     {
         return Attribute::make(
             get: fn ($image) => url('/storage/posts/' . $image),
         );
     }
}
