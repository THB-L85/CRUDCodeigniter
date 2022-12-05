<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Album;
class Albumes extends Controller{
    public function index(){
        $album = new Album();
        $datos['albums'] = $album->orderBy('id','ASC')->findAll();
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('albums/listar', $datos);
    }
    public function agregar(){
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('albums/agregar', $datos);
    }
    public function guardar(){
        $album = new Album();
        $datos = [
            'name'=>$this->request->getVar('name'),
            'author'=>$this->request->getVar('author'),
            'genre_id'=>$this->request->getVar('genre_id')
        ];
        $album->insert($datos);
        return $this->response->redirect(site_url('Albumes/listar'));
    }
    public function borrar($id=null){
        $album = new Album();
        $datosAlbum = $album->where('id',$id)->first();
        $album->where('id',$id)->delete($id);
        return $this->response->redirect(site_url('Albumes/listar'));
    }
    public function editar($id=null){
        $album = new Album();
        $datos['albums']=$album->where('id',$id)->first();
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');
        return view('albums/editar', $datos);
    }
    public function actualizar(){
        $album = new Album();
        $datos = [
            'name'=>$this->request->getVar('name'),
            'author'=>$this->request->getVar('author'),
            'genre_id'=>$this->request->getVar('genre_id')
        ];
        $id = $this->request->getVar('id');
        $album->update($id, $datos);
        return $this->response->redirect(site_url('Albumes/listar'));
    }
}
