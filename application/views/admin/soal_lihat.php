<?php
$this->load->view('admin/header');
?>


<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-0">

</div>
<!-- <div class="container-fluid mt--7"> -->
  <div class="container-fluid mt--9">
    <div class="row mt-2">
      <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="mb-0 text-primary">Lihat Data Soal</h2>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url(); ?>admin/editsoal" class="btn btn-sm btn-success">EDIT SOAL</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th width="50px">No Soal</th>
                  <td></td>
                </tr>
                <tr>
                  <th width="50px">Soal</th>
                  <td></td>
                </tr>


                  <tr>
                    <th width="50px">Jawaban</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th width="50px">Point </th>
                    <td></td>
                  </tr>

                <tr>
                  <th width="50px">Kategori</th>
                  <td>
<!--                     <?php 
                    $data2 = $data['kategori'];
                    if($data2=='CC-001'){
                      echo "Achivement Orientation";
                    }else if($data2=='CC-002'){
                      echo "Organizational Commitment";
                    }else if($data2=='CC-003'){
                      echo "Team Work";
                    }else if($data2=='CC-002'){
                      echo "Organizational Commitment";
                    }else if($data2=='MC-001'){
                      echo "Analytical Thinking";
                    }else if($data2=='MC-002'){
                      echo "Change Leadership";
                    }else if($data2=='MC-003'){
                      echo "Conceptual Thinking";
                    }else if($data2=='MC-004'){
                      echo "Concern For Order, Quality & Accuracy";
                    }else if($data2=='MC-005'){
                      echo "Customer Service Orientation";
                    }else if($data2=='MC-006'){
                      echo "Decision Making";
                    }else if($data2=='MC-007'){
                      echo "Developing Others";
                    }else if($data2=='MC-008'){
                      echo "Directiviness";
                    }else if($data2=='MC-009'){
                      echo "Expertise";
                    }else if($data2=='MC-010'){
                      echo "Flexibility";
                    }else if($data2=='MC-011'){
                      echo "Impact & Influence";
                    }else if($data2=='MC-012'){
                      echo "Informative Seeking";
                    }else if($data2=='MC-013'){
                      echo "Initiative";
                    }else if($data2=='MC-014'){
                      echo "Interpersonal Understanding";
                    }else if($data2=='MC-015'){
                      echo "Organizational Awareness";
                    }else if($data2=='MC-016'){
                      echo "Relationship Building";
                    }else if($data2=='MC-017'){
                      echo "Self Control";
                    }else if($data2=='MC-018'){
                      echo "Self Confidence";
                    }else if($data2=='MC-019'){
                      echo "Team Leadership";
                    }else {
                      echo "?";
                    }
                    ?> -->
                  </td>
                </tr>  
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>



    <?php
    $this->load->view('footer');
    ?>