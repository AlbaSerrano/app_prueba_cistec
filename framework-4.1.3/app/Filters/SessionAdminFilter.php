<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class SessionAdminFilter implements FilterInterface
{
    //Nos sirve para poder validar una sesion antes de que se cargue la vista
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session('user') == '') {
            return redirect()->to(base_url('/login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
