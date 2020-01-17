<?php

class Mahasiswa extends CI_Model{
    public function tambah(){
        $data = [
            'nim' => $this->input->post('nim'),
            'nama_mahasiswa' => htmlspecialchars($this->input->post('nama')),
            'tempat_lahir' => $this->input->post('tempat'),
            'tanggal_lahir' => $this->input->post('tanggal'),
            'jenis_kelamin' => $this->input->post('jk'),
            'alamat' => $this->input->post('alamat'),
            'kontak' => $this->input->post('kontak'),
            'email' => htmlspecialchars($this->input->post('email'))
        ];
        $this->db->insert('mahasiswa',$data);
        $this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil Ditambahkan</div>');
        redirect('kelola');
    }

    public function hapus($nim){
        $this->db->where('nim',$nim);
        $this->db->delete('mahasiswa');
        $this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil Dihapus</div>');
        redirect('kelola');
    }

    public function edit($nim){
        $data = [
            'nama_mahasiswa' => htmlspecialchars($this->input->post('nama')),
            'tempat_lahir' => $this->input->post('tempat'),
            'tanggal_lahir' => $this->input->post('tanggal'),
            'jenis_kelamin' => $this->input->post('jk'),
            'alamat' => $this->input->post('alamat'),
            'kontak' => $this->input->post('kontak'),
            'email' => htmlspecialchars($this->input->post('email'))
        ];
        $this->db->where('nim',$nim);
        $this->db->update('mahasiswa',$data);
        $this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil Diubah</div>');
        redirect('kelola');
    }
}
?>