<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Mostra página Home
     *
     * @return void
     */
    public function index()
    {
        echo "controller INDEX";
    }

    /**
     * Mostra página Sobre
     *
     * @return void
     */
    public function sobre()
    {

        echo "controller Sobre";

    }

    /**
     * Mostra página Contato
     *
     * @return void
     */
    public function contato()
    {
        echo "controller Contato";
    }

    /**
     * Mostra página Serviços
     *
     * @return void
     */
    public function servicos()
    {
        echo "controller Serviços";
    }

    /**
     * Mostra página Serviço com ID de parametro
     *
     * @param integer $id
     * @return void
     */
    public function servico(int $id)
    {
        echo "controller Serviço $id";
    }
}
