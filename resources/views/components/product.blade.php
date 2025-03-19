<div class="col-md-6 col-lg-4 col-xl-3 kosiProduct gy-4">
  <?php 
    if ($product->discount_id) {
        $discount = $product->discount->discount_percentage;
    } else {
        $discount = 0;
    }
    $product_id = $product->id;
    ?>
  <!-- xử lý ảnh -->
  <div class="image__inner d-flex position-relative mb-2">
    <a href="?c=product&a=detail&id={{$product->id}}" class="w-100">
      <img src="image/Product-IMG-{{$product->id}}_360x.webp" alt="">
    </a>
    <?php if ($discount) { ?>
    <div class="d-flex position-absolute align-items-center discount">
      <span>-
        {{number_format($discount)}}%
      </span>
    </div>
    <?php } else { ?>
    <div d-none></div>
    <?php } ?>

    <!-- icons -->
    <div class="icons">
      <a href="javascript:void(0)" class="addToCart" product_id={{ $product->id }}>
        <i class="bi bi-cart" title="Add to cart" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-delay='{"show": 100, "hide": 100}'></i>
      </a>

      <?php if (!empty($Wlist)) { ?>
      <a href="javascript:void(0)" onclick="<?= !in_array($product_id, $Wlist) ? 'addWishlist' : 'removeWishlist' ?>(this, <?= $product->id ?>)" class="<?= !in_array($product_id, $Wlist) ? 'addWishlist' : 'removeWishlist' ?>">
        <?php } else { ?>
        <a href="javascript:void(0)" onclick="addWishlist(this, <?= $product->id ?>)" class="addWishlist">
          <?php } ?>

          <i class="bi bi-heart" title="Add to wishlist" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-delay='{"show": 100, "hide": 100}'></i>
        </a>

        <!-- Trigger Quick View -->
        <a data-bs-toggle="modal" data-bs-target="#quickview-<?= $product->id ?>">
          <i class="bi bi-eye" title="Quick view" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-delay='{"show": 100, "hide": 100}'></i>
        </a>
    </div>
  </div>


  <!-- tên sp -->
  <a href="?c=product&a=detail&id={{$product_id}}" class="productName line-title">
    {{ $product->name }}
  </a>
  <!-- color -->
  <div class="color-options">
    <?php foreach ($product->colors as $color) {
        $colorName = $color->name;
        $colorCode = $color->code;
    ?>
    <span style="background-color: <?= $colorCode ?>;" title="<?= $colorName ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-delay='{"show": 100, "hide": 100}' onclick="changeImage(this, '<?= $colorName ?>')">
    </span>
    <?php } ?>
  </div>
  <!-- price -->
  <div class="price">
    <?php if ($discount) { ?>
    <span class="d-inline original-price text-decoration-line-through">$
      <?= number_format($product->price) ?>
    </span>
    <span class="fw-medium sale_price" sale_price=<?=$product->price * (1 - $discount / 100) ?>>$
      <?= number_format($product->price * (1 - $discount / 100)) ?>
    </span>

    <?php } else { ?>
    <span class="fw-medium sale_price" sale_price=<?=$product->price ?>> $
      <?= $product->price ?>
    </span>
    <?php } ?>
  </div>
</div>
<!-- Modal -->
@include('components.product.quickview')
