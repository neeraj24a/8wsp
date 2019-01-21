<?php
use yii\widgets\ListView;
use yii\helpers\Url;
$this->title = "8thwonderpromos Payment Failure";
?>
<div id="shopify-section-cart-template" class="shopify-section">
    <div class="page-width">
        <div class="empty-page-content text-center">
            <h1>Payment Status</h1>
            <p class="cart--empty-message">Request Payment has been failed.</p>
            <a href="<?php echo Url::toRoute('/cart/payment'); ?>" class="btn btn--has-icon-after cart__continue-btn">
                Retry Payment
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-arrow-right" viewBox="0 0 20 8">
                    <path d="M15.186.445c.865.944 1.614 1.662 2.246 2.154.631.491 1.227.857 1.787 1.098v.44a9.933 9.933 0 0 0-1.875 1.196c-.606.485-1.328 1.196-2.168 2.134h-.752c.612-1.309 1.253-2.315 1.924-3.018H.77v-.986h15.577c-.495-.632-.84-1.1-1.035-1.406-.196-.306-.486-.843-.87-1.612h.743z" fill="#000" fill-rule="evenodd"></path>
                </svg>
            </a>
        </div>    
    </div>
</div>