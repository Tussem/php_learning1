<?php require "blocks/header.php"?>
    <div class="container mt-5">
        <form action="check.php" method="post">
            <input type="email" name="email" placeholder="yourMail@mail.kz" class="form-control"><br>
            <textarea name="message" placeholder="You message goes here" class="form-control"></textarea><br>
            <button type="submit" name="button" class="btn btn-success">Send</button>
        </form>
    </div>
<?php require "blocks/footer.php"?>