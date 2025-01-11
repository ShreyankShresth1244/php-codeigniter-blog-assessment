<?php

namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\CommentModel;

class BlogController extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data['blogs'] = $model->findAll();
        return view('blogs/index', $data);
    }

    public function detail($id)
    {
        $blogModel = new BlogModel();
        $commentModel = new CommentModel();

        $data['blog'] = $blogModel->find($id);
        $data['comments'] = $commentModel->where('blog_id', $id)->findAll();

        return view('blogs/detail', $data);
    }

    public function addComment()
    {
        $commentModel = new CommentModel();

        $commentModel->save([
            'blog_id' => $this->request->getPost('blog_id'),
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'comment' => $this->request->getPost('comment')
        ]);

        return redirect()->to('/blog/' . $this->request->getPost('blog_id'));
    }
}
