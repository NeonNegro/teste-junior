<?php

namespace App\Services;


use App\Repositories\PessoaRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PessoaService implements PessoaServiceInterface
{
    /**
     * @var PessoaRepository
     */
    private $pessoaRepo;

    public function __construct(PessoaRepository $pessoaRepository)
    {
        $this->pessoaRepo = $pessoaRepository;
    }

    /**
     * @inheritDoc
     */
    public function find(int $id): ?Model
    {
        return $this->pessoaRepo->find($id);
    }

    /**
     * @inheritDoc
     */
    public function all(): ?Collection
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function create(array $data): ?Model
    {
        return $this->pessoaRepo->create($data);
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): ?bool
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function update(array $data, int $id): ?Model
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function consultCEP($cep) : string
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}
