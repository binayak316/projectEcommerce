<div class="contact-container bg-dark">
		<div class="item1">
			<h3 class="text-light">Contact Us.</h3>
		<em><p class="text-light">Feel Free to Contact Us.</p></em>
		</div>
		<div class="item2">
			<form action="" method="POST">
                @csrf
				<div class="form-group">
					<input type="text" name="name" class="forms" placeholder="Enter Your Name">
				</div>
				<div class="form-group">
					<input type="text" name="email" class="forms" placeholder="Enter Your Email">
				</div>
				<div class="form-group">
					<input type="text" name="contact" class="forms" placeholder="Enter Your Contact Number">
				</div>
				<div class="form-group">
					<input type="text" name="address" class="forms" placeholder="Enter Your Address">
				</div>

		</div>
		<div class="item3">
			<div class="form-group">
                <textarea name="message" id="message" class="form-control" placeholder="Plese Enter Your Message Here !"></textarea>
            </div>
		</div>

		<div class="item4">
			<div class="button">
                <button id="sendMessageButton" class="btn btn-light" type="submit">Send Message</button>
            </div>
		</div>
			</form>
	</div>