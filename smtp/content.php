<form method="POST" action="smtp/post.php" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" class="form-control" type="text" name="title">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="sent_to">Sent To</label>
                <input id="sent_to" class="form-control " type="email" name="sent_to" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" class="form-control" name="message" placeholder="No message" required></textarea>
            </div>
        </div>
    </div>
    <div class="custom-file">
        <input id="file" class="custom-file-input" type="file" name="file" multiple>
        <label for="file" class="custom-file-label">Attach File</label>
    </div>
    <button type="submit" class="btn btn-success w-100 fixed-bottom rounded-0">Send</button>
</form>