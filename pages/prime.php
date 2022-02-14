<?php include 'pages/include/header.php';?>
<section class=" py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Input Number</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control"  min="2" name="input_number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <input type="text" readonly class="form-control" value="<?php echo  ($result == 1) ? 'prime Number' : '' ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="prime" class="btn btn-success" value="Result">
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<?php include 'pages/include/footer.php';?>

