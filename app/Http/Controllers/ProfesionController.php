<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfesionRequest;
use App\Http\Requests\UpdateProfesionRequest;
use App\Repositories\ProfesionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProfesionController extends AppBaseController
{
    /** @var  ProfesionRepository */
    private $profesionRepository;

    public function __construct(ProfesionRepository $profesionRepo)
    {
        $this->profesionRepository = $profesionRepo;
    }

    /**
     * Display a listing of the Profesion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->profesionRepository->pushCriteria(new RequestCriteria($request));
        $profesions = $this->profesionRepository->all();

        return view('profesions.index')
            ->with('profesions', $profesions);
    }

    /**
     * Show the form for creating a new Profesion.
     *
     * @return Response
     */
    public function create()
    {
        return view('profesions.create');
    }

    /**
     * Store a newly created Profesion in storage.
     *
     * @param CreateProfesionRequest $request
     *
     * @return Response
     */
    public function store(CreateProfesionRequest $request)
    {
        $input = $request->all();

        $profesion = $this->profesionRepository->create($input);

        

        return redirect(route('profesions.index'));
    }

    /**
     * Display the specified Profesion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $profesion = $this->profesionRepository->findWithoutFail($id);

        if (empty($profesion)) {
        

            return redirect(route('profesions.index'));
        }

        return view('profesions.show')->with('profesion', $profesion);
    }

    /**
     * Show the form for editing the specified Profesion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $profesion = $this->profesionRepository->findWithoutFail($id);

        if (empty($profesion)) {
            

            return redirect(route('profesions.index'));
        }

        return view('profesions.edit')->with('profesion', $profesion);
    }

    /**
     * Update the specified Profesion in storage.
     *
     * @param  int              $id
     * @param UpdateProfesionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProfesionRequest $request)
    {
        $profesion = $this->profesionRepository->findWithoutFail($id);

        if (empty($profesion)) {
            

            return redirect(route('profesions.index'));
        }

        $profesion = $this->profesionRepository->update($request->all(), $id);

        

        return redirect(route('profesions.index'));
    }

    /**
     * Remove the specified Profesion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $profesion = $this->profesionRepository->findWithoutFail($id);

        if (empty($profesion)) {
            

            return redirect(route('profesions.index'));
        }

        $this->profesionRepository->delete($id);

        

        return redirect(route('profesions.index'));
    }
}
