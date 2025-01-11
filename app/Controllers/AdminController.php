<?php

namespace App\Controllers;

use App\Models\BlogModel;

class AdminController extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data['blogs'] = $model->findAll();
        return view('admin/index', $data);
    }

    public function create()
    {
        return view('admin/create');
    }

    public function store()
    {
        $model = new BlogModel();
        $model->save([
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'author' => $this->request->getPost('author')
        ]);
        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $model = new BlogModel();
        $data['blog'] = $model->find($id);
        return view('admin/edit', $data);
    }

    public function update($id)
    {
        $model = new BlogModel();
        $model->update($id, [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'author' => $this->request->getPost('author')
        ]);
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $model = new BlogModel();
        $model->delete($id);
        return redirect()->to('/admin');
    }
}
