<?php

namespace App\Observers;

use App\ProjetoAmbiente;
use App\ProjetoAmbienteEtapa;

class ProjetoAmbienteObserver
{
    /**
     * Handle the projeto ambiente "created" event.
     *
     * @param  \App\ProjetoAmbiente  $projetoAmbiente
     * @return void
     */
    public function created(ProjetoAmbiente $projetoAmbiente)
    {
        $etapas = ['Desenho', 'Corte', 'Corte bordo', 'Premontagen', 'Montagem'];

        foreach($etapas as $indice => $etapa) {
            $projetoAmbiente->etapas()->save(new ProjetoAmbienteEtapa([
                'nome' => $etapa, 
                'sequencia' => $indice + 1, 
            ]));
        }
    }

    public function retrieved(ProjetoAmbiente $projetoAmbiente)
    {
        $projetoAmbiente->etapaAtual = $projetoAmbiente->etapaAtual();
    }
}
