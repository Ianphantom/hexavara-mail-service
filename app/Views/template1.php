<html>

<head>
	<title>
	</title>
</head>

<body
	style="font-family: Helvetica, Arial, sans-serif; color: rgb(103, 103, 103); width: 100%; margin: 0px; cursor: auto;background-color: #ededf2;"
	class="ui-sortable">
	<span style="opacity: 0"> <?= $randomness ?> </span>
	<div data-section-wrapper="1"
		style="width:100%;background-color: #ededf2;font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;padding: 20px 0 30px;"
		class="content-padding">
		<center>
			<table data-section="1" cellspacing="0" cellpadding="0" width="600" class="w320"
				style="border-collapse: collapse;">
				<tbody>
					<tr>
						<td class="header-lg" data-slot-container="1"
							style="font-family: Helvetica, Arial, sans-serif;font-size: 32px;color: #4d4d4d;text-align: center;line-height: normal;border-collapse: collapse;font-weight: 700;padding: 35px 0 0;">
							<div data-slot="text" data-param-undefined="">
							</div>
						</td>
					</tr>
					<tr>
						<td class="mini-block-container"
							style="font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;padding: 30px 50px;width: 500px;">
							<table cellspacing="0" cellpadding="0" width="100%" style="border-collapse:separate;">
								<tbody>
									<tr>
										<td class="mini-block" data-slot-container="1"
											style="font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;background-color: #ffffff;width: 498px;border: 1px solid #cccccc;border-radius: 5px;padding: 45px 75px;">
											<div class="user-msg-title" data-slot="text"
												style="padding: 0px 0px;font-size: 24px;text-align: left;color: #296CD4; font-weight: bold">
												<p>New Project Opportunity</p>
											</div>
											<div class="user-msg" data-slot="text"
												style="padding: 10px 0px; font-size: 14px; text-align: left; color: #000000; line-height: 21px;">
												<p>Hallo Hexavara Tech,
												</p>
												<p>We’ve received a new project opportunity from
													<strong><?= $name ?></strong>
													of
													<strong><?= $company ?></strong>
													Below are the details:
												</p>
												<ul>
													<li><strong>Name:</strong>
														<?= $name ?>
													</li>
													<li><strong>Email:</strong>
														<?= $email ?>
													</li>
													<li><strong>Phone Number:</strong>
														<?= $phoneNumber ?>
													</li>
													<li><strong>Company:</strong>
														<?= $company ?>
													</li>
													<li><strong>Category:</strong>
														<?= $category ? $category : 'N/A' ?>
													</li>
													<li><strong>Budget:</strong>
														<?= $budget ?>
													</li>
												</ul>
												<p><?= $projectDescription ?>
												</p>
											</div>
											<div class="button" data-slot="button" data-param-padding-top="5"
												data-param-button-size="1" data-param-link-text="I want this"
												data-param-href="#povezava#" data-param-float="1"
												data-param-background-color="#296CD4" data-param-color="ffffff">
												<table cellspacing="0" cellpadding="0">
													<tr>
														<td align="center" width="400" height="40" bgcolor="#296CD4"
															style="-webkit-border-radius: 5px; -moz-border-radius: 5px; bord-radius: 5px; color: #FFFFFF; display: block;">
															<a href="mailto:<?= $recipientEmail ?>"
																style="font-size:16px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-decoration: none; line-height:40px; width:100%; display:inline-block">
																<span style="color: #FFFFFF">Contact The Client
																	&nbsp;&nbsp;&nbsp;>
																</span>
															</a>
														</td>
													</tr>
												</table>
												<div style="clear:both">
												</div>
											</div>
											<div class="user-msg" data-slot="text"
												style="padding: 10px 0px;font-size: 14px;text-align: left;color:#000000">
												<p>Please review the information and get in touch with them to explore
													this opportunity further.
												</p>
												<p style="color:#a0a0a0">
													<br />
													<br />
													This is an automated email send from hexavara.com when client fill
													out start a project form
												</p>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</center>
	</div>
	<span style="opacity: 0"> <?= $randomness ?> </span>
</body>

</html>