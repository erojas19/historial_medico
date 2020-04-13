<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMunicipioRequest;
use App\Http\Requests\UpdateMunicipioRequest;
use App\Repositories\MunicipioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MunicipioController extends AppBaseController
{
    /** @var  MunicipioRepository */
    private $municipioRepository;

    public function __construct(MunicipioRepository $municipioRepo)
    {
        $this->municipioRepository = $municipioRepo;
    }

    /**
     * Display a listing of the Municipio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $municipios = $this->municipioRepository->paginate(30);

        return view('municipios.index')
            ->with('municipios', $municipios);
    }

    /**
     * Show the form for creating a new Municipio.
     *
     * @return Response
     */
    public function create()
    {
        return view('municipios.create');
    }

    /**
     * Store a newly created Municipio in storage.
     *
     * @param CreateMunicipioRequest $request
     *
     * @return Response
     */
    public function store(CreateMunicipioRequest $request)
    {
        $input = $request->all();

        $municipio = $this->municipioRepository->create($input);

        Flash::success('Municipio saved successfully.');

        return redirect(route('municipios.index'));
    }

    /**
     * Display the specified Municipio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $municipio = $this->municipioRepository->find($id);

        if (empty($municipio)) {
            Flash::error('Municipio not found');

            return redirect(route('municipios.index'));
        }

        return view('municipios.show')->with('municipio', $municipio);
    }

    /**
     * Show the form for editing the specified Municipio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $municipio = $this->municipioRepository->find($id);

        if (empty($municipio)) {
            Flash::error('Municipio not found');

            return redirect(route('municipios.index'));
        }

        return view('municipios.edit')->with('municipio', $municipio);
    }

    /**
     * Update the specified Municipio in storage.
     *
     * @param int $id
     * @param UpdateMunicipioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMunicipioRequest $request)
    {
        $municipio = $this->municipioRepository->find($id);

        if (empty($municipio)) {
            Flash::error('Municipio not found');

            return redirect(route('municipios.index'));
        }

        $municipio = $this->municipioRepository->update($request->all(), $id);

        Flash::success('Municipio updated successfully.');

        return redirect(route('municipios.index'));
    }

    /**
     * Remove the specified Municipio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $municipio = $this->municipioRepository->find($id);

        if (empty($municipio)) {
            Flash::error('Municipio not found');

            return redirect(route('municipios.index'));
        }

        $this->municipioRepository->delete($id);

        Flash::success('Municipio deleted successfully.');

        return redirect(route('municipios.index'));
    }
}
