<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return RequestInterface|ResponseInterface|string|void
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $data = json_decode($request->getBody(), true);

        $validation = service('validation');

        $validation->setRules([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email required.',
                    'valid_email' => 'Email is not valid.',
                ],
            ],

            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password required.',
                    'min_length' => 'Password 8 character minimum.',
                ],
            ],

            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username required.',
                ],
            ],
        ]);

        if (!$validation->run($data)) {
            return service('response')
                ->setJSON([
                    'errors' => $validation->getErrors()
                ])
                ->setStatusCode(422);
        }
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return ResponseInterface|void
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
