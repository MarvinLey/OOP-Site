<section class="my-5">
    <div class="container">
        <h1>Neuen Post hinzufügen</h1>
        <div class="row">
            <div class="col-md-6 col-lg-4 my-3">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="inc/posts.inc.php">
                            <div class="form-group">
                                <label for="post_title">Titel:</label>
                                <input type="text" class="form-control" id="post_title" name="post_title">
                            </div>
                            <div class="form-group">
                                <label for="post_text">Text:</label>
                                <textarea class="form-control" id="post_text" name="post_text" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="addNewPost">Post hinzufügen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
