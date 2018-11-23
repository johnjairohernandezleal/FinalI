<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJornadaRequest;
use App\Http\Requests\UpdateJornadaRequest;
use App\Repositories\JornadaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JornadaController extends AppBaseController
{
    /** @var  JornadaRepository */
    private $jornadaRepository;

    public function __construct(JornadaRepository $jornadaRepo)
    {
        $this->jornadaRepository = $jornadaRepo;
    }

    /**
     * Display a listing of the Jornada.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jornadaRepository->pushCriteria(new RequestCriteria($request));
        $jornadas = $this->jornadaRepository->all();

        return view('jornadas.index')
            ->with('jornadas', $jornadas);
    }

    /**
     * Show the form for creating a new Jornada.
     *
     * @return Response
     */
    public function create()
    {
        return view('jornadas.create');
    }

    /**
     * Store a newly created Jornada in storage.
     *
     * @param CreateJornadaRequest $request
     *
     * @return Response
     */
    public function store(CreateJornadaRequest $request)
    {
        $input = $request->all();

        $jornada = $this->jornadaRepository->create($input);

        

        return redirect(route('jornadas.index'));
    }

    /**
     * Display the specified Jornada.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jornada = $this->jornadaRepository->findWithoutFail($id);

        if (empty($jornada)) {
            

            return redirect(route('jornadas.index'));
        }

        return view('jornadas.show')->with('jornada', $jornada);
    }

    /**
     * Show the form for editing the specified Jornada.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jornada = $this->jornadaRepository->findWithoutFail($id);

        if (empty($jornada)) {
           

            return redirect(route('jornadas.index'));
        }

        return view('jornadas.edit')->with('jornada', $jornada);
    }

    /**
     * Update the specified Jornada in storage.
     *
     * @param  int              $id
     * @param UpdateJornadaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJornadaRequest $request)
    {
        $jornada = $this->jornadaRepository->findWithoutFail($id);

        if (empty($jornada)) {
           

            return redirect(route('jornadas.index'));
        }

        $jornada = $this->jornadaRepository->update($request->all(), $id);

        

        return redirect(route('jornadas.index'));
    }

    /**
     * Remove the specified Jornada from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jornada = $this->jornadaRepository->findWithoutFail($id);

        if (empty($jornada)) {
            

            return redirect(route('jornadas.index'));
        }

        $this->jornadaRepository->delete($id);

        

        return redirect(route('jornadas.index'));
    }
}
