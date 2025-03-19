<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface
{
  protected $model;
  // Constructor to bind model to repo
  public function __construct(Model $model)
  {
    $this->model = $model;
  }

  public function all()
  {
    return $this->model->all();
  }
  public function find($id)
  {
    return $this->model->find($id);
  }
  public function create(array $data)
  {
    return $this->model->create($data);
  }
  public function update(array $data, $id)
  {
    return $this->model->find($id)->update($data);
  }
  public function delete($id)
  {
    return $this->model->find($id)->delete();
  }
}
