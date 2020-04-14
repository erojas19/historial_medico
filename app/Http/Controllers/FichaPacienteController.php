<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFichaPacienteRequest;
use App\Http\Requests\UpdateFichaPacienteRequest;
use App\Repositories\FichaPacienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FichaPacienteController extends AppBaseController
{
    /** @var  FichaPacienteRepository */
    private $fichaPacienteRepository;

    public function __construct(FichaPacienteRepository $fichaPacienteRepo)
    {
        $this->fichaPacienteRepository = $fichaPacienteRepo;
    }

    /**
     * Display a listing of the FichaPaciente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fichaPacientes = $this->fichaPacienteRepository->paginate(30);

        return view('ficha_pacientes.index')
            ->with('fichaPacientes', $fichaPacientes);
    }

    /**
     * Show the form for creating a new FichaPaciente.
     *
     * @return Response
     */
    public function create()
    {
        return view('ficha_pacientes.create');
    }

    /**
     * Store a newly created FichaPaciente in storage.
     *
     * @param CreateFichaPacienteRequest $request
     *
     * @return Response
     */
    public function store(CreateFichaPacienteRequest $request)
    {
        $input = $request->all();

        $fichaPaciente = $this->fichaPacienteRepository->create($input);

        Flash::success('Ficha Paciente saved successfully.');

        return redirect(route('fichaPacientes.index'));
    }

    /**
     * Display the specified FichaPaciente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fichaPaciente = $this->fichaPacienteRepository->find($id);

        if (empty($fichaPaciente)) {
            Flash::error('Ficha Paciente not found');

            return redirect(route('fichaPacientes.index'));
        }

        return view('ficha_pacientes.show')->with('fichaPaciente', $fichaPaciente);
    }

    /**
     * Show the form for editing the specified FichaPaciente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fichaPaciente = $this->fichaPacienteRepository->find($id);

        if (empty($fichaPaciente)) {
            Flash::error('Ficha Paciente not found');

            return redirect(route('fichaPacientes.index'));
        }

        return view('ficha_pacientes.edit')->with('fichaPaciente', $fichaPaciente);
    }

    /**
     * Update the specified FichaPaciente in storage.
     *
     * @param int $id
     * @param UpdateFichaPacienteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFichaPacienteRequest $request)
    {
        $fichaPaciente = $this->fichaPacienteRepository->find($id);

        if (empty($fichaPaciente)) {
            Flash::error('Ficha Paciente not found');

            return redirect(route('fichaPacientes.index'));
        }

        $fichaPaciente = $this->fichaPacienteRepository->update($request->all(), $id);

        Flash::success('Ficha Paciente updated successfully.');

        return redirect(route('fichaPacientes.index'));
    }

    /**
     * Remove the specified FichaPaciente from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fichaPaciente = $this->fichaPacienteRepository->find($id);

        if (empty($fichaPaciente)) {
            Flash::error('Ficha Paciente not found');

            return redirect(route('fichaPacientes.index'));
        }

        $this->fichaPacienteRepository->delete($id);

        Flash::success('Ficha Paciente deleted successfully.');

        return redirect(route('fichaPacientes.index'));
    }
}
