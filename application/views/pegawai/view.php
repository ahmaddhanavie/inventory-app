<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manajemen Pegawai
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pegawai</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
			<div class="box-header with-border">
				<a
					href="<?php echo site_url('pegawai/add/');?>"
					type="button"
					class="btn btn-flat btn-sm btn-success"
					data-toggle="tooltip"
					data-placement="top"
					title="Tambah Data"
				>
					<i class="glyphicon glyphicon-plus"> <b>Tambah</b></i>
				</a>
			</div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="bg-green">
                            <th width="5%">No</th>
                            <th width="13%"></th>
                            <th width="15%">ID</th>
                            <th width="20%">Nama</th>
                            <th width="15%">Telepon</th>
                            <th width="17%">Email</th>
                            <th width="15%"></th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$number = 1;
						?>
						<?php foreach($pegawai as $row):?>
						<tr>
							<?php
								if(!$row['foto']){
									$row['foto'] = '../profile.gif';
								}
							?>
							<td><?php echo $number++;?></td>
							<td><img src="<?php echo base_url('/assets/img/upload/' .$row['foto']);?>" width="100%" height="150px"></td>
							<td><?php echo $row['id'];?></td>
							<td><?php echo $row['nama'];?></td>
							<td><?php echo $row['telepon'];?></td>
							<td><?php echo $row['email'];?></td>
							<td align="center">
								<a
									href="<?php echo site_url('pegawai/detail/' . $row['id']);?>"
									type="button"
									class="btn btn-flat btn-sm btn-info"
									data-toggle="tooltip"
									data-placement="top"
									title="Detail Data"
								>
									<i class="glyphicon glyphicon-eye-open"></i>
								</a>
								
								<a
									href="<?php echo site_url('pegawai/edit/' . $row['id']);?>"
									type="button"
									class="btn btn-flat btn-sm btn-success"
									data-toggle="tooltip"
									data-placement="top"
									title="Ubah Data"
								>
									<i class="glyphicon glyphicon-edit"></i>
								</a>
								
								<span
									data-toggle="modal"
									data-target="#confirm-delete"
									data-href="<?php echo site_url('pegawai/delete/' . $row['id']);?>"
								>
									<a
										type="button"
										class="btn btn-flat btn-sm btn-danger"
										data-toggle="tooltip"
										data-placement="top"
										title="Hapus Data"
									>
										<i class="glyphicon glyphicon-trash"></i>
									</a>
								</span>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>
</div>
