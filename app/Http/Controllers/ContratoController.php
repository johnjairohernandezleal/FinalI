<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContratoRequest;
use App\Http\Requests\UpdateContratoRequest;
use App\Repositories\ContratoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Docente;
use App\Models\TipoContrato;
use App\Models\Jornada;

class ContratoController extends AppBaseController
{
    /** @var  ContratoRepository */
    private $contratoRepository;

    public function __construct(ContratoRepository $contratoRepo)
    {
        $this->contratoRepository = $contratoRepo;
    }

    /**
     * Display a listing of the Contrato.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->contratoRepository->pushCriteria(new RequestCriteria($request));
        $contratos = $this->contratoRepository->all();

        return view('contratos.index')
            ->with('contratos', $contratos);
    }

    /**
     * Show the form for creating a new Contrato.
     *
     * @return Response
     */
    public function create()
    {   
        $docente = Docente::pluck('nombre','id');
        $tipocontrato = TipoContrato::pluck('nombre','id');
        $jornada = Jornada::pluck('nombre','id');

        return view('contratos.create',compact('docente','tipocontrato','jornada'));
    }

    /**
     * Store a newly created Contrato in storage.
     *
     * @param CreateContratoRequest $request
     *
     * @return Response
     */
    public function store(CreateContratoRequest $request)
    {
        $input = $request->all();

        $contrato = $this->contratoRepository->create($input);

        

        return redirect(route('contratos.index'));
    }

    /**
     * Display the specified Contrato.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contrato = $this->contratoRepository->findWithoutFail($id);

        if (empty($contrato)) {
            

            return redirect(route('contratos.index'));
        }

        return view('contratos.show')->with('contrato', $contrato);
    }

    /**
     * Show the form for editing the specified Contrato.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contrato = $this->contratoRepository->findWithoutFail($id);

        if (empty($contrato)) {
            

            return redirect(route('contratos.index'));
        }

        return view('contratos.edit')->with('contrato', $contrato);
    }

    /**
     * Update the specified Contrato in storage.
     *
     * @param  int              $id
     * @param UpdateContratoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContratoRequest $request)
    {
        $contrato = $this->contratoRepository->findWithoutFail($id);

        if (empty($contrato)) {
            

            return redirect(route('contratos.index'));
        }

        $contrato = $this->contratoRepository->update($request->all(), $id);

        Flash::success('Contrato updated successfully.');

        return redirect(route('contratos.index'));
    }

    /**
     * Remove the specified Contrato from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contrato = $this->contratoRepository->findWithoutFail($id);

        if (empty($contrato)) {
            
            return redirect(route('contratos.index'));
        }

        $this->contratoRepository->delete($id);

        

        return redirect(route('contratos.index'));
    }
}
