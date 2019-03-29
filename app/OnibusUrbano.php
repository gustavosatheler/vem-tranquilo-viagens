<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Validator;

class OnibusUrbano extends Model
{
    protected $table = 'onibus_urbano';

    public function description()
    {
        return $this->morphOne('App\Onibus', 'description');
    }

    public function getAll()
    {
        return $this->all();
    }

    public function get(int $id)
    {
        $onibus = $this->find($id);
        $onibus->description;
        return $onibus;
    }

    public function add(array $input)
    {
        $validator = Validator::make($input, [
            'lotacao' => 'required|integer',
            'arCondicionado' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            throw new Exception($validator->messages());
        }

        $this->lotacao = $input['lotacao'];
        $this->arCondicionado = $input['arCondicionado'];

        $onibus = new Onibus();
        $data = $onibus->add($input);

        $this->save();
        $this->description()->save($data);
    }

    public function edit(int $id)
    {
        $onibus = $this->find($id);
        $description = $onibus->description;
        $description->disponivel = !$description->disponivel;

        $onibus->save();
        $onibus->description()->save($description);
    }

}
