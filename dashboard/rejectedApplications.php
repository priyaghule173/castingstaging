            <div class="row">
          
            <div class="col-md-12" style="
    background: white;
">
              <div class="card card-plain">
           <!--      <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0 text-center">Approved Job Applications</h4> -->
                   <?php 
                        if($this->session->flashdata('message')){ ?>

                          <div class="col-lg-12">
                              <div class="alert alert-success alert-dismissible">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                             <strong> <?php   echo $this->session->flashdata('message');    ?></strong> 
                            </div>
                          </div>
                              <!-- echo $this->session->flashdata('message');   -->
                            <?php  } else { 
                              echo '';  
                            } ?>
                <!-- </div> -->

                       
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="" style="color: red;">
                        <th>
                          ID
                        </th>
                        <th>
                          Job Title
                        </th>
                        <th>
                         Artist Name
                        </th>
                        <th>
                         City
                        </th>
                        <th>
                         Applied Date
                        </th>
                        <th>
                          Rejected Date
                        </th>
                      </thead>
                      <tbody>
                          <?php  $i =1;
                             foreach ($result as $key) {
                           ?>
                        <tr>
                          <td><?php echo $i++;?></td>
                                          <td><?php echo $key['job_title'];?></td>
                                          <td>
                                            <?php echo $key['name']; ?>
                                          </td>
                                           <td>
                                            <?php echo $key['city']; ?>
                                          </td>
                                           <td>
                                            <?php echo $key['applied_date']; ?>
                                          </td>
                                           <td>
                                            <?php echo $key['status_date']; ?>
                                          </td>
                        </tr>
                       <?php  } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          