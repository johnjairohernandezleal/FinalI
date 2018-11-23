<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoContratoRequest;
use App\Http\Requests\UpdateTipoContratoRequest;
use App\Repositories\TipoContratoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoContratoController extends AppBaseController
{
    /** @var  TipoContratoRepository */
    private $tipoContratoRepository;

    public function __construct(TipoContratoRepository $tipoContratoRepo)
    {
        $this->tipoContratoRepository = $tipoContratoRepo;
    }

    /**
     * Display a listing of the TipoContrato.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoContratoRepository->pushCriteria(new RequestCriteria($request));
        $tipoContratos = $this->tipoContratoRepository->all();

        return view('tipo_contratos.index')
            ->with('tipoContratos', $tipoContratos);
    }

    /**
     * Show the form for creating a new TipoContrato.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_contratos.create');
    }

    /**
     * Store a newly created TipoContrato in storage.
     *
     * @param CreateTipoContratoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoContratoRequest $request)
    {
        $input = $request->all();

        $tipoContrato = $this->tipoContratoRepository->create($input);

        

        return redirect(route('tipoContratos.index'));
    }

    /**
     * Display the specified TipoContrato.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoContrato = $this->tipoContratoRepository->findWithoutFail($id);

        if (empty($tipoContrato)) {
        

            return redirect(route('tipoContratos.index'));
        }

        return view('tipo_contratos.show')->with('tipoContrato', $tipoContrato);
    }

    /**
     * Show the form for editing the specified TipoContrato.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoContrato = $this->tipoContratoRepository->findWithoutFail($id);

        if (empty($tipoContrato)) {
            

            return redirect(route('tipoContratos.index'));
        }

        return view('tipo_contratos.edit')->with('tipoContrato', $tipoContrato);
    }

    /**
     * Update the specified TipoContrato in storage.
     *
     * @param  int              $id
     * @param UpdateTipoContratoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoContratoRequest $request)
    {
        $tipoContrato = $this->tipoContratoRepository->findWithoutFail($id);

        if (empty($tipoContrato)) {
            

            return redirect(route('tipoContratos.index'));
        }

        $tipoContrato = $this->tipoContratoRepository->update($request->all(), $id);

        

        return redirect(route('tipoContratos.index'));
    }

    /**
     * Remove the specified TipoContrato from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoContrato = $this->tipoContratoRepository->findWithoutFail($id);

        if (empty($tipoContrato)) {
            

            return redirect(route('tipoContratos.index'));
        }

        $this->tipoContratoRepository->delete($id);

        

        return redirect(route('tipoContratos.index'));
    }
}
