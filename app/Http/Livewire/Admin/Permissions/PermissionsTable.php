<?php

namespace App\Http\Livewire\Admin\Permissions;

use Livewire\Component;
use Livewire\WithPagination;

use Spatie\Permission\Models\Permission;

class PermissionsTable extends Component
{
  use WithPagination;

  public $search = '';
  public $sortField = 'id';
  public $sortAsc = true;
  public $perPage = 10;

  protected $listeners = [
    'delete'
  ];

  public function updatingSearch()
  {
      $this->resetPage();
  }

  public function sortBy($field)
  {
    if ($this->sortField === $field) {
      $this->sortAsc = !$this->sortAsc;
    } else {
      $this->sortAsc = true;
    }

    $this->sortField = $field;
  }

  public function delete($id)
  {
    $category = Permission::findOrFail($id);
    $category->delete();

    // session()->flash('success', 'Article successfully deleted.');

    // return redirect()->to(route('admin.articles.index'));
  }

  public function paginationView()
  {
      return 'livewire.pagination.tailwind';
  }

  public function render()
  {
      return view('livewire.admin.permissions.permissions-table',[
        'permissions' => Permission::query()
            ->where('name', 'LIKE', "%{$this->search}%") 
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage)
      ]);
  }
}
