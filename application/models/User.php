<?php

class User extends CI_Model
{
    /**
     * @param $data
     */
    public function create($data)
    {
        $this->db->insert('users', $data);
    }

    /**
     * @return array
     */
    public function validations()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required',
                'errors' =>
                    [
                        'required' => 'You must provide a %s.',
                    ],
            ],
            [
                'field' => 'date_of_birth',
                'label' => 'Date of Birth',
                'rules' => 'required',
                'errors' =>
                    [
                        'required' => 'You must provide a %s.',
                    ],
            ],
            [
                'field' => 'favorite_color',
                'label' => 'Favorite Color',

                'rules' => 'required',
                [
                    'required' => 'You must provide a %s.',
                ],
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[users.email]',
                [
                    'required' => 'You must provide a %s.',
                    'is_unique' => 'This %s already exists.'
                ],
            ],
        ];
    }
}