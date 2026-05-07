<?php

namespace App\Controllers;

use App\Models\Word_model;

class Dictionary extends \CodeIgniter\Controller {

    public function __construct() {
        $this->wordModel = new Word_model();
    }

   
    public function index() {
        $data['words'] = $this->wordModel->get_all();
        return view('dictionary/list', $data);
    }

    
    public function create() {
        return view('dictionary/create');
    }

   
    public function store() {
        $word = $this->request->getPost('word');
        $meaning = $this->request->getPost('meaning');

        if (!empty(trim($word)) && !empty(trim($meaning))) {
            $data = [
                'word' => trim($word),
                'meaning' => trim($meaning)
            ];

            $this->wordModel->add_word($data);
            return redirect()->to('/dictionary');
        } else {
            return redirect()->back()->with('error', 'Please fill in all fields');
        }
    }

   
    public function edit($id) {
        $data['word'] = $this->wordModel->get_by_id($id);
        return view('dictionary/edit', $data);
    }

    
    public function update($id) {
        $data = [
            'word' => $this->request->getPost('word'),
            'meaning' => $this->request->getPost('meaning')
        ];

        $this->wordModel->update_word($id, $data);
        return redirect()->to('/dictionary');
    }

    
    public function delete($id) {
        $this->wordModel->delete_word($id);
        return redirect()->to('/dictionary');
    }
}