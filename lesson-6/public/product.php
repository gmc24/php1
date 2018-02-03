<?php require_once('../app.php'); ?>

<?php include '../templates/header.php' ?>

<?php include '../templates/menu.php' ?>

<?php include '../templates/breadcrumbs.php' ?>


<!--основной блок страницы -->
<main>
    <div class="container">
        <div class="row">
            <?php include '../templates/left-block.php' ?>
            <div class="col-lg-8">
                <div class="row">

                    <?php include '../templates/filters.php' ?>

                    <?php include '../templates/product-list.php' ?>

                    <?php include '../templates/pagination.php' ?>

                </div>
            </div>
        </div>
    </div>

</main>

<!--Блок преимуществ-->
<?php include '../templates/advantages.php' ?>

<!--Блок отзывов и подписка-->
<?php include '../templates/testimonials-block.php' ?>

<!--Подвал-->
<?php include '../templates/footer.php' ?>

<!--Include JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="js/ion.rangeSlider.min.js"></script>
<script>
    $("#price").ionRangeSlider({
        type: "double",
        min: 0,
        max: 900,
        from: 52,
        to: 400,
        hide_min_max: true,
        hide_from_to: false,
        grid: false
    });
</script>
</body>
</html>