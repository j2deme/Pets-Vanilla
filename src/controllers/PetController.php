<?php
require_once 'src/models/Pet.php';

class PetController
{
  public function handle($action, $id)
  {
    switch ($action) {
      case 'index':
        $this->index();
        break;
      case 'create':
        $this->create();
        break;
      case 'store':
        $this->store();
        break;
      case 'show':
        $this->show($id);
        break;
      case 'edit':
        $this->edit($id);
        break;
      case 'update':
        $this->update($id);
        break;
      case 'destroy':
        $this->destroy($id);
        break;
      default:
        $this->index();
        break;
    }
  }
  public function index()
  {
    $pets = (new Pet())->all();
    require_once 'src/views/index.php';
  }

  public function create()
  {
    require_once 'src/views/create.php';
  }

  public function store()
  {
    $pet       = new Pet();
    $pet->name = $_POST['name'];
    $pet->save();
    $this->index();
  }

  public function show($id)
  {
    $pet = (new Pet())->find($id);
    require_once 'src/views/show.php';
  }

  public function edit($id)
  {
    $pet = (new Pet())->find($id);
    require_once 'src/views/update.php';
  }

  public function update($id)
  {
    $pet       = (new Pet())->find($id);
    $pet->name = $_POST['name'];
    $pet->save();
    $this->index();
  }

  public function destroy($id)
  {
    $pet = (new Pet())->find($id);
    $pet->delete();
    $this->index();
  }
}