<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Models\GroupModel;
use Myth\Auth\Models\PermissionModel;

class Group extends BaseController
{
    protected $groups;
    protected $permissions;
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->groups = new GroupModel();
        $this->permissions = new PermissionModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Groups | AppStarter',
            'groups' => $this->groups->findAll()
        ];

        return view('groups/index', $data);
    }
    public function new()
    {
        $data = [
            'title' => 'New Groups | AppStarter',
            'permissions' => $this->permissions->findAll()
        ];
        return view('groups/new', $data);
    }

    public function create()
    {
        $this->db->transStart();
        $this->groups->insert([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description')
        ]);
        $permissions = $this->request->getPost('permission');
        if (count($permissions) > 0) {
            foreach ($permissions as $value) {
                $this->groups->addPermissionToGroup($value, $this->groups->getInsertID());
            }
        }
        $this->db->transComplete();
        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan');
        return redirect()->to(site_url('group'));
    }

    public function edit($id)
    {

        foreach ($this->groups->getPermissionsForGroup($id) as $value) {
            $permissionGroup[$value['id']] = $value['name'];
        }
        $data = [
            'title' => 'Edit Groups | AppStarter',
            'group' => $this->groups->find($id),
            'permissions' => $this->permissions->findAll(),
            'permissionGroup' => $permissionGroup
        ];

        return view('groups/edit', $data);
    }

    public function update($id = null)
    {
        $this->db->transStart();
        $this->groups->update($id, [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description')
        ]);

        $this->db->table('auth_groups_permissions')->where('group_id', $id)->delete();

        $permissions = $this->request->getPost('permission');
        if (count($permissions) > 0) {
            foreach ($permissions as $value) {
                $this->groups->addPermissionToGroup($value, $id);
            }
        }
        $this->db->transComplete();
        return redirect()->to(site_url('group'));
    }
    public function delete($id)
    {

        $this->groups->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('group');
    }
}
