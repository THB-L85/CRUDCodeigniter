<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Genre;
class Genres extends Controller{
    public function index(){
        $genre = new Genre();
        $datos['genres'] = $genre->orderBy('id','ASC')->findAll();
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('genres/listar', $datos);
    }
    public function agregar(){
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('genres/agregar', $datos);
    }
    public function guardar(){
        $genre = new Genre();
        $datos = [
            'name'=>$this->request->getVar('name')
        ];
        $genre->insert($datos);
        return $this->response->redirect(site_url('Genres/listar'));
    }
    public function borrar($id=null){
        $genre = new Genre();
        $datosGenre = $genre->where('id',$id)->first();
        $genre->where('id',$id)->delete($id);
        return $this->response->redirect(site_url('Genres/listar'));
    }
    public function editar($id=null){
        $genre = new Genre();
        $datos['genres']=$genre->where('id',$id)->first();
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('genres/editar', $datos);
    }
    public function actualizar(){
        $genre = new Genre();
        $datos = [
            'name'=>$this->request->getVar('name'),
        ];
        $id = $this->request->getVar('id');
        $genre->update($id, $datos);
        return $this->response->redirect(site_url('Genres/listar'));
    }
}
