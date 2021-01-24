<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
      'quantidade_camas',
      'preco',
      'titulo',
      'quantidade_banheiros',
      'descricao_quarto',
      'quantidade_hospedes',
      'quantidade_quartos',
      'rua',
      'numero',
      'cidade',
      'estado',
      'pais',
      'cep',
      'imagem_url'
    ];
}




