<?php 
require 'sidebar.php';
?>
<section class="content-header no-margin">
	<h1 class="text-center">
		Mailbox
	</h1>
</section>
<section class="content">
	<!-- MAILBOX BEGIN -->
	<div class="mailbox row">
		<div class="col-xs-12">
			<div class="box box-solid">
				<div class="box-body">
					<div class="row">

						<div class="col-md-12 col-sm-8">

							<div class="table-responsive">
								<?php 
								if (isset($_GET['id'])) {
									$id=$_GET['id'];

								}
								?>

								<!-- THE MESSAGES -->
								<table class="table table-mailbox">
									<?php 
									require 'connection.php';
									
									$query=mysqli_query($connect , "SELECT * FROM messages WHERE id=$id");
									$i=1;
									$result=mysqli_fetch_assoc($query);
										extract($result);
										echo "<tr>
										<td><h3>FROM:</h3>$user_name</td>
										</tr>
										<tr>
										<td><h3>EMAIL:</h3>$email</td>
										</tr>
										<tr>
										<td><h3>CONTENT:</h3>$content</td>
										</tr>
										<tr>
										<td><h3>TIME:</h3>$date</td>
										</tr>
										";
										$i++;
									

									?>
									


								</table>
							</div><!-- /.table-responsive -->
						</div><!-- /.col (RIGHT) -->
					</div><!-- /.row -->
				</div><!-- /.box-body -->

			</div><!-- /.box -->
		</div><!-- /.col (MAIN) -->
	</div>
	<!-- MAILBOX END -->

</section><!-- /.content -->
<?php require 'footer.php';
?>