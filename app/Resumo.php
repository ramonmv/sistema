<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resumo extends Model
{
    //

     protected $fillable = [
        'texto', 'doc_id','user_id'
        ];

	public function add($texto, $doc_id, $user_id)

    {

    	return $this->create([

  			// 'titulo' => request('titulo'),
     //        'conteudo' => request('conteudo')

                'user_id' => $user_id,
  			    'doc_id' => $doc_id,
                'texto' => $texto

    		]);

    }

  public function edit($texto)

  {
    //$this->find($id);

    $this->texto = trim($texto);

    $this->save();


// $flight = App\Flight::find(1);

// $flight->name = 'New Flight Name';

// $flight->save();

  }
  
	public function doc()

	{

		return $this->belongsTo(Doc::class);

	}



    public function user()

    {

        return $this->belongsTo(User::class);


    }

}
