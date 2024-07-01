<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        //cek session dan level user
        if($this->admin->is_role() != "siswa"){
            redirect("login/");
        }
    }

    // public function index()
    // {
    //     $data = $this->Pengisi_Model->getTest1('tbl_soal');
    //     $data = array('data' => $data);

    //     $this->load->view('siswa/pre-test1', $data);
    // }

    public function pre1()
    {
        $username = $this->session->userdata('user_name');
        $cek = $this->Pengisi_Model->getKategori('1', $username)->num_rows();
            if($cek>0)
        {
            redirect('siswa/test/pre2');
        }

        $data = $this->Pengisi_Model->getTest1('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/pre-test1', $data);
        
    }

    public function tambah_pre1()
    {
        $username=$_POST['username'];
        $id_kategori= $_POST['id_kategori'];
        $jawaban= 'No 1 = '.$_POST['j1'].' , No 2 = '.$_POST['j2'].' , No 3 = '.$_POST['j3'].' , No 4 = '.$_POST['j4'].' , No 5 = '.$_POST['j5']
        .' , No 6 = '.$_POST['j6'].' , No 7 = '.$_POST['j7'].' , No 8 = '.$_POST['j8'];
        $total_jawab=$_POST['j1']+$_POST['j2']+$_POST['j3']+$_POST['j4']+$_POST['j5']+$_POST['j6']+$_POST['j7']+$_POST['j8'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");

        $data = array(
            'username'     => $username,
            'id_kategori'     => $id_kategori,
            'jawaban'     => $jawaban,
            'total_jawab'  => $total_jawab,
            'waktu'        => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi',$data);
        if ($tambah>0) {
            // redirect('admin/akun');
            ?>
            <script>
                // alert("Melanjutkan ke Pre Test Berikutnya"); 
                document.location= 'pre2';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    public function pre2()
    {
        $username = $this->session->userdata('user_name');
        $cek2 = $this->Pengisi_Model->getKategori('2', $username)->num_rows();
        if($cek2>0)
        {
            redirect('siswa/test/pre3');
        } 
        // else {
        //     redirect('siswa/test/pre1');
        // }

        $data = $this->Pengisi_Model->getTest2('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/pre-test2', $data);

    }

    public function tambah_pre2()
    {
        $username=$_POST['username'];
        $id_kategori=$_POST['id_kategori'];
        $jawaban= 'No 1 = '.$_POST['j1'].' , No 2 = '.$_POST['j2'].' , No 3 = '.$_POST['j3'].' , No 4 = '.$_POST['j4'].' , No 5 = '.$_POST['j5']
        .' , No 6 = '.$_POST['j6'].' , No 7 = '.$_POST['j7'];
        $total_jawab=$_POST['j1']+$_POST['j2']+$_POST['j3']+$_POST['j4']+$_POST['j5']+$_POST['j6']+$_POST['j7'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");

        $data = array(
            'username'     => $username,
            'id_kategori'     => $id_kategori,
            'jawaban'     => $jawaban,
            'total_jawab'  => $total_jawab,
            'waktu'        => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi',$data);
        if ($tambah>0) {
            ?>
            <script>
                document.location= 'pre3';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    public function pre3()
    {
        $username = $this->session->userdata('user_name');
        $cek3 = $this->Pengisi_Model->getKategori('3', $username)->num_rows();
        // $cek4 = $this->Pengisi_Model->getKategori('3', $username)->num_rows();
        if($cek3>0)
        {
            redirect('siswa/test/pre4');
        }
        // elseif($cek4<=0)
        // {
        //     redirect('siswa/test/pre2');
        // }

        $data = $this->Pengisi_Model->getTest3('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/pre-test3', $data);

    }

    public function tambah_pre3()
    {
        $username=$_POST['username'];
        $id_kategori= $_POST['id_kategori'];
        $jawaban= 'No 1 = '.$_POST['j1'].' , No 2 = '.$_POST['j2'].' , No 3 = '.$_POST['j3'].' , No 4 = '.$_POST['j4'].' , No 5 = '.$_POST['j5']
        .' , No 6 = '.$_POST['j6'].' , No 7 = '.$_POST['j7'].' , No 8 = '.$_POST['j8'].' , No 9 = '.$_POST['j9'].' , No 10 = '.$_POST['j10']
        .' , No 11 = '.$_POST['j11'];
        $total_jawab=$_POST['j1']+$_POST['j2']+$_POST['j3']+$_POST['j4']+$_POST['j5']+$_POST['j6']+$_POST['j7']+$_POST['j8']+$_POST['j9']+$_POST['j10']+$_POST['j11'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");
        $data = array(
            'username'     => $username,
            'id_kategori'     => $id_kategori,
            'jawaban'     => $jawaban,
            'total_jawab'  => $total_jawab,
            'waktu'        => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi',$data);
        if ($tambah>0) {
            ?>
            <script>
                document.location= 'pre4';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    public function pre4()
    {
        $username = $this->session->userdata('user_name');
        $cek = $this->Pengisi_Model->getKategori('4', $username)->num_rows();
        if($cek>0)
        {
            redirect('siswa/test/end_pre');
        }

        $data = $this->Pengisi_Model->getTest4('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/pre-test4', $data);

    }

    public function tambah_pre4()
    {
        $username=$_POST['username'];
        $id_kategori= $_POST['id_kategori'];
        $jawaban= 'No 1 = '.$_POST['j1'].' , No 2 = '.$_POST['j2'].' , No 3 = '.$_POST['j3'].' , No 4 = '.$_POST['j4'].' , No 5 = '.$_POST['j5']
        .' , No 6 = '.$_POST['j6'].' , No 7 = '.$_POST['j7'].' , No 8 = '.$_POST['j8'].' , No 9 = '.$_POST['j9'].' , No 10 = '.$_POST['j10']
        .' , No 11 = '.$_POST['j11'].' , No 12 = '.$_POST['j12'].' , No 13 = '.$_POST['j13'].' , No 14 = '.$_POST['j14'].' , No 15 = '.$_POST['j15']
        .' , No 16 = '.$_POST['j16'].' , No 17 = '.$_POST['j17'].' , No 18 = '.$_POST['j18'].' , No 19 = '.$_POST['j19'];
        $total_jawab=$_POST['j1']+$_POST['j2']+$_POST['j3']+$_POST['j4']+$_POST['j5']+$_POST['j6']+$_POST['j7']+$_POST['j8']+$_POST['j9']+$_POST['j10']
                    +$_POST['j11']+$_POST['j12']+$_POST['j13']+$_POST['j14']+$_POST['j15']+$_POST['j16']+$_POST['j17']+$_POST['j18']+$_POST['j19'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");
        $data = array(
            'username'     => $username,
            'id_kategori'     => $id_kategori,
            'jawaban'      => $jawaban,
            'total_jawab'  => $total_jawab,
            'waktu'        => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi',$data);
        if ($tambah>0) {
            // redirect('admin/akun');
            ?>
            <script>
                alert("Anda telah selesai mengerjakan Pre Test"); document.location= '../Dashboard';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    public function end_pre()
    {
        $this->load->view('siswa/end-pre');
    }

    // -----------------

    public function post1()
    {
        $username = $this->session->userdata('user_name');
        $cek = $this->Pengisi_Model->getKategori('5', $username)->num_rows();
            if($cek>0)
        {
            redirect('siswa/test/post2');
        }

        $data = $this->Pengisi_Model->getTest1('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/post-test1', $data);
    }

    public function tambah_post1()
    {
        $username=$_POST['username'];
        $id_kategori= $_POST['id_kategori'];
        $jawaban= 'No 1 = '.$_POST['j1'].' , No 2 = '.$_POST['j2'].' , No 3 = '.$_POST['j3'].' , No 4 = '.$_POST['j4'].' , No 5 = '.$_POST['j5']
        .' , No 6 = '.$_POST['j6'].' , No 7 = '.$_POST['j7'].' , No 8 = '.$_POST['j8'];
        $total_jawab=$_POST['j1']+$_POST['j2']+$_POST['j3']+$_POST['j4']+$_POST['j5']+$_POST['j6']+$_POST['j7']+$_POST['j8'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");

        $data = array(
            'username'     => $username,
            'id_kategori'     => $id_kategori,
            'jawaban'      => $jawaban,
            'total_jawab'  => $total_jawab,
            'waktu'        => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi',$data);
        if ($tambah>0) {
            // redirect('admin/akun');
            ?>
            <script>
                document.location= 'post2';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    public function post2()
    {
        $username = $this->session->userdata('user_name');
        $cek2 = $this->Pengisi_Model->getKategori('6', $username)->num_rows();
        if($cek2>0)
        {
            redirect('siswa/test/post3');
        } 

        $data = $this->Pengisi_Model->getTest2('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/post-test2', $data);

    }

    public function tambah_post2()
    {
        $username=$_POST['username'];
        $id_kategori=$_POST['id_kategori'];
        $jawaban= 'No 1 = '.$_POST['j1'].' , No 2 = '.$_POST['j2'].' , No 3 = '.$_POST['j3'].' , No 4 = '.$_POST['j4'].' , No 5 = '.$_POST['j5']
        .' , No 6 = '.$_POST['j6'].' , No 7 = '.$_POST['j7'];
        $total_jawab=$_POST['j1']+$_POST['j2']+$_POST['j3']+$_POST['j4']+$_POST['j5']+$_POST['j6']+$_POST['j7'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");

        $data = array(
            'username'     => $username,
            'id_kategori'     => $id_kategori,
            'jawaban'     => $jawaban,
            'total_jawab'  => $total_jawab,
            'waktu'        => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi',$data);
        if ($tambah>0) {
            ?>
            <script>
                document.location= 'post3';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    public function post3()
    {
        $username = $this->session->userdata('user_name');
        $cek3 = $this->Pengisi_Model->getKategori('7', $username)->num_rows();
        if($cek3>0)
        {
            redirect('siswa/test/post4');
        }

        $data = $this->Pengisi_Model->getTest3('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/post-test3', $data);

    }

    public function tambah_post3()
    {
        $username=$_POST['username'];
        $id_kategori= $_POST['id_kategori'];
        $jawaban= 'No 1 = '.$_POST['j1'].' , No 2 = '.$_POST['j2'].' , No 3 = '.$_POST['j3'].' , No 4 = '.$_POST['j4'].' , No 5 = '.$_POST['j5']
        .' , No 6 = '.$_POST['j6'].' , No 7 = '.$_POST['j7'].' , No 8 = '.$_POST['j8'].' , No 9 = '.$_POST['j9'].' , No 10 = '.$_POST['j10']
        .' , No 11 = '.$_POST['j11'];
        $total_jawab=$_POST['j1']+$_POST['j2']+$_POST['j3']+$_POST['j4']+$_POST['j5']+$_POST['j6']+$_POST['j7']+$_POST['j8']+$_POST['j9']+$_POST['j10']+$_POST['j11'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");
        $data = array(
            'username'     => $username,
            'id_kategori'     => $id_kategori,
            'jawaban'     => $jawaban,
            'total_jawab'  => $total_jawab,
            'waktu'        => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi',$data);
        if ($tambah>0) {
            ?>
            <script>
                document.location= 'post4';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    public function post4()
    {
        $username = $this->session->userdata('user_name');
        $cek = $this->Pengisi_Model->getKategori('8', $username)->num_rows();
        if($cek>0)
        {
            redirect('siswa/test/end_post');
        }

        $data = $this->Pengisi_Model->getTest4('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/post-test4', $data);

    }

    public function tambah_post4()
    {
        $username=$_POST['username'];
        $id_kategori= $_POST['id_kategori'];
        $jawaban= 'No 1 = '.$_POST['j1'].' , No 2 = '.$_POST['j2'].' , No 3 = '.$_POST['j3'].' , No 4 = '.$_POST['j4'].' , No 5 = '.$_POST['j5']
        .' , No 6 = '.$_POST['j6'].' , No 7 = '.$_POST['j7'].' , No 8 = '.$_POST['j8'].' , No 9 = '.$_POST['j9'].' , No 10 = '.$_POST['j10']
        .' , No 11 = '.$_POST['j11'].' , No 12 = '.$_POST['j12'].' , No 13 = '.$_POST['j13'].' , No 14 = '.$_POST['j14'].' , No 15 = '.$_POST['j15']
        .' , No 16 = '.$_POST['j16'].' , No 17 = '.$_POST['j17'].' , No 18 = '.$_POST['j18'].' , No 19 = '.$_POST['j19'];
        $total_jawab=$_POST['j1']+$_POST['j2']+$_POST['j3']+$_POST['j4']+$_POST['j5']+$_POST['j6']+$_POST['j7']+$_POST['j8']+$_POST['j9']+$_POST['j10']
                    +$_POST['j11']+$_POST['j12']+$_POST['j13']+$_POST['j14']+$_POST['j15']+$_POST['j16']+$_POST['j17']+$_POST['j18']+$_POST['j19'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");
        $data = array(
            'username'     => $username,
            'id_kategori'     => $id_kategori,
            'jawaban'      => $jawaban,
            'total_jawab'  => $total_jawab,
            'waktu'        => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi',$data);
        if ($tambah>0) {
            // redirect('admin/akun');
            ?>
            <script>
                alert("Anda telah selesai mengerjakan Post Test"); document.location= '../Dashboard';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    public function end_post()
    {
        $this->load->view('siswa/end-post');
    }

}