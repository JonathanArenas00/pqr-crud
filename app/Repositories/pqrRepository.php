<?php

namespace App\Repositories;

use App\Models\pqr;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class pqrRepository
 * @package App\Repositories
 * @version November 20, 2018, 8:14 pm UTC
 *
 * @method pqr findWithoutFail($id, $columns = ['*'])
 * @method pqr find($id, $columns = ['*'])
 * @method pqr first($columns = ['*'])
*/
class pqrRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'documento',
        'correo',
        'direccion',
        'telefono',
        'motivoSolicitud'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return pqr::class;
    }
}
