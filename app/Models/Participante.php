<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Participante extends Model
{
    use HasFactory;
    protected $table= 'participante';
    protected $fillable = [
        'nome',
        'sobrenome',
        'data_nascimento',
        'endereco',
        'email',
        'created_at',
        'updated_at',
    ];
}
