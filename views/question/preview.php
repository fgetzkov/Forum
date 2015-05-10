<div>
<h1><?= $this->post['title'] ?></h1>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Username:<strong><?= $this->post['author'] ?></strong>
            <div class="pull-right"><?= $this->post['date'] ?></div>
        </div>
        <div class="panel-body">
            <p>
                <?= $this->post['text'] ?>
            </p>
        </div>

    </div>

    <div><h3>ANSWERS</h3></div>
     <?php foreach($this->answers as $answer): ?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                Username: <strong> <?= $answer['userName'] ?> </strong>
                <div class="pull-right"> <?= $answer['date']?></div>
                </div>
            <div class="panel-body">
                <p>
                    <?= $answer['text']?>
                </p>
            </div>
        </div>
        <?php endforeach;?>

</div>

<form class="form-horizontal col-lg-6 col-lg-offset-3"  method="POST" action="question/addAnswer/<?= $this->post['id'] ?>">
    <fieldset>
        <legend>Send Answer</legend>

        <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Textarea</label>
            <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="textArea" required name="textArea"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">UserName</label>
            <div class="col-lg-10">
                <input class="form-control" id="inputEmail" placeholder="UserName" type="text" name="userName" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
            </div>
        </div>
    </fieldset>
</form>
