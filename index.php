<!DOCTYPE html>
<html lang="en">
    <?php include "control.php" ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-card {
            transition: transform 0.3s;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .product-image {
            height: 200px;
            object-fit: cover;
        }
        .original-price {
            text-decoration: line-through;
            color: #6c757d;
        }
        .discount {
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            
    <!-- 1 -->

            <div class="col-md-4">
                <div class="card product-card">
                    <img src="<?= $product_1->image ?>" style="height: 100%;" class="card-img-top  product-image" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product_1->get_name()?></h5>
                        <p class="card-text text-muted"><?= $product_1->brand ?></p>
                        <p class="card-text">Description: This is a high-quality product designed for your needs. It offers great features and durability.</p>
                        <p class="card-text"><strong>Original Price:</strong> <span class="original-price"><?= $product_1->get_price()?></span></p>
                        <p class="card-text"><strong>Discount:</strong> <span class="discount"><?= $product_1->discount?>%</span></p>
                        <p class="card-text"><strong>Price After Discount:</strong> <?= $product_1->price_after_descount()?></p>
                        <p class="card-text"><strong>Tax:</strong> <?= $product_1->get_tax()?></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>


            <!-- 2 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="<?= $product_2->image ?>" style="height: 100%;" class="card-img-top  product-image" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product_2->get_name()?></h5>
                        <p class="card-text text-muted"><?= $product_2->brand ?></p>
                        <p class="card-text">Description: This is a high-quality product designed for your needs. It offers great features and durability.</p>
                        <p class="card-text"><strong>Original Price:</strong> <span class="original-price"><?= $product_2->get_price()?></span></p>
                        <p class="card-text"><strong>Discount:</strong> <span class="discount"><?= $product_2->discount?>%</span></p>
                        <p class="card-text"><strong>Price After Discount:</strong> <?= $product_2->price_after_descount()?></p>
                        <p class="card-text"><strong>Tax:</strong> <?= $product_2->get_tax()?></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>


            <!-- 3 -->


            <div class="col-md-4">
                <div class="card product-card">
                    <img src="<?= $product_3->image ?>" style="height: 100%;" class="card-img-top  product-image" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product_3->get_name()?></h5>
                        <p class="card-text text-muted"><?= $product_3->brand ?></p>
                        <p class="card-text">Description: This is a high-quality product designed for your needs. It offers great features and durability.</p>
                        <p class="card-text"><strong>Original Price:</strong> <span class="original-price"><?= $product_3->get_price()?></span></p>
                        <p class="card-text"><strong>Discount:</strong> <span class="discount"><?= $product_3->discount?>%</span></p>
                        <p class="card-text"><strong>Price After Discount:</strong> <?= $product_3->price_after_descount()?></p>
                        <p class="card-text"><strong>Tax:</strong> <?= $product_3->get_tax()?></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>










        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>